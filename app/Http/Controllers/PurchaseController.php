<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PurchaseController extends Controller
{   
	public function purchase_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('jiangji_purchase')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('admin_purchase',$data);
    }

    public function purchase_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$tid = $id;
       	$jiangji_purchase = DB::table('jiangji_purchase')->where(['id'=>$tid])->get();
	    $data = [];
	    $data['jiangji_purchase'] = (array)$jiangji_purchase[0];
       	return view('admin_purchase_update',$data);
    }

    public function purchase_index_doUpdate($id){
        $purchase_img = $_POST['purchase_img'];
    	if($purchase_img == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::purchase_index_update($id);
        }
        $num = DB::table('jiangji_purchase')->where('id',$id)->update(
                ['purchase_img'=>$purchase_img]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::purchase_index();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::purchase_index_update($id);
        }
    }

    public function purchase_index_mobile(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('jiangji_purchase_mobile')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('admin_purchase_mobile',$data);
    }

    public function purchase_index_mobile_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $jiangji_purchase = DB::table('jiangji_purchase_mobile')->where(['id'=>$id])->get();
        $data = [];
        $data['jiangji_purchase'] = (array)$jiangji_purchase[0];
        return view('admin_purchase_mobile_update',$data);
    }

    public function purchase_index_mobile_doUpdate($id){
        $purchase_mobile = $_POST['purchase_mobile'];
        if($purchase_mobile == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::purchase_index_mobile_update($id);
        }
        $num = DB::table('jiangji_purchase_mobile')->where('id',$id)->update(
                ['purchase_mobile'=>$purchase_mobile]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::purchase_index_mobile();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::purchase_index_mobile_update($id);
        }
    }
}