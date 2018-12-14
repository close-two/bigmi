<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入DB
use DB;
class FriendlinkController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //友情链接列表
    public function index(Request $request)
    {
            //获取搜索的关键词
            $k=$request->input("keywords");
            $kk=$request->input("keywordss");
            //获取数据
            $fk=DB::table("bm_links")->where("name","like",'%'.$k.'%')->where("email","like",'%'.$kk.'%')->get();
            // dd($fk);
           //加载模板
           return view("Admin.Friendlink.index",['fk'=>$fk,'request'=>$request->all()]); 
        }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    //友情链接添加
    public function create()
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    //用创建好的AdminUserinsert表单请求校验类 约束请求对象
    public function store(Request $request)
    {
        //
       // dd($request->all());
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
    //修改链接
    public function edit($id)
    {
        


        //获取数据
        $link=DB::table("bm_links")->where("id",'=',$id)->first();
        //加载模板
        return view("Admin.Friendlink.edit",['link'=>$link]);
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
        // echo $id;
       //获取修改后的数据
       //dd($request->all());
       //封装修改的数据
       $data=$request->except(['_token','_method']);
       // dd($data);
       //执行修改
        if(DB::table("bm_links")->where("id",'=',$id)->update($data)){
            return redirect("/friendlink")->with("success",'修改成功');
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

    public function del(Request $request){
        //获取参数id
        $id=$request->input('id');
        // echo $id;
        //执行删除
        if(DB::table("bm_links")->where("id",'=',$id)->delete()){
            echo 1;
        }
    }
    
}
