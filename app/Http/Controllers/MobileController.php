<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use App\Jiangjinews;

class MobileController extends Controller
{   
	//匠几主页
    public function index(){
    	$data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','匠几')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        //匠几服务简介
        $service_introduce = DB::table('service_introduce_mobile')->get();
        $service_introduce = $service_introduce[0];
        $data['service_introduce'] = $service_introduce;
        //匠几服务图片
        $info = DB::table('service_module_mobile')->orderBy('id','asc')->get();
        $data['info'] = $info;
        //品牌案例
        $jiangji_case = DB::table('jiangji_case')
            ->select(['id','case_title','cover_pic','case_index'])
            ->where('is_cover',1)
            ->limit(5)
            ->get();
        $data['jiangji_case'] = $jiangji_case;
        //匠几团队
        $jiangji_team = DB::table('jiangji_team')->orderBy('sort_no','asc')->get();
        $num = count($jiangji_team);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($jiangji_team);
            $arr[$j][$i] = $a;
            if(is_int($i/3)){
                $j++;
            }
        }
        $data['jiangji_team'] = $arr;
        //匠几动态
        $jiangji_news = DB::table('jiangji_news')
            ->select(['id','title','date_time','hot_pic','hot_desp'])
            ->where('is_hot',1)
            ->limit(4)
            ->get();
        $data['jiangji_news'] = $jiangji_news;
        //合作流程
        $jiangji_process = DB::table('jiangji_process')->get();
        $jiangji_process = $jiangji_process[0];
        $data['jiangji_process'] = $jiangji_process;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
        return view('yd_index',$data);
    }

    //匠几文化
    public function culture(){
    	$data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','匠几文化')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        //匠几文化
        $culture = DB::table('jiangji_culture_mobile')->get();
        $culture = $culture[0];
        $data['culture'] = $culture;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
    	return view('yd_culture',$data);
    }

    //匠几服务
    public function service(){
    	$data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','匠几服务')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        //匠几服务
        $service = DB::table('jiangji_service')->orderBy('id','asc')->get();
        $i = '';
        foreach($service as $key => $value){
            $i = $value->id;
            $service_label = DB::table('jiangji_service_label')->where('service_id',$i)->pluck('label_name');
            $service[$key]->service_label = $service_label;
        }
        $data['service'] = $service;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
    	return view('yd_service',$data);
    }

    //品牌案例
    public function case(){
    	$data = [];
    	//banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','品牌案例')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
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
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
    	return view('yd_case',$data);
    }

    public function case_details($id){
        $data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','品牌案例')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        //品牌案例
        $case = DB::table('jiangji_case')->where('id',$id)->get();
        $case = $case[0];
        $data['case'] = $case;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
        return view('yd_case_details',$data);
    }

    //配套采购
    public function purchase(){
    	$data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','配套采购')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
    	// //配套采购
    	$purchase = DB::table('jiangji_purchase_mobile')->get();
        $purchase = $purchase[0];
    	$data['purchase'] = $purchase;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
    	return view('yd_purchase',$data);
    }

    //匠几动态
    public function news(){
        $data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','匠几动态')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
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
        return view('yd_news',$data);
    }

    public function news_details($id){
        $data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','匠几动态')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
        //匠几动态
        $news = DB::table('jiangji_news')->where('id',$id)->get();
        $data['news'] = $news;
        $template_no = DB::table('jiangji_news')->where('id',$id)->pluck('template_no');
        $template_no = $template_no[0];
        if($template_no == 1){
            $news_details = DB::table('jiangji_news_template1')
                ->orderBy('id','asc')->where('news_id',$id)->get();
            $data['news_details'] = (array)$news_details;
            return view('yd_news_details_first',$data);
        }else if($template_no == 2){
            $news_details = DB::table('jiangji_news_template2')
                ->orderBy('id','asc')->where('news_id',$id)->get();
            $data['news_details'] = (array)$news_details;
            return view('yd_news_details_second',$data);
        }else if($template_no == 3){
            $news_details = DB::table('jiangji_news_template3')
                ->orderBy('id','asc')->where('news_id',$id)->get();
            $data['news_details'] = (array)$news_details;
            return view('yd_news_details_third',$data);
        }
    }

    //联系匠几
    public function contact(){
    	$data = [];
        //banner图
        $jiangji_banner = DB::table('jiang_mobile_banner')
            ->where('banner_sort','联系匠几')
            ->pluck('banner_path');
        $data['jiangji_banner'] = $jiangji_banner[0];
        // //联系匠几
        $contact = DB::table('jiangji_relation_mobile')->get();
        $contact = $contact[0];
        $data['contact'] = $contact;
        //底部+弹窗
        $company_info = DB::table('company_info')->where('id',1)->get();
        $company_info = $company_info[0];
        $data['company_info'] = $company_info;
    	return view('yd_contact',$data);
    }

}