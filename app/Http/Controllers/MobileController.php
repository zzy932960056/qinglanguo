<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;

class MobileController extends Controller
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
        return view('yd_index',$data);
    }

    //青蓝果之家
    public function home(){
    	  $data = [];
        //青蓝果之家
        $home = DB::table('qlg_home')->get();
        $data['home'] = $home;
    	  return view('yd_home',$data);
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
        return view('yd_education',$data);
    }

    //青蓝果文化(园所理念)
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
        $env = DB::table('env_cul_yd')->get();
        $data['env'] = $env;
        //食育文化
        $food = DB::table('food_cul')->get();
        $data['food'] = $food;
        return view('yd_culture',$data);
    }

    //青蓝果文化(视觉形象)
    public function culture_vi(){
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
        $env = DB::table('env_cul_yd')->get();
        $data['env'] = $env;
        //食育文化
        $food = DB::table('food_cul')->get();
        $data['food'] = $food;
        return view('yd_culture_vi',$data);
    }

    //青蓝果文化(环境文化)
    public function culture_env(){
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
        $env = DB::table('env_cul_yd')->get();
        $data['env'] = $env;
        //食育文化
        $food = DB::table('food_cul')->get();
        $data['food'] = $food;
        return view('yd_culture_env',$data);
    }

    //青蓝果文化(食育文化)
    public function culture_food(){
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
        $env = DB::table('env_cul_yd')->get();
        $data['env'] = $env;
        //食育文化
        $food = DB::table('food_cul')->get();
        $data['food'] = $food;
        return view('yd_culture_food',$data);
    }

    // //青蓝果动态
    // public function news(){
    //     $data = [];
    //     //动态头图
    //     $news_pic = DB::table('qlg_news_pic')->get();
    //     $data['news_pic'] = $news_pic;
    //     //春-园所快报
    //     $chun_ys = DB::table('qlg_news')
    //     ->where([['news_season', '=', '春'],['news_sort', '=', '园所快报'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['chun_ys'] = $chun_ys;
    //     //春-健康护航
    //     $chun_jk = DB::table('qlg_news')
    //     ->where([['news_season', '=', '春'],['news_sort', '=', '健康护航'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['chun_jk'] = $chun_jk;
    //     //春-金色时光
    //     $chun_js = DB::table('qlg_news')
    //     ->where([['news_season', '=', '春'],['news_sort', '=', '金色时光'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['chun_js'] = $chun_js;
    //     //春-最美芳华
    //     $chun_zm = DB::table('qlg_news')
    //     ->where([['news_season', '=', '春'],['news_sort', '=', '最美芳华'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['chun_zm'] = $chun_zm;
    //     //春-为爱同行
    //     $chun_wa = DB::table('qlg_news')
    //     ->where([['news_season', '=', '春'],['news_sort', '=', '为爱同行'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['chun_wa'] = $chun_wa;
    //     //夏-园所快报
    //     $xia_ys = DB::table('qlg_news')
    //     ->where([['news_season', '=', '夏'],['news_sort', '=', '园所快报'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['xia_ys'] = $xia_ys;
    //     //夏-健康护航
    //     $xia_jk = DB::table('qlg_news')
    //     ->where([['news_season', '=', '夏'],['news_sort', '=', '健康护航'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['xia_jk'] = $xia_jk;
    //     //夏-金色时光
    //     $xia_js = DB::table('qlg_news')
    //     ->where([['news_season', '=', '夏'],['news_sort', '=', '金色时光'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['xia_js'] = $xia_js;
    //     //夏-最美芳华
    //     $xia_zm = DB::table('qlg_news')
    //     ->where([['news_season', '=', '夏'],['news_sort', '=', '最美芳华'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['xia_zm'] = $xia_zm;
    //     //夏-为爱同行
    //     $xia_wa = DB::table('qlg_news')
    //     ->where([['news_season', '=', '夏'],['news_sort', '=', '为爱同行'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['xia_wa'] = $xia_wa;
    //     //秋-园所快报
    //     $qiu_ys = DB::table('qlg_news')
    //     ->where([['news_season', '=', '秋'],['news_sort', '=', '园所快报'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['qiu_ys'] = $qiu_ys;
    //     //秋-健康护航
    //     $qiu_jk = DB::table('qlg_news')
    //     ->where([['news_season', '=', '秋'],['news_sort', '=', '健康护航'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['qiu_jk'] = $qiu_jk;
    //     //秋-金色时光
    //     $qiu_js = DB::table('qlg_news')
    //     ->where([['news_season', '=', '秋'],['news_sort', '=', '金色时光'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['qiu_js'] = $qiu_js;
    //     //秋-最美芳华
    //     $qiu_zm = DB::table('qlg_news')
    //     ->where([['news_season', '=', '秋'],['news_sort', '=', '最美芳华'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['qiu_zm'] = $qiu_zm;
    //     //秋-为爱同行
    //     $qiu_wa = DB::table('qlg_news')
    //     ->where([['news_season', '=', '秋'],['news_sort', '=', '为爱同行'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['qiu_wa'] = $qiu_wa;
    //     //冬-园所快报
    //     $dong_ys = DB::table('qlg_news')
    //     ->where([['news_season', '=', '冬'],['news_sort', '=', '园所快报'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['dong_ys'] = $dong_ys;
    //     //冬-健康护航
    //     $dong_jk = DB::table('qlg_news')
    //     ->where([['news_season', '=', '冬'],['news_sort', '=', '健康护航'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['dong_jk'] = $dong_jk;
    //     //冬-金色时光
    //     $dong_js = DB::table('qlg_news')
    //     ->where([['news_season', '=', '冬'],['news_sort', '=', '金色时光'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['dong_js'] = $dong_js;
    //     //冬-最美芳华
    //     $dong_zm = DB::table('qlg_news')
    //     ->where([['news_season', '=', '冬'],['news_sort', '=', '最美芳华'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['dong_zm'] = $dong_zm;
    //     //冬-为爱同行
    //     $dong_wa = DB::table('qlg_news')
    //     ->where([['news_season', '=', '冬'],['news_sort', '=', '为爱同行'],])
    //     ->limit(8)
    //     ->orderBy('news_date','desc')
    //     ->get();
    //     $data['dong_wa'] = $dong_wa;
    //     //备案信息
    //     $company_info = DB::table('company_info')->get();
    //     $data['company_info'] = $company_info;
    //     return view('qt_news',$data);
    // }
    //
    // //青蓝果动态(三级)
    // public function news_details($id){
    //     $data = [];
    //     //动态
    //     $news = DB::table('qlg_news')
    //               ->where('id',$id)
    //               ->get();
    //     $data['news'] = $news;
    //     //动态详情
    //     $news_details = DB::table('qlg_news_detail')
    //               ->orderBy('id','asc')
    //               ->where('news_id',$id)
    //               ->get();
    //     $data['news_details'] = $news_details;
    //     //备案信息
    //     $company_info = DB::table('company_info')->get();
    //     $data['company_info'] = $company_info;
    //     return view('qt_news_details',$data);
    // }

}
