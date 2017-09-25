<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
class NewsController extends Controller
{   
    public function news_index(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $news = DB::table('jiangji_news')->orderBy('id','asc')->get();
        return view('admin_news',[
                'news'=>$news,
            ]);
    }

    public function news_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_news')->where('id',$id)->delete();
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

    public function news_index_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('admin_news_insert');
    }

    public function news_index_doInsert(){
        $title = $_POST['title'];
        $date_time = $_POST['date_time'];
        $describe = $_POST['describe'];
        $news_pic = $_POST['news_pic'];
        $label = $_POST['label'];
        $category = $_POST['category'];
        $is_hot = isset($_POST['is_hot']) ? $_POST['is_hot'] : 0;;
        $hot_pic = $_POST['hot_pic'];
        $hot_desp = $_POST['hot_desp'];
        $template_no = $_POST['template_no'];
        $category2 = '';
        if($category == '品牌声浪'){
            $category2 = "品<br />牌<br />声<br />浪";
        }else if($category == '匠几日志'){
            $category2 = "匠<br />几<br />日<br />志";
        }else if($category == '行业分享'){
            $category2 = "行<br />业<br />分<br />享";
        }
        if($category2 == ''){
            echo "<script>alert('请输入正确分类名称')</script>";
            return self::news_index_insert();
        }
        if($title == ''){
            echo "<script>alert('动态标题不能为空')</script>";
            return self::news_index_insert();
        }else if($date_time == ''){
            echo "<script>alert('动态日期不能为空')</script>";
            return self::news_index_insert();
        }else if($describe == ''){
            echo "<script>alert('动态内容摘要不能为空')</script>";
            return self::news_index_insert();
        }else if($news_pic == ''){
            echo "<script>alert('动态封面图路径不能为空')</script>";
            return self::news_index_insert();
        }else if($label == ''){
            echo "<script>alert('动态标签不能为空')</script>";
            return self::news_index_insert();
        }else if($is_hot == 1){
            if($hot_pic == ''){
                echo "<script>alert('热门封面图路径不能为空')</script>";
                return self::news_index_insert();
            }else if($hot_desp == ''){
                echo "<script>alert('热门内容摘要不能为空')</script>";
                return self::news_index_insert();
            }
        }else if($template_no == ''){
            echo "<script>alert('详情模板编号不能为空')</script>";
            return self::news_index_insert();
        }
        $bool = DB::table('jiangji_news')->insert(
            ['title'=>$title,'date_time'=>$date_time,
            'describe'=>$describe,'news_pic'=>$news_pic,
            'label'=>$label,'category'=>$category,
            'category2'=>$category2,'is_hot'=>$is_hot,
            'hot_pic'=>$hot_pic,'hot_desp'=>$hot_desp,
            'template_no'=>$template_no]
            );
        if($bool){
                return redirect('/admin/news');
            }else{
                return redirect()->back();
            }
    }

    public function news_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $jiangji_news = DB::table('jiangji_news')->where('id',$id)->get();
        $data['jiangji_news'] = (array)$jiangji_news[0];
        return view('admin_news_update',$data);
    }

    public function news_index_doUpdate($id){
        $title = $_POST['title'];
        $date_time = $_POST['date_time'];
        $describe = $_POST['describe'];
        $news_pic = $_POST['news_pic'];
        $label = $_POST['label'];
        $category = isset($_POST['category']) ? $_POST['category'] : '';
        $is_hot = isset($_POST['is_hot']) ? $_POST['is_hot'] : 0 ;
        $hot_pic = $_POST['hot_pic'];
        $hot_desp = $_POST['hot_desp'];
        $template_no = $_POST['template_no'];
        $category2 = '';
        if($category == '品牌声浪'){
            $category2 = "品<br />牌<br />声<br />浪";
        }else if($category == '匠几日志'){
            $category2 = "匠<br />几<br />日<br />志";
        }else if($category == '行业分享'){
            $category2 = "行<br />业<br />分<br />享";
        }
        if($category2 == ''){
            echo "<script>alert('请输入正确分类名称')</script>";
            return self::news_index_update($id);
        }
        if($title == ''){
            echo "<script>alert('动态标题不能为空')</script>";
            return self::news_index_update($id);
        }else if($date_time == ''){
            echo "<script>alert('动态日期不能为空')</script>";
            return self::news_index_update($id);
        }else if($describe == ''){
            echo "<script>alert('动态内容摘要不能为空')</script>";
            return self::news_index_update($id);
        }else if($news_pic == ''){
            echo "<script>alert('动态封面图路径不能为空')</script>";
            return self::news_index_update($id);
        }else if($label == ''){
            echo "<script>alert('动态标签不能为空')</script>";
            return self::news_index_update($id);
        }else if($is_hot == 1){
            if($hot_pic == ''){
                echo "<script>alert('热门封面图路径不能为空')</script>";
                return self::news_index_update($id);
            }else if($hot_desp == ''){
                echo "<script>alert('热门内容摘要不能为空')</script>";
                return self::news_index_update($id);
            }
        }else if($template_no == ''){
            echo "<script>alert('详情模板编号不能为空')</script>";
            return self::news_index_update($id);
        }
        $num = DB::table('jiangji_news')->where('id',$id)->update(
            ['title'=>$title,'date_time'=>$date_time,
            'describe'=>$describe,'news_pic'=>$news_pic,
            'label'=>$label,'category'=>$category,
            'category2'=>$category2,'is_hot'=>$is_hot,
            'hot_pic'=>$hot_pic,'hot_desp'=>$hot_desp,
            'template_no'=>$template_no]
            );
        if($num == 1){
            return redirect('/admin/news');
        }else{
            return redirect()->back();
        }
    }


    public function news_third_index($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $template_no = DB::table('jiangji_news')->where('id',$id)->pluck('template_no');
        $template_no = $template_no[0];
        if($template_no == 1){
            $news = DB::table('jiangji_news_template1')
                ->orderBy('id','asc')->where('news_id',$wid)->get();
            $data['news'] = (array)$news;
            $data['nid'] = $wid;
            return view('jiangji_news_third_index',$data);
        }else if($template_no == 2){
            $news = DB::table('jiangji_news_template2')
                ->orderBy('id','asc')->where('news_id',$wid)->get();
            $data['news'] = (array)$news;
            $data['nid'] = $wid;
            return view('jiangji_news_third_index2',$data);
        }else if($template_no == 3){
            $news = DB::table('jiangji_news_template3')
                ->orderBy('id','asc')->where('news_id',$wid)->get();
            $data['news'] = (array)$news;
            $data['nid'] = $wid;
            return view('jiangji_news_third_index3',$data);
        }
    }

    public function news_third_index_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_news_template1')->where('id',$id)->delete();
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

    public function news_third_index_first_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index1',$data);
    }

    public function news_third_index_first_doInsert(){
        $big_paragraph = $_POST['big_paragraph'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template1')->insert(
                ['big_paragraph'=>$big_paragraph,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index_first_insert($news_id);            
        }
    }

    public function news_third_index_second_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index2',$data);
    }

    public function news_third_index_second_doInsert(){
        $small_paragraph = $_POST['small_paragraph'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template1')->insert(
                ['small_paragraph'=>$small_paragraph,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index_second_insert($news_id);            
        }
    }

    public function news_third_index_third_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index3',$data);
    }

    public function news_third_index_third_doInsert(){
        $picture1 = $_POST['picture1'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template1')->insert(
                ['picture1'=>$picture1,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index_third_insert($news_id);            
        }
    }

    public function news_third_index_forth_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index4',$data);
    }

    public function news_third_index_forth_doInsert(){
        $picture2 = $_POST['picture2'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template1')->insert(
                ['picture2'=>$picture2,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index_forth_insert($news_id);            
        }
    }

    public function news_third_index_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template1')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index_update',$data);
    }

    public function news_third_index_doUpdate($id){
        $big_paragraph = $_POST['big_paragraph'];
        $small_paragraph = $_POST['small_paragraph'];
        $picture1 = $_POST['picture1'];
        $picture2 = $_POST['picture2'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template1')->where('id',$id)->update(
            ['big_paragraph'=>$big_paragraph,'small_paragraph'=>$small_paragraph,
            'picture1'=>$picture1,'picture2'=>$picture2]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function news_third_index2_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('jiangji_news_template2')->where('id',$id)->delete();
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

    public function news_third_index2_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template2')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index2_update',$data);
    }

    public function news_third_index2_doUpdate($id){
        $p_label = $_POST['p_label'];
        $ul_li = $_POST['ul_li'];
        $left_big_pic1 = $_POST['left_big_pic1'];
        $left_big_pic2 = $_POST['left_big_pic2'];
        $image_text_pic1 = $_POST['image_text_pic1'];
        $image_text_pic2 = $_POST['image_text_pic2'];
        $image_text_pic3 = $_POST['image_text_pic3'];
        $image_text_title1 = $_POST['image_text_title1'];
        $image_text_title2 = $_POST['image_text_title2'];
        $image_text_title3 = $_POST['image_text_title3'];
        $right_big_pic1 = $_POST['right_big_pic1'];
        $right_big_pic2 = $_POST['right_big_pic2'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template2')->where('id',$id)->update(
            ['p_label'=>$p_label,'ul_li'=>$ul_li,
            'left_big_pic1'=>$left_big_pic1,'left_big_pic2'=>$left_big_pic2,
            'image_text_pic1'=>$image_text_pic1,'image_text_pic2'=>$image_text_pic2,
            'image_text_pic3'=>$image_text_pic3,'image_text_title1'=>$image_text_title1,
            'image_text_title2'=>$image_text_title2,'image_text_title3'=>$image_text_title3,
            'right_big_pic1'=>$right_big_pic1,'right_big_pic2'=>$right_big_pic2]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function news_third_index2_first_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index2_index1',$data);
    }

    public function news_third_index2_first_doInsert(){
        $p_label = $_POST['p_label'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template2')->insert(
                ['p_label'=>$p_label,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index2_first_insert($news_id);            
        }
    }

    public function news_third_index2_second_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index2_index2',$data);
    }

    public function news_third_index2_second_doInsert(){
        $ul_li = $_POST['ul_li'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template2')->insert(
                ['ul_li'=>$ul_li,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index2_second_insert($news_id);            
        }
    }

    public function news_third_index2_third_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index2_index3',$data);
    }

    public function news_third_index2_third_doInsert(){
        $left_big_pic1 = $_POST['left_big_pic1'];
        $left_big_pic2 = $_POST['left_big_pic2'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template2')->insert(
                ['left_big_pic1'=>$left_big_pic1,
                'left_big_pic2'=>$left_big_pic2,
                'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index2_third_insert($news_id);            
        }
    }

    public function news_third_index2_forth_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index2_index4',$data);
    }

    public function news_third_index2_forth_doInsert(){
        $image_text_pic1 = $_POST['image_text_pic1'];
        $image_text_pic2 = $_POST['image_text_pic2'];
        $image_text_pic3 = $_POST['image_text_pic3'];
        $image_text_title1 = $_POST['image_text_title1'];
        $image_text_title2 = $_POST['image_text_title2'];
        $image_text_title3 = $_POST['image_text_title3'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template2')->insert(
                ['image_text_pic1'=>$image_text_pic1,
                'image_text_pic2'=>$image_text_pic2,
                'image_text_pic3'=>$image_text_pic3,
                'image_text_title1'=>$image_text_title1,
                'image_text_title2'=>$image_text_title2,
                'image_text_title3'=>$image_text_title3,
                'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index2_forth_insert($news_id);            
        }
    }

    public function news_third_index2_fifth_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['new_id'] = $id;
        return view('jiangji_news_insert_index2_index5',$data);
    }

    public function news_third_index2_fifth_doInsert(){
        $right_big_pic1 = $_POST['right_big_pic1'];
        $right_big_pic2 = $_POST['right_big_pic2'];
        $news_id = $_POST['news_id'];
        $num = DB::table('jiangji_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('jiangji_news_template2')->insert(
                ['right_big_pic1'=>$right_big_pic1,
                'right_big_pic2'=>$right_big_pic2,
                'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/third/index/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,匠几动态id不存在')</script>";
            return self::news_third_index2_fifth_insert($news_id);            
        }
    }

    public function news_third_index3_first_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template3')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index3_first_update',$data);
    }
    
    public function news_third_index3_first_doUpdate($id){
        $pic1_1 = $_POST['pic1_1'];
        $pic1_2 = $_POST['pic1_2'];
        $pic1_3 = $_POST['pic1_3'];
        $pic1_4 = $_POST['pic1_4'];
        $pic1_5 = $_POST['pic1_5'];
        $pic1_6 = $_POST['pic1_6'];
        $text1_1 = $_POST['text1_1'];
        $text1_2 = $_POST['text1_2'];
        $text1_3 = $_POST['text1_3'];
        $text1_4 = $_POST['text1_4'];
        $text1_5 = $_POST['text1_5'];
        $text1_6 = $_POST['text1_6'];
        $text1_7 = $_POST['text1_7'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template3')->where('id',$id)->update(
            ['pic1_1'=>$pic1_1,'pic1_2'=>$pic1_2,
            'pic1_3'=>$pic1_3,'pic1_4'=>$pic1_4,
            'pic1_5'=>$pic1_5,'pic1_6'=>$pic1_6,
            'text1_1'=>$text1_1,'text1_2'=>$text1_2,
            'text1_3'=>$text1_3,'text1_4'=>$text1_4,
            'text1_5'=>$text1_5,'text1_6'=>$text1_6,
            'text1_7'=>$text1_7]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function news_third_index3_second_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template3')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index3_second_update',$data);
    }

    public function news_third_index3_second_doUpdate($id){
        $pic2_1 = $_POST['pic2_1'];
        $pic2_2 = $_POST['pic2_2'];
        $pic2_3 = $_POST['pic2_3'];
        $text2_1_1 = $_POST['text2_1_1'];
        $text2_1_2 = $_POST['text2_1_2'];
        $text2_2_1 = $_POST['text2_2_1'];
        $text2_2_2 = $_POST['text2_2_2'];
        $text2_3_1 = $_POST['text2_3_1'];
        $text2_3_2 = $_POST['text2_3_2'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template3')->where('id',$id)->update(
            ['pic2_1'=>$pic2_1,'pic2_2'=>$pic2_2,
            'pic2_3'=>$pic2_3,'text2_1_1'=>$text2_1_1,
            'text2_1_2'=>$text2_1_2,'text2_2_1'=>$text2_2_1,
            'text2_2_2'=>$text2_2_2,'text2_3_1'=>$text2_3_1,
            'text2_3_2'=>$text2_3_2]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function news_third_index3_third_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template3')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index3_third_update',$data);
    }

    public function news_third_index3_third_doUpdate($id){
        $pic3 = $_POST['pic3'];
        $text3_1 = $_POST['text3_1'];
        $text3_2 = $_POST['text3_2'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template3')->where('id',$id)->update(
            ['pic3'=>$pic3,'text3_1'=>$text3_1,
            'text3_2'=>$text3_2]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function news_third_index3_forth_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template3')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index3_forth_update',$data);
    }

    public function news_third_index3_forth_doUpdate($id){
        $pic4_1 = $_POST['pic4_1'];
        $pic4_2 = $_POST['pic4_2'];
        $pic4_3 = $_POST['pic4_3'];
        $pic4_4 = $_POST['pic4_4'];
        $pic4_5 = $_POST['pic4_5'];
        $pic4_6 = $_POST['pic4_6'];
        $text4_1_1 = $_POST['text4_1_1'];
        $text4_1_2 = $_POST['text4_1_2'];
        $text4_2_1 = $_POST['text4_2_1'];
        $text4_2_2 = $_POST['text4_2_2'];
        $text4_3_1 = $_POST['text4_3_1'];
        $text4_3_2 = $_POST['text4_3_2'];
        $text4_4_1 = $_POST['text4_4_1'];
        $text4_4_2 = $_POST['text4_4_2'];
        $text4_5_1 = $_POST['text4_5_1'];
        $text4_5_2 = $_POST['text4_5_2'];
        $text4_6_1 = $_POST['text4_6_1'];
        $text4_6_2 = $_POST['text4_6_2'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template3')->where('id',$id)->update(
            ['pic4_1'=>$pic4_1,'pic4_2'=>$pic4_2,
            'pic4_3'=>$pic4_3,'pic4_4'=>$pic4_4,
            'pic4_5'=>$pic4_5,'pic4_6'=>$pic4_6,
            'text4_1_1'=>$text4_1_1,'text4_1_2'=>$text4_1_2,
            'text4_2_1'=>$text4_2_1,'text4_2_2'=>$text4_2_2,
            'text4_3_1'=>$text4_3_1,'text4_3_2'=>$text4_3_2,
            'text4_4_1'=>$text4_4_1,'text4_4_2'=>$text4_4_2,
            'text4_5_1'=>$text4_5_1,'text4_5_2'=>$text4_5_2,
            'text4_6_1'=>$text4_6_1,'text4_6_2'=>$text4_6_2]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

    public function news_third_index3_fifth_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $news = DB::table('jiangji_news_template3')->where('id',$wid)->get();
        $data['news'] = (array)$news[0];
        return view('jiangji_news_index3_fifth_update',$data);
    }

    public function news_third_index3_fifth_doUpdate($id){
        $pic5 = $_POST['pic5'];
        $text5 = $_POST['text5'];
        $mid = $_POST['mid'];
        $num = DB::table('jiangji_news_template3')->where('id',$id)->update(
            ['pic5'=>$pic5,'text5'=>$text5]
            );
        if($num == 1){
            return redirect('/admin/news/third/index/'.$mid);
        }else{
            return redirect()->back();
        }
    }

}