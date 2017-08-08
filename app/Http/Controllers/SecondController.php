<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class SecondController extends Controller
{   
	public function second_screen(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('dierping')->orderBy('id','asc')->get();
        $data['info'] = $info;
        return view('second_screen',$data);
    }

    public function second_screen_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$sid = $id;
       	$second_data = DB::table('dierping')->where(['id'=>$sid])->get();
	    $data = [];
	    $data['second_data'] = (array)$second_data[0];
       	return view('second_screen_update',$data);
    }

    public function second_screen_doUpdate($id){
        $logo = $_POST['logo'];
        $doll = $_POST['doll'];
        $text1 = $_POST['text1'];
        $text2 = $_POST['text2'];
        $text3 = $_POST['text3'];
    	if($logo == ''){
            echo "<script>alert('logo图路径不能为空')</script>";
            return self::second_screen_update($id);
        }else if($doll == ''){
            echo "<script>alert('公仔图路径不能为空')</script>";
            return self::second_screen_update($id);
        }
        $num = DB::table('dierping')->where('id',$id)->update(
                ['logo_pic'=>$logo,'doll_pic'=>$doll,'text_one'=>$text1,'text_two'=>$text2,'text_three'=>$text3]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::second_screen();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::second_screen_update($id);
        }
    }
}