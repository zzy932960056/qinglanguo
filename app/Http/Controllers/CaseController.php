<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
class CaseController extends Controller
{   
    public function case_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $case = DB::table('jiangji_case')->orderBy('id','asc')->get();
        return view('admin_case',[
                'case'=>$case,
            ]);
    }

    public function case_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_case')->where('id',$id)->delete();
        if($num == 1){
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function case_index_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('admin_case_insert');
    }

    public function case_index_doInsert(){
        $case_title = $_POST['case_title'];
        $is_cover = isset($_POST['is_cover']) ? $_POST['is_cover'] : 0;
        $cover_pic = $_POST['cover_pic'];
        $case_index = $_POST['case_index'];
        $service_content = $_POST['service_content'];
        $coord = $_POST['coord'];
        $is_hot = isset($_POST['is_hot']) ? $_POST['is_hot'] : 0;
        $badge = $_POST['badge'];
        $date_time = $_POST['date_time'];
        if($case_title == ''){
            echo "<script>alert('品牌案例标题不能为空')</script>";
            return self::case_index_insert();
        }else if($is_cover == 1){
            if($cover_pic == ''){
                echo "<script>alert('封面图路径不能为空')</script>";
                return self::case_index_insert();
            }else if($case_index == ''){
                echo "<script>alert('封面图简介不能为空')</script>";
                return self::case_index_insert();
            }
        }else if($service_content == ''){
                echo "<script>alert('服务内容不能为空')</script>";
                return self::case_index_insert();
        }else if($coord == ''){
                echo "<script>alert('坐标不能为空')</script>";
                return self::case_index_insert();
        }else if($badge == ''){
                echo "<script>alert('园徽路径不能为空')</script>";
                return self::case_index_insert();
        }else if($date_time == ''){
                echo "<script>alert('时间不能为空')</script>";
                return self::case_index_insert();
        }
        $bool = DB::table('jiangji_case')->insert(
            ['case_title'=>$case_title,'is_cover'=>$is_cover,
            'cover_pic'=>$cover_pic,'case_index'=>$case_index,
            'service_content'=>$service_content,'coord'=>$coord,
            'is_hot'=>$is_hot,'badge'=>$badge,'date_time'=>$date_time]
            );
        if($bool){
                return redirect('/admin/case');
            }else{
                return redirect()->back();
            }
    }

    public function case_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $jiangji_case = DB::table('jiangji_case')->where('id',$id)->get();
        $data['jiangji_case'] = (array)$jiangji_case[0];
        return view('admin_case_update',$data);
    }

    public function case_index_doUpdate($id){
        $case_title = $_POST['case_title'];
        $is_cover = isset($_POST['is_cover']) ? $_POST['is_cover'] : 0;
        $cover_pic = $_POST['cover_pic'];
        $case_index = $_POST['case_index'];
        $service_content = $_POST['service_content'];
        $coord = $_POST['coord'];
        $is_hot = isset($_POST['is_hot']) ? $_POST['is_hot'] : 0;
        $badge = $_POST['badge'];
        $date_time = $_POST['date_time'];
        if($case_title == ''){
            echo "<script>alert('品牌案例标题不能为空')</script>";
            return self::case_index_insert();
        }else if($is_cover == 1){
            if($cover_pic == ''){
                echo "<script>alert('封面图路径不能为空')</script>";
                return self::case_index_insert();
            }
        }else if($case_index == ''){
                echo "<script>alert('封面图简介不能为空')</script>";
                return self::case_index_insert();
        }else if($service_content == ''){
                echo "<script>alert('服务内容不能为空')</script>";
                return self::case_index_insert();
        }else if($coord == ''){
                echo "<script>alert('坐标不能为空')</script>";
                return self::case_index_insert();
        }else if($badge == ''){
                echo "<script>alert('园徽路径不能为空')</script>";
                return self::case_index_insert();
        }else if($date_time == ''){
                echo "<script>alert('时间不能为空')</script>";
                return self::case_index_insert();
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['case_title'=>$case_title,'is_cover'=>$is_cover,
            'cover_pic'=>$cover_pic,'case_index'=>$case_index,
            'service_content'=>$service_content,'coord'=>$coord,
            'is_hot'=>$is_hot,'badge'=>$badge,'date_time'=>$date_time]
            );
        if($num == 1){
            return redirect('/admin/case');
        }else{
            return redirect()->back();
        }
    }

      public function case_pic_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_pic = DB::table('jiangji_case')
                ->select('id','case_pic1','case_pic2','case_pic3')
                ->where('id',$id)->get();
        $data['case_pic'] = (array)$case_pic[0];
        return view('admin_case_pic_index',$data);
    }

    public function case_pic_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_pic = DB::table('jiangji_case')
                ->select('id','case_pic1','case_pic2','case_pic3')
                ->where('id',$id)->get();
        $data['case_pic'] = (array)$case_pic[0];
        return view('admin_case_pic_update',$data);
    }

    public function case_pic_doUpdate($id){
        $case_pic1 = $_POST['case_pic1'];
        $case_pic2 = $_POST['case_pic2'];
        $case_pic3 = $_POST['case_pic3'];
        $case_pic = DB::table('jiangji_case')->where('id',$id)->pluck('is_hot');
        $case_pic = $case_pic[0];
        if($case_pic == 1){
            if($case_pic1 == '' || $case_pic2 == '' || $case_pic3 == ''){
                echo "<script>alert('匠几品牌案例轮播图路径不能为空')</script>";
                return self::case_pic_update($id);
            }
        }else if($case_pic == 0){
            if($case_pic1 == ''){
                echo "<script>alert('匠几品牌案例轮播图路径不能为空')</script>";
                return self::case_pic_update($id);
            }
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['case_pic1'=>$case_pic1,'case_pic2'=>$case_pic2,'case_pic3'=>$case_pic3]
            );
        if($num == 1){
            return redirect('/admin/case/pic/'.$id);
        }else{
            return redirect()->back();
        }
    }

    public function case_doc_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_doc = DB::table('jiangji_case')
                ->select('id','document_pic1','document_pic2','document_pic3','document_pic4',
                    'document_text1','document_text2','document_text3','document_text4')
                ->where('id',$id)->get();
        $data['case_doc'] = (array)$case_doc[0];
        return view('admin_case_doc_index',$data);
    }

    public function case_doc_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_doc = DB::table('jiangji_case')
                ->select('id','document_pic1','document_pic2','document_pic3','document_pic4',
                    'document_text1','document_text2','document_text3','document_text4')
                ->where('id',$id)->get();
        $data['case_doc'] = (array)$case_doc[0];
        return view('admin_case_doc_update',$data);
    }

    public function case_doc_doUpdate($id){
        $document_pic1 = $_POST['document_pic1'];
        $document_pic2 = $_POST['document_pic2'];
        $document_pic3 = $_POST['document_pic3'];
        $document_pic4 = $_POST['document_pic4'];
        $document_text1 = $_POST['document_text1'];
        $document_text2 = $_POST['document_text2'];
        $document_text3 = $_POST['document_text3'];
        $document_text4 = $_POST['document_text4'];
        if($document_pic1 == ''){
            echo "<script>alert('品牌文案图1路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_pic2 == ''){
            echo "<script>alert('品牌文案图2路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_pic3 == ''){
            echo "<script>alert('品牌文案图3路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_pic4 == ''){
            echo "<script>alert('品牌文案图4路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_text1 == ''){
            echo "<script>alert('品牌文案文1路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_text2 == ''){
            echo "<script>alert('品牌文案文2路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_text3 == ''){
            echo "<script>alert('品牌文案文3路径不能为空')</script>";
            return self::case_doc_update($id);
        }else if($document_text4 == ''){
            echo "<script>alert('品牌文案文4路径不能为空')</script>";
            return self::case_doc_update($id);
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['document_pic1'=>$document_pic1,'document_pic2'=>$document_pic2,
            'document_pic3'=>$document_pic3,'document_pic4'=>$document_pic4,
            'document_text1'=>$document_text1,'document_text2'=>$document_text2,
            'document_text3'=>$document_text3,'document_text4'=>$document_text4]
            );
        if($num == 1){
            return redirect('/admin/case/doc/'.$id);
        }else{
            return redirect()->back();
        }
    }

    public function case_design_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_design = DB::table('jiangji_case')
                ->select('id','design_pic1','design_pic2','design_pic3','design_pic4',
                    'design_text1','design_text2','design_text3','design_text4')
                ->where('id',$id)->get();
        $data['case_design'] = (array)$case_design[0];
        return view('admin_case_design_index',$data);
    }

    public function case_design_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_design = DB::table('jiangji_case')
                ->select('id','design_pic1','design_pic2','design_pic3','design_pic4',
                    'design_text1','design_text2','design_text3','design_text4')
                ->where('id',$id)->get();
        $data['case_design'] = (array)$case_design[0];
        return view('admin_case_design_update',$data);
    }

    public function case_design_doUpdate($id){
        $design_pic1 = $_POST['design_pic1'];
        $design_pic2 = $_POST['design_pic2'];
        $design_pic3 = $_POST['design_pic3'];
        $design_pic4 = $_POST['design_pic4'];
        $design_text1 = $_POST['design_text1'];
        $design_text2 = $_POST['design_text2'];
        $design_text3 = $_POST['design_text3'];
        $design_text4 = $_POST['design_text4'];
        if($design_pic1 == ''){
            echo "<script>alert('品牌设计图1路径不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_pic2 == ''){
            echo "<script>alert('品牌设计图2路径不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_pic3 == ''){
            echo "<script>alert('品牌设计图3路径不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_pic4 == ''){
            echo "<script>alert('品牌设计图4路径不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_text1 == ''){
            echo "<script>alert('品牌设计文字1不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_text2 == ''){
            echo "<script>alert('品牌设计文字2不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_text3 == ''){
            echo "<script>alert('品牌设计文字3不能为空')</script>";
            return self::case_design_update($id);
        }else if($design_text4 == ''){
            echo "<script>alert('品牌设计文字4不能为空')</script>";
            return self::case_design_update($id);
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['design_pic1'=>$design_pic1,'design_pic2'=>$design_pic2,
            'design_pic3'=>$design_pic3,'design_pic4'=>$design_pic4,
            'design_text1'=>$design_text1,'design_text2'=>$design_text2,
            'design_text3'=>$design_text3,'design_text4'=>$design_text4]
            );
        if($num == 1){
            return redirect('/admin/case/design/'.$id);
        }else{
            return redirect()->back();
        }
    }
    
    public function case_space_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_space = DB::table('jiangji_case')
                ->select('id','space_pic1','space_pic2','space_pic3','space_pic4',
                    'space_text1','space_text2','space_text3','space_text4')
                ->where('id',$id)->get();
        $data['case_space'] = (array)$case_space[0];
        return view('admin_case_space_index',$data);
    }

    public function case_space_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_space = DB::table('jiangji_case')
                ->select('id','space_pic1','space_pic2','space_pic3','space_pic4',
                    'space_text1','space_text2','space_text3','space_text4')
                ->where('id',$id)->get();
        $data['case_space'] = (array)$case_space[0];
        return view('admin_case_space_update',$data);
    }

    public function case_space_doUpdate($id){
        $space_pic1 = $_POST['space_pic1'];
        $space_pic2 = $_POST['space_pic2'];
        $space_pic3 = $_POST['space_pic3'];
        $space_pic4 = $_POST['space_pic4'];
        $space_text1 = $_POST['space_text1'];
        $space_text2 = $_POST['space_text2'];
        $space_text3 = $_POST['space_text3'];
        $space_text4 = $_POST['space_text4'];
        if($space_pic1 == ''){
            echo "<script>alert('空间设计图1路径不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_pic2 == ''){
            echo "<script>alert('空间设计图2路径不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_pic3 == ''){
            echo "<script>alert('空间设计图3路径不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_pic4 == ''){
            echo "<script>alert('空间设计图4路径不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_text1 == ''){
            echo "<script>alert('空间设计文字1不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_text2 == ''){
            echo "<script>alert('空间设计文字2不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_text3 == ''){
            echo "<script>alert('空间设计文字3不能为空')</script>";
            return self::case_space_update($id);
        }else if($space_text4 == ''){
            echo "<script>alert('空间设计文字4不能为空')</script>";
            return self::case_space_update($id);
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['space_pic1'=>$space_pic1,'space_pic2'=>$space_pic2,
            'space_pic3'=>$space_pic3,'space_pic4'=>$space_pic4,
            'space_text1'=>$space_text1,'space_text2'=>$space_text2,
            'space_text3'=>$space_text3,'space_text4'=>$space_text4]
            );
        if($num == 1){
            return redirect('/admin/case/space/'.$id);
        }else{
            return redirect()->back();
        }
    }

    public function case_env_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_env = DB::table('jiangji_case')
                ->select('id','env_pic1','env_pic2','env_pic3','env_pic4',
                    'env_text1','env_text2','env_text3','env_text4')
                ->where('id',$id)->get();
        $data['case_env'] = (array)$case_env[0];
        return view('admin_case_env_index',$data);
    }

    public function case_env_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_env = DB::table('jiangji_case')
                ->select('id','env_pic1','env_pic2','env_pic3','env_pic4',
                    'env_text1','env_text2','env_text3','env_text4')
                ->where('id',$id)->get();
        $data['case_env'] = (array)$case_env[0];
        return view('admin_case_env_update',$data);
    }

    public function case_env_doUpdate($id){
        $env_pic1 = $_POST['env_pic1'];
        $env_pic2 = $_POST['env_pic2'];
        $env_pic3 = $_POST['env_pic3'];
        $env_pic4 = $_POST['env_pic4'];
        $env_text1 = $_POST['env_text1'];
        $env_text2 = $_POST['env_text2'];
        $env_text3 = $_POST['env_text3'];
        $env_text4 = $_POST['env_text4'];
        if($env_pic1 == ''){
            echo "<script>alert('环创设计图1路径不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_pic2 == ''){
            echo "<script>alert('环创设计图2路径不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_pic3 == ''){
            echo "<script>alert('环创设计图3路径不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_pic4 == ''){
            echo "<script>alert('环创设计图4路径不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_text1 == ''){
            echo "<script>alert('环创设计文字1不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_text2 == ''){
            echo "<script>alert('环创设计文字2不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_text3 == ''){
            echo "<script>alert('环创设计文字3不能为空')</script>";
            return self::case_env_update($id);
        }else if($env_text4 == ''){
            echo "<script>alert('环创设计文字4不能为空')</script>";
            return self::case_env_update($id);
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['env_pic1'=>$env_pic1,'env_pic2'=>$env_pic2,
            'env_pic3'=>$env_pic3,'env_pic4'=>$env_pic4,
            'env_text1'=>$env_text1,'env_text2'=>$env_text2,
            'env_text3'=>$env_text3,'env_text4'=>$env_text4]
            );
        if($num == 1){
            return redirect('/admin/case/env/'.$id);
        }else{
            return redirect()->back();
        }
    }

    public function case_doll_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_doll = DB::table('jiangji_case')
                ->select('id','doll_pic1','doll_pic2','doll_pic3')
                ->where('id',$id)->get();
        $data['case_doll'] = (array)$case_doll[0];
        return view('admin_case_doll_index',$data);
    }

    public function case_doll_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_doll = DB::table('jiangji_case')
                ->select('id','doll_pic1','doll_pic2','doll_pic3')
                ->where('id',$id)->get();
        $data['case_doll'] = (array)$case_doll[0];
        return view('admin_case_doll_update',$data);
    }

    public function case_doll_doUpdate($id){
        $doll_pic1 = $_POST['doll_pic1'];
        $doll_pic2 = $_POST['doll_pic2'];
        $doll_pic3 = $_POST['doll_pic3'];
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['doll_pic1'=>$doll_pic1,'doll_pic2'=>$doll_pic2,
            'doll_pic3'=>$doll_pic3]
            );
        if($num == 1){
            return redirect('/admin/case/doll/'.$id);
        }else{
            return redirect()->back();
        }
    }

    public function case_video_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_video = DB::table('jiangji_case')
                ->select('id','video_pic1','video_pic2','video_pic3','video_pic4',
                        'video1','video2','video3','video4',
                        'video_text1','video_text2','video_text3','video_text4')
                ->where('id',$id)->get();
        $data['case_video'] = (array)$case_video[0];
        return view('admin_case_video_index',$data);
    }

    public function case_video_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $case_video = DB::table('jiangji_case')
                ->select('id','video_pic1','video_pic2','video_pic3','video_pic4',
                        'video1','video2','video3','video4',
                        'video_text1','video_text2','video_text3','video_text4')
                ->where('id',$id)->get();
        $data['case_video'] = (array)$case_video[0];
        return view('admin_case_video_update',$data);
    }

    public function case_video_doUpdate($id){
        $video_pic1 = $_POST['video_pic1'];
        $video_text1 = $_POST['video_text1'];
        $video1 = $_POST['video1'];
        $video_pic2 = $_POST['video_pic2'];
        $video_text2 = $_POST['video_text2'];
        $video2 = $_POST['video2'];
        $video_pic3 = $_POST['video_pic3'];
        $video_text3 = $_POST['video_text3'];
        $video3 = $_POST['video3'];
        $video_pic4 = $_POST['video_pic4'];
        $video_text4 = $_POST['video_text4'];
        $video4 = $_POST['video4'];
        if($video_pic1 == ''){
            echo "<script>alert('案例视频封面图1路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video1 == ''){
            echo "<script>alert('案例视频1路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_pic2 == ''){
            echo "<script>alert('案例视频封面图2路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video2 == ''){
            echo "<script>alert('案例视频2路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_pic3 == ''){
            echo "<script>alert('案例视频封面图3路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video3 == ''){
            echo "<script>alert('案例视频3路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_pic4 == ''){
            echo "<script>alert('案例视频封面图4路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video4 == ''){
            echo "<script>alert('案例视频4路径不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_text1 == ''){
            echo "<script>alert('案例视频文字1不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_text2 == ''){
            echo "<script>alert('案例视频文字2不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_text3 == ''){
            echo "<script>alert('案例视频文字3不能为空')</script>";
            return self::case_video_update($id);
        }else if($video_text4 == ''){
            echo "<script>alert('案例视频文字4不能为空')</script>";
            return self::case_video_update($id);
        }
        $num = DB::table('jiangji_case')->where('id',$id)->update(
            ['video_pic1'=>$video_pic1,'video1'=>$video1,
            'video_pic2'=>$video_pic2,'video2'=>$video2,
            'video_pic3'=>$video_pic3,'video3'=>$video3,
            'video_pic4'=>$video_pic4,'video4'=>$video4,
            'video_text1'=>$video_text1,'video_text2'=>$video_text2,
            'video_text3'=>$video_text3,'video_text4'=>$video_text4]
            );
        if($num == 1){
            return redirect('/admin/case/video/'.$id);
        }else{
            return redirect()->back();
        }
    }
}