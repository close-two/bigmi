<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
//导入表单请求校验类
use App\Http\Requests\AdminCateinsert;
use App\Http\Requests\AdminCateUpdate;

class CateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        //获取类别数据
        // $cate=DB::table('bm_cates')->get();
        // $cate=DB::select("select *,concat(path,',',id)as paths from bm_cates order by paths");


        //获取搜索条件
        $k=$request->input('keywords');
        //连贯方法
        $cate=DB::table('bm_cates')->select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->where('catename','like','%'.$k.'%')->paginate(6);

        //加分隔符
        foreach($cate as $key=>$value){
            // echo $value->path."<br>";
            // 把path字符串转换为数组
            $arr=explode(",",$value->path);//分割成一个数组,2个键
            // echo "<pre>";
            // var_dump($arr);
            //获取逗号个数 ,永远是分割的个数-1
            $len=count($arr)-1;
            //重复字符串函数(根据逗号出现的个数加分隔符)
            $cate[$key]->catename=str_repeat("一丨",$len).$value->catename;
            // dd($arr);
        }

        return view('Admin.Cate.index',['cate'=>$cate,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //获取分类信息数据
          $cate=DB::table('bm_cates')->select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->get();

        //加分隔符
        foreach($cate as $key=>$value){
            // echo $value->path."<br>";
            // 把path字符串转换为数组
            $arr=explode(",",$value->path);//分割成一个数组,2个键
            // echo "<pre>";
            // var_dump($arr);
            //获取逗号个数 ,永远是分割的个数-1
            $len=count($arr)-1;
            //重复字符串函数(根据逗号出现的个数加分隔符)
            $cate[$key]->catename=str_repeat("一丨",$len).$value->catename;
            // dd($arr);
        }
        //加载分类添加模板
         return view('Admin.Cate.add',['cate'=>$cate]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminCateinsert $request)
    {
        //执行添加
        // dd($request->all());
        $data=$request->except('_token');
        // dd($data);
        $pid=$request->input('pid');
        //判断
        if($pid==0){
            //添加的是顶级分类
            //拼接path
            $data['path']=0;
        }else{
            //添加的是子类
            //拼接path  父类path.父类id
            //获取父类的信息
            $info=DB::table('bm_cates')->where('id','=',$pid)->first();
            $data['path']=$info->path.','.$info->id;
        }

        //入库
        if(DB::table('bm_cates')->insert($data)){
            return redirect('/admincate')->with('success','添加分类成功');
        }else{
            return back()->with('error','添加失败');
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
        //取分类名
        $cates=DB::table('bm_cates')->where('id','=',$id)->first();
       
        if($cates->pid!=0){
        //取父类名称,如果pid!=0
           $pcate=DB::table('bm_cates')->where('id','=',$cates->pid)->first();
        }else{
            //如果是父类,只能修改名称,分类名称就是他本身
            $pcate=DB::table('bm_cates')->where('id','=',$cates->id)->first();
        }

        //获取分类信息数据
          $cate=DB::table('bm_cates')->select(DB::raw('*,concat(path,",",id)as paths'))->orderBy('paths')->get();

        //加分隔符
        foreach($cate as $key=>$value){
            // echo $value->path."<br>";
            // 把path字符串转换为数组
            $arr=explode(",",$value->path);//分割成一个数组,2个键
            // echo "<pre>";
            // var_dump($arr);
            //获取逗号个数 ,永远是分割的个数-1
            $len=count($arr)-1;
            //重复字符串函数(根据逗号出现的个数加分隔符)
            $cate[$key]->catename=str_repeat("一丨",$len).$value->catename;
            // dd($arr);
        }
        // $data=$this->index();
        // dd($data);
        // dd($pcate);
        //加载添加模板
        // dd($cates);
        return view('Admin.Cate.edit',['cate'=>$cate,'cates'=>$cates,'pcate'=>$pcate]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminCateUpdate $request, $id)
    {
        //
        // dd($request->catename);
        // dd(DB::table('bm_cates')->where('catename','like', $request->catename)->first());
        // dd(DB::table('bm_cates')->where('path','like',$request->path)->where('id','=',$id)->first());
        //他父pid
        $parent=DB::table('bm_cates')->where('id','=',$id)->first();
        $pid=$parent->pid;
        $catename=$parent->catename;
        //类名不能相同
        if($pid==$request->pid && $catename==$request->catename){

            return back()->with('error','不能修改重复分类');

        }
        // echo $id;
        //加,修改
        $data=$request->except(['_token','_method']);
           $cate['catename']=$data['catename'];
        $pid=$data['pid'];
        //父类path
        $path = DB::table('bm_cates')->where('id','=',$pid)->first();
        //子类path
        $path = $path->path.','.$pid;
        $cate['path']=$path;
        $cate['pid']=$pid;
        // dd($cate);
        // dd($data);
        //执行修改
        if(DB::table('bm_cates')->where('id','=',$id)->update($cate)){
            return redirect("/admincate")->with('success','修改分类成功');
        }
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
        //删除
      
    }

    public function del(Request $request){
        //获取参数id
        $id=$request->input('id');
        // echo $id;
        // 获取当前类别下子类个数
        $res=DB::table('bm_cates')->where('pid','=',$id)->count();
        // echo $res;
        // 判断
        if($res>0){
            echo 0;
            return back();  
        }
        //直接删除分类信息
        if(DB::table('bm_cates')->where('id','=',$id)->delete()){
            echo 1;
        }
    }

   
}
