<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class EnvindexController extends Controller
{
	  public function env(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $en = DB::table('env_cul')->get();
        $data['en'] = $en;
        return view('admin_env',$data);
    }

    public function env_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $en = DB::table('env_cul')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['en'] = (array)$en[0];
       	return view('qlg_env_update',$data);
    }

    public function env_doUpdate($id){
	    	$env_pic1 = $_POST['env_pic1'];
				$env_pic2 = $_POST['env_pic2'];
				$env_pic3 = $_POST['env_pic3'];
    		if($env_pic1 == ''){
            echo "<script>alert('图片1路径不能为空')</script>";
            return self::env_update($id);
        }else if($env_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::env_update($id);
				}else if($env_pic3 == ''){
						echo "<script>alert('图片3路径不能为空')</script>";
						return self::env_update($id);
				}
        $num = DB::table('env_cul')->where('id',$id)->update(
                ['env_pic1'=>$env_pic1,
								'env_pic2'=>$env_pic2,
								'env_pic3'=>$env_pic3]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::env();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::env_update($id);
        }
    }

		public function env_yd(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $en = DB::table('env_cul_yd')->get();
        $data['en'] = $en;
        return view('admin_env_yd',$data);
    }

		public function env_yd_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$bid = $id;
				$en = DB::table('env_cul_yd')->where(['id'=>$bid])->get();
				$data = [];
				$data['en'] = (array)$en[0];
				return view('qlg_env_yd_update',$data);
		}

		public function env_yd_doUpdate($id){
				$env_pic1 = $_POST['env_pic1'];
				$env_pic2 = $_POST['env_pic2'];
				if($env_pic1 == ''){
						echo "<script>alert('图片1路径不能为空')</script>";
						return self::env_yd_update($id);
				}else if($env_pic2 == ''){
						echo "<script>alert('图片2路径不能为空')</script>";
						return self::env_yd_update($id);
				}
				$num = DB::table('env_cul_yd')->where('id',$id)->update(
								['env_pic1'=>$env_pic1,
								'env_pic2'=>$env_pic2]
						);
				if($num == 1){
						echo "<script>alert('信息修改成功')</script>";
						 return self::env_yd();
				}else{
						echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
						return self::env_yd_update($id);
				}
		}

}
