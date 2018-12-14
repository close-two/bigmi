<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// 导入DB
use DB;
// 导入config
use Comfig;
class PicController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 轮播图列表
    public function index(Request $request)
    {
        // 获取关键词
        $name=$request->input('keywords');
        // dd($name);
        // 获取数据  每次显示5条
        $pic=DB::table("plant_pic")->where('name','like','%'.$name.'%')->paginate(5);
        // dd($pic);
        //加载模板
        return view('Admin.Pic.index',['pic'=>$pic,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    // 添加轮播图
    public function create()
    {
        //加载模板
        return view('Admin.Pic.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    // 执行添加
    public function store(Request $request)
    {   
        // var_dump($_FILES());
        // dd(123);
        //接收数据
        $data=$request->except(['_token']);
        // dd($data['pic']);
        foreach ($data as $v) {
            if ($v=='') {
                echo "你还有信息没填好";
            }
            if($request->hasFile('url')){
            // dd();
            //初始化文件名字
            $name=time()+rand(1,10000);
            //获取上传文件后缀
            $ext=$request->file("url")->getClientOriginalExtension();
            //2.把上传文件移动到指定文件下
            $request->file("url")->move('./static/PlantPic',$name.'.'.$ext);
            // 修改入库时的url
            $data['url']='/static/PlantPic/'.$name.".".$ext;
            // dd($data);
            // 将数据入库
            if(DB::table('plant_pic')->insert($data)){
            return redirect('/adminpic')->with('success','添加成功');
        }else{
            return back()->with('error','添加失败');
        }
        }else{
            return back()->with('error','添加失败');
        }
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 
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
    // 修改轮播图
    public function edit($id)
    {
        // echo $id;
        // 找到需要修改的数据
        $data=DB::table('plant_pic')->where('id','=',$id)->first();
        // dd($data);
        return view('Admin.Pic.edit',['data'=>$data]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 执行修改
    public function update(Request $request, $id)
    {
        // dd($id);
        //接收数据有修改图片的时候
        if($request->hasFile('url')){
            $data=$request->except('_token','_method');
            // dd($data);
            //初始化文件名字
            $name=time()+rand(1,10000);
            //获取上传文件后缀
            $ext=$request->file("url")->getClientOriginalExtension();
            //2.把上传文件移动到指定文件下
            $request->file("url")->move('./static/PlantPic',$name.'.'.$ext);
            // 修改入库时的url
            $data['url']='/static/PlantPic/'.$name.".".$ext;
            // dd($data);
            // 将数据入库
            if(DB::table('plant_pic')->where('id','=',$id)->update($data)){
                return redirect('/adminpic')->with('success','修改成功');
            }else{
                return back()->with('error','修改失败');
            }
        }else{
            // 没有修改图片的时候
            $data=$request->except('_token','_method');
            // var_dump($data);
            $res=DB::table('plant_pic')->where('id','=',$id)->first();
            // var_dump($res->status.'') ;
            // dd($res->name);
            //没有修改任何数据时直跳转到index
            if ($data['name']==$res->name && $data['status']==$res->status) {
                return redirect('/adminpic')->with('修改成功');
            }else{
                if (DB::table('plant_pic')->where('id','=',$id)->update($data)) {
                    return redirect('/adminpic')->with('success','修改成功');
                }else{
                    return back()->with('error','修改失败');
                }
            }
            }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    // 删除轮播图
    public function destroy($id)
    {
        // //通过id删除数据
        // $res=DB::table('plant_pic')->where('id','=',$id)->delete();
        // if ($res) {
        //     $data=[
        //     'status'=>0,
        //     'msg'=>'删除成功'
        //     ];
        // }else{
        //     $data=[
        //     'status'=>1,
        //     'msg'=>'删除失败'
        //     ];
        // }
        //     return $data;
    }


// ajax删除
    public function del(Request $request){
        //获取参数id
        $id=$request->input('id');

        $info=DB::table('plant_pic')->where('id','=',$id)->first();
        // 获取图片
        $m='.'.$info->url;
        // dd($m);
        // echo $id;
        // dd($id);
        //执行删除
        if(DB::table("plant_pic")->where("id",'=',$id)->delete()){
            echo 1;
            unlink($m);
        }
    }
    
// ajax修改图片状态
public function edi(Request $request){
    // 获取参数id
     $id=$request->input('id');
     // dd($id);
     $res=DB::table('plant_pic')->where('id','=',$id)->first();
     $data=[];
     foreach ($res as $key=>$v) {
         $data[$key]=$v;
     // var_dump($b);

     }
     // 判断当前状态,将状态相反
     if ($data['status']==1) {
         $data['status']=0;
     }else{
       $data['status']=1;
     }
     // var_dump($data);
     // dd($data);
     if (DB::table('plant_pic')->where('id','=',$id)->update($data)) {
        if ($data['status']==1) {
            echo 1;
        }else{
            echo 0;
        }
     }
     
     
}
}
