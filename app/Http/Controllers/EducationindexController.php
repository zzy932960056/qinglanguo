<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class EducationindexController extends Controller
{
	  public function culture(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $culture = DB::table('edu_culture')->get();
        $data['culture'] = $culture;
        return view('admin_edu_culture',$data);
    }

    public function culture_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $culture = DB::table('edu_culture')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['culture'] = (array)$culture[0];
       	return view('qlg_edu_culture_update',$data);
    }

    public function culture_doUpdate($id){
	    	$cul_pic1 = $_POST['cul_pic1'];
				$cul_text1 = $_POST['cul_text1'];
				$cul_text2 = $_POST['cul_text2'];
				$cul_pic2 = $_POST['cul_pic2'];
    		if($cul_pic1 == ''){
            echo "<script>alert('图片1路径不能为空')</script>";
            return self::culture_update($id);
        }else if($cul_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::culture_update($id);
				}else if($cul_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::culture_update($id);
				}else if($cul_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::culture_update($id);
				}
        $num = DB::table('edu_culture')->where('id',$id)->update(
                ['cul_pic1'=>$cul_pic1,
								'cul_text1'=>$cul_text1,
								'cul_text2'=>$cul_text2,
								'cul_pic2'=>$cul_pic2]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::culture();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::culture_update($id);
        }
    }

		public function space(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$space = DB::table('edu_space')->get();
				$data['space'] = $space;
				return view('admin_edu_space',$data);
		}

		public function space_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$space = DB::table('edu_space')->where(['id'=>$bid])->get();
				$data = [];
				$data['space'] = (array)$space[0];
				return view('qlg_edu_space_update',$data);
		}

		public function space_doUpdate($id){
				$spa_pic1 = $_POST['spa_pic1'];
				$spa_text1 = $_POST['spa_text1'];
				$spa_text2 = $_POST['spa_text2'];
				$spa_text3 = $_POST['spa_text3'];
				$spa_text4 = $_POST['spa_text4'];
				$spa_pic2 = $_POST['spa_pic2'];
				if($spa_pic1 == ''){
						echo "<script>alert('图片1路径不能为空')</script>";
						return self::space_update($id);
				}else if($spa_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::space_update($id);
				}else if($spa_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::space_update($id);
				}else if($spa_text3 == ''){
						echo "<script>alert('段落文本3不能为空')</script>";
						return self::space_update($id);
				}else if($spa_text4 == ''){
						echo "<script>alert('段落文本4不能为空')</script>";
						return self::space_update($id);
				}else if($spa_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::space_update($id);
				}
				$num = DB::table('edu_space')->where('id',$id)->update(
								['spa_pic1'=>$spa_pic1,
								'spa_text1'=>$spa_text1,
								'spa_text2'=>$spa_text2,
								'spa_text3'=>$spa_text3,
								'spa_text4'=>$spa_text4,
								'spa_pic2'=>$spa_pic2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::space();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::space_update($id);
				}
		}

		public function health(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$health = DB::table('edu_health')->get();
				$data['health'] = $health;
				return view('admin_edu_health',$data);
		}

		public function health_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$health = DB::table('edu_health')->where(['id'=>$bid])->get();
				$data = [];
				$data['health'] = (array)$health[0];
				return view('qlg_edu_health_update',$data);
		}

		public function health_doUpdate($id){
				$hea_pic1 = $_POST['hea_pic1'];
				$hea_text1 = $_POST['hea_text1'];
				if($hea_pic1 == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::health_update($id);
				}else if($hea_text1 == ''){
						echo "<script>alert('段落文本不能为空')</script>";
						return self::health_update($id);
				}
				$num = DB::table('edu_health')->where('id',$id)->update(
								['hea_pic1'=>$hea_pic1,
								'hea_text1'=>$hea_text1]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::health();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::health_update($id);
				}
		}

		public function art(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$art = DB::table('edu_art')->get();
				$data['art'] = $art;
				return view('admin_edu_art',$data);
		}

		public function art_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$art = DB::table('edu_art')->where(['id'=>$bid])->get();
				$data = [];
				$data['art'] = (array)$art[0];
				return view('qlg_edu_art_update',$data);
		}

		public function art_doUpdate($id){
				$art_pic1 = $_POST['art_pic1'];
				$art_text1 = $_POST['art_text1'];
				if($art_pic1 == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::art_update($id);
				}else if($art_text1 == ''){
						echo "<script>alert('段落文本不能为空')</script>";
						return self::art_update($id);
				}
				$num = DB::table('edu_art')->where('id',$id)->update(
								['art_pic1'=>$art_pic1,
								'art_text1'=>$art_text1]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::art();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::art_update($id);
				}
		}

		public function social(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$social = DB::table('edu_social')->get();
				$data['social'] = $social;
				return view('admin_edu_social',$data);
		}

		public function social_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$social = DB::table('edu_social')->where(['id'=>$bid])->get();
				$data = [];
				$data['social'] = (array)$social[0];
				return view('qlg_edu_social_update',$data);
		}

		public function social_doUpdate($id){
				$soc_pic1 = $_POST['soc_pic1'];
				$soc_text1 = $_POST['soc_text1'];
				$soc_text2 = $_POST['soc_text2'];
				$soc_pic2 = $_POST['soc_pic2'];
				if($soc_pic1 == ''){
						echo "<script>alert('图片1路径不能为空')</script>";
						return self::social_update($id);
				}else if($soc_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::social_update($id);
				}else if($soc_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::social_update($id);
				}else if($soc_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::social_update($id);
				}
				$num = DB::table('edu_social')->where('id',$id)->update(
								['soc_pic1'=>$soc_pic1,
								'soc_text1'=>$soc_text1,
								'soc_text2'=>$soc_text2,
								'soc_pic2'=>$soc_pic2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::social();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::social_update($id);
				}
		}

		public function teach(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$teach = DB::table('edu_teach')->get();
				$data['teach'] = $teach;
				return view('admin_edu_teach',$data);
		}

		public function teach_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$teach = DB::table('edu_teach')->where(['id'=>$bid])->get();
				$data = [];
				$data['teach'] = (array)$teach[0];
				return view('qlg_edu_teach_update',$data);
		}

		public function teach_doUpdate($id){
				$k_pic1 = $_POST['k_pic1'];
				$k_name = $_POST['k_name'];
				$k_position = $_POST['k_position'];
				$k_text1 = $_POST['k_text1'];
				$k_text2 = $_POST['k_text2'];
				$k_pic2 = $_POST['k_pic2'];
				if($k_pic1 == ''){
						echo "<script>alert('园长头图路径不能为空')</script>";
						return self::teach_update($id);
				}else if($k_name == ''){
						echo "<script>alert('姓名不能为空')</script>";
						return self::teach_update($id);
				}else if($k_position == ''){
						echo "<script>alert('职位不能为空')</script>";
						return self::teach_update($id);
				}else if($k_text1 == ''){
						echo "<script>alert('文本简介1不能为空')</script>";
						return self::teach_update($id);
				}else if($k_text2 == ''){
						echo "<script>alert('文本简介2不能为空')</script>";
						return self::teach_update($id);
				}else if($k_pic2 == ''){
						echo "<script>alert('副园长图片路径不能为空')</script>";
						return self::teach_update($id);
				}
				$num = DB::table('edu_teach')->where('id',$id)->update(
								['k_pic1'=>$k_pic1,
								'k_name'=>$k_name,
								'k_position'=>$k_position,
								'k_text1'=>$k_text1,
								'k_text2'=>$k_text2,
								'k_pic2'=>$k_pic2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::teach();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::teach_update($id);
				}
		}

}
