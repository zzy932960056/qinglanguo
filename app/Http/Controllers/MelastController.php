<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MelastController extends Controller
{   
	public function meLast(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('me_last')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('me_last',$data);
    }

    public function meLast_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$lid = $id;
       	$me_last = DB::table('me_last')->where(['id'=>$lid])->get();
	    $data = [];
	    $data['me_last'] = (array)$me_last[0];
       	return view('me_last_update',$data);
    }

    public function meLast_doUpdate($id){
        $wechat = $_POST['wechat'];
        $weibo = $_POST['weibo'];
        $taobao = $_POST['taobao'];
        $qq = $_POST['qq'];
        $company = $_POST['company'];
        $email = $_POST['email'];
        $tel = $_POST['tel'];
        $address = $_POST['address'];
        $map_slogan = $_POST['map_slogan'];
        $map_image = $_POST['map_image'];
        $join_us1 = $_POST['join_us1'];
        $join_us2 = $_POST['join_us2'];
    	if($wechat == ''){
            echo "<script>alert('微信二维码路径不能为空')</script>";
            return self::meLast_update($id);
        }else if($weibo == ''){
            echo "<script>alert('微博二维码路径不能为空')</script>";
            return self::meLast_update($id);
        }else if($taobao == ''){
            echo "<script>alert('淘宝二维码路径不能为空')</script>";
            return self::meLast_update($id);
        }else if($qq == ''){
            echo "<script>alert('QQ二维码路径不能为空')</script>";
            return self::meLast_update($id);
        }else if($company == ''){
            echo "<script>alert('公司信息不能为空')</script>";
            return self::meLast_update($id);
        }else if($email == ''){
            echo "<script>alert('e-mail不能为空')</script>";
            return self::meLast_update($id);
        }else if($tel == ''){
            echo "<script>alert('电话不能为空')</script>";
            return self::meLast_update($id);
        }else if($address == ''){
            echo "<script>alert('地址不能为空')</script>";
            return self::meLast_update($id);
        }else if($map_slogan == ''){
            echo "<script>alert('地图标语不能为空')</script>";
            return self::meLast_update($id);
        }else if($map_image == ''){
            echo "<script>alert('地图路径不能为空')</script>";
            return self::meLast_update($id);
        }else if($join_us1 == ''){
            echo "<script>alert('加入我们电话1不能为空')</script>";
            return self::meLast_update($id);
        }else if($join_us2 == ''){
            echo "<script>alert('加入我们电话2不能为空')</script>";
            return self::meLast_update($id);
        }
        $num = DB::table('me_last')->where('id',$id)->update(
                ['wechat'=>$wechat,'weibo'=>$weibo,'taobao'=>$taobao,
                'qq'=>$qq,'company'=>$company,'email'=>$email,'tel'=>$tel,
                'address'=>$address,'map_slogan'=>$map_slogan,'map_image'=>$map_image,
                'join_us1'=>$join_us1,'join_us2'=>$join_us2]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::meLast();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::meLast_update($id);
        }
    }
}