<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB
use DB;
class BottomController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //获取搜索条件
        $k=$request->input("keywords");
        //获取类别数据
        // $bb=DB::table("bm_bottom")->get();
        // $bb=DB::select("select *,concat(path,',',id)as paths from bm_bottom order by paths");
        //转换为连贯方法
        $bb=DB::table("bm_bottom")->select(DB::raw(" *,concat(path,',',id)as paths"))->orderBy('paths')->where("name","like",'%'.$k.'%')->get();
        //加载分隔符
        foreach($bb as $key=>$value){
            // echo $value->path."<br>";
            //把path字符串转换为数组
            $arr=explode(",",$value->path);
            // dd($arr);
            // echo "<pre>";
            // var_dump($arr);
            //获取逗号个数
            $len=count($arr)-1;
            //重复字符串函数
            $bb[$key]->name=str_repeat("--|",$len).$value->name;
        }
        // dd($bb);

        // $bb = '1';
        // dd($bb);
        //加载模板 分配数据
        return view("Admin.Botton.index",['bb'=>$bb]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //获取所有的分类信息
        $bb=DB::table("bm_bottom")->get();
        //加载添加模板
        return view("Admin.Botton.add",['bb'=>$bb]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        //去除_token
        $data=$request->except("_token");
        //打印
        $pid=$request->input('pid');
        // dd($data);
        //判断
        if($pid==0){
            // 添加的是顶级分类
            // dd($data);
            //拼接path
            $data['path']='0';
        }else{
            //添加的是子类
            // dd($data);
            //拼接path 父类 path.父类的id
            //获取父类的信息
            $info=DB::table("bm_bottom")->where("id",'=',$pid)->first();
            $data['path']=$info->path.",".$info->id;

        }
        //入库
        if(DB::table("bm_bottom")->insert($data)){
            echo 1;
        }else{
            echo 0;
        }
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
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // echo $id;
        //获取当前类别下子类个数
        $res=DB::table("bm_bottom")->where("pid",'=',$id)->count();
        // echo $res;
        if($res->0){
            return redirect("/button")->with();
        }
        //当前类别下有子类信息不能直接删除
        //当前类别下没有子类信息直接删除
    }

}
