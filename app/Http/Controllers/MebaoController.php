<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Mebao;
use App\Mebaovideo;
class MebaoController extends Controller
{   
    public function me_bao_first(){
        session_start();
        $me_bao_first = DB::table('me_bao_first')->get();
        return view('me_bao_cover',[
                'me_bao_first'=>$me_bao_first,
            ]);
    }

    public function me_bao_first_update($id){
        session_start();
        $wid = $id;
        $data = [];
        $bao = DB::table('me_bao_first')->where('id',$wid)->get();
        $data['bao'] = (array)$bao[0];
        return view('me_bao_cover_update',$data);
    }

    public function me_bao_first_doUpdate($id){
        $img_path = $_POST['img_path'];
        if($img_path == ''){
            echo "<script>alert('觅宝首推图路径不能为空')</script>";
            return self::me_bao_first_update($id);
        }
        $num = DB::table('me_bao_first')->where('id',$id)->update(
            ['img_path'=>$img_path]
            );
        if($num == 1){
            return redirect('/me_bao/first');
        }else{
            return redirect()->back();
        }
    }

    public function me_bao_index(){
        session_start();
        $bao = Mebao::paginate(5);
        return view('bao',[
                'bao'=>$bao,
            ]);
    }

    public function me_bao_index_doDelete(){
        $id = $_POST['bid'];
        $num = DB::table('me_bao')->where('id',$id)->delete();
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

    public function me_bao_index_insert(){
        session_start();
        return view('bao_insert');
    }

    public function me_bao_index_doInsert(){
        $bname = $_POST['bname'];
        $sex = isset($_POST['sex'])?$_POST['sex']:'';
        $age = $_POST['age'];
        $region = $_POST['region'];
        $like = $_POST['like'];
        $picture = $_POST['picture'];
        $picture_big = $_POST['picture_big'];
        $shop = $_POST['shop'];
        $collocation = $_POST['collocation'];
        $taobao = $_POST['taobao'];
        $is_hot = isset($_POST['is_hot'])?$_POST['is_hot']:0;
        $hot_pic = $_POST['hot_pic'];
        if($bname == ''){
            echo "<script>alert('觅宝姓名不能为空')</script>";
            return self::me_bao_index_insert();
        }else if($sex == ''){
            echo "<script>alert('请选择觅宝性别')</script>";
            return self::me_bao_index_insert();
        }else if($age == ''){
            echo "<script>alert('觅宝年龄不能为空')</script>";
            return self::me_bao_index_insert();
        }else if($age <= 0){
            echo "<script>alert('请输入正确觅宝年龄')</script>";
            return self::me_bao_index_insert();
        }else if($region == ''){
            echo "<script>alert('觅宝地区不能为空')</script>";
            return self::me_bao_index_insert();
        }else if($like < 0){
            echo "<script>alert('请输入正确的点赞数')</script>";
            return self::me_bao_index_insert();
        }else if($picture == ''){
            echo "<script>alert('觅宝封面图路径不能为空')</script>";
            return self::me_bao_index_insert();
        }else if($picture_big == ''){
            echo "<script>alert('觅宝大图路径不能为空')</script>";
            return self::me_bao_index_insert();
        }else if($is_hot == 1 && $hot_pic == ''){
            echo "<script>alert('请输入热门孩子首推图路径')</script>";
            return self::me_bao_index_insert();
        }
        $bool = DB::table('me_bao')->insert(
            ['name'=>$bname,'sex'=>$sex,'age'=>$age,'region'=>$region,'like'=>$like,
            'picture'=>$picture,'picture_big'=>$picture_big,'shop'=>$shop,
            'collocation'=>$collocation,'taobao'=>$taobao,'is_hot'=>$is_hot,'hot_pic'=>$hot_pic]
            );
        if($bool){
            return redirect('/me_bao/index');
        }else{
            return redirect()->back();
        }
    }

    public function me_bao_index_update($id){
        session_start();
        $bid = $id;
        $data = [];
        $bao = DB::table('me_bao')->where('id',$bid)->get();
        $data['bao'] = (array)$bao[0];
        return view('me_bao_update',$data);
    }

    public function me_bao_index_doUpdate($id){
        $bname = $_POST['bname'];
        $sex = isset($_POST['sex'])?$_POST['sex']:'';
        $age = $_POST['age'];
        $region = $_POST['region'];
        $like = $_POST['like'];
        $picture = $_POST['picture'];
        $picture_big = $_POST['picture_big'];
        $shop = $_POST['shop'];
        $collocation = $_POST['collocation'];
        $taobao = $_POST['taobao'];
        $is_hot = isset($_POST['is_hot'])?$_POST['is_hot']:0;
        $hot_pic = $_POST['hot_pic'];
        if($bname == ''){
            echo "<script>alert('觅宝姓名不能为空')</script>";
            return self::me_bao_index_update($id);
        }else if($sex == ''){
            echo "<script>alert('请选择觅宝性别')</script>";
            return self::me_bao_index_update($id);
        }else if($age == ''){
            echo "<script>alert('觅宝年龄不能为空')</script>";
            return self::me_bao_index_update($id);
        }else if($age <= 0){
            echo "<script>alert('请输入正确觅宝年龄')</script>";
            return self::me_bao_index_update($id);
        }else if($region == ''){
            echo "<script>alert('觅宝地区不能为空')</script>";
            return self::me_bao_index_update($id);
        }else if($like < 0){
            echo "<script>alert('请输入正确的点赞数')</script>";
            return self::me_bao_index_update($id);
        }else if($picture == ''){
            echo "<script>alert('觅宝封面图路径不能为空')</script>";
            return self::me_bao_index_update($id);
        }else if($picture_big == ''){
            echo "<script>alert('觅宝大图路径不能为空')</script>";
            return self::me_bao_index_update($id);
        }else if($is_hot == 1 && $hot_pic == ''){
            echo "<script>alert('请输入热门孩子首推图路径')</script>";
            return self::me_bao_index_update($id);
        }
        $num = DB::table('me_bao')->where('id',$id)->update(
            ['name'=>$bname,'sex'=>$sex,'age'=>$age,'region'=>$region,'like'=>$like,
            'picture'=>$picture,'picture_big'=>$picture_big,'shop'=>$shop,
            'collocation'=>$collocation,'taobao'=>$taobao,'is_hot'=>$is_hot,'hot_pic'=>$hot_pic]
            );
        if($num == 1){
            return redirect('/me_bao/index');
        }else{
            return redirect()->back();
        }
    }

    public function me_bao_video(){
        session_start();
        $bao_video = Mebaovideo::paginate(5);
        return view('bao_video',[
                'bao_video'=>$bao_video,
            ]);
    }

    public function me_bao_video_doDelete(){
        $id = $_POST['bid'];
        $num = DB::table('me_bao_video')->where('id',$id)->delete();
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

    public function me_bao_video_insert(){
        session_start();
        return view('bao_video_insert');
    }

    public function me_bao_video_doInsert(){
        $video_img = $_POST['video_img'];
        $video_title = $_POST['video_title'];
        $video_content = $_POST['video_content'];
        $video_path = $_POST['video_path'];
        $is_hot = isset($_POST['is_hot'])?$_POST['is_hot']:0;
        if($video_img == ''){
            echo "<script>alert('觅宝视频封面图不能为空')</script>";
            return self::me_bao_video_insert();
        }else if($video_title == ''){
            echo "<script>alert('觅宝视频标题不能为空')</script>";
            return self::me_bao_video_insert();
        }else if($video_content == ''){
            echo "<script>alert('觅宝视频描述不能为空')</script>";
            return self::me_bao_video_insert();
        }else if($video_path == ''){
            echo "<script>alert('觅宝视频路径不能为空')</script>";
            return self::me_bao_video_insert();
        }
        $bool = DB::table('me_bao_video')->insert(
            ['video_img'=>$video_img,'video_title'=>$video_title,
            'video_content'=>$video_content,
            'video_path'=>$video_path,'is_hot'=>$is_hot]
            );
        if($bool){
            return redirect('/me_bao/video');
        }else{
            return redirect()->back();
        }
    }

    public function me_bao_video_update($id){
        session_start();
        $bid = $id;
        $data = [];
        $bao_video = DB::table('me_bao_video')->where('id',$bid)->get();
        $data['bao_video'] = (array)$bao_video[0];
        return view('me_bao_video_update',$data);
    }

    public function me_bao_video_doUpdate($id){
        $video_img = $_POST['video_img'];
        $video_title = $_POST['video_title'];
        $video_content = $_POST['video_content'];
        $video_path = $_POST['video_path'];
        $is_hot = isset($_POST['is_hot'])?$_POST['is_hot']:0;
        if($video_img == ''){
            echo "<script>alert('觅宝视频封面图不能为空')</script>";
            return self::me_bao_video_insert();
        }else if($video_title == ''){
            echo "<script>alert('觅宝视频标题不能为空')</script>";
            return self::me_bao_video_insert();
        }else if($video_content == ''){
            echo "<script>alert('觅宝视频描述不能为空')</script>";
            return self::me_bao_video_insert();
        }else if($video_path == ''){
            echo "<script>alert('觅宝视频路径不能为空')</script>";
            return self::me_bao_video_insert();
        }
        $num = DB::table('me_bao_video')->where('id',$id)->update(
            ['video_img'=>$video_img,'video_title'=>$video_title,
            'video_content'=>$video_content,
            'video_path'=>$video_path,'is_hot'=>$is_hot]
            );
        if($num == 1){
            return redirect('/me_bao/video');
        }else{
            return redirect()->back();
        }
    }
}