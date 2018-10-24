<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\News;

class NewsindexController extends Controller
{
	  public function picture(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
       	$picture = DB::table('qlg_news_pic')->get();
        $data['picture'] = $picture;
        return view('admin_news_picture',$data);
    }

    public function picture_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
	    	$bid = $id;
	      $picture = DB::table('qlg_news_pic')->where(['id'=>$bid])->get();
		    $data = [];
		    $data['picture'] = (array)$picture[0];
       	return view('qlg_news_picture_update',$data);
    }

    public function picture_doUpdate($id){
	    	$news_pic = $_POST['news_pic'];
    		if($news_pic == ''){
            echo "<script>alert('动态头图路径不能为空')</script>";
            return self::picture_update($id);
        }
        $num = DB::table('qlg_news_pic')->where('id',$id)->update(
                ['news_pic'=>$news_pic]
            );
        if($num == 1){
            echo "<script>alert('信息修改成功')</script>";
						 return self::picture();
        }else{
            echo "<script>alert('发生未知错误,信息修改失败,请重新修改')</script>";
            return self::picture_update($id);
        }
    }

		public function news(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $news = News::orderBy('id','asc')->paginate(10);
        return view('admin_news',[
                'news'=>$news,
            ]);
    }

    public function news_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('qlg_news')->where('id',$id)->delete();
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

    public function news_insert(){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        return view('admin_news_insert');
    }

    public function news_doInsert(){
        $news_title = $_POST['news_title'];
        $news_date = $_POST['news_date'];
        $news_season = $_POST['news_season'];
        $news_sort = $_POST['news_sort'];
        if($news_title == ''){
            echo "<script>alert('动态标题不能为空')</script>";
            return self::news_insert();
        }else if($news_date == ''){
            echo "<script>alert('动态日期不能为空')</script>";
            return self::news_insert();
        }
        $bool = DB::table('qlg_news')->insert(
            ['news_title'=>$news_title,'news_date'=>$news_date,
            'news_season'=>$news_season,'news_sort'=>$news_sort]
            );
        if($bool){
            return redirect('/admin/news');
        }else{
            return redirect()->back();
        }
    }

    public function news_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $news = DB::table('qlg_news')->where('id',$id)->get();
        $data['news'] = (array)$news[0];
        return view('admin_news_update',$data);
    }

    public function news_doUpdate($id){
        $news_title = $_POST['news_title'];
        $news_date = $_POST['news_date'];
        $news_season = $_POST['news_season'];
        $news_sort = $_POST['news_sort'];
        if($news_title == ''){
            echo "<script>alert('动态标题不能为空')</script>";
            return self::news_update($id);
        }else if($news_date == ''){
            echo "<script>alert('动态日期不能为空')</script>";
            return self::news_update($id);
        }
        $num = DB::table('qlg_news')->where('id',$id)->update(
            ['news_title'=>$news_title,'news_date'=>$news_date,
            'news_season'=>$news_season,'news_sort'=>$news_sort]
            );
        if($num == 1){
            return redirect('/admin/news');
        }else{
            return redirect()->back();
        }
    }

    public function news_details($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $details = DB::table('qlg_news_detail')
										->orderBy('id','asc')
										->where('news_id',$wid)
										->get();
        $data['details'] = (array)$details;
        $data['nid'] = $wid;
        return view('admin_news_details',$data);
    }

    public function news_details_doDelete(){
        $id = $_POST['mid'];
        $num = DB::table('qlg_news_detail')->where('id',$id)->delete();
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

    public function news_details_text_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['news_id'] = $id;
        return view('admin_news_details_text_insert',$data);
    }

    public function news_details_text_doInsert(){
        $news_text = $_POST['news_text'];
        $news_id = $_POST['news_id'];
				if($news_text == ''){
            echo "<script>alert('动态文本不能为空')</script>";
            return self::news_details_text_insert($news_id);
        }
        $num = DB::table('qlg_news')->where('id',$news_id)->get();
        if($num){
            $bool = DB::table('qlg_news_detail')->insert(
                ['news_text'=>$news_text,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/details/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,所属动态id不存在')</script>";
            return self::news_details_text_insert($news_id);
        }
    }

    public function news_details_big_pic_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['news_id'] = $id;
        return view('admin_news_details_big_pic_insert',$data);
    }

    public function news_details_big_pic_doInsert(){
        $news_pic_b = $_POST['news_pic_b'];
        $news_id = $_POST['news_id'];
				if($news_pic_b == ''){
						echo "<script>alert('大图片路径不能为空')</script>";
						return self::news_details_big_pic_insert($news_id);
				}
        $num = DB::table('qlg_news')->where('id',$news_id)->get();
				if($num){
            $bool = DB::table('qlg_news_detail')->insert(
                ['news_pic_b'=>$news_pic_b,'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/details/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,所属动态id不存在')</script>";
            return self::news_details_big_pic_insert($news_id);
        }
    }

		public function news_details_small_pic_insert($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $data = [];
        $data['news_id'] = $id;
        return view('admin_news_details_small_pic_insert',$data);
    }

    public function news_details_small_pic_doInsert(){
        $news_pic_s1 = $_POST['news_pic_s1'];
        $news_pic_s2 = $_POST['news_pic_s2'];
				$news_pic_s3 = $_POST['news_pic_s3'];
				$news_id = $_POST['news_id'];
				if($news_pic_s1 == ''){
						echo "<script>alert('小图片1路径不能为空')</script>";
						return self::news_details_small_pic_insert($news_id);
				}else if($news_pic_s2 == ''){
							echo "<script>alert('小图片2路径不能为空')</script>";
							return self::news_details_small_pic_insert($news_id);
				}else if($news_pic_s3 == ''){
							echo "<script>alert('小图片3路径不能为空')</script>";
							return self::news_details_small_pic_insert($news_id);
				}
        $num = DB::table('qlg_news')->where('id',$news_id)->get();
				if($num){
            $bool = DB::table('qlg_news_detail')->insert(
                ['news_pic_s1'=>$news_pic_s1,
								'news_pic_s2'=>$news_pic_s2,
								'news_pic_s3'=>$news_pic_s3,
								'news_id'=>$news_id]
                );
            if($bool){
                    return redirect('/admin/news/details/'.$news_id);
                }else{
                    return redirect()->back();
                }
        }else{
            echo "<script>alert('发生未知错误,所属动态id不存在')</script>";
            return self::news_details_small_pic_insert($news_id);
        }
    }

		public function news_details_video_insert($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$data = [];
				$data['news_id'] = $id;
				return view('admin_news_details_video_insert',$data);
		}

		public function news_details_video_doInsert(){
				$news_video = $_POST['news_video'];
				$news_video_pic = $_POST['news_video_pic'];
				$news_id = $_POST['news_id'];
				if($news_video == ''){
						echo "<script>alert('视频路径不能为空')</script>";
						return self::news_details_video_insert($news_id);
				}else if($news_video_pic == ''){
						echo "<script>alert('视频封面图路径不能为空')</script>";
						return self::news_details_video_insert($news_id);
				}
				$num = DB::table('qlg_news')->where('id',$news_id)->get();
				if($num){
						$bool = DB::table('qlg_news_detail')->insert(
								['news_video'=>$news_video,
								'news_video_pic'=>$news_video_pic,
								'news_id'=>$news_id]
								);
						if($bool){
										return redirect('/admin/news/details/'.$news_id);
								}else{
										return redirect()->back();
								}
				}else{
						echo "<script>alert('发生未知错误,所属动态id不存在')</script>";
						return self::news_details_video_insert($news_id);
				}
		}

    public function news_details_text_update($id){
        @session_start();
        if(!isset($_SESSION['admin_name'])){
            return redirect('/admin/login');
        }
        $wid = $id;
        $data = [];
        $details = DB::table('qlg_news_detail')->where('id',$wid)->get();
        $data['details'] = (array)$details[0];
        return view('admin_news_details_text_update',$data);
    }

    public function news_details_text_doUpdate($id){
        $news_text = $_POST['news_text'];
        $news_id = $_POST['news_id'];
				if($news_text == ''){
						echo "<script>alert('文本不能为空')</script>";
						return self::news_details_text_update($id);
				}
        $num = DB::table('qlg_news_detail')->where('id',$id)->update(
            ['news_text'=>$news_text]
            );
        if($num == 1){
            return redirect('/admin/news/details/'.$news_id);
        }else{
            return redirect()->back();
        }
    }

		public function news_details_big_pic_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$wid = $id;
				$data = [];
				$details = DB::table('qlg_news_detail')->where('id',$wid)->get();
				$data['details'] = (array)$details[0];
				return view('admin_news_details_big_pic_update',$data);
		}

		public function news_details_big_pic_doUpdate($id){
				$news_pic_b = $_POST['news_pic_b'];
				$news_id = $_POST['news_id'];
				if($news_pic_b == ''){
						echo "<script>alert('大图路径不能为空')</script>";
						return self::news_details_big_pic_update($id);
				}
				$num = DB::table('qlg_news_detail')->where('id',$id)->update(
						['news_pic_b'=>$news_pic_b]
						);
				if($num == 1){
						return redirect('/admin/news/details/'.$news_id);
				}else{
						return redirect()->back();
				}
		}

		public function news_details_small_pic_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$wid = $id;
				$data = [];
				$details = DB::table('qlg_news_detail')->where('id',$wid)->get();
				$data['details'] = (array)$details[0];
				return view('admin_news_details_small_pic_update',$data);
		}

		public function news_details_small_pic_doUpdate($id){
				$news_pic_s1 = $_POST['news_pic_s1'];
				$news_pic_s2 = $_POST['news_pic_s2'];
				$news_pic_s3 = $_POST['news_pic_s3'];
				$news_id = $_POST['news_id'];
				if($news_pic_s1 == ''){
						echo "<script>alert('小图1路径不能为空')</script>";
						return self::news_details_small_pic_update($id);
				}else if($news_pic_s2 == ''){
						echo "<script>alert('小图2路径不能为空')</script>";
						return self::news_details_small_pic_update($id);
				}else if($news_pic_s3 == ''){
						echo "<script>alert('小图3路径不能为空')</script>";
						return self::news_details_small_pic_update($id);
				}
				$num = DB::table('qlg_news_detail')->where('id',$id)->update(
						['news_pic_s1'=>$news_pic_s1,
						'news_pic_s2'=>$news_pic_s2,
						'news_pic_s3'=>$news_pic_s3]
						);
				if($num == 1){
						return redirect('/admin/news/details/'.$news_id);
				}else{
						return redirect()->back();
				}
		}

		public function news_details_video_update($id){
				@session_start();
				if(!isset($_SESSION['admin_name'])){
						return redirect('/admin/login');
				}
				$wid = $id;
				$data = [];
				$details = DB::table('qlg_news_detail')->where('id',$wid)->get();
				$data['details'] = (array)$details[0];
				return view('admin_news_details_video_update',$data);
		}

		public function news_details_video_doUpdate($id){
				$news_video = $_POST['news_video'];
				$news_video_pic = $_POST['news_video_pic'];
				$news_id = $_POST['news_id'];
				if($news_video == ''){
						echo "<script>alert('视频路径不能为空')</script>";
						return self::news_details_video_update($id);
				}else if($news_video_pic == ''){
						echo "<script>alert('视频封面图路径不能为空')</script>";
						return self::news_details_video_update($id);
				}
				$num = DB::table('qlg_news_detail')->where('id',$id)->update(
						['news_video'=>$news_video,
						'news_video_pic'=>$news_video_pic]
						);
				if($num == 1){
						return redirect('/admin/news/details/'.$news_id);
				}else{
						return redirect()->back();
				}
		}
}
