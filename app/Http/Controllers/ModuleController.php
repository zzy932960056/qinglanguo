<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class ModuleController extends Controller
{   
	public function module_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('admin_module',$data);
    }

    public function module_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
       	$service_module = DB::table('service_module')->where(['id'=>$id])->get();
	    $data = [];
	    $data['service_module'] = (array)$service_module[0];
       	return view('admin_module_update',$data);
    }

    public function module_index_doUpdate($id){
        $service_img = $_POST['service_img'];
        $service_pic = $_POST['service_pic'];
        $service_name = $_POST['service_name'];
    	if($service_img == ''){
            echo "<script>alert('静图路径不能为空')</script>";
            return self::module_index_update($id);
        }else if($service_pic == ''){
            echo "<script>alert('动图路径不能为空')</script>";
            return self::module_index_update($id);
        }else if($service_name == ''){
            echo "<script>alert('服务名称不能为空')</script>";
            return self::module_index_update($id);
        }
        $num = DB::table('service_module')->where('id',$id)->update(
                ['service_img'=>$service_img,
                'service_pic'=>$service_pic,
                'service_name'=>$service_name]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::module_index();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::module_index_update($id);
        }
    }

    public function module_index_mobile(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('service_module_mobile')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('admin_module_mobile',$data);
    }

    public function module_index_mobile_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $service_module = DB::table('service_module_mobile')->where(['id'=>$id])->get();
        $data = [];
        $data['service_module'] = (array)$service_module[0];
        return view('admin_module_mobile_update',$data);
    }

    public function module_index_mobile_doUpdate($id){
        $service_img = $_POST['service_img'];
        $service_pic = $_POST['service_pic'];
        $service_name = $_POST['service_name'];
        if($service_img == ''){
            echo "<script>alert('静图路径不能为空')</script>";
            return self::module_index_mobile_update($id);
        }else if($service_pic == ''){
            echo "<script>alert('动图路径不能为空')</script>";
            return self::module_index_mobile_update($id);
        }else if($service_name == ''){
            echo "<script>alert('服务名称不能为空')</script>";
            return self::module_index_mobile_update($id);
        }
        $num = DB::table('service_module_mobile')->where('id',$id)->update(
                ['service_img'=>$service_img,
                'service_pic'=>$service_pic,
                'service_name'=>$service_name]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::module_index_mobile();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::module_index_mobile_update($id);
        }
    }
}