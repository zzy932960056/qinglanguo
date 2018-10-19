<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class FoodindexController extends Controller
{
	  public function food(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $food = DB::table('food_cul')->get();
        $data['food'] = $food;
        return view('admin_food',$data);
    }

    public function food_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $food = DB::table('food_cul')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['food'] = (array)$food[0];
       	return view('qlg_food_update',$data);
    }

    public function food_doUpdate($id){
	    	$clock_pic = $_POST['clock_pic'];
				$food_pic = $_POST['food_pic'];
				$food_title = $_POST['food_title'];
				$food_text = $_POST['food_text'];
				$food_time = $_POST['food_time'];
    		if($clock_pic == ''){
            echo "<script>alert('钟表图片路径不能为空')</script>";
            return self::food_update($id);
        }else if($food_pic == ''){
						echo "<script>alert('封面图路径不能为空')</script>";
						return self::food_update($id);
				}else if($food_title == ''){
						echo "<script>alert('标题不能为空')</script>";
						return self::food_update($id);
				}else if($food_text == ''){
						echo "<script>alert('文本简介不能为空')</script>";
						return self::food_update($id);
				}else if($food_time == ''){
						echo "<script>alert('时间不能为空')</script>";
						return self::food_update($id);
				}
        $num = DB::table('food_cul')->where('id',$id)->update(
                ['clock_pic'=>$clock_pic,
								'food_pic'=>$food_pic,
								'food_title'=>$food_title,
								'food_text'=>$food_text,
								'food_time'=>$food_time]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::food();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::food_update($id);
        }
    }
}
