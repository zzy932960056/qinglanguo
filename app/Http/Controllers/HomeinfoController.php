<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class HomeinfoController extends Controller
{
	public function home_info(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $homeinfo = DB::table('qlg_home_info')->get();
        $data['homeinfo'] = $homeinfo;
        return view('homeinfo',$data);
    }

    public function home_info_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$bid = $id;
      $qlg_home = DB::table('qlg_home_info')->where(['id'=>$bid])->get();
	    $data = [];
	    $data['qlg_home'] = (array)$qlg_home[0];
       	return view('qlg_home_update',$data);
    }

    public function home_info_doUpdate($id){
    	$home_pic1 = $_POST['home_pic1'];
			$home_pic2 = $_POST['home_pic2'];
			$home_pic3 = $_POST['home_pic3'];
			$home_pic4 = $_POST['home_pic4'];
			$home_pic5 = $_POST['home_pic5'];
			$home_text = $_POST['home_text'];

    	if($home_pic1 == ''){
            echo "<script>alert('中心园图路径不能为空')</script>";
            return self::home_info_update($id);
        }else if($home_pic2 == ''){
						echo "<script>alert('王舍园图路径不能为空')</script>";
						return self::home_info_update($id);
				}else if($home_pic3 == ''){
						echo "<script>alert('南家园图路径不能为空')</script>";
						return self::home_info_update($id);
				}else if($home_pic4 == ''){
						echo "<script>alert('芳草园图路径不能为空')</script>";
						return self::home_info_update($id);
				}else if($home_pic5 == ''){
						echo "<script>alert('颐丰园图路径不能为空')</script>";
						return self::home_info_update($id);
				}else if($home_text == ''){
						echo "<script>alert('青蓝果之家文本简介不能为空')</script>";
						return self::home_info_update($id);
				}
        $num = DB::table('qlg_home_info')->where('id',$id)->update(
                ['home_pic1'=>$home_pic1,
								'home_pic2'=>$home_pic2,
								'home_pic3'=>$home_pic3,
								'home_pic4'=>$home_pic4,
								'home_pic5'=>$home_pic5,
								'home_text'=>$home_text]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::home_info();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::home_info_update($id);
        }
    }

}
