<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class NewsindexController extends Controller
{
	  public function picture(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
       	$picture = DB::table('qlg_news_pic')->get();
        $data['picture'] = $picture;
        return view('admin_news_picture',$data);
    }

    public function picture_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $picture = DB::table('qlg_news_pic')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['picture'] = (array)$picture[0];
       	return view('qlg_news_picture_update',$data);
    }

    public function picture_doUpdate($id){
	    	$news_pic = $_POST['news_pic'];
    		if($news_pic == ''){
            echo "<script>alert('动态头图路径不能为空')</script>";
            return self::picture_update($id);
        }
        $num = DB::table('qlg_news_pic')->where('id',$id)->update(
                ['news_pic'=>$news_pic]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::picture();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::picture_update($id);
        }
    }
}
