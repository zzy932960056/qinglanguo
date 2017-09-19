<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Menews;
class JiangjiController extends Controller
{   
    public function service_introduce(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $service = DB::table('service_introduce')->orderBy('id','asc')->get();
        return view('jiangji_service_intro',[
                'service'=>$service,
            ]);
    }

    public function service_introduce_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('service_introduce')->where('id',$id)->delete();
        if($num){
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function service_introduce_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $intro = DB::table('service_introduce')->where('id',$id)->get();
        $data['intro'] = (array)$intro[0];
        return view('jiangji_service_intro_update',$data);
    }

    public function service_introduce_doUpdate($id){
        $introduce = $_POST['introduce'];
        if($introduce == ''){
            echo "<script>alert('匠几服务简介不能为空')</script>";
            return self::service_introduce_update($id);
        }
        $num = DB::table('service_introduce')->where('id',$id)->update(
            ['introduce'=>$introduce]
            );
        if($num == 1){
            return redirect('/admin/jiangji');
        }else{
            return redirect()->back();
        }
    }
    
    public function service_introduce_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('jiangji_service_intro_insert');
    }

    public function service_introduce_doInsert(){
        $introduce = $_POST['introduce'];
        $bool = DB::table('service_introduce')->insert(
            ['introduce'=>$introduce]
            );
        if($bool){
            return redirect('/admin/jiangji');
        }else{
            return redirect()->back();
        }
    }

    public function service_introduce_mobile(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $service = DB::table('service_introduce_mobile')->get();
        return view('jiangji_service_intro_mobile',[
                'service'=>$service,
            ]);
    }

    public function service_introduce_mobile_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $intro = DB::table('service_introduce_mobile')->where('id',$id)->get();
        $data['intro'] = (array)$intro[0];
        return view('jiangji_service_intro_mobile_update',$data);
    }

    public function service_introduce_mobile_doUpdate($id){
        $service_introduce = $_POST['service_introduce'];
        if($service_introduce == ''){
            echo "<script>alert('匠几服务简介不能为空')</script>";
            return self::service_introduce_mobile_update($id);
        }
        $num = DB::table('service_introduce_mobile')->where('id',$id)->update(
            ['service_introduce'=>$service_introduce]
            );
        if($num == 1){
            return redirect('/admin/mobile_jiangji');
        }else{
            return redirect()->back();
        }
    }

}