<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class CultureController extends Controller
{   
	public function culture_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('jiangji_culture')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('admin_culture',$data);
    }

    public function culture_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$tid = $id;
       	$jiangji_culture = DB::table('jiangji_culture')->where(['id'=>$tid])->get();
	    $data = [];
	    $data['jiangji_culture'] = (array)$jiangji_culture[0];
       	return view('admin_culture_update',$data);
    }

    public function culture_index_doUpdate($id){
        $culture_img = $_POST['culture_img'];
    	if($culture_img == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::culture_index_update($id);
        }
        $num = DB::table('jiangji_culture')->where('id',$id)->update(
                ['culture_img'=>$culture_img]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::culture_index();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::culture_index_update($id);
        }
    }

    public function culture_index_mobile(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('jiangji_culture_mobile')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('admin_culture_mobile',$data);
    }

    public function culture_index_mobile_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $jiangji_culture = DB::table('jiangji_culture_mobile')->where(['id'=>$id])->get();
        $data = [];
        $data['jiangji_culture'] = (array)$jiangji_culture[0];
        return view('admin_culture_mobile_update',$data);
    }

    public function culture_index_mobile_doUpdate($id){
        $jiangji_culture = $_POST['jiangji_culture'];
        if($jiangji_culture == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::culture_index_mobile_update($id);
        }
        $num = DB::table('jiangji_culture_mobile')->where('id',$id)->update(
                ['jiangji_culture'=>$jiangji_culture]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::culture_index_mobile();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::culture_index_mobile_update($id);
        }
    }
}