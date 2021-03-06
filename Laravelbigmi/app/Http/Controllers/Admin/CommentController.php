<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
class CommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //评价列表/反馈
        $commentlist = DB::select("SELECT com.id as id,u.`id` as uid,u.`name`,u.`sex`,u.`address`,u.`create_time`,u.`headpic`,com.created_at,content,reply,zan,u.`phone`,u.`email`,spu.`goods_title`,spu.`goods_img` FROM bm_comments AS com,bm_users AS u,bm_goods_spu AS spu WHERE u.`id`=`users_id` AND spu.`id`=`goods_id` order by id");
        // var_dump($commentlist);
        return view('Admin.Comment.comment-list',['commentlist'=>$commentlist]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
       
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //回复评价
        return view('Admin.Comment.comment-reply');
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

    public function reply(Request $request){
        $id = $request->only(['id']);
        $data =$request->only(['reply']);
        $data['status']=1;
        // echo json_encode($data);
        if (DB::TABLE('bm_comments')->where('id','=',$id)->update($data)) {
            echo 1;//回复成功
        }else{
            echo 0;//回复失败
        }

    }
}
