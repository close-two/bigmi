<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
//导入模型类
use App\Models\Video;
//导入校验类
use App\Http\Requests\AdminVideoinsert;
use App\Http\Requests\AdminVideoupdate;
//导入配置类
use Config;

class VideosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {   
        $k=$request->input('keywords');
        $num=3;
        $video=Video::where('videoname','like','%'.$k.'%')->paginate($num);
        //加载视频列表模块

        return view('Admin.Video.video-list',['video'=>$video,'request'=>$request->all(),'num'=>$num]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        //
        return view('Admin.Video.video-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminVideoinsert $request)
    {
        //
        // dd($request->all());
        
         $createtime=date('Y-m-d H:i:s',time());
            // dd($createtime);
            $data=$request->except('_token');
            $data['create_time']=$createtime;
            if($request->hasFile('video')){
                //获取文件后缀名
                $extensions=$request->file('video')->getClientOriginalExtension();
                //随机视频名字
                $name=time().rand(1,9999);
                //把上传图片移动指定目录下
                $request->file('video')->move(Config::get('app.uploadss'),$name.".".$extensions);
                //把上传的图片路径写入到$data里
                $data['video']=trim(Config::get('app.uploadss')."/".$name.".".$extensions,'.');
                
                // dd($data);
            }else{
                return back()->with('error','请上传视频');
            }
            // dd($data);
            if(Video::insert($data)){
                return redirect('/adminvideo')->with('success','添加视频成功');
            }else{
                return back()->withInput();
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
      
        $video=Video::where('id','=',$id)->first();

        //加载修改模板
        return view('Admin.Video.video-edit',['video'=>$video]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminVideoupdate $request, $id)
    {
        $data=$request->except(['_token','_method']);
        $data['update_time']=date('Y-m-d H:i:s',time());
        // dd($data);
        // dd($data);
        //获取需要修改数据,删除老图
        $info=Video::where("id","=",$id)->first();
        // 有新图上传
        if($request->hasFile('video')){
            //初始化名字
            $videoname=time().rand(1,10000);
            //获取后缀
            $ext=$request->file("video")->getClientOriginalExtension();
            // 把上传的图片移动到指定目录
            $request->file('video')->move(Config::get('app.uploadss'),$videoname.".".$ext);

            //把上传的图片写入到data里
            $data['video']=trim(Config::get('app.uploadss').'/'.$videoname.'.'.$ext,'.');
            // dd($data);
            if(Video::where("id","=",$id)->update($data)){
                //干掉老图
                unlink(".".$info->video);
                return redirect('/adminvideo')->with('success','修改成功');
            }
        }else{
                //没有新图修改
                if(Video::where('id','=',$id)->update($data)){
                    return redirect('/adminvideo')->with('success','修改成功');
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
      $video=Video::where('id','=',$id)->first();

      // var_dump($ads);
      // echo $ads->status;
     
      if(Video::where('id','=',$id)->update(['status'=>0])){
            echo '已下架';
      }
    }

    //ajax上架
    public function up(Request $request){
        $id=$request->input('id');
        // echo $id;
        if(Video::where('id','=',$id)->update(['status'=>1])){
            echo '正在上架';
      }
    }

     //ajax删除
    public function del(Request $request){
        // dd($request->input('id'));
        $id=$request->input('id');
        // echo $id;
        if(Video::where('id','=',$id)->delete()){
            echo 1;
        }else{
            echo 0;
        }
    }
}
