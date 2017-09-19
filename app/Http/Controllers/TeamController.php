<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
class TeamController extends Controller
{   
    public function team_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $team = DB::table('jiangji_team')->orderBy('id','asc')->get();
        return view('admin_team',[
                'team'=>$team,
            ]);
    }

    public function team_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_team')->where('id',$id)->delete();
        $numm = DB::table('jiangji_team_intro')->where('staff_id',$id)->delete();
        if($num == 1 || $numm){
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function team_index_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('admin_team_insert');
    }

    public function team_index_doInsert(){
        $staff_name = $_POST['staff_name'];
        $staff_job = $_POST['staff_job'];
        $staff_pic1 = $_POST['staff_pic1'];
        $staff_pic2 = $_POST['staff_pic2'];
        $staff_alert = $_POST['staff_alert'];
        $mobile_pic1 = $_POST['mobile_pic1'];
        $mobile_pic2 = $_POST['mobile_pic2'];
        $mobile_alert = $_POST['mobile_alert'];
        $sort_no = $_POST['sort_no'];
        if($staff_pic1 == ''){
            echo "<script>alert('PC端团队成员图1路径不能为空')</script>";
            return self::team_index_insert();
        }else if($staff_pic2 == ''){
            echo "<script>alert('PC端团队成员图2路径不能为空')</script>";
            return self::team_index_insert();
        }else if($staff_alert == ''){
            echo "<script>alert('PC端团队成员弹窗图路径不能为空')</script>";
            return self::team_index_insert();
        }else if($mobile_pic1 == ''){
            echo "<script>alert('移动端团队成员图1路径不能为空')</script>";
            return self::team_index_insert();
        }else if($staff_name == ''){
            echo "<script>alert('团队成员姓名不能为空')</script>";
            return self::team_index_insert();
        }else if($staff_job == ''){
            echo "<script>alert('团队成员职位不能为空')</script>";
            return self::team_index_insert();
        }
        $bool = DB::table('jiangji_team')->insert(
            ['staff_pic1'=>$staff_pic1,'staff_pic2'=>$staff_pic2,
            'staff_alert'=>$staff_alert,'mobile_pic1'=>$mobile_pic1,
            'mobile_pic2'=>$mobile_pic2,'mobile_alert'=>$mobile_alert,
            'staff_name'=>$staff_name,'staff_job'=>$staff_job,
            'sort_no'=>$sort_no]
            );
        if($bool){
                return redirect('/admin/team');
            }else{
                return redirect()->back();
            }
    }

    public function team_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $team_mem = DB::table('jiangji_team')->where('id',$wid)->get();
        $data['team_mem'] = (array)$team_mem[0];
        return view('admin_team_update',$data);
    }

    public function team_index_doUpdate($id){
        $staff_pic1 = $_POST['staff_pic1'];
        $staff_pic2 = $_POST['staff_pic2'];
        $staff_alert = $_POST['staff_alert'];
        $mobile_pic1 = $_POST['mobile_pic1'];
        $mobile_pic2 = $_POST['mobile_pic2'];
        $mobile_alert = $_POST['mobile_alert'];
        $staff_name = $_POST['staff_name'];
        $staff_job = $_POST['staff_job'];
        $sort_no = $_POST['sort_no'];
        if($staff_pic1 == ''){
            echo "<script>alert('PC端团队成员图1路径不能为空')</script>";
            return self::team_index_update($id);
        }else if($staff_pic2 == ''){
            echo "<script>alert('PC端团队成员图2路径不能为空')</script>";
            return self::team_index_update($id);
        }else if($staff_alert == ''){
            echo "<script>alert('PC端团队成员弹窗图路径不能为空')</script>";
            return self::team_index_update($id);
        }else if($mobile_pic1 == ''){
            echo "<script>alert('移动端团队成员图1路径不能为空')</script>";
            return self::team_index_update($id);
        }else if($staff_name == ''){
            echo "<script>alert('团队成员姓名不能为空')</script>";
            return self::team_index_update($id);
        }else if($staff_job == ''){
            echo "<script>alert('团队成员职位不能为空')</script>";
            return self::team_index_update($id);
        }
        $num = DB::table('jiangji_team')->where('id',$id)->update(
            ['staff_pic1'=>$staff_pic1,'staff_pic2'=>$staff_pic2,
            'staff_alert'=>$staff_alert,'mobile_pic1'=>$mobile_pic1,
            'mobile_pic2'=>$mobile_pic2,'mobile_alert'=>$mobile_alert,
            'staff_name'=>$staff_name,'staff_job'=>$staff_job,
            'sort_no'=>$sort_no]
            );
        if($num == 1){
            return redirect('/admin/team');
        }else{
            return redirect()->back();
        }
    }

    public function team_introduce_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $intro = DB::table('jiangji_team_intro')->where('staff_id',$wid)->get();
        $data['intro'] = (array)$intro;
        $data['nid'] = $wid;
        return view('admin_team_intro',$data);
    }

    public function team_introduce_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_team_intro')->where('id',$id)->delete();
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

    public function team_introduce_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $intro = DB::table('jiangji_team_intro')->where('id',$wid)->get();
        $data['intro'] = (array)$intro[0];
        return view('admin_team_intro_update',$data);
    }

    public function team_introduce_index_doUpdate($id){
        $staff_intro = $_POST['staff_intro'];
        $staff_id = $_POST['staff_id'];
        if($staff_intro == ''){
            echo "<script>alert('匠几团队成员个人简介不能为空')</script>";
            return self::team_introduce_index_update($id);
        }
        $num = DB::table('jiangji_team_intro')->where('id',$id)->update(
            ['staff_intro'=>$staff_intro]
            );
        if($num == 1){
            return redirect('/admin/team/introduce/'.$staff_id);
        }else{
            return redirect()->back();
        }
    }
    
    public function team_introduce_index_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['intro_id'] = $id;
        return view('admin_team_intro_insert',$data);
    }

    public function team_introduce_index_doInsert(){
        $staff_intro = $_POST['staff_intro'];
        $intro_id = $_POST['intro_id'];
        $num = DB::table('jiangji_team')->where('id',$intro_id)->get();
        if($num){
            $bool = DB::table('jiangji_team_intro')->insert(
                ['staff_intro'=>$staff_intro,'staff_id'=>$intro_id]
                );
            if($bool){
                    return redirect('/admin/team/introduce/'.$intro_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('匠几团队员工ID不存在')</script>";
            return self::team_introduce_index_insert($news_id);            
        }
    }
}