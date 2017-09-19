<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class CooperationController extends Controller
{   
	public function cooperation_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('jiangji_cooperation')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('jiangji_cooperation',$data);
    }

    public function cooperation_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
       	$cooperation = DB::table('jiangji_cooperation')->where(['id'=>$id])->get();
	    $data = [];
	    $data['cooperation'] = (array)$cooperation[0];
       	return view('admin_cooperation_update',$data);
    }

    public function cooperation_index_doUpdate($id){
        $cooperation_no = $_POST['cooperation_no'];
        $cooperation_img = $_POST['cooperation_img'];
        $cooperation_pic = $_POST['cooperation_pic'];
        $cooperation_name = $_POST['cooperation_name'];
        if($cooperation_no == ''){
            echo "<script>alert('编号图路径不能为空')</script>";
            return self::cooperation_index_update($id);
        }else if($cooperation_img == ''){
            echo "<script>alert('静图路径不能为空')</script>";
            return self::cooperation_index_update($id);
        }else if($cooperation_pic == ''){
            echo "<script>alert('动图路径不能为空')</script>";
            return self::cooperation_index_update($id);
        }else if($cooperation_name == ''){
            echo "<script>alert('合作流程名称不能为空')</script>";
            return self::cooperation_index_update($id);
        }
        $num = DB::table('jiangji_cooperation')->where('id',$id)->update(
                ['cooperation_no'=>$cooperation_no,
                'cooperation_img'=>$cooperation_img,
                'cooperation_pic'=>$cooperation_pic,
                'cooperation_name'=>$cooperation_name]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::cooperation_index();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::cooperation_index_update($id);
        }
    }

    public function cooperation_index_mobile(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('jiangji_process')->get();
        $info = $info[0];
        $data['info'] = $info;
        return view('jiangji_cooperation_mobile',$data);
    }

    public function cooperation_index_mobile_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $cooperation = DB::table('jiangji_process')->where(['id'=>$id])->get();
        $data = [];
        $data['cooperation'] = (array)$cooperation[0];
        return view('admin_cooperation_mobile_update',$data);
    }

    public function cooperation_index_mobile_doUpdate($id){
        $process_pic = $_POST['process_pic'];
        if($process_pic == ''){
            echo "<script>alert('流程图路径不能为空')</script>";
            return self::cooperation_index_mobile_update($id);
        }
        $num = DB::table('jiangji_process')->where('id',$id)->update(
                ['process_pic'=>$process_pic]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::cooperation_index_mobile();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::cooperation_index_mobile_update($id);
        }
    }


}