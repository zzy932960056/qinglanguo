<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Meshang;
class MeshangController extends Controller
{   
    public function me_shang_cover(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $me_shang = DB::table('me_shang_first')->get();
        return view('me_shang_cover',[
                'me_shang'=>$me_shang,
            ]);
    }

    public function me_shang_cover_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $shang = DB::table('me_shang_first')->where('id',$wid)->get();
        $data['shang'] = (array)$shang[0];
        return view('shang_cover_update',$data);
    }

    public function me_shang_cover_doUpdate($id){
        $cover_pic = $_POST['cover_pic'];
        $cover_theme = $_POST['cover_theme'];
        if($cover_pic == ''){
            echo "<script>alert('杂志封面图路径不能为空')</script>";
            return self::me_shang_cover_update($id);
        }else if($cover_theme == ''){
            echo "<script>alert('杂志主题不能为空')</script>";
            return self::me_shang_cover_update($id);
        }
        $num = DB::table('me_shang_first')->where('id',$id)->update(
            ['cover_pic'=>$cover_pic,'cover_theme'=>$cover_theme]
            );
        if($num == 1){
            return redirect('/me_shang/cover');
        }else{
            return redirect()->back();
        }
    }

    public function me_shang_cover_text($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $shang = DB::table('me_shang_first_text')->where('shang_id',$wid)->get();
        $data['shang'] = (array)$shang;
        $data['nid'] = $wid;
        return view('me_shang_cover_text',$data);
    }

    public function me_shang_cover_text_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_shang_first_text')->where('id',$id)->delete();
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

    public function me_shang_cover_text_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $text = DB::table('me_shang_first_text')->where('id',$wid)->get();
        $data['text'] = (array)$text[0];
        return view('me_shang_cover_text_update',$data);
    }

    public function me_shang_cover_text_doUpdate($id){
        $title = $_POST['title'];
        $mid = $_POST['mid'];
        if($title == ''){
            echo "<script>alert('杂志文字内容不能为空')</script>";
            return self::me_shang_cover_text_update($id);
        }
        $num = DB::table('me_shang_first_text')->where('id',$id)->update(
            ['magazine_text'=>$title]
            );
        if($num == 1){
            return redirect('/me_shang/cover/text/'.$mid);
        }else{
            return redirect()->back();
        }
    }
    
    public function me_shang_cover_text_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('me_shang_cover_text_insert',$data);
    }

    public function me_shang_cover_text_doInsert(){
        $index_text = $_POST['index_text'];
        $news_id = $_POST['news_id'];
        $num = DB::table('me_shang_first')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('me_shang_first_text')->insert(
                ['magazine_text'=>$index_text,'shang_id'=>$news_id]
                );
            if($bool){
                    return redirect('/me_shang/cover/text/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅尚首推关联id')</script>";
            return self::me_shang_cover_text_insert($news_id);            
        }
    }

    public function me_shang_cover_magazine($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $shang = DB::table('me_shang_first_pic')->where('shang_id',$wid)->get();
        $data['shang'] = (array)$shang;
        $data['nid'] = $wid;
        return view('me_shang_cover_magazine',$data);
    }

    public function me_shang_cover_magazine_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_shang_first_pic')->where('id',$id)->delete();
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

    public function me_shang_cover_magazine_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $magazine = DB::table('me_shang_first_pic')->where('id',$wid)->get();
        $data['magazine'] = (array)$magazine[0];
        return view('me_shang_cover_magazine_update',$data);
    }

    public function me_shang_cover_magazine_doUpdate($id){
        $magazine_path = $_POST['magazine_path'];
        $magazine_page = $_POST['magazine_page'];
        $mid = $_POST['mid'];
        if($magazine_path == ''){
            echo "<script>alert('杂志图片路径不能为空')</script>";
            return self::me_shang_cover_magazine_update($id);
        }else if($magazine_page == ''){
            echo "<script>alert('杂志图片页码不能为空')</script>";
            return self::me_shang_cover_magazine_update($id);
        }
        $num = DB::table('me_shang_first_pic')->where('id',$id)->update(
            ['magazine_pic'=>$magazine_path,'magazine_page'=>$magazine_page]
            );
        if($num == 1){
            return redirect('/me_shang/cover/magazine/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function me_shang_cover_magazine_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('me_shang_cover_magazine_insert',$data);
    }

    public function me_shang_cover_magazine_doInsert(){
        $magazine_path = $_POST['magazine_path'];
        $magazine_page = $_POST['magazine_page'];
        $news_id = $_POST['news_id'];
        $num = DB::table('me_shang_first')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('me_shang_first_pic')->insert(
                ['magazine_pic'=>$magazine_path,'magazine_page'=>$magazine_page,'shang_id'=>$news_id]
                );
            if($bool){
                    return redirect('/me_shang/cover/magazine/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅尚首推关联id')</script>";
            return self::me_shang_cover_magazine_insert($news_id);            
        }
    }

    public function me_shang_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $me_shang = Meshang::paginate(5);
        return view('me_shang',[
                'me_shang'=>$me_shang,
            ]);
    }

    public function me_shang_doDelete(){
        $id = $_POST['mid'];
        $num1 = DB::table('me_shang_magazine')->where('id',$id)->delete();
        $num2 = DB::table('me_shang_magazine_pic')->where('shang_id',$id)->delete();
        $num3 = DB::table('me_shang_magazine_text')->where('shang_id',$id)->delete();
        if($num1 == 1 || $num2 || $num3){
            return new JsonResponse(
                    array('msg' => 'ok')
                );
        }else{
            return new JsonResponse(
                    array('msg' => 'no')
                );
        }
    }

    public function me_shang_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $magazine = DB::table('me_shang_magazine')->where('id',$wid)->get();
        $data['magazine'] = (array)$magazine[0];
        return view('me_shang_magazine_update',$data);
    }

    public function me_shang_doUpdate($id){
        $magazine_path = $_POST['magazine_path'];
        $magazine_theme = $_POST['magazine_theme'];
        $magazine_index = $_POST['magazine_index'];
        $date = $_POST['date'];
        $volume = $_POST['volume'];
        if($magazine_path == ''){
            echo "<script>alert('杂志封面图路径不能为空')</script>";
            return self::me_shang_update($id);
        }else if($magazine_theme == ''){
            echo "<script>alert('杂志主题不能为空')</script>";
            return self::me_shang_update($id);
        }else if($magazine_index == ''){
            echo "<script>alert('杂志主题介绍不能为空')</script>";
            return self::me_shang_update($id);
        }else if($date == ''){
            echo "<script>alert('杂志日期不能为空')</script>";
            return self::me_shang_update($id);
        }else if($volume == ''){
            echo "<script>alert('杂志期数不能为空')</script>";
            return self::me_shang_update($id);
        }
        $num = DB::table('me_shang_magazine')->where('id',$id)->update(
            ['magazine_path'=>$magazine_path,'magazine_theme'=>$magazine_theme,
            'magazine_index'=>$magazine_index,'date'=>$date,'volume'=>$volume]
            );
        if($num == 1){
            return redirect('/me_shang/index');
        }else{
            return redirect()->back();
        }
    }

    public function me_shang_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        return view('me_shang_insert');
    }

    public function me_shang_doInsert(){
        $magazine_path = $_POST['magazine_path'];
        $magazine_theme = $_POST['magazine_theme'];
        $magazine_index =$_POST['magazine_index'];
        $date = $_POST['date'];
        $volume = $_POST['volume'];
        if($magazine_path == ''){
            echo "<script>alert('杂志封面图路径不能为空')</script>";
            return self::me_shang_insert();
        }else if($magazine_theme == ''){
            echo "<script>alert('杂志主题不能为空')</script>";
            return self::me_shang_insert();
        }else if($magazine_index == ''){
            echo "<script>alert('杂志主题介绍不能为空')</script>";
            return self::me_shang_insert();
        }else if($date == ''){
            echo "<script>alert('杂志日期不能为空')</script>";
            return self::me_shang_insert();
        }else if($volume == ''){
            echo "<script>alert('杂志期数不能为空')</script>";
            return self::me_shang_insert();
        }
        $bool = DB::table('me_shang_magazine')->insert(
            ['magazine_path'=>$magazine_path,'magazine_theme'=>$magazine_theme,
            'magazine_index'=>$magazine_index,'date'=>$date,'volume'=>$volume]
            );
        if($bool){
                return redirect('/me_shang/index');
            }else{
                return redirect()->back();
            }
    }

    public function me_shang_magazine_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $shang = DB::table('me_shang_magazine_pic')->where('shang_id',$wid)->get();
        $data['shang'] = (array)$shang;
        $data['nid'] = $wid;
        return view('me_shang_magazine_index',$data);
    }

    public function me_shang_magazine_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_shang_magazine_pic')->where('id',$id)->delete();
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

    public function me_shang_magazine_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $magazine = DB::table('me_shang_magazine_pic')->where('id',$wid)->get();
        $data['magazine'] = (array)$magazine[0];
        return view('me_shang_magazine_index_update',$data);
    }

    public function me_shang_magazine_doUpdate($id){
        $magazine_pic = $_POST['magazine_pic'];
        $magazine_page = $_POST['magazine_page'];
        $zid = $_POST['zid'];
        if($magazine_pic == ''){
            echo "<script>alert('杂志页图片路径不能为空')</script>";
            return self::me_shang_magazine_update($id);
        }else if($magazine_page == ''){
            echo "<script>alert('杂志页码不能为空')</script>";
            return self::me_shang_magazine_update($id);
        }
        $num = DB::table('me_shang_magazine_pic')->where('id',$id)->update(
            ['magazine_pic'=>$magazine_pic,'magazine_page'=>$magazine_page]
            );
        if($num == 1){
            return redirect('/me_shang/magazine/index/'.$zid);
        }else{
            return redirect()->back();
        }
    }
    
    public function me_shang_magazine_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['shang_id'] = $id;
        return view('me_shang_magazine_insert',$data);
    }

    public function me_shang_magazine_doInsert(){
        $magazine_pic = $_POST['magazine_pic'];
        $magazine_page = $_POST['magazine_page'];
        $shang_id = $_POST['shang_id'];
        if($magazine_pic == ''){
            echo "<script>alert('杂志页图片路径不能为空')</script>";
            return self::me_shang_magazine_insert();
        }else if($magazine_page == ''){
            echo "<script>alert('杂志页码不能为空')</script>";
            return self::me_shang_magazine_insert();
        }
        $num = DB::table('me_shang_magazine')->where('id',$shang_id)->get();
        if($num){
            $bool = DB::table('me_shang_magazine_pic')->insert(
                ['magazine_pic'=>$magazine_pic,'magazine_page'=>$magazine_page,'shang_id'=>$shang_id]
                );
            if($bool){
                    return redirect('/me_shang/magazine/index/'.$shang_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅尚杂志id')</script>";
            return self::me_shang_magazine_insert($shang_id);            
        }
    }

    public function me_shang_text_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $shang = DB::table('me_shang_magazine_text')->where('shang_id',$wid)->get();
        $data['shang'] = (array)$shang;
        $data['nid'] = $wid;
        return view('me_shang_magazine_text',$data);
    }

    public function me_shang_text_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('me_shang_magazine_text')->where('id',$id)->delete();
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

    public function me_shang_text_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $magazine = DB::table('me_shang_magazine_text')->where('id',$wid)->get();
        $data['magazine'] = (array)$magazine[0];
        return view('me_shang_magazine_text_update',$data);
    }

    public function me_shang_text_index_doUpdate($id){
        $magazine_text = $_POST['magazine_text'];
        $zid = $_POST['zid'];
        if($magazine_text == ''){
            echo "<script>alert('杂志段落不能为空')</script>";
            return self::me_shang_text_index_update($id);
        }
        $num = DB::table('me_shang_magazine_text')->where('id',$id)->update(
            ['magazine_text'=>$magazine_text]
            );
        if($num == 1){
            return redirect('/me_shang/text/index/'.$zid);
        }else{
            return redirect()->back();
        }
    }
    
    public function me_shang_text_index_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['shang_id'] = $id;
        return view('me_shang_magazine_text_insert',$data);
    }

    public function me_shang_text_index_doInsert(){
        $magazine_text = $_POST['magazine_text'];
        $shang_id = $_POST['shang_id'];
        if($magazine_text == ''){
            echo "<script>alert('杂志文字段落不能为空')</script>";
            return self::me_shang_text_index_insert();
        }
        $num = DB::table('me_shang_magazine')->where('id',$shang_id)->get();
        if($num){
            $bool = DB::table('me_shang_magazine_text')->insert(
                ['magazine_text'=>$magazine_text,'shang_id'=>$shang_id]
                );
            if($bool){
                    return redirect('/me_shang/text/index/'.$shang_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('请输入正确觅尚杂志id')</script>";
            return self::me_shang_magazine_insert($shang_id);            
        }
    }
}