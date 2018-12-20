<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
//导入配置类
 use Config;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //加载模板
        $user=User::paginate(3);

        // dd($user);
        return view("Admin.User.user-list",['user'=>$user,'request'=>$request->all()]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Admin.User.user-add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
       return view('Admin.User.user-show');
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
        //
    }



     public function down(Request $request){
        $id=$request->input('id');
        // echo $id;
      
      //获取当前id的广告状态
      $user=User::where('id','=',$id)->first();
      // echo $user->status;
      // dd($user);
      // echo $ads->status;

      if(User::where('id','=',$id)->update(['status'=>1])){
            echo '已禁用';

      }
        
    }
      //ajax上架
    public function up(Request $request){
        $id=$request->input('id');
        $user=User::where('id','=',$id)->first();
        // var_dump($user);

        if(User::where('id','=',$id)->update(['status'=>2])){
            echo '正常';
        }
 
    }

     //ajax删除
    public function del(Request $request){
        // dd($request->input('id'));
        $id=$request->input('id');
        // echo $id;
        if(User::where('id','=',$id)->delete()){
            echo 1;
        }else{
            echo 0;
        }
    }
}
