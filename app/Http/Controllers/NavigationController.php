<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class NavigationController extends Controller
{   
	public function navigation_image(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('navigation_image')->get();
        $data['info'] = $info;
        return view('navigation_image',$data);
    }

    public function navigation_image_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$sid = $id;
       	$image_info = DB::table('navigation_image')->where(['id'=>$sid])->get();
	    $data = [];
	    $data['image_info'] = (array)$image_info[0];
       	return view('navigation_image_update',$data);
    }

    public function navigation_image_doUpdate($id){
        $logo = $_POST['logo'];
    	if($logo == ''){
            echo "<script>alert('导航大图路径不能为空')</script>";
            return self::navigation_image_update($id);
        }
        $num = DB::table('navigation_image')->where('id',$id)->update(
                ['image_path'=>$logo]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::navigation_image();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::navigation_image_update($id);
        }
    }
}