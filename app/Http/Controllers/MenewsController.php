<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Menews;
class MenewsController extends Controller
{   
    public function me_news_cover(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $me_news = DB::table('me_news_cover')->get();
        return view('me_news_cover',[
                'me_news'=>$me_news,
            ]);
    }

    public function me_news_cover_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('me_news_cover')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('news_cover_update',$data);
    }

    public function me_news_cover_doUpdate($id){
        $little_pic = $_POST['little_pic'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = date('Y-m-d',time());
        $head_pic = $_POST['head_pic'];
        if($little_pic == ''){
            echo "<script>alert('效果图路径不能为空')</script>";
            return self::me_news_update($id);
        }else if($title == ''){
            echo "<script>alert('标题不能为空')</script>";
            return self::me_news_update($id);
        }else if($description == ''){
            echo "<script>alert('内容简介不能为空')</script>";
            return self::me_news_update($id);
        }else if($head_pic == ''){
            echo "<script>alert('头图不能为空')</script>";
            return self::me_news_update($id);
        }
        $num = DB::table('me_news_cover')->where('id',$id)->update(
            ['little_pic'=>$little_pic,'title'=>$title,
            'description'=>$description,'date'=>$date,'head_pic'=>$head_pic]
            );
        if($num == 1){
            return redirect('/me_news/cover');
        }else{
            return redirect()->back();
        }
    }

    public function me_news_cover_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('me_news_details_cover')->where('news_id',$wid)->get();
        $data['news'] = (array)$news;
        $data['nid'] = $wid;
        return view('me_news_cover_index',$data);
    }

    public function me_news_cover_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_news_details_cover')->where('id',$id)->delete();
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

    public function me_news_cover_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('me_news_details_cover')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('news_index_cover_update',$data);
    }

    public function me_news_cover_index_doUpdate($id){
        $little_pic = $_POST['little_pic'];
        $title = $_POST['title'];
        $mid = $_POST['mid'];
        if($little_pic == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::me_news_cover_index_update($id);
        }else if($title == ''){
            echo "<script>alert('标题不能为空')</script>";
            return self::me_news_cover_index_update($id);
        }
        $num = DB::table('me_news_details_cover')->where('id',$id)->update(
            ['pic_path'=>$little_pic,'content'=>$title]
            );
        if($num == 1){
            return redirect('/me_news/cover/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }
    
    public function me_news_insert_cover($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('me_news_insert_cover',$data);
    }

    public function me_news_doInsert_cover(){
        $index_pic = $_POST['index_pic'];
        $index = $_POST['index'];
        $news_id = $_POST['news_id'];
        $num = DB::table('me_news_cover')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('me_news_details_cover')->insert(
                ['pic_path'=>$index_pic,'content'=>$index,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/me_news/cover/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅闻关联id')</script>";
            return self::me_news_insert_cover($news_id);            
        }
    }

    public function me_news_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $me_news = Menews::paginate(5);
        return view('me_news',[
                'me_news'=>$me_news,
            ]);
    }

    public function me_news_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_news')->where('id',$id)->delete();
        $numm = DB::table('me_news_details')->where('news_id',$id)->delete();
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

    public function me_news_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('me_news_insert');
    }

    public function me_news_doInsert(){
        $little_pic = $_POST['little_pic'];     
        $title = $_POST['title'];
        $description = $_POST['description'];
        $kind = $_POST['kind'];
        $head_pic = $_POST['head_pic'];
        $date = date('Y-m-d',time());
        if($little_pic == ''){
            echo "<script>alert('效果图路径不能为空')</script>";
            return self::me_news_insert();
        }else if($title == ''){
            echo "<script>alert('标题不能为空')</script>";
            return self::me_news_insert();
        }else if($description == ''){
            echo "<script>alert('内容简介不能为空')</script>";
            return self::me_news_insert();
        }else if($kind != 'HOT' && $kind != '娱乐' && $kind != '穿搭'){
            echo "<script>alert('请输入正确的伙伴种类')</script>";
            return self::me_news_insert();
        }else if($head_pic == ''){
            echo "<script>alert('头图不能为空')</script>";
            return self::me_news_insert();
        }
        $bool = DB::table('me_news')->insert(
            ['little_pic'=>$little_pic,'title'=>$title,
            'description'=>$description,'date'=>$date,
            'kind'=>$kind,'head_pic'=>$head_pic]
            );
        if($bool){
                return redirect('/me_news/index');
            }else{
                return redirect()->back();
            }
    }
    
    public function me_news_index_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('me_news_index_insert');
    }

    public function me_news_index_doInsert(){
        $index_pic = $_POST['index_pic'];
        $index = $_POST['index'];
        $news_id = $_POST['news_id'];
        $num = DB::table('me_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('me_news_details')->insert(
                ['pic_path'=>$index_pic,'content'=>$index,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/me_news/index');
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅闻关联id')</script>";
            return self::me_news_index_Insert();            
        }
    }

    public function me_news_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('me_news')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('news_update',$data);
    }

    public function me_news_doUpdate($id){
        $little_pic = $_POST['little_pic'];
        $title = $_POST['title'];
        $description = $_POST['description'];
        $date = date('Y-m-d',time());
        $kind = $_POST['kind'];
        $head_pic = $_POST['head_pic'];
        if($little_pic == ''){
            echo "<script>alert('效果图路径不能为空')</script>";
            return self::me_news_update($id);
        }else if($title == ''){
            echo "<script>alert('标题不能为空')</script>";
            return self::me_news_update($id);
        }else if($description == ''){
            echo "<script>alert('内容简介不能为空')</script>";
            return self::me_news_update($id);
        }else if($kind != 'HOT' && $kind != '娱乐' && $kind != '穿搭'){
            echo "<script>alert('请输入正确的伙伴种类')</script>";
            return self::me_news_update($id);
        }else if($head_pic == ''){
            echo "<script>alert('头图不能为空')</script>";
            return self::me_news_update($id);
        }
        $num = DB::table('me_news')->where('id',$id)->update(
            ['little_pic'=>$little_pic,'title'=>$title,
            'description'=>$description,'date'=>$date,
            'kind'=>$kind,'head_pic'=>$head_pic]
            );
        if($num == 1){
            return redirect('/me_news/index');
        }else{
            return redirect()->back();
        }
    }

    public function me_news_index_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('me_news_details')->where('news_id',$wid)->get();
        $data['news'] = (array)$news;
        $data['nid'] = $wid;
        return view('me_news_index',$data);
    }

    public function me_news_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_news_details')->where('id',$id)->delete();
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

    public function me_news_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('me_news_details')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('news_index_update',$data);
    }

    public function me_news_index_doUpdate($id){
        $little_pic = $_POST['little_pic'];
        $title = $_POST['title'];
        $mid = $_POST['mid'];
        if($little_pic == ''){
            echo "<script>alert('图片路径不能为空')</script>";
            return self::me_news_index_update($id);
        }else if($title == ''){
            echo "<script>alert('标题不能为空')</script>";
            return self::me_news_index_update($id);
        }
        $num = DB::table('me_news_details')->where('id',$id)->update(
            ['pic_path'=>$little_pic,'content'=>$title]
            );
        if($num == 1){
            return redirect('/me_news/index/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }
    
    public function me_news_insert_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('me_news_insert_index',$data);
    }

    public function me_news_doInsert_index(){
        $index_pic = $_POST['index_pic'];
        $index = $_POST['index'];
        $news_id = $_POST['news_id'];
        $num = DB::table('me_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('me_news_details')->insert(
                ['pic_path'=>$index_pic,'content'=>$index,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/me_news/index/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅闻关联id')</script>";
            return self::me_news_insert_index($news_id);            
        }
    }
}