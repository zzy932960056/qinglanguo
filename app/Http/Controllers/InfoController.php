<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class InfoController extends Controller
{   
	public function info_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('company_info')->get();
        $data['info'] = $info;
        return view('company_info',$data);
    }

    public function info_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$sid = $id;
       	$company_info = DB::table('company_info')->where(['id'=>$sid])->get();
	    $data = [];
	    $data['company_info'] = (array)$company_info[0];
       	return view('company_info_update',$data);
    }

    public function info_index_doUpdate($id){
          $company_name = $_POST['company_name'];
          $company_address = $_POST['company_address'];
          $company_email = $_POST['company_email'];
          $company_tel = $_POST['company_tel'];
          $company_weibo = $_POST['company_weibo'];
          $qr_code = $_POST['qr_code'];
          $alert_info = $_POST['alert_info'];
          $alert_info_mobile = $_POST['alert_info_mobile'];
          $copyright_notice = $_POST['copyright_notice'];
    	if($company_name == ''){
            echo "<script>alert('公司名称不能为空')</script>";
            return self::info_index_update($id);
        }else if($company_address == ''){
            echo "<script>alert('公司地址不能为空')</script>";
            return self::info_index_update($id);
        }else if($company_email == ''){
            echo "<script>alert('公司邮箱不能为空')</script>";
            return self::info_index_update($id);
        }else if($company_tel == ''){
            echo "<script>alert('公司电话不能为空')</script>";
            return self::info_index_update($id);
        }else if($company_weibo == ''){
            echo "<script>alert('公司微博不能为空')</script>";
            return self::info_index_update($id);
        }else if($qr_code == ''){
            echo "<script>alert('二维码路径不能为空')</script>";
            return self::info_index_update($id);
        }else if($alert_info == ''){
            echo "<script>alert('PC端弹窗信息图路径不能为空')</script>";
            return self::info_index_update($id);
        }else if($alert_info_mobile == ''){
            echo "<script>alert('移动端弹窗信息图路径不能为空')</script>";
            return self::info_index_update($id);
        }else if($copyright_notice == ''){
            echo "<script>alert('版权信息不能为空')</script>";
            return self::info_index_update($id);
        }
        $num = DB::table('company_info')->where('id',$id)->update(
                ['company_name'=>$company_name,
                'company_address'=>$company_address,
                'company_email'=>$company_email,
                'company_tel'=>$company_tel,
                'company_weibo'=>$company_weibo,
                'qr_code'=>$qr_code,
                'alert_info'=>$alert_info,
                'alert_info_mobile'=>$alert_info_mobile,
                'copyright_notice'=>$copyright_notice]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::info_index();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::info_index_update($id);
        }
    }
}