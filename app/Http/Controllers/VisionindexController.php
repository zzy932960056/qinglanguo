<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class VisionindexController extends Controller
{
	  public function logo(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $logo = DB::table('vis_logo')->get();
        $data['logo'] = $logo;
        return view('admin_vis_logo',$data);
    }

    public function logo_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $logo = DB::table('vis_logo')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['logo'] = (array)$logo[0];
       	return view('qlg_vis_logo_update',$data);
    }

    public function logo_doUpdate($id){
	    	$logo_pic = $_POST['logo_pic'];
				$logo_text1 = $_POST['logo_text1'];
				$logo_text2 = $_POST['logo_text2'];
    		if($logo_pic == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::logo_update($id);
        }else if($logo_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::logo_update($id);
				}else if($logo_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::logo_update($id);
				}
        $num = DB::table('vis_logo')->where('id',$id)->update(
                ['logo_pic'=>$logo_pic,
								'logo_text1'=>$logo_text1,
								'logo_text2'=>$logo_text2]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::logo();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::logo_update($id);
        }
    }

		public function mascot(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$mascot = DB::table('vis_mascot')->get();
				$data['mascot'] = $mascot;
				return view('admin_vis_mascot',$data);
		}

		public function mascot_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$mascot = DB::table('vis_mascot')->where(['id'=>$bid])->get();
				$data = [];
				$data['mascot'] = (array)$mascot[0];
				return view('qlg_vis_mascot_update',$data);
		}

		public function mascot_doUpdate($id){
				$mas_pic = $_POST['mas_pic'];
				$mas_text = $_POST['mas_text'];
				if($mas_pic == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::mascot_update($id);
				}else if($mas_text == ''){
						echo "<script>alert('段落文本不能为空')</script>";
						return self::mascot_update($id);
				}
				$num = DB::table('vis_mascot')->where('id',$id)->update(
								['mas_pic'=>$mas_pic,
								'mas_text'=>$mas_text]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::mascot();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::mascot_update($id);
				}
		}

		public function clothes(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$clothes = DB::table('vis_clothes')->get();
				$data['clothes'] = $clothes;
				return view('admin_vis_clothes',$data);
		}

		public function clothes_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$clothes = DB::table('vis_clothes')->where(['id'=>$bid])->get();
				$data = [];
				$data['clothes'] = (array)$clothes[0];
				return view('qlg_vis_clothes_update',$data);
		}

		public function clothes_doUpdate($id){
				$clo_pic = $_POST['clo_pic'];
				$clo_title1 = $_POST['clo_title1'];
				$clo_text1 = $_POST['clo_text1'];
				$clo_title2 = $_POST['clo_title2'];
				$clo_text2 = $_POST['clo_text2'];
				if($clo_pic == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::clothes_update($id);
				}else if($clo_title1 == ''){
						echo "<script>alert('标题1不能为空')</script>";
						return self::clothes_update($id);
				}else if($clo_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::clothes_update($id);
				}else if($clo_title2 == ''){
						echo "<script>alert('标题2不能为空')</script>";
						return self::clothes_update($id);
				}else if($clo_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::clothes_update($id);
				}
				$num = DB::table('vis_clothes')->where('id',$id)->update(
								['clo_pic'=>$clo_pic,
								'clo_title1'=>$clo_title1,
								'clo_text1'=>$clo_text1,
								'clo_title2'=>$clo_title2,
								'clo_text2'=>$clo_text2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::clothes();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::clothes_update($id);
				}
		}
}
