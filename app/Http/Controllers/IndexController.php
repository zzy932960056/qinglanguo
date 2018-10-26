<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class IndexController extends Controller
{
	  //青蓝果主页
    public function index(){
    	  $data = [];
        //banner
        $banner = DB::table('qlg_banner')->get();
        $data['banner'] = $banner;
        //青蓝果之家
        $home = DB::table('qlg_home_info')->orderBy('id','asc')->get();
        $data['home'] = $home;
        //园所动态(园所快报)
        $news_ys = DB::table('qlg_news')
                ->where('news_sort','园所快报')
                ->limit(3)
                ->orderBy('news_date','desc')
                ->get();
        $data['news_ys'] = $news_ys;
        //园所动态(健康护航)
        $news_jk = DB::table('qlg_news')
                ->where('news_sort','健康护航')
                ->limit(3)
                ->orderBy('news_date','desc')
                ->get();
        $data['news_jk'] = $news_jk;
        //园所动态(金色时光)
        $news_js = DB::table('qlg_news')
                ->where('news_sort','金色时光')
                ->limit(3)
                ->orderBy('news_date','desc')
                ->get();
        $data['news_js'] = $news_js;
        //园所动态(最美芳华)
        $news_zm = DB::table('qlg_news')
                ->where('news_sort','最美芳华')
                ->limit(3)
                ->orderBy('news_date','desc')
                ->get();
        $data['news_zm'] = $news_zm;
        //园所动态(为爱同行)
        $news_wa = DB::table('qlg_news')
                ->where('news_sort','为爱同行')
                ->limit(3)
                ->orderBy('news_date','desc')
                ->get();
        $data['news_wa'] = $news_wa;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_index',$data);
    }

    //青蓝果之家(中心园)
    public function home(){
    	  $data = [];
        //青蓝果之家
        $home = DB::table('qlg_home')->get();
        $data['home'] = $home;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
    	  return view('qt_home',$data);
    }

    //青蓝果之家(王舍园)
    public function home_ws(){
        $data = [];
        //青蓝果之家
        $home = DB::table('qlg_home')->get();
        $data['home'] = $home;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_home_ws',$data);
    }

    //青蓝果之家(南家园)
    public function home_nj(){
        $data = [];
        //青蓝果之家
        $home = DB::table('qlg_home')->get();
        $data['home'] = $home;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_home_nj',$data);
    }

    //青蓝果之家(芳草园)
    public function home_fc(){
        $data = [];
        //青蓝果之家
        $home = DB::table('qlg_home')->get();
        $data['home'] = $home;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_home_fc',$data);
    }

    //青蓝果之家(颐丰园)
    public function home_yf(){
        $data = [];
        //青蓝果之家
        $home = DB::table('qlg_home')->get();
        $data['home'] = $home;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_home_yf',$data);
    }

    //青蓝果教育
    public function education(){
        $data = [];
        //传统文化
        $edu_culture = DB::table('edu_culture')->get();
        $data['edu_culture'] = $edu_culture;
        //探究空间
        $edu_space = DB::table('edu_space')->get();
        $data['edu_space'] = $edu_space;
        //健康领动
        $edu_health = DB::table('edu_health')->get();
        $data['edu_health'] = $edu_health;
        //艺术创想
        $edu_art = DB::table('edu_art')->get();
        $data['edu_art'] = $edu_art;
        //社会链接
        $edu_social = DB::table('edu_social')->get();
        $data['edu_social'] = $edu_social;
        //师资力量
        $edu_teach = DB::table('edu_teach')->get();
        $data['edu_teach'] = $edu_teach;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_education',$data);
    }

    //青蓝果文化
    public function culture(){
        $data = [];
        //青蓝果解析
        $analysis = DB::table('cul_analysis')->get();
        $data['analysis'] = $analysis;
        //青蓝精神
        $spirit = DB::table('cul_spirit')->get();
        $data['spirit'] = $spirit;
        //青蓝果标语
        $slogan = DB::table('cul_slogan')->get();
        $data['slogan'] = $slogan;
        //办园理念
        $idea = DB::table('cul_idea')->get();
        $data['idea'] = $idea;
        //办园宗旨
        $purpose = DB::table('cul_purpose')->get();
        $data['purpose'] = $purpose;
        //园训
        $teach = DB::table('cul_teach')->get();
        $data['teach'] = $teach;
        //团队文化
        $team = DB::table('cul_team')->get();
        $data['team'] = $team;
        //标志
        $logo = DB::table('vis_logo')->get();
        $data['logo'] = $logo;
        //吉祥物
        $mascot = DB::table('vis_mascot')->get();
        $data['mascot'] = $mascot;
        //园服
        $clothes = DB::table('vis_clothes')->get();
        $data['clothes'] = $clothes;
        //环境文化
        $env = DB::table('env_cul')->get();
        $data['env'] = $env;
        //食育文化
        $food = DB::table('food_cul')->get();
        $data['food'] = $food;
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
        return view('qt_culture',$data);
    }


}
