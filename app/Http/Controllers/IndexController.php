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

    //青蓝果之家
    public function home(){
    	  $data = [];
        //备案信息
        $company_info = DB::table('company_info')->get();
        $data['company_info'] = $company_info;
    	  // //青蓝果教学特色(亿童课程)
        // $teaching_yt = Teaching::where('course_sign','yt')->orderBy('id','asc')->paginate(4);
        // $data['teaching_yt'] = $teaching_yt;
    	  return view('qt_home',$data);
    }

  //   //青蓝果教学特色(布朗课程)
  //   public function teaching_bl(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','教学特色')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //青蓝果教学特色(布朗课程)
  //       $teaching_bl = Teaching::where('course_sign','bl')->orderBy('id','asc')->paginate(4);
  //       $data['teaching_bl'] = $teaching_bl;
  //       return view('qt_jiaoxuetese_bl_erji',$data);
  //   }
  //
  //   //青蓝果教学特色(艺术创想)
  //   public function teaching_ys(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','教学特色')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //青蓝果教学特色(艺术创想)
  //       $teaching_ys = Teaching::where('course_sign','ys')->orderBy('id','asc')->paginate(4);
  //       $data['teaching_ys'] = $teaching_ys;
  //       return view('qt_jiaoxuetese_ys_erji',$data);
  //   }
  //
  //   //青蓝果教学特色(青蓝果早教)
  //   public function teaching_zj(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','教学特色')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //青蓝果教学特色(青蓝果早教)
  //       $teaching_zj = Teaching::where('course_sign','zj')->orderBy('id','asc')->paginate(4);
  //       $data['teaching_zj'] = $teaching_zj;
  //       return view('qt_jiaoxuetese_zj_erji',$data);
  //   }
  //
  //   //青蓝果教学特色详情
  //   public function teaching_details($id){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','教学特色')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //主体
  //       $teaching = DB::table('teaching_feature')->where('id',$id)->get();
  //       $data['teaching'] = $teaching;
  //       //标签
  //       $label = DB::table('teaching_feature_label')->where('feature_id',$id)->orderBy('id','asc')->get();
  //       $data['label'] = $label;
  //       //标签详情
  //       foreach($label as $k => $v){
  //           $label_details = DB::table('teaching_feature_label_index')
  //                               ->where('label_id',$v->id)
  //                               ->orderBy('id','asc')
  //                               ->get();
  //           $label[$k]->details = $label_details;
  //       }
  //       $data['label_details'] = $label;
  //       return view('qt_jiaoxuetese_sanji',$data);
  //   }
  //
  //   //青蓝果文化
  //   public function culture(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','青蓝果文化')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //青蓝果教育理念
  //       $concept = DB::table('education_concept')->get();
  //       $data['concept'] = $concept;
  //       //青蓝果文化
  //       $culture = DB::table('culture_classify')->get();
  //       $data['culture'] = $culture;
  //       //青蓝果团队文本
  //       $team_intro = DB::table('team_intro')->get();
  //       $data['team_intro'] = $team_intro;
  //       //青蓝果团队教师
  //       $team_teacher = DB::table('team_teacher')->orderBy('id','asc')->get();
  //       $b = count($team_teacher);
  //       $arr = [];
  //       $j = 0;
  //       for($i=1;$i<=$b;$i++){
  //           $a = array_shift($team_teacher);
  //           $arr[$j][$i] = $a;
  //           if(is_int($i/4)){
  //               $j++;
  //           }
  //       }
  //       $data['team_teacher'] = $arr;
  //       //青蓝果说
  //       $speak = DB::table('education_speak')->get();
  //       $data['speak'] = $speak;
  //       return view('qt_anjilawenhua_erji',$data);
  //   }
  //
  //   //青蓝果文化详情
  //   public function culture_details($id){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','青蓝果文化')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //主体
  //       $culture = DB::table('culture_classify')->where('id',$id)->get();
  //       $data['culture'] = $culture;
  //       //标签
  //       $label = DB::table('culture_label')->where('culture_id',$id)->orderBy('id','asc')->get();
  //       $data['label'] = $label;
  //       //标签详情
  //       foreach($label as $k => $v){
  //           $label_details = DB::table('culture_label_index')
  //                               ->where('label_id',$v->id)
  //                               ->orderBy('id','asc')
  //                               ->get();
  //           $label[$k]->details = $label_details;
  //       }
  //       $data['label_details'] = $label;
  //       return view('qt_anjilawenhua_sanji',$data);
  //   }
  //
  //   //园所动态二级(社会活动)
  //   public function news_sh(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','园所动态')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //园所动态二级(社会活动)
  //       $news_sh = News::where('sort','社会活动')->orderBy('id','asc')->paginate(4);
  //       $data['news_sh'] = $news_sh;
  //       return view('qt_yuansuodongtai_sh_erji',$data);
  //   }
  //
  //   // //园所动态二级(节日活动)
  //   public function news_jr(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','园所动态')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //园所动态二级(节日活动)
  //       $news_jr = News::where('sort','节日活动')->orderBy('id','asc')->paginate(4);
  //       $data['news_jr'] = $news_jr;
  //       return view('qt_yuansuodongtai_jr_erji',$data);
  //   }
  //
  //   //园所动态二级(班级活动)
  //   public function news_bj(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','园所动态')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //园所动态二级(班级活动)
  //       $news_bj = News::where('sort','班级活动')->orderBy('id','asc')->paginate(4);
  //       $data['news_bj'] = $news_bj;
  //       return view('qt_yuansuodongtai_bj_erji',$data);
  //   }
  //
  //   //园所动态二级(父母沙龙)
  //   public function news_fm(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','园所动态')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //园所动态二级(父母沙龙)
  //       $news_fm = News::where('sort','父母沙龙')->orderBy('id','asc')->paginate(4);
  //       $data['news_fm'] = $news_fm;
  //       return view('qt_yuansuodongtai_fm_erji',$data);
  //   }
  //
  //   //青蓝果教学特色三级
  //   public function news_details($id){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','园所动态')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //主体
  //       $news = DB::table('anjila_news')->where('id',$id)->get();
  //       $data['news'] = $news;
  //       //详情
  //       $details = DB::table('anjila_news_details')->where('news_id',$id)->orderBy('id','asc')->get();
  //       $data['details'] = $details;
  //       return view('qt_yuansuodongtai_sanji',$data);
  //   }
  //
  //   //常青藤课程
  //   public function curriculum(){
  //       $data = [];
  //       //banner
  //       $banner = DB::table('anjila_banner')->where('banner_sort','常青藤课程')->get();
  //       $data['banner'] = $banner;
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //主体
  //       $curriculum1 = DB::table('curriculum_idea')->get();
  //       $data['curriculum1'] = $curriculum1;
  //       $curriculum2 = DB::table('curriculum_paragraph')->get();
  //       $data['curriculum2'] = $curriculum2;
  //       $curriculum3 = DB::table('consultative_course_text')->get();
  //       $data['curriculum3'] = $curriculum3;
  //       $curriculum4 = DB::table('consultative_course_paragraph')->get();
  //       $data['curriculum4'] = $curriculum4;
  //       $curriculum5 = DB::table('consultative_course_carousel')->get();
  //       $b = count($curriculum5);
  //       $arr = [];
  //       $j = 0;
  //       for($i=1;$i<=$b;$i++){
  //           $a = array_shift($curriculum5);
  //           $arr[$j][$i] = $a;
  //           if(is_int($i/3)){
  //               $j++;
  //           }
  //       }
  //       $data['curriculum5'] = $arr;
  //       return view('qt_changqingtengkecheng',$data);
  //   }
  //   //关于我们
  //   public function about(){
  //       $data = [];
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //主体
  //       $about = DB::table('about_anjila')->get();
  //       $data['about'] = $about;
  //       $about_pic = DB::table('about_anjila_pic')->get();
  //       $data['about_pic'] = $about_pic;
  //       $history = DB::table('development_history_text')->get();
  //       $data['history'] = $history;
  //       $time = DB::table('development_timer_shaft')->get();
  //       $data['time'] = $time;
  //       $team_text = DB::table('manage_team_text')->get();
  //       $data['team_text'] = $team_text;
  //       $anjila_team = DB::table('anjila_team')->get();
  //       $data['anjila_team'] = $anjila_team;
  //       $kindergarten = DB::table('kindergarten_index')->orderBy('id','asc')->get();
  //       $b = count($kindergarten);
  //       $arr = [];
  //       $j = 0;
  //       for($i=1;$i<=$b;$i++){
  //           $a = array_shift($kindergarten);
  //           $arr[$j][$i] = $a;
  //           if(is_int($i/4)){
  //               $j++;
  //           }
  //       }
  //       $data['kindergarten'] = $arr;
  //       return view('qt_guanyuwomen',$data);
  //   }
  //
  //   //园所分部详情
  //   public function about_details($id){
  //       $data = [];
  //       //底部信息
  //       $company_info = DB::table('company_info')->where('id',1)->get();
  //       $data['company_info'] = $company_info;
  //       //主体
  //       $kindergarten = DB::table('kindergarten_index')->where('id',$id)->get();
  //       $data['kindergarten'] = $kindergarten;
  //       //标签
  //       $label = DB::table('kindergarten_label')->where('kinder_id',$id)->orderBy('id','asc')->get();
  //       $data['label'] = $label;
  //       //标签详情
  //       foreach($label as $k => $v){
  //           $label_details = DB::table('kindergarten_label_index')
  //                               ->where('label_id',$v->id)
  //                               ->orderBy('id','asc')
  //                               ->get();
  //           $label[$k]->details = $label_details;
  //       }
  //       $data['label_details'] = $label;
  //       return view('qt_guanyuwomen_sanji',$data);
  //   }

}
