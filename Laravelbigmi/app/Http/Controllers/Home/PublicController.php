<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class PublicController extends Controller
{
   

    // 获取侧边栏分类,根据pid获取某个子分类
    public static function getCatesByPid($pid){
    	$cateSon = DB::TABLE('bm_cates')->where('pid','=',$pid)->get();
    	$data = [];
    	foreach ($cateSon as $key => $value) {
    		// 查出子分类放到suv对象,实现无限分类查询
    		$value->suv = self::getCatesByPid($value->id);
    		$data[]=$value;
    	}
    	return $data;
    }


    // 获取导航栏数据,公共数据
    public static function getNav(){

    	$navlist = DB::TABLE('bm_nav')->WHERE('status','=','1')->SELECT()->get();
    	foreach ($navlist as $key => $value) {
            $sku_id_group = explode(',', $value->sku_id_group);
            $skudata[$value->nav_name] = self::getSkuData($sku_id_group);
        }
        return $skudata; // 拼接成二维数组对象
    }

    //获取已有的sku_id_group对应的sku商品信息
    private static function getSkuData($sku_id_group){
        $skudata = [];
        foreach ($sku_id_group as $value) {
            $skudata[] = DB::TABLE('bm_goods_sku')->join('bm_goods_spu','bm_goods_sku.goods_id','=','bm_goods_spu.id')
            ->select('bm_goods_spu.id','bm_goods_spu.goods_title','bm_goods_spu.goods_thums','bm_goods_sku.market_price')
            ->where(['bm_goods_sku.status'=>'1','bm_goods_sku.id'=>$value])
            ->first(); 
        }
        return $skudata;
    }


    // 根据分类id获取该类所有展示到前台的商品,限制n条
    public static function getShowData($cid,$n){
    	$showdata = DB::SELECT("SELECT DISTINCT sku.`goods_id`,sku.`title`,spu.`goods_descr`,sku.`market_price`,sku.`shop_price`,spu.`goods_thums` FROM bm_goods_sku AS sku,bm_goods_spu AS spu,bm_cates AS c WHERE sku.`goods_id`=spu.`id` AND sku.`is_show`=1 AND spu.`cate_id`=$cid limit $n");
    	return $showdata;
    }

    // 获取底部服务栏目信息
    public static function getHelpInfo(){
    	$helpInfo = DB::table('bm_bottom')->where('status','=',1)->select('id','name','pid')->get()->toArray();
    	// var_dump($helpInfo);exit;
    	foreach ($helpInfo as $key => $value) {
    	
    		if ($value->pid==0) {

    			$temp[$value->id]['id'] = $value->id;
    			$temp[$value->id]['name'] = $value->name;
    		 }

    		 foreach ($helpInfo as $key1 => $value1)  {

                 if($value1->pid == $value->id) {

                     $temp[$value->id]['children'][$value1->id]['id'] = $value1->id;
    			     $temp[$value->id]['children'][$value1->id]['name'] = $value1->name;

                 }
    		 }
    		
    	}
    	return $temp;
    	// $showHelp = $temp;
    	// return view('Home.HomePublic.footer',['showHelp'=>$showHelp]);
    }

    // 获取友情链接
    public static function getFriendLink(){
    	$friendLinks = DB::table('bm_links')->where('status','=',1)->select('name','url','logosrc')->get();
    	return $friendLinks;
    	// $showLinks = $friendLinks;
    	// return view('Home.HomePublic.footer',['showLinks'=>$showLinks]);
    }


}
