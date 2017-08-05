<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Meusers;
class UserController extends Controller
{   
    public function index(){
        session_start();
        $users = Meusers::paginate(10);
        return view('user',[
                'users'=>$users,
            ]);
    }

    public function index_doDelete(){
        $id = $_POST['cid'];
        $num = DB::table('me_users')->where('id',$id)->delete();
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

    public function index_insert(){
        session_start();
        return view('index_insert');
    }

    public function index_doInsert(){
        $uname = $_POST['uname'];
        $upwd = $_POST['upwd'];
        $reapwd = $_POST['reapwd'];
        if($uname == ''){
            echo "<script>alert('用户名不能为空')</script>";
            return self::index_insert();
        }else if($upwd == '' || $reapwd == ''){
            echo "<script>alert('密码不能为空')</script>";
            return self::index_insert();
        }else if($upwd != $reapwd){
            echo "<script>alert('两次密码输入不一致')</script>";
            return self::index_insert();
        }
        $upwd = md5($upwd);
        $time = time();
        $time = date('Y-m-d H:i:s',$time);
        $bool = DB::table('me_users')->insert(
            ['user_name'=>$uname,'user_password'=>$upwd,'create_time'=>$time]
            );
        if($bool){
            return redirect('/user/index');
        }else{
            return redirect()->back();
        }
    }

    public function index_update($id){
        session_start();
        $uid = $id;
        $data = [];
        $user = DB::table('me_users')->where('id',$uid)->get();
        $data['user'] = (array)$user[0];
        return view('user_update',$data);
    }

    public function index_doUpdate($id){
        $uname = $_POST['uname'];
        $upwd = $_POST["upwd"];
        $reapwd = $_POST["reapwd"];
        if($uname == ''){
            echo "<script>alert('用户名不能为空')</script>";
            return self::index_update($id);
        }else if($upwd == '' || $reapwd == ''){
            echo "<script>alert('密码不能为空')</script>";
            return self::index_update($id);
        }else if($upwd != $reapwd){
            echo "<script>alert('两次密码输入不一致')</script>";
            return self::index_update($id);
        }
        $user = DB::table('me_users')->where(['id'=>$id])->get();
        $upwd =md5($upwd);
        if($upwd == $user[0]->user_password){
            echo "<script>alert('与原密码一致,无需修改')</script>";
            return self::index_update($id);
        }
        $num = DB::table('me_users')->where('id',$id)->update(
                ['user_name'=>$uname,
                 'user_password'=>$upwd]
            );
        if($num == 1){
            return redirect('/user/index');
        }else{
            return redirect()->back();
        }
    }
}