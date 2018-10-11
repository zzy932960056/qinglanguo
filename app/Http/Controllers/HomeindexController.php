<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class HomeindexController extends Controller
{
	public function zhongxin(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $homeinfo = DB::table('qlg_home')->where('home_name','中心园')->get();
        $data['homeinfo'] = $homeinfo;
        return view('admin_home_index',$data);
    }

		public function wangshe(){
	        @session_start();
	        if(!isset($_SESSION['admin_name'])){
	            return redirect('/admin/login');
	        }
	        $data = [];
	        $homeinfo = DB::table('qlg_home')->where('home_name','王舍园')->get();
	        $data['homeinfo'] = $homeinfo;
	        return view('admin_home_index',$data);
	  }

		public function nanjia(){
	        @session_start();
	        if(!isset($_SESSION['admin_name'])){
	            return redirect('/admin/login');
	        }
	        $data = [];
	        $homeinfo = DB::table('qlg_home')->where('home_name','南家园')->get();
	        $data['homeinfo'] = $homeinfo;
	        return view('admin_home_index',$data);
	  }

		public function fangcao(){
					@session_start();
					if(!isset($_SESSION['admin_name'])){
							return redirect('/admin/login');
					}
					$data = [];
					$homeinfo = DB::table('qlg_home')->where('home_name','芳草园')->get();
					$data['homeinfo'] = $homeinfo;
					return view('admin_home_index',$data);
		}

		public function yifeng(){
					@session_start();
					if(!isset($_SESSION['admin_name'])){
							return redirect('/admin/login');
					}
					$data = [];
					$homeinfo = DB::table('qlg_home')->where('home_name','颐丰园')->get();
					$data['homeinfo'] = $homeinfo;
					return view('admin_home_index',$data);
		}

    public function zhongxin_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$bid = $id;
      $qlg_home = DB::table('qlg_home')->where(['id'=>$bid])->get();
	    $data = [];
	    $data['qlg_home'] = (array)$qlg_home[0];
       	return view('qlg_home_index_update',$data);
    }

    public function zhongxin_doUpdate($id){
    	$home_survey = $_POST['home_survey'];
			$home_honor = $_POST['home_honor'];
			$home_env = $_POST['home_env'];
			$home_linkman = $_POST['home_linkman'];
			$home_tel = $_POST['home_tel'];
			$home_add = $_POST['home_add'];
    	if($home_survey == ''){
            echo "<script>alert('园所概况不能为空')</script>";
            return self::zhongxin_update($id);
        }else if($home_honor == ''){
						echo "<script>alert('园所荣誉不能为空')</script>";
						return self::zhongxin_update($id);
				}else if($home_env == ''){
						echo "<script>alert('园所环境图路径不能为空')</script>";
						return self::zhongxin_update($id);
				}else if($home_linkman == ''){
						echo "<script>alert('联系人不能为空')</script>";
						return self::zhongxin_update($id);
				}else if($home_tel == ''){
						echo "<script>alert('联系方式不能为空')</script>";
						return self::zhongxin_update($id);
				}else if($home_add == ''){
						echo "<script>alert('园所地址不能为空')</script>";
						return self::zhongxin_update($id);
				}
        $num = DB::table('qlg_home')->where('id',$id)->update(
                ['home_survey'=>$home_survey,
								'home_honor'=>$home_honor,
								'home_env'=>$home_env,
								'home_linkman'=>$home_linkman,
								'home_tel'=>$home_tel,
								'home_add'=>$home_add]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						if($id == 1){
								return self::zhongxin();
						}else if($id == 2){
							  return self::wangshe();
						}else if($id == 3){
							  return self::nanjia();
						}else if($id == 4){
							  return self::fangcao();
						}else if($id == 5){
							  return self::yifeng();
						}
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::zhongxin_update($id);
        }
    }

}
