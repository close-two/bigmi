<?php

namespace App\Http\Controllers\Home;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Hash;
// 引入邮件
use Mail;
// 引入第三方验证码类库
use Gregwar\Captcha\CaptchaBuilder;
use session;
class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
       
        return redirect('/register/create');

    }

    // 验证码检测
    public function code(){
        ob_clean();//清除
        $builder = new CaptchaBuilder;
        // 设置图片宽高和字体
        $builder->build($width = 100,$height = 40,$font = null);
        // 获取验证码的内容
        $phrase = $builder->getPhrase();
        // 把内容存进去session
        session(['vcode'=>$phrase]);
        // 生成图片
        header('Cache-Control:no-cache,must-revalidate');
        header('Content-Type:image/jpeg');
        $builder->output();
        // die;


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('Home.Register.register');
    }

     // 发送纯文本 视图和数据
    public function sendMail($email,$id,$token){
        // 在闭包函数内部使用闭包函数外部的变量,必须使用use导入
        Mail::send(
            'Home.Register.getActive',['id'=>$id,'token'=>$token],function($message)use($email){
                $message->subject('用户激活通知,如非本人操作,请勿理会');
                $message->to($email);
            });
        return true;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //获取输入的验证码
        $fcode = $request->input('fcode');
        // 获取系统校验码
        $vcode = session('vcode');
        // dd($vcode);

        $data =$request->only(['email','password']);
        // 邮箱注册拼凑要插入的数据
        $data['name']='';
        $data['miid']=substr(time(),5).str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);//生成会员id
        $data['create_time']=date('Y-m-d H:i:s');
        $data['status']=1;
        $data['token']=str_random(50);
        $data['phone']='';
        $data['password']=Hash::make($data['password']);
        if ($fcode==$vcode) {
            // 执行插入操作
            if ($id=DB::table('bm_users')->insertGetId($data)) {
                // echo "插上会员数据成功";
                $this->sendMail($data['email'],$id,$data['token']);
                echo "激活用户邮件已发送,请登录您的邮箱查看并激活用户";
            }
        }else{
            return redirect('/register/create')->with('error','校验码有误,请重新输入');
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
        //
    }

    // 测试邮件发送
    public function send(){
        // 邮箱消息生成$message
        Mail::raw('您有新的饿了么订单!',function($message){
            $message->subject('项目二');
            $message->to('1490526108@qq.com');
        });
    }

   
    // 激活用户
    public function getActive(Request $request){
        $id = $request->input('id');
        $token=$request->input('token');
        $info = DB::TABLE('bm_users')->where('id','=',$id)->first();
        if ($token==$info->token) {
            $data['status']=2;
            $data['token']=rand(1,10000);
            DB::table('bm_users')->where('id','=',$id)->update($data);
            echo "用户已经激活,马上去登录吧!";
        }
    }

    // 短信注册
    public function registers(){
        return view('Home.Register.registers');
    }

    // 验证手机号
    public function checkphone(Request $request){
        $phone = $request->input('p');
        $phonelist = DB::table('bm_users')->pluck('phone');
        // echo $phonelist;

        $arr=array();
        foreach ($phonelist as $k => $v) {
            $arr[$k]=$v;
        }
        if (in_array($phone, $arr)) {
            echo 1;//手机号已经注册
        }else{
            echo 0;//可以用
        }
    }

    // 发送短信
    public function sendphone(Request $request){
        $pp = $request->input('pp');
        sendphone($pp);
        // echo $pp;
    }

    // 检查验证码
    public function checkticket(Request $request){

        $ticket = $request->input('ticket');
        // echo $ticket;
        if (isset($_COOKIE['fcode'])&&!empty($ticket)) {
            $fcode = $request->cookie('fcode');
            if ($fcode == $ticket) {
                echo 1;//检验码一致
            }else{
                echo 2;//检验码不一致
            }
        }elseif(empty($ticket)){
            echo 3;//输入的校验码为空
        }else{
            echo 4;//检验码过期
        }

    }

    // 注册,插入到数据表
    public function registerByPhone(Request $request){
        // $request->flashOnly('phone');
        // dd($request->all());
        $data =$request->only(['phone','password']);
        // 邮箱注册拼凑要插入的数据
        $data['name']='';
        $data['miid']=substr(time(),5).str_pad(mt_rand(1, 99999), 5, '0', STR_PAD_LEFT);//生成会员id
        $data['create_time']=date('Y-m-d H:i:s');
        $data['status']=2;//手机注册成功直接生效
        $data['token']=str_random(50);
        $data['email']='';
        $data['password']=Hash::make($data['password']);
        if (DB::table('bm_users')->insert($data)) {
            return redirect('/login')->with('success','注册成功!您可以去登录啦');
        }else{
            return back()->withInput();
        }
    }
}
