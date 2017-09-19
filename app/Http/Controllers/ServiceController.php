<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Menews;
class ServiceController extends Controller
{   
    public function service_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $service = DB::table('jiangji_service')->orderBy('id','asc')->get();
        return view('admin_service',[
                'service'=>$service,
            ]);
    }

    public function service_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $jiangji_service = DB::table('jiangji_service')->where('id',$id)->get();
        $data['jiangji_service'] = (array)$jiangji_service[0];
        return view('admin_service_update',$data);
    }

    public function service_index_doUpdate($id){
        $service_img = $_POST['service_img'];
        $service_mobile = $_POST['service_mobile'];
        $service_title = $_POST['service_title'];
        $service_desc = $_POST['service_desc'];
        if($service_img == ''){
            echo "<script>alert('PC端服务效果图路径不能为空')</script>";
            return self::service_index_update($id);
        }else if($service_mobile == ''){
            echo "<script>alert('移动端服务效果图路径不能为空')</script>";
            return self::service_index_update($id);
        }else if($service_title == ''){
            echo "<script>alert('服务标题不能为空')</script>";
            return self::service_index_update($id);
        }else if($service_desc == ''){
            echo "<script>alert('服务简介不能为空')</script>";
            return self::service_index_update($id);
        }
        $num = DB::table('jiangji_service')->where('id',$id)->update(
            ['service_img'=>$service_img,
            'service_mobile'=>$service_mobile,
            'service_title'=>$service_title,
            'service_desc'=>$service_desc]
            );
        if($num == 1){
            return redirect('/admin/service');
        }else{
            return redirect()->back();
        }
    }

    public function service_label_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $label = DB::table('jiangji_service_label')->where('service_id',$id)->get();
        $data['label'] = (array)$label;
        $data['nid'] = $id;
        return view('admin_service_label',$data);
    }

    public function service_label_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_service_label')->where('id',$id)->delete();
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

    public function service_label_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $label = DB::table('jiangji_service_label')->where('id',$id)->get();
        $data['label'] = (array)$label[0];
        return view('admin_service_label_update',$data);
    }

    public function service_label_index_doUpdate($id){
        $label_name = $_POST['label_name'];
        $mid = $_POST['mid'];
        if($label_name == ''){
            echo "<script>alert('匠几服务标签不能为空')</script>";
            return self::service_label_index_update($id);
        }
        $num = DB::table('jiangji_service_label')->where('id',$id)->update(
            ['label_name'=>$label_name]
            );
        if($num == 1){
            return redirect('/admin/service/label/'.$mid);
        }else{
            return redirect()->back();
        }
    }
    
    public function service_label_index_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['service_id'] = $id;
        return view('admin_service_label_insert',$data);
    }

    public function service_label_index_doInsert(){
        $service_label = $_POST['service_label'];
        $service_id = $_POST['service_id'];
        $num = DB::table('jiangji_service')->where('id',$service_id)->get();
        if($num){
            $bool = DB::table('jiangji_service_label')->insert(
                ['label_name'=>$service_label,'service_id'=>$service_id]
                );
            if($bool){
                    return redirect('/admin/service/label/'.$service_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('匠几服务id不存在')</script>";
            return self::service_label_index_insert($service_id);            
        }
    }

}