<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{   
    public function index_news(){
        @session_start();
        //remember_me
        if(isset($_COOKIE['user_info'])){
            $_SESSION['user_info'] = $_COOKIE['user_info'];
            if(isset($_COOKIE['phone'])){
                $_SESSION['phone'] = $_COOKIE['phone'];
            }
        }
        $data = [];
        //导航图片
        $navigation_image = DB::table('navigation_image')->get();
        $navigation_image = (array)$navigation_image[0];
        $data['navigation_image'] = $navigation_image;
        //第一屏视频
        $first_video = DB::table('screen_video')->where('video_screen','首屏')->get();
        $first_video = (array)$first_video[0];
        $data['first_video'] = $first_video;
        //第二屏介绍信息
        $dierping = DB::table('dierping')->get();
        $dierping = (array)$dierping[0];
        $data['dierping'] = $dierping;
        //第三屏觅闻
        $me_wen = DB::table('me_news_cover')->get();
        $data['me_wen'] = $me_wen;
        //第四屏觅秀
        $me_xiu_video = DB::table('screen_video')->where('video_screen','觅秀')->get();
        $me_xiu_video = (array)$me_xiu_video[0];
        $data['me_xiu_video'] = $me_xiu_video;
        //第五屏觅尚
        $me_shang = DB::table('me_shang_first')->get();
        $data['me_shang'] = $me_shang;
        //第六屏觅淘
        $me_tao = DB::table('me_tao')->get();
        $me_tao = (array)$me_tao[0];
        $data['me_tao'] = $me_tao;
        //第七屏觅宝
        $bao = DB::table('me_bao')->where('is_hot',1)->orderBy('like', 'desc')->take(16)->get();
        $data['bao'] = $bao;
        //第八屏觅样
        $last = DB::table('me_last')->get();
        $last = (array)$last[0];
        $data['last'] = $last;
        return view('qt_index_menews',$data);
    }

    public function index_young(){
        @session_start();
        //remember_me
        if(isset($_COOKIE['user_info'])){
            $_SESSION['user_info'] = $_COOKIE['user_info'];
            if(isset($_COOKIE['phone'])){
                $_SESSION['phone'] = $_COOKIE['phone'];
            }
        }
        $data = [];
        //导航图片
        $navigation_image = DB::table('navigation_image')->get();
        $navigation_image = (array)$navigation_image[0];
        $data['navigation_image'] = $navigation_image;
        //第一屏视频
        $first_video = DB::table('screen_video')->where('video_screen','首屏')->get();
        $first_video = (array)$first_video[0];
        $data['first_video'] = $first_video;
        //第二屏介绍信息
        $dierping = DB::table('dierping')->get();
        $dierping = (array)$dierping[0];
        $data['dierping'] = $dierping;
        //第三屏觅闻
        $me_wen = DB::table('me_news_cover')->get();
        $data['me_wen'] = $me_wen;
        //第四屏觅秀
        $me_xiu_video = DB::table('screen_video')->where('video_screen','觅秀')->get();
        $me_xiu_video = (array)$me_xiu_video[0];
        $data['me_xiu_video'] = $me_xiu_video;
        //第五屏觅尚
        $me_shang = DB::table('me_shang_first')->get();
        $data['me_shang'] = $me_shang;
        //第六屏觅淘
        $me_tao = DB::table('me_tao')->get();
        $me_tao = (array)$me_tao[0];
        $data['me_tao'] = $me_tao;
        //第七屏觅宝
        $bao = DB::table('me_bao')->where('is_hot',1)->orderBy('like', 'desc')->take(16)->get();
        $data['bao'] = $bao;
        //第八屏觅样
        $last = DB::table('me_last')->get();
        $last = (array)$last[0];
        $data['last'] = $last;
        return view('qt_index_meyoung',$data);
    }

    public function index_show(){
        @session_start();
        //remember_me
        if(isset($_COOKIE['user_info'])){
            $_SESSION['user_info'] = $_COOKIE['user_info'];
            if(isset($_COOKIE['phone'])){
                $_SESSION['phone'] = $_COOKIE['phone'];
            }
        }
        $data = [];
        //导航图片
        $navigation_image = DB::table('navigation_image')->get();
        $navigation_image = (array)$navigation_image[0];
        $data['navigation_image'] = $navigation_image;
        //第一屏视频
        $first_video = DB::table('screen_video')->where('video_screen','首屏')->get();
        $first_video = (array)$first_video[0];
        $data['first_video'] = $first_video;
        //第二屏介绍信息
        $dierping = DB::table('dierping')->get();
        $dierping = (array)$dierping[0];
        $data['dierping'] = $dierping;
        //第三屏觅闻
        $me_wen = DB::table('me_news_cover')->get();
        $data['me_wen'] = $me_wen;
        //第四屏觅秀
        $me_xiu_video = DB::table('screen_video')->where('video_screen','觅秀')->get();
        $me_xiu_video = (array)$me_xiu_video[0];
        $data['me_xiu_video'] = $me_xiu_video;
        //第五屏觅尚
        $me_shang = DB::table('me_shang_first')->get();
        $data['me_shang'] = $me_shang;
        //第六屏觅淘
        $me_tao = DB::table('me_tao')->get();
        $me_tao = (array)$me_tao[0];
        $data['me_tao'] = $me_tao;
        //第七屏觅宝
        $bao = DB::table('me_bao')->where('is_hot',1)->orderBy('like', 'desc')->take(16)->get();
        $data['bao'] = $bao;
        //第八屏觅样
        $last = DB::table('me_last')->get();
        $last = (array)$last[0];
        $data['last'] = $last;
        return view('qt_index_show',$data);
    }

}