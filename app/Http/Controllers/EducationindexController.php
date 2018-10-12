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

}
