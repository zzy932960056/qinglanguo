<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class OperationController extends Controller
{   
	public function screen_video(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $video = DB::table('screen_video')->orderBy('id','asc')->get();
        $data['video'] = $video;
        return view('screen_video',$data);
    }

    public function screen_video_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$vid = $id;
       	$video_data = DB::table('screen_video')->where(['id'=>$vid])->get();
	    $data = [];
	    $data['video_data'] = (array)$video_data[0];
       	return view('screen_video_update',$data);
    }

    public function screen_video_doUpdate($id){
    	$vpath = $_POST['vpath'];
    	if($vpath == ''){
            echo "<script>alert('视频路径不能为空')</script>";
            return self::screen_video_update($id);
        }
        $num = DB::table('screen_video')->where('id',$id)->update(
                ['video_path'=>$vpath]
            );
        if($num == 1){
            echo "<script>alert('视频路径修改成功')</script>";
            return self::screen_video();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::screen_video_update($id);
        }
    }
}