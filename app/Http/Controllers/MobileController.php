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
    public function index(){
        @session_start();
        //remember_me
        if(isset($_COOKIE['user_info'])){
            $_SESSION['user_info'] = $_COOKIE['user_info'];
            if(isset($_COOKIE['phone'])){
                $_SESSION['phone'] = $_COOKIE['phone'];
            }
        }
	    $data = [];
	    //banner
        $banner_wen = DB::table('me_banner')->where('banner_sort','觅闻')->get();
        $banner_wen = (array)$banner_wen[0];
        $data['banner_wen'] = $banner_wen;
        $banner_xiu = DB::table('me_banner')->where('banner_sort','觅秀')->get();
        $banner_xiu = (array)$banner_xiu[0];
        $data['banner_xiu'] = $banner_xiu;
        $banner_bao = DB::table('me_banner')->where('banner_sort','觅宝')->get();
        $banner_bao = (array)$banner_bao[0];
        $data['banner_bao'] = $banner_bao;
        //觅闻
        $me_wen = DB::table('me_news_cover')->get();
        $data['me_wen'] = $me_wen;
        //觅秀
        $me_xiu_video = DB::table('me_xiu_video')->limit(2)->get();
	    $data['me_xiu_video'] = $me_xiu_video;
        //觅尚
        $me_shang_magazine = DB::table('me_shang_magazine')->limit(2)->get();
        $data['me_shang_magazine'] = $me_shang_magazine;
        //觅宝
        $me_bao = DB::table('me_bao')->where('is_hot',1)->orderBy('like', 'desc')->take(4)->get();
        $data['bao'] = $me_bao;
        $num = count($me_bao);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($me_bao);
            if(is_int((($i-1)/2))){
                $arr[$j][$i] = $a;
            }else{
                $arr[$j][$i] = $a;
            }
            if(is_int($i/2)){
                $j++;
            }
        }
        $data['me_bao'] = $arr;
        return view('yd_index',$data);
    }

    public function doDianzan(){
        $cid = $_POST['cid'];
        $num = DB::table('me_bao')->where('id',$cid)->increment('like');
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

    public function me_wen_cover($id){
        $data = [];
        $banner_wen = DB::table('me_banner')->where('banner_sort','觅闻')->get();
        $banner_wen = (array)$banner_wen[0];
        $data['banner_wen'] = $banner_wen;
        $me_wen1 = DB::table('me_news_cover')->where('id',$id)->get();
        $me_wen1 = (array)$me_wen1[0];
        $me_wen2 = DB::table('me_news_details_cover')->where('news_id',$id)->get();
        $data['me_wen1'] = $me_wen1;
        $data['me_wen2'] = $me_wen2;
        return view('yd_shoutui_miwen_sanji',$data);
    }

    public function me_shang_cover($id){
        $data = [];
        $me_shang_first_pic = DB::table('me_shang_first_pic')->where('shang_id',$id)->orderBy('magazine_page', 'asc')->get();
        $data['me_shang_first_pic'] = $me_shang_first_pic;
        return view('yd_mishang_cover',$data);
    }

    public function me_wen(){
        $data = [];
        $banner_wen = DB::table('me_banner')->where('banner_sort','觅闻')->get();
        $banner_wen = (array)$banner_wen[0];
        $data['banner_wen'] = $banner_wen;
        $me_news_hot = DB::table('me_news')->where('kind','HOT')->orderBy('date', 'desc')->get();
        $data['me_news_hot'] = $me_news_hot;
        $me_news_yule = DB::table('me_news')->where('kind','娱乐')->orderBy('date', 'desc')->get();
        $data['me_news_yule'] = $me_news_yule;
        $me_news_chuanda = DB::table('me_news')->where('kind','穿搭')->orderBy('date', 'desc')->get();
        $data['me_news_chuanda'] = $me_news_chuanda;
        return view('yd_miwen',$data);
    }

    public function me_wen_details($id){
        $data = [];
        $banner_wen = DB::table('me_banner')->where('banner_sort','觅闻')->get();
        $banner_wen = (array)$banner_wen[0];
        $data['banner_wen'] = $banner_wen;
        $me_news = DB::table('me_news')->where('id',$id)->get();
        $me_news = (array)$me_news[0];
        $me_news_details = DB::table('me_news_details')->where('news_id',$id)->get();
        $data['me_news'] = $me_news;
        $data['me_news_details'] = $me_news_details;
        return view('yd_miwen_sanji',$data);
    }

    public function me_xiu(){
        $data = [];
        $banner_xiu = DB::table('me_banner')->where('banner_sort','觅秀')->get();
        $banner_xiu = (array)$banner_xiu[0];
        $data['banner_xiu'] = $banner_xiu;
        $me_xiu_video = DB::table('me_xiu_video')->take(3)->get();
        $data['me_xiu_video'] = $me_xiu_video;
        return view('yd_mixiu',$data);
    }

    public function me_xiu_third(){
        $data = [];
        $me_xiu_video_third = DB::table('me_xiu_video_third')->get();
        $data['video_third'] = $me_xiu_video_third;
        return view('yd_mixiu_sanji',$data);
    }

    public function me_shang_second(){
        $data = [];
        $me_shang = DB::table('me_shang_magazine')->get();
        $data['me_shang'] = $me_shang;
        return view('yd_mishang',$data);
    }

    public function me_shang_third($id){
        $data = [];
        $me_shang_pic = DB::table('me_shang_magazine_pic')->where('shang_id',$id)->orderBy('magazine_page', 'asc')->get();
        $data['me_shang_pic'] = $me_shang_pic;
        return view('yd_mishang_sanji',$data);
    }

    public function me_bao(){
        $data = [];
        $banner_bao = DB::table('me_banner')->where('banner_sort','觅宝')->get();
        $banner_bao = (array)$banner_bao[0];
        $data['banner_bao'] = $banner_bao;
        $me_bao = DB::table('me_bao')->where('is_hot',1)->orderBy('like', 'desc')->take(4)->get();
        $data['bao'] = $me_bao;
        $num = count($me_bao);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($me_bao);
            if(is_int((($i-1)/2))){
                $arr[$j][$i] = $a;
            }else{
                $arr[$j][$i] = $a;
            }
            if(is_int($i/2)){
                $j++;
            }
        }
        $data['me_bao'] = $arr;
        $bao_video = DB::table('me_bao_video')->where('is_hot',1)->orderBy('id','asc')->take(3)->get();
        $data['video'] = $bao_video;
        return view('yd_mibao',$data);
    }

    public function me_bao_third_video(){
        $data = [];
        $me_bao_video = DB::table('me_bao_video')->get();
        $data['bao'] = $me_bao_video;
        return view('yd_mibao_shipin_sanji',$data);
    }

    public function me_bao_third_child(){
        $data = [];
        $me_bao = DB::table('me_bao')->orderBy('like', 'desc')->get();
        $data['bao'] = $me_bao;
        $num = count($me_bao);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($me_bao);
            if(is_int((($i-1)/2))){
                $arr[$j][$i] = $a;
            }else{
                $arr[$j][$i] = $a;
            }
            if(is_int($i/2)){
                $j++;
            }
        }
        $data['me_bao'] = $arr;
        return view('yd_mibao_mibao_sanji',$data);
    }

    public function liandong(){
        $cid = $_POST['cid'];
        $province = DB::table('division_province')->get();
        $arr = [];
        foreach($province as $key => $value){
            if($value->area_id == $cid){
                $arr[] = $value;
            }
        }
        $arr = json_encode($arr);
        echo $arr;
    }

    public function liandong2(){
        $cid = $_POST['cid'];
        $city = DB::table('division_city')->get();
        $arr = [];
        foreach($city as $key => $value){
            if($value->province_id == $cid){
                $arr[] = $value;
            }
        }
        $arr = json_encode($arr);
        echo $arr;
    }

    public function me_bao_select_child(){
        $data = [];
        $sex = isset($_POST['sex'])?$_POST['sex']:'';
        $age = isset($_POST['age'])?$_POST['age']:'';
        $city = isset($_POST['city'])?$_POST['city']:'';
        $city_name = DB::table('division_city')->where('city_id',$city)->pluck('city_name');
        if($city_name){
            $city_name = $city_name[0];  
        }else{
            $city_name = '';
        }
        if($sex == 1){
            if($age == 1){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','男'],
                    ['age','>=',0],
                    ['age','<=',3],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get();
            }else if($age == 2){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','男'],
                    ['age','>=',4],
                    ['age','<=',6],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get();
            }else if($age == 3){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','男'],
                    ['age','>=',7],
                    ['age','<=',9],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get();                
            }else if($age == 4){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','男'],
                    ['age','>=',10],
                    ['age','<=',12],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get(); 
            }else if($age == 5){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','男'],
                    ['age','>=',13],
                    ['age','<=',15],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get(); 
            }
        }else if($sex == 2){
            if($age == 1){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','女'],
                    ['age','>=',0],
                    ['age','<=',3],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get();
            }else if($age == 2){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','女'],
                    ['age','>=',4],
                    ['age','<=',6],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get();
            }else if($age == 3){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','女'],
                    ['age','>=',7],
                    ['age','<=',9],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get();                
            }else if($age == 4){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','女'],
                    ['age','>=',10],
                    ['age','<=',12],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get(); 
            }else if($age == 5){
                $bao = DB::table('me_bao')->where([
                    ['sex','=','女'],
                    ['age','>=',13],
                    ['age','<=',15],
                    ['region','=',$city_name],
                    ])->orderBy('like','desc')->get(); 
            }
        }
        $bao = isset($bao)?$bao:[];
        $data['bao'] = $bao;
        $num = count($bao);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($bao);
            if(is_int((($i-1)/2))){
                $arr[$j][$i] = $a;
            }else{
                $arr[$j][$i] = $a;
            }
            if(is_int($i/2)){
                $j++;
            }
        }
        $data['me_bao'] = $arr;
        return view('yd_mibao_mibao_sanji',$data);
    }

    public function me_young(){
        $data = [];
        $banner_young = DB::table('me_banner')->where('banner_sort','觅样')->get();
        $banner_young = (array)$banner_young[0];
        $data['banner_young'] = $banner_young;
        $pinpai = DB::table('me_join')->where('kind','品牌')->take(2)->get();
        $data['pinpai'] = $pinpai;
        $meiti = DB::table('me_join')->where('kind','媒体')->take(1)->get();
        $data['meiti'] = $meiti;
        $huoban = DB::table('me_join')->where('kind','伙伴')->take(1)->get();
        $data['huoban'] = $huoban;
        $me_last = DB::table('me_last')->get();
        $me_last = (array)$me_last[0];
        $data['me_last'] = $me_last;
        return view('yd_miyang',$data);
    }

    public function me_join(){
        $data = [];
        $pinpai = DB::table('me_join')->where('kind','品牌')->get();
        $data['pinpai'] = $pinpai;
        $meiti = DB::table('me_join')->where('kind','媒体')->get();
        $data['meiti'] = $meiti;
        $huoban = DB::table('me_join')->where('kind','伙伴')->get();
        $data['huoban'] = $huoban;
        return view('yd_miyang_sanji',$data);
    }

    public function me_join_weixin(){
        $data = [];
        $wechat = DB::table('me_last')->pluck('wechat');
        $wechat = $wechat[0];
        $data['wechat'] = $wechat;
        return view('yd_wechat_erweima',$data);
    }

    public function me_join_weibo(){
        $data = [];
        $weibo = DB::table('me_last')->pluck('weibo');
        $weibo = $weibo[0];
        $data['weibo'] = $weibo;
        return view('yd_weibo_erweima',$data);
    }

    public function me_join_taobao(){
        $data = [];
        $taobao = DB::table('me_last')->pluck('taobao');
        $taobao = $taobao[0];
        $data['taobao'] = $taobao;
        return view('yd_taobao_erweima',$data);
    }

    public function me_join_qq(){
        $data = [];
        $qq = DB::table('me_last')->pluck('qq');
        $qq = $qq[0];
        $data['qq'] = $qq;
        return view('yd_qq_erweima',$data);
    }
    
}