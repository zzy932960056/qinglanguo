<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class CultureindexController extends Controller
{
	  public function analysis(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $analysis = DB::table('cul_analysis')->get();
        $data['analysis'] = $analysis;
        return view('admin_cul_analysis',$data);
    }

    public function analysis_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $analysis = DB::table('cul_analysis')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['analysis'] = (array)$analysis[0];
       	return view('qlg_cul_analysis_update',$data);
    }

    public function analysis_doUpdate($id){
	    	$ana_pic = $_POST['ana_pic'];
				$ana_text1 = $_POST['ana_text1'];
				$ana_text2 = $_POST['ana_text2'];
    		if($ana_pic == ''){
            echo "<script>alert('图片1路径不能为空')</script>";
            return self::analysis_update($id);
        }else if($ana_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::analysis_update($id);
				}else if($ana_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::analysis_update($id);
				}
        $num = DB::table('cul_analysis')->where('id',$id)->update(
                ['ana_pic'=>$ana_pic,
								'ana_text1'=>$ana_text1,
								'ana_text2'=>$ana_text2]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::analysis();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::analysis_update($id);
        }
    }

		public function spirit(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$spirit = DB::table('cul_spirit')->get();
				$data['spirit'] = $spirit;
				return view('admin_cul_spirit',$data);
		}

		public function spirit_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$spirit = DB::table('cul_spirit')->where(['id'=>$bid])->get();
				$data = [];
				$data['spirit'] = (array)$spirit[0];
				return view('qlg_cul_spirit_update',$data);
		}

		public function spirit_doUpdate($id){
				$spi_pic1 = $_POST['spi_pic1'];
				$spi_pic2 = $_POST['spi_pic2'];
				$spi_pic3 = $_POST['spi_pic3'];
				$spi_text1 = $_POST['spi_text1'];
				$spi_text2 = $_POST['spi_text2'];
				if($spi_pic1 == ''){
						echo "<script>alert('图片1路径不能为空')</script>";
						return self::spirit_update($id);
				}else if($spi_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::spirit_update($id);
				}else if($spi_pic3 == ''){
						echo "<script>alert('图片3路径不能为空')</script>";
						return self::spirit_update($id);
				}else if($spi_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::spirit_update($id);
				}else if($spi_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::spirit_update($id);
				}
				$num = DB::table('cul_spirit')->where('id',$id)->update(
								['spi_pic1'=>$spi_pic1,
								'spi_pic2'=>$spi_pic2,
								'spi_pic3'=>$spi_pic3,
								'spi_text1'=>$spi_text1,
								'spi_text2'=>$spi_text2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::spirit();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::spirit_update($id);
				}
		}

		public function slogan(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$slogan = DB::table('cul_slogan')->get();
				$data['slogan'] = $slogan;
				return view('admin_cul_slogan',$data);
		}

		public function slogan_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$slogan = DB::table('cul_slogan')->where(['id'=>$bid])->get();
				$data = [];
				$data['slogan'] = (array)$slogan[0];
				return view('qlg_cul_slogan_update',$data);
		}

		public function slogan_doUpdate($id){
				$slo_pic1 = $_POST['slo_pic1'];
				$slo_text1 = $_POST['slo_text1'];
				$slo_text2 = $_POST['slo_text2'];
				if($slo_pic1 == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::slogan_update($id);
				}else if($slo_text1 == ''){
						echo "<script>alert('段落文本1不能为空')</script>";
						return self::slogan_update($id);
				}else if($slo_text2 == ''){
						echo "<script>alert('段落文本2不能为空')</script>";
						return self::slogan_update($id);
				}
				$num = DB::table('cul_slogan')->where('id',$id)->update(
								['slo_pic1'=>$slo_pic1,
								'slo_text1'=>$slo_text1,
								'slo_text2'=>$slo_text2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::slogan();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::slogan_update($id);
				}
		}

		public function idea(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$idea = DB::table('cul_idea')->get();
				$data['idea'] = $idea;
				return view('admin_cul_idea',$data);
		}

		public function idea_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$idea = DB::table('cul_idea')->where(['id'=>$bid])->get();
				$data = [];
				$data['idea'] = (array)$idea[0];
				return view('qlg_cul_idea_update',$data);
		}

		public function idea_doUpdate($id){
				$ide_pic = $_POST['ide_pic'];
				$ide_text1 = $_POST['ide_text1'];
				$ide_text2 = $_POST['ide_text2'];
				if($ide_pic == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::idea_update($id);
				}else if($ide_text1 == ''){
						echo "<script>alert('文本1不能为空')</script>";
						return self::idea_update($id);
				}else if($ide_text2 == ''){
						echo "<script>alert('文本2不能为空')</script>";
						return self::idea_update($id);
				}
				$num = DB::table('cul_idea')->where('id',$id)->update(
								['ide_pic'=>$ide_pic,
								'ide_text1'=>$ide_text1,
								'ide_text2'=>$ide_text2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::idea();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::idea_update($id);
				}
		}

		public function purpose(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$purpose = DB::table('cul_purpose')->get();
				$data['purpose'] = $purpose;
				return view('admin_cul_purpose',$data);
		}

		public function purpose_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$purpose = DB::table('cul_purpose')->where(['id'=>$bid])->get();
				$data = [];
				$data['purpose'] = (array)$purpose[0];
				return view('qlg_cul_purpose_update',$data);
		}

		public function purpose_doUpdate($id){
				$pur_pic = $_POST['pur_pic'];
				if($pur_pic == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::purpose_update($id);
				}
				$num = DB::table('cul_purpose')->where('id',$id)->update(
								['pur_pic'=>$pur_pic]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::purpose();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::purpose_update($id);
				}
		}

		public function teach(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$teach = DB::table('cul_teach')->get();
				$data['teach'] = $teach;
				return view('admin_cul_teach',$data);
		}

		public function teach_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$teach = DB::table('cul_teach')->where(['id'=>$bid])->get();
				$data = [];
				$data['teach'] = (array)$teach[0];
				return view('qlg_cul_teach_update',$data);
		}

		public function teach_doUpdate($id){
				$tea_pic1 = $_POST['tea_pic1'];
				$tea_pic2 = $_POST['tea_pic2'];
				$tea_pic3 = $_POST['tea_pic3'];
				$tea_text1 = $_POST['tea_text1'];
				$tea_text2 = $_POST['tea_text2'];
				if($tea_pic1 == ''){
						echo "<script>alert('图片1路径不能为空')</script>";
						return self::teach_update($id);
				}else if($tea_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::teach_update($id);
				}else if($tea_pic3 == ''){
						echo "<script>alert('图片3路径不能为空')</script>";
						return self::teach_update($id);
				}else if($tea_text1 == ''){
						echo "<script>alert('文本简介1不能为空')</script>";
						return self::teach_update($id);
				}else if($tea_text2 == ''){
						echo "<script>alert('文本简介2不能为空')</script>";
						return self::teach_update($id);
				}
				$num = DB::table('cul_teach')->where('id',$id)->update(
								['tea_pic1'=>$tea_pic1,
								'tea_pic2'=>$tea_pic2,
								'tea_pic3'=>$tea_pic3,
								'tea_text1'=>$tea_text1,
								'tea_text2'=>$tea_text2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::teach();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::teach_update($id);
				}
		}

		public function team(){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$team = DB::table('cul_team')->get();
				$data['team'] = $team;
				return view('admin_cul_team',$data);
		}

		public function team_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$team = DB::table('cul_team')->where(['id'=>$bid])->get();
				$data = [];
				$data['team'] = (array)$team[0];
				return view('qlg_cul_team_update',$data);
		}

		public function team_doUpdate($id){
				$team_pic = $_POST['team_pic'];
				$team_text1 = $_POST['team_text1'];
				$team_text2 = $_POST['team_text2'];
				if($team_pic == ''){
						echo "<script>alert('图片路径不能为空')</script>";
						return self::team_update($id);
				}else if($team_text1 == ''){
					echo "<script>alert('文本1不能为空')</script>";
					return self::team_update($id);
				}else if($team_text2 == ''){
					echo "<script>alert('文本2不能为空')</script>";
					return self::team_update($id);
				}
				$num = DB::table('cul_team')->where('id',$id)->update(
								['team_pic'=>$team_pic,
								'team_text1'=>$team_text1,
								'team_text2'=>$team_text2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::team();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::team_update($id);
				}
		}
}
