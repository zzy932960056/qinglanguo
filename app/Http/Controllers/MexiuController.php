<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Mexiu;

class MexiuController extends Controller
{   
	public function image_left(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('me_xiu_left')->get();
        $data['info'] = $info;
        return view('mexiu_image_left',$data);
    }

    public function image_left_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
    	$sid = $id;
       	$image_info = DB::table('me_xiu_left')->where(['id'=>$sid])->get();
	    $data = [];
	    $data['image_info'] = (array)$image_info[0];
       	return view('mexiu_image_left_update',$data);
    }

    public function image_left_doUpdate($id){
        $logo = $_POST['left_logo'];
    	if($logo == ''){
            echo "<script>alert('觅秀左图路径不能为空')</script>";
            return self::image_left_update($id);
        }
        $num = DB::table('me_xiu_left')->where('id',$id)->update(
                ['xiu_image_left'=>$logo]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::image_left();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::image_left_update($id);
        }
    }

    public function image_right(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('me_xiu_right')->get();
        $data['info'] = $info;
        return view('mexiu_image_right',$data);
    }

    public function image_right_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $sid = $id;
        $image_info = DB::table('me_xiu_right')->where(['id'=>$sid])->get();
        $data = [];
        $data['image_info'] = (array)$image_info[0];
        return view('mexiu_image_right_update',$data);
    }

    public function image_right_doUpdate($id){
        $image_path = $_POST['image_path'];
        $right_title = $_POST['right_title'];
        $right_logo = $_POST['right_logo'];
        $right_slogen = $_POST['right_slogen'];
        if($image_path == ''){
            echo "<script>alert('觅秀右图路径不能为空')</script>";
            return self::image_right_update($id);
        }else if($right_title == ''){
            echo "<script>alert('觅秀右图标题不能为空')</script>";
            return self::image_right_update($id); 
        }else if($right_logo == ''){
            echo "<script>alert('觅秀右图logo路径不能为空')</script>";
            return self::image_right_update($id); 
        }else if($right_slogen == ''){
            echo "<script>alert('觅秀右图标语不能为空')</script>";
            return self::image_right_update($id); 
        }
        $num = DB::table('me_xiu_right')->where('id',$id)->update(
                ['image_path'=>$image_path,'image_title'=>$right_title,
                'image_pic'=>$right_logo,'image_slogen'=>$right_slogen]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::image_right();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::image_right_update($id);
        }
    }
    //二级视频
    public function video_second(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $info = DB::table('me_xiu_video')->get();
        $data['info'] = $info;
        return view('mexiu_video_second',$data);
    }

    public function video_second_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $sid = $id;
        $video_info = DB::table('me_xiu_video')->where(['id'=>$sid])->get();
        $data = [];
        $data['video_info'] = (array)$video_info[0];
        return view('mexiu_video_second_update',$data);
    }

    public function video_second_doUpdate($id){
        $video_pic_path = $_POST['video_pic_path'];
        $video_title = $_POST['video_title'];
        $video_descrip = $_POST['video_descrip'];
        $video_path = $_POST['video_path'];
        $second_no = $_POST['second_no'];
        $arr = ['1','2','3','4','5','6'];
        if($video_pic_path == ''){
            echo "<script>alert('封面图路径不能为空')</script>";
            return self::video_second_update($id);
        }else if($video_title == ''){
            echo "<script>alert('视频标题不能为空')</script>";
            return self::video_second_update($id);
        }else if($video_descrip == ''){
            echo "<script>alert('视频描述不能为空')</script>";
            return self::video_second_update($id);
        }else if($video_path == ''){
            echo "<script>alert('视频路径不能为空')</script>";
            return self::video_second_update($id);
        }else if($second_no == ''){
            echo "<script>alert('视频二级编号不能为空')</script>";
            return self::video_second_update($id);
        }else if(!in_array($second_no,$arr)){
            echo "<script>alert('请输入1-6正确的二级视频编号')</script>";
            return self::video_second_update($id);
        }
        $num = DB::table('me_xiu_video')->where('id',$id)->update(
                ['video_pic_path'=>$video_pic_path,'video_title'=>$video_title,
                'video_descrip'=>$video_descrip,'video_path'=>$video_path,'second_no'=>$second_no]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
            return self::video_second();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::video_second_update($id);
        }
    }
    //三级视频
    public function video_third(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $info = Mexiu::paginate(5);
        return view('mexiu_video_third',[
                'info'=>$info,
            ]);
    }

    public function video_third_doDelete(){
        $id = $_POST['cid'];
        $num = DB::table('me_xiu_video_third')->where('id',$id)->delete();
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

    public function video_third_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('mexiu_video_third_insert');
    }

    public function video_third_doInsert(){
        $video_pic_path = $_POST['video_pic_path'];
        $video_title = $_POST['video_title'];
        $video_describe = $_POST['video_describe'];
        $video_path = $_POST['video_path'];
        if($video_pic_path == ''){
            echo "<script>alert('视频封面图路径不能为空')</script>";
            return self::video_third_insert();
        }else if($video_title == ''){
            echo "<script>alert('视频标题不能为空')</script>";
            return self::video_third_insert();
        }else if($video_describe == ''){
            echo "<script>alert('视频描述不能为空')</script>";
            return self::video_third_insert();
        }else if($video_path == ''){
            echo "<script>alert('视频路径不能为空')</script>";
            return self::video_third_insert();
        }
        $bool = DB::table('me_xiu_video_third')->insert(
            ['video_pic_path'=>$video_pic_path,'video_title'=>$video_title,
            'video_describe'=>$video_describe,'video_path'=>$video_path]
            );
        if($bool){
            return redirect('/me_xiu/video/third');
        }else{
            return redirect()->back();
        }
    }

    public function video_third_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $vid = $id;
        $video_info = DB::table('me_xiu_video_third')->where(['id'=>$vid])->get();
        $data = [];
        $data['video_info'] = (array)$video_info[0];
        return view('mexiu_video_third_update',$data);
    }

    public function video_third_doUpdate($id){
        $video_pic_path = $_POST['video_pic_path'];
        $video_title = $_POST['video_title'];
        $video_describe = $_POST['video_describe'];
        $video_path = $_POST['video_path'];
        if($video_pic_path == ''){
            echo "<script>alert('封面图路径不能为空')</script>";
            return self::video_third_update($id);
        }else if($video_title == ''){
            echo "<script>alert('视频标题不能为空')</script>";
            return self::video_third_update($id);
        }else if($video_describe == ''){
            echo "<script>alert('视频描述不能为空')</script>";
            return self::video_third_update($id);
        }else if($video_path == ''){
            echo "<script>alert('视频路径不能为空')</script>";
            return self::video_third_update($id);
        }
        $num = DB::table('me_xiu_video_third')->where('id',$id)->update(
                ['video_pic_path'=>$video_pic_path,'video_title'=>$video_title,
                'video_describe'=>$video_describe,'video_path'=>$video_path]
            );
        if($num == 1){
            return redirect('/me_xiu/video/third');
        }else{
            return redirect()->back();
        }
    }
}