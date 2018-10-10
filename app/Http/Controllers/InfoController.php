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
        $archival_info = $_POST['archival_info'];
    	if($archival_info == ''){
            echo "<script>alert('网站备案信息不能为空')</script>";
            return self::info_index_update($id);
        }
        $num = DB::table('company_info')->where('id',$id)->update(
                ['archival_info'=>$archival_info]
            );
        if($num == 1){
            echo "<script>alert('备案信息修改成功')</script>";
            return self::info_index();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::info_index_update($id);
        }
    }
}
