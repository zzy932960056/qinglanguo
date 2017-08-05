<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use SoapClient;
use App\Serives\WsMessageSend;

class LoginController extends Controller
{   
    public function me_login(){
        return view('qt_denglu');
    }


    public function me_logout(){
        @session_start();
        session_destroy();
        setcookie('user_info','',time()-100,'/');
        setcookie('phone','',time()-100,'/');     
        return view('qt_denglu');
    }

    public function me_doLogin(){
        $uname = $_POST['uname'];
        $upwd = $_POST['upwd'];
        $upwd = md5($upwd);
        $user_info = DB::table('me_users')->where(
                ['user_name'=>$uname,'user_password'=>$upwd]
            )->get();
        if($user_info){
            @session_start();
            $user_info = (array)$user_info[0];
            $_SESSION['user_info'] = $user_info['user_name'];
            $phone = $user_info['user_name'];
            if(strlen($phone) == 11){
                $phone1 = $phone[0].$phone[1].$phone[2];
                $phone2 = $phone[7].$phone[8].$phone[9].$phone[10];
                $phone = $phone1.'****'.$phone2;
                $_SESSION['phone'] = $phone;
                //remember_me
                if(isset($_POST['remember_me']) && $_POST['remember_me'] == 'on'){
                    $info = $user_info['user_name'];
                    $time = time()+7*24*60*60;
                    setcookie('user_info',$info,$time,'/');
                    setcookie('phone',$phone,$time,'/');
                }
            }
            return new JsonResponse(
                    array('msg' => 'ok','phone'=>$phone)
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function me_register(){
        return view('qt_zhuce');
    }

    public function doPhone(){
        $phone = $_POST['phone'];
        $phone_info = DB::table('me_users')->where('user_name',$phone)->get();
        if($phone_info){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }
    }

    public function sendCode(){
        $phone = $_POST['phone'];
        //接口开始
        $username = "AA00316";                            //改为实际账户名
        $password = "123456";                          //改为实际短信发送密码
        $mobiles = $phone;                 //目标手机号码，多个用半角“,”分隔
        //生成随机数
        $rand = mt_rand(1000,9999);
        //$content = "您的注册验证码为".$rand.",请于3分钟内完成身份验证【Me Young】";
        $content="您的验证码：".$rand."【Me Young】";
        $extnumber = "";
        
        //定时短信发送时间,格式 2016-12-06T08:09:10+08:00，null或空串表示为非定时短信(即时发送)
        $plansendtime='';                 
        //$plansendtime='2016-12-06T08:09:10+08:00'
        $result=WsMessageSend::send($username, $password, $mobiles, $content,$extnumber,$plansendtime);
        if($result==null){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
        else{
            return new JsonResponse(
                    array('msg' => 'ok','cod' => $rand)
                );
        }
    }

    public function sendforgetCode(){
        $phone = $_POST['phone'];
        //接口开始
        $username = "AA00316";                            //改为实际账户名
        $password = "123456";                          //改为实际短信发送密码
        $mobiles = $phone;                 //目标手机号码，多个用半角“,”分隔
        //生成随机数
        $rand = mt_rand(1000,9999);
        //$content = "您正在使用密码找回功能,验证码为".$rand.",请在3分钟内进行填写。如非本人操作,请忽略本条短信【Me Young】";
        $content="您的验证码：".$rand."【Me Young】";
        $extnumber = "";
        
        //定时短信发送时间,格式 2016-12-06T08:09:10+08:00，null或空串表示为非定时短信(即时发送)
        $plansendtime='';                 
        //$plansendtime='2016-12-06T08:09:10+08:00'
        $result=WsMessageSend::send($username, $password, $mobiles, $content,$extnumber,$plansendtime);
        if($result==null){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
        else{
            return new JsonResponse(
                    array('msg' => 'ok','cod' => $rand)
                );
        }
    }

    public function doRegister(){
        $uphone = $_POST['uphone'];
        $upwd = $_POST['upwd'];
        $reupwd = $_POST['reupwd'];
        $verification = $_POST['verification'];
        $hid = $_POST['hid'];
        $phone_info = DB::table('me_users')->where('user_name',$uphone)->get();
        if($phone_info){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else if($upwd != $reupwd || $upwd == '' || $reupwd == ''){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else if($verification != $hid || $verification == '' || $hid == ''){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else{
            $upwd = md5($upwd);
            $time = date('Y-m-d H:i:s',time());
            $bool = DB::table('me_users')->insert(
                ['user_name'=>$uphone,'user_password'=>$upwd,'create_time'=>$time]
                );
            if($bool){
                return new JsonResponse(
                    array('msg' => 'ok')
                );
            }else{
                return new JsonResponse(
                    array('msg' => 'no')
                );
            }
        }
    }

    public function regSuccess(){
        return view('qt_zhucechenggongye');
    }

    public function forgetPass(){
        return view('qt_xiugaimima');
    }

    public function selectPhone(){
        $phone = $_POST['phone'];
        $num = DB::table('me_users')->where('user_name',$phone)->get();
        if($num){
                return new JsonResponse(
                    array('msg' => 'ok')
                );
        }else{
                return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function dopwdUpdate(){
        $telphone = $_POST['telphone'];
        $veri = $_POST['verification'];
        $upwd = $_POST['upwd'];
        $repwd = $_POST['repwd'];
        $hid = $_POST['hid'];
        $phone_info = DB::table('me_users')->where('user_name',$telphone)->get();
        if(empty($phone_info)){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else if($upwd != $repwd || $upwd == '' || $repwd == ''){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else if($veri != $hid || $veri == '' || $hid == ''){
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }else{
            $upwd = md5($upwd);
            $time = date('Y-m-d H:i:s',time());
            $num = DB::table('me_users')->where('user_name',$telphone)->update(
                ['user_password'=>$upwd,'create_time'=>$time]
                );
            if($num == 1){
                return new JsonResponse(
                        array('msg' => 'ok')
                    );
            }else{
                return new JsonResponse(
                        array('msg' => 'no')
                    );
            }
        }
    }


}

