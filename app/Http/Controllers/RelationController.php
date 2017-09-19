<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class RelationController extends Controller
{   
	public function relation_pic(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $relation = DB::table('jiangji_relation')->get();
        $data['relation'] = $relation;
        return view('relation',$data);
    }

    public function relation_pic_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$bid = $id;
       	$jiangji_relation = DB::table('jiangji_relation')->where(['id'=>$bid])->get();
	    $data = [];
	    $data['jiangji_relation'] = (array)$jiangji_relation[0];
       	return view('relation_update',$data);
    }

    public function relation_pic_doUpdate($id){
        $relation_img = $_POST['relation_img'];
    	if($relation_img == ''){
            echo "<script>alert('联系匠几大图路径不能为空')</script>";
            return self::relation_pic_update($id);
        }
        $num = DB::table('jiangji_relation')->where('id',$id)->update(
                ['relation_img'=>$relation_img]
            );
        if($num == 1){
            echo "<script>alert('联系匠几大图修改成功')</script>";
            return self::relation_pic();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::relation_pic_update($id);
        }
    }

    public function relation_pic_mobile(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $relation = DB::table('jiangji_relation_mobile')->get();
        $data['relation'] = $relation;
        return view('relation_mobile',$data);
    }

    public function relation_pic_mobile_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $jiangji_relation = DB::table('jiangji_relation_mobile')->where(['id'=>$id])->get();
        $data = [];
        $data['jiangji_relation'] = (array)$jiangji_relation[0];
        return view('relation_mobile_update',$data);
    }

    public function relation_pic_mobile_doUpdate($id){
        $contact_mobile = $_POST['contact_mobile'];
        if($contact_mobile == ''){
            echo "<script>alert('联系匠几大图路径不能为空')</script>";
            return self::relation_pic_mobile_update($id);
        }
        $num = DB::table('jiangji_relation_mobile')->where('id',$id)->update(
                ['contact_mobile'=>$contact_mobile]
            );
        if($num == 1){
            echo "<script>alert('联系匠几大图修改成功')</script>";
            return self::relation_pic_mobile();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::relation_pic_mobile_update($id);
        }
    }
}