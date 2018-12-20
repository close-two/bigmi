<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入校验类
use App\Http\Requests\AdminAdsInsert;
use App\Http\Requests\AdminAdsUpdate;
//导入模型类
use App\Models\Ads;
//导入配置类
use Config;

class AdsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //获取搜索关键词
        $k=$request->input('keywords');
        $num=3;
        $ads=Ads::where('adsname','like','%'.$k.'%')->paginate($num);
        // dd($ads);
        //广告位首页模板
        return view('Admin.Ads.ads-list',['ads'=>$ads,'request'=>$request->all(),'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //加载添加
        return view('Admin.Ads.ads-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminAdsInsert $request)
    {
        //
        
            // dd($request->all());
          
            $createtime=date('Y-m-d H:i:s',time());
            // dd($createtime);
            $data=$request->except('_token');
            $data['create_time']=$createtime;
            if($request->hasFile('file')){
                //获取文件后缀名
                $extensions=$request->file('file')->getClientOriginalExtension();
                //随机图片名字
                $name=time().rand(1,9999);
                //把上传图片移动指定目录下
                $request->file('file')->move(Config::get('app.uploads'),$name.".".$extensions);
                //把上传的图片路径写入到$data里
                $data['file']=trim(Config::get('app.uploads')."/".$name.".".$extensions,'.');
                
                // dd($data);
            }else{
                return back()->with('error','请上传图片');
            }
            // dd($data);
            if(Ads::insert($data)){
                return redirect('/adminads')->with('success','添加广告成功');
            }
            // dd($request->hasFile('file'));
      
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        //获取要修改的单条数据
      
        $ads=Ads::where('id','=',$id)->first();

        //加载修改模板
        return view('Admin.Ads.ads-edit',['ads'=>$ads]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminAdsUpdate $request, $id)
    {
        //
        // dd($request->all());
        
        $data=$request->except(['_token','_method']);
        $data['update_time']=date('Y-m-d H:i:s',time());
        // dd($data);
        //获取需要修改数据,删除老图
        $info=Ads::where("id","=",$id)->first();
        // 有新图上传
        if($request->hasFile('file')){
            //初始化名字
            $adsname=time().rand(1,10000);
            //获取后缀
            $ext=$request->file("file")->getClientOriginalExtension();
            // 把上传的图片移动到指定目录
            $request->file('file')->move(Config::get('app.uploads'),$adsname.".".$ext);

            //把上传的图片写入到data里
            $data['file']=trim(Config::get('app.uploads').'/'.$adsname.'.'.$ext,'.');
            // dd($data);
            if(Ads::where("id","=",$id)->update($data)){
                //干掉老图
                unlink(".".$info->file);
                return redirect('/adminads')->with('success','修改成功');
            }
        }else{
                //没有新图修改
                if(Ads::where('id','=',$id)->update($data)){
                    return redirect('/adminads')->with('success','修改成功');
                }
            
        }


    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    //ajax下架
    public function down(Request $request){
        $id=$request->input('id');
        // echo $id;
      
      //获取当前id的广告状态
      $ads=Ads::where('id','=',$id)->first();

      // var_dump($ads);
      // echo $ads->status;
     
      if(Ads::where('id','=',$id)->update(['status'=>0])){
            echo '已下架';
      }
        
    }

    //ajax上架
    public function up(Request $request){
        $id=$request->input('id');
        // echo $id;
        if(Ads::where('id','=',$id)->update(['status'=>1])){
            echo '正在上架';
      }
    }

    //ajax删除
    public function del(Request $request){
        // dd($request->input('id'));
        $id=$request->input('id');
        // echo $id;
        if(Ads::where('id','=',$id)->delete()){
            echo 1;
        }else{
            echo 0;
        }
    }
}
