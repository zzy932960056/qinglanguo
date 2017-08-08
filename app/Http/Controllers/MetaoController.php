<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MetaoController extends Controller
{   
	public function meTao(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('me_tao')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('me_tao',$data);
    }

    public function meTao_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$tid = $id;
       	$me_tao = DB::table('me_tao')->where(['id'=>$tid])->get();
	    $data = [];
	    $data['me_tao'] = (array)$me_tao[0];
       	return view('me_tao_update',$data);
    }

    public function meTao_doUpdate($id){
        $image = $_POST['image'];
    	if($image == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::meTao_update($id);
        }
        $num = DB::table('me_tao')->where('id',$id)->update(
                ['image_path'=>$image]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::meTao();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::meTao_update($id);
        }
    }
}