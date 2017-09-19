<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Jiangjinews;

class IndexController extends Controller
{   
	//匠几主页
    public function index(){
    	$data = [];
    	//首屏视频
    	$screen_video = DB::table('screen_video')
    		->where('video_screen','首屏')
    		->pluck('video_path');
    	$screen_video = $screen_video[0];
        $data['screen_video'] = $screen_video;
        //匠几服务
        $service = DB::table('service_introduce')->orderBy('id','asc')->get();
        $data['service'] = $service;
        //匠几服务图
        $info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //品牌案例
        $jiangji_case = DB::table('jiangji_case')
	        ->select(['id','case_title','cover_pic','case_index'])
	        ->where('is_cover',1)
	        ->limit(5)
	        ->get();
	    $data['jiangji_case'] = $jiangji_case;
	    //匠几团队
	    $jiangji_team = DB::table('jiangji_team')->orderBy('id','asc')->get();
	    $i = '';
	    foreach($jiangji_team as $key => $value){
	    	$i = $value->id;
	    	$jiangji_team_intro = DB::table('jiangji_team_intro')->where('staff_id',$i)->pluck('staff_intro');
	    	$jiangji_team[$key]->jiangji_team_intro = $jiangji_team_intro;
	    }
	    $data['jiangji_team'] = $jiangji_team;
	    //匠几动态
	    $jiangji_news = DB::table('jiangji_news')
	    	->select(['id','title','date_time','hot_pic','hot_desp'])
	    	->where('is_hot',1)
	    	->limit(5)
	    	->get();
	    $data['jiangji_news'] = $jiangji_news;
	    //合作流程
	    $jiangji_cooperation = DB::table('jiangji_cooperation')->get();
	    $data['jiangji_cooperation'] = $jiangji_cooperation;
        return view('qt_jiangji_index',$data);
    }

    //匠几文化
    public function culture(){
    	$data = [];
    	//底部+弹窗
    	$info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
    	$banner = DB::table('jiang_banner')->where('banner_sort','匠几文化')->get();
    	$data['banner'] = $banner;
    	//匠几文化
    	$culture = DB::table('jiangji_culture')->orderBy('id','asc')->get();
    	$data['culture'] = $culture;
    	return view('qt_culture',$data);
    }

    //匠几服务
    public function service(){
    	$data = [];
    	//底部+弹窗
    	$info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;    	
        //banner
    	$banner = DB::table('jiang_banner')->where('banner_sort','匠几服务')->get();
    	$data['banner'] = $banner;
    	//匠几服务
    	$service = DB::table('jiangji_service')->orderBy('id','asc')->get();
    	$i = '';
    	foreach($service as $key => $value){
	    	$i = $value->id;
	    	$service_label = DB::table('jiangji_service_label')->where('service_id',$i)->pluck('label_name');
	    	$service[$key]->service_label = $service_label;
	    }
    	$data['service'] = $service;
    	return view('qt_service',$data);
    }

    //品牌案例
    public function case(){
    	$data = [];
    	//底部+弹窗
    	$info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
    	$banner = DB::table('jiang_banner')->where('banner_sort','品牌案例')->get();
    	$data['banner'] = $banner;
    	//品牌案例
        $hot_case = DB::table('jiangji_case')
            ->select(['id','case_title','service_content','coord','case_pic1','case_pic2','case_pic3'])
            ->where('is_hot',1)
            ->limit(3)
            ->orderBy('id','asc')
            ->get();
        $data['hot_case'] = $hot_case;
        $case = DB::table('jiangji_case')
            ->select(['id','case_title','service_content','coord','case_pic1'])
            ->where('is_hot',0)
            ->orderBy('id','asc')
            ->get();
        $data['case'] = $case;
    	return view('qt_case',$data);
    }

    public function case_details($id){
        $data = [];
        //底部+弹窗
        $info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
        $banner = DB::table('jiang_banner')->where('banner_sort','品牌案例')->get();
        $data['banner'] = $banner;
        //品牌案例
        $case = DB::table('jiangji_case')->where('id',$id)->get();
        $case = $case[0];
        $data['case'] = $case;
        return view('qt_case_third',$data);
    }

    //配套采购
    public function purchase(){
    	$data = [];
    	//底部+弹窗
    	$info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
    	$banner = DB::table('jiang_banner')->where('banner_sort','配套采购')->get();
    	$data['banner'] = $banner;
    	//配套采购
    	$purchase = DB::table('jiangji_purchase')->orderBy('id','asc')->get();
    	$data['purchase'] = $purchase;
    	return view('qt_purchase',$data);
    }

    //匠几动态
    public function news(){
        $data = [];
        //底部+弹窗
        $info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
        $banner = DB::table('jiang_banner')->where('banner_sort','匠几动态')->get();
        $data['banner'] = $banner;
        //匠几动态(全部动态)
        $news = Jiangjinews::orderBy('date_time','desc')->paginate(5);
        $data['news'] = $news;
        //行业分享
        $news_hy = DB::table('jiangji_news')
            ->where('category','行业分享')
            ->orderBy('date_time','desc')
            ->get();
        $data['news_hy'] = $news_hy;
        //匠几日志
        $news_rz = DB::table('jiangji_news')
            ->where('category','匠几日志')
            ->orderBy('date_time','desc')
            ->get();
        $data['news_rz'] = $news_rz;
        //品牌声浪
        $news_pp = DB::table('jiangji_news')
            ->where('category','品牌声浪')
            ->orderBy('date_time','desc')
            ->get();
        $data['news_pp'] = $news_pp;
        return view('qt_news',$data);
    }

    public function news_details($id){
        $data = [];
        //底部+弹窗
        $info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
        $banner = DB::table('jiang_banner')->where('banner_sort','匠几动态')->get();
        $data['banner'] = $banner;
        //匠几动态
        $news = DB::table('jiangji_news')->where('id',$id)->get();
        $data['news'] = $news;
        $template_no = DB::table('jiangji_news')->where('id',$id)->pluck('template_no');
        $template_no = $template_no[0];
        if($template_no == 1){
            $news_details = DB::table('jiangji_news_template1')
                ->orderBy('id','asc')->where('news_id',$id)->get();
            $data['news_details'] = (array)$news_details;
            return view('qt_news_details_first',$data);
        }else if($template_no == 2){
            $news_details = DB::table('jiangji_news_template2')
                ->orderBy('id','asc')->where('news_id',$id)->get();
            $data['news_details'] = (array)$news_details;
            return view('qt_news_details_second',$data);
        }else if($template_no == 3){
            $news_details = DB::table('jiangji_news_template3')
                ->orderBy('id','asc')->where('news_id',$id)->get();
            $data['news_details'] = (array)$news_details;
            return view('qt_news_details_third',$data);
        }
    }

    //联系匠几
    public function contact(){
    	$data = [];
    	//底部+弹窗
    	$info = DB::table('service_module')->orderBy('id','asc')->get();
        $data['info'] = $info;
        $company_info = DB::table('company_info')->where('id',1)->get();
        $data['company_info'] = $company_info;
        //banner
    	$banner = DB::table('jiang_banner')->where('banner_sort','联系匠几')->get();
    	$data['banner'] = $banner;
    	//联系匠几
    	$contact = DB::table('jiangji_relation')->get();
    	$data['contact'] = $contact;
    	return view('qt_lianxijiangji',$data);
    }
    
 


}