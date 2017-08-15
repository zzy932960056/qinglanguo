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
        return view('qt_index',$data);
    }

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
        return view('qt_miwen_shoutui_sanji',$data);
    }

    public function me_wen(){
        $data = [];
        $banner_wen = DB::table('me_banner')->where('banner_sort','觅闻')->get();
        $banner_wen = (array)$banner_wen[0];
        $data['banner_wen'] = $banner_wen;
        $me_news_hot = DB::table('me_news')->where('kind','HOT')->orderBy('date', 'desc')->get();
        $num1 = count($me_news_hot);
        $arr1 = [];
        $j = 0;
        for($i=1;$i<=$num1;$i++){
            $a = array_shift($me_news_hot);
            $arr1[$j][$i] = $a;
            if(is_int($i/4)){
                $j++;
            }
        }
        $data['me_news_hot'] = $arr1;
        $me_news_yule = DB::table('me_news')->where('kind','娱乐')->orderBy('date', 'desc')->get();
        $num2 = count($me_news_yule);
        $arr2 = [];
        $n = 0;
        for($m=1;$m<=$num2;$m++){
            $b = array_shift($me_news_yule);
            $arr2[$n][$m] = $b;
            if(is_int($m/4)){
                $n++;
            }
        }
        $data['me_news_yule'] = $arr2;
        $me_news_chuanda = DB::table('me_news')->where('kind','穿搭')->orderBy('date', 'desc')->get();
        $num3 = count($me_news_chuanda);
        $arr3 = [];
        $q = 0;
        for($p=1;$p<=$num3;$p++){
            $c = array_shift($me_news_chuanda);
            $arr3[$q][$p] = $c;
            if(is_int($p/4)){
                $q++;
            }
        }
        $data['me_news_chuanda'] = $arr3;
        return view('qt_miwen_erji',$data);
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
        return view('qt_miwen_sanji',$data);
    }

    public function me_xiu(){
        $data = [];
        $banner_xiu = DB::table('me_banner')->where('banner_sort','觅秀')->get();
        $banner_xiu = (array)$banner_xiu[0];
        $data['banner_xiu'] = $banner_xiu;
        $me_xiu_left = DB::table('me_xiu_left')->get();
        $me_xiu_left = (array)$me_xiu_left[0];
        $data['me_xiu_left'] = $me_xiu_left;
        $me_xiu_right = DB::table('me_xiu_right')->get();
        $data['me_xiu_right'] = $me_xiu_right;
        $me_xiu_video = DB::table('me_xiu_video')->get();
        $data['me_xiu_video'] = $me_xiu_video;
        return view('qt_mixiu_erji',$data);
    }

    public function me_xiu_third(){
        $data = [];
        $me_xiu_video_third = DB::table('me_xiu_video_third')->get();
        $num = count($me_xiu_video_third);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($me_xiu_video_third);
            $arr[$j][$i] = $a;
            if(is_int($i/6)){
                $j++;
            }
        }
        $data['xiu_video'] = $arr;
        $me_xiu_video = DB::table('me_xiu_video_third')->get();
        $data['xiu'] = $me_xiu_video;
        $coun = count($me_xiu_video);
        $cou = '';
        if(is_int($coun/6)){
            $cou = $coun/6;
        }else{
            $cou = ceil($coun/6);
        }
        $carousel = [];
        for($n=1;$n<=$cou;$n++){
            $carousel[$n] = $n-1;
        }
        $data['carousel'] = $carousel;
        return view('qt_mixiu_sanji',$data);
    }

    public function me_shang_cover($id){
        $data = [];
        $me_shang_first = DB::table('me_shang_first')->where('id',$id)->get();
        $me_shang_first = (array)$me_shang_first[0];
        $me_shang_first_pic = DB::table('me_shang_first_pic')->where('shang_id',$id)->orderBy('magazine_page', 'asc')->get();
        $me_shang_first_text = DB::table('me_shang_first_text')->where('shang_id',$id)->get();
        $data['me_shang_first'] = $me_shang_first;
        $data['me_shang_first_pic'] = $me_shang_first_pic;
        $data['me_shang_first_text'] = $me_shang_first_text;
        return view('qt_mishang_shoutui_sanji',$data);
    }

    public function me_shang_second(){
        $data = [];
        $me_shang = DB::table('me_shang_magazine')->get();
        $num = count($me_shang);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($me_shang);
            if(is_int((($i-1)/5))){
                $arr[$j][1] = $a;
            }else{
                $arr[$j][2][$i] = $a;
            }
            if(is_int($i/5)){
                $j++;
            }
        }
        $data['me_shang'] = $arr;
        return view('qt_mishang_erji',$data);
    }

    public function me_shang_third($id){
        $data = [];
        $me_shang = DB::table('me_shang_magazine')->where('id',$id)->get();
        $me_shang = (array)$me_shang[0];
        $me_shang_pic = DB::table('me_shang_magazine_pic')->where('shang_id',$id)->orderBy('magazine_page', 'asc')->get();
        $me_shang_text = DB::table('me_shang_magazine_text')->where('shang_id',$id)->get();
        $data['me_shang'] = $me_shang;
        $data['me_shang_pic'] = $me_shang_pic;
        $data['me_shang_text'] = $me_shang_text;
        return view('qt_mishang_sanji',$data);
    }

    public function me_bao(){
        $data = [];
        $banner_bao = DB::table('me_banner')->where('banner_sort','觅宝')->get();
        $banner_bao = (array)$banner_bao[0];
        $data['banner_bao'] = $banner_bao;
        $bao = DB::table('me_bao')->where('is_hot',1)->orderBy('like', 'desc')->take(9)->get();
        $data['bao'] = $bao;
        $bao_video = DB::table('me_bao_video')->where('is_hot',1)->orderBy('id','asc')->take(6)->get();
        $data['video'] = $bao_video;
        $num = count($bao_video);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($bao_video);
            if(is_int((($i-1)/3))){
                $arr[$j][1] = $a;
            }else{
                $arr[$j][2][$i] = $a;
            }
            if(is_int($i/3)){
                $j++;
            }
        }
        $data['bao_video'] = $arr;
        return view('qt_mibao_erji',$data);
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

    public function me_bao_third_video(){
        $data = [];
        $me_bao_video = DB::table('me_bao_video')->get();
        $data['bao'] = $me_bao_video;
        $coun = count($me_bao_video);
        $cou = '';
        if(is_int($coun/6)){
            $cou = $coun/6;
        }else{
            $cou = ceil($coun/6);
        }
        $carousel = [];
        for($n=1;$n<=$cou;$n++){
            $carousel[$n] = $n-1;
        }
        $data['carousel'] = $carousel;
        $num = count($me_bao_video);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$num;$i++){
            $a = array_shift($me_bao_video);
            $arr[$j][$i] = $a;
            if(is_int($i/6)){
                $j++;
            }
        }
        $data['bao_video'] = $arr;
        return view('qt_mibao_shipin_sanji',$data);
    }

    public function me_bao_third_child(){
        $data = [];
        $bao = DB::table('me_bao')->orderBy('like', 'desc')->get();
        $data['bao'] = $bao;
        $nvbao = DB::table('me_bao')->where('sex','女')->orderBy('like','desc')->get();
        $data['nvbao'] = $nvbao;
        $nanbao = DB::table('me_bao')->where('sex','男')->orderBy('like','desc')->get();
        $data['nanbao'] = $nanbao;
        $bao_age1 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[0,3])->orderBy('like','desc')->get();
        $data['bao_age1'] = $bao_age1;
        $bao_age2 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[4,6])->orderBy('like','desc')->get();
        $data['bao_age2'] = $bao_age2;
        $bao_age3 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[7,9])->orderBy('like','desc')->get();
        $data['bao_age3'] = $bao_age3;
        $bao_age4 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[10,12])->orderBy('like','desc')->get();
        $data['bao_age4'] = $bao_age4;
        $bao_age5 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[13,15])->orderBy('like','desc')->get();
        $data['bao_age5'] = $bao_age5;
        return view('qt_mibao_mibao_sanji',$data);
    }

    public function me_bao_third_child_city($city){
        $data = [];
        $bao = DB::table('me_bao')->where('region',$city)->orderBy('like', 'desc')->get();
        $data['bao'] = $bao;
        $nvbao = DB::table('me_bao')->where('sex','女')->orderBy('like','desc')->get();
        $data['nvbao'] = $nvbao;
        $nanbao = DB::table('me_bao')->where('sex','男')->orderBy('like','desc')->get();
        $data['nanbao'] = $nanbao;
        $bao_age1 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[0,3])->orderBy('like','desc')->get();
        $data['bao_age1'] = $bao_age1;
        $bao_age2 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[4,6])->orderBy('like','desc')->get();
        $data['bao_age2'] = $bao_age2;
        $bao_age3 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[7,9])->orderBy('like','desc')->get();
        $data['bao_age3'] = $bao_age3;
        $bao_age4 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[10,12])->orderBy('like','desc')->get();
        $data['bao_age4'] = $bao_age4;
        $bao_age5 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[13,15])->orderBy('like','desc')->get();
        $data['bao_age5'] = $bao_age5;
        return view('qt_mibao_mibao_sanji',$data);
    }

    public function me_bao_third_city_child(){
        $data = [];
        $city = isset($_POST['city'])?$_POST['city']:'';
        $bao = DB::table('me_bao')->where('region',$city)->orderBy('like', 'desc')->get();
        $bao = isset($bao)?$bao:[];
        $data['bao'] = $bao;
        $nvbao = DB::table('me_bao')->where('sex','女')->orderBy('like','desc')->get();
        $data['nvbao'] = $nvbao;
        $nanbao = DB::table('me_bao')->where('sex','男')->orderBy('like','desc')->get();
        $data['nanbao'] = $nanbao;
        $bao_age1 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[0,3])->orderBy('like','desc')->get();
        $data['bao_age1'] = $bao_age1;
        $bao_age2 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[4,6])->orderBy('like','desc')->get();
        $data['bao_age2'] = $bao_age2;
        $bao_age3 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[7,9])->orderBy('like','desc')->get();
        $data['bao_age3'] = $bao_age3;
        $bao_age4 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[10,12])->orderBy('like','desc')->get();
        $data['bao_age4'] = $bao_age4;
        $bao_age5 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[13,15])->orderBy('like','desc')->get();
        $data['bao_age5'] = $bao_age5;
        return view('qt_mibao_mibao_sanji',$data);
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
        $nvbao = DB::table('me_bao')->where('sex','女')->orderBy('like','desc')->get();
        $data['nvbao'] = $nvbao;
        $nanbao = DB::table('me_bao')->where('sex','男')->orderBy('like','desc')->get();
        $data['nanbao'] = $nanbao;
        $bao_age1 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[0,3])->orderBy('like','desc')->get();
        $data['bao_age1'] = $bao_age1;
        $bao_age2 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[4,6])->orderBy('like','desc')->get();
        $data['bao_age2'] = $bao_age2;
        $bao_age3 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[7,9])->orderBy('like','desc')->get();
        $data['bao_age3'] = $bao_age3;
        $bao_age4 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[10,12])->orderBy('like','desc')->get();
        $data['bao_age4'] = $bao_age4;
        $bao_age5 = DB::table('me_bao')->whereRaw('age>=? and age<=?',[13,15])->orderBy('like','desc')->get();
        $data['bao_age5'] = $bao_age5;
        return view('qt_mibao_mibao_sanji',$data);
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

    public function me_join(){
        $data = [];
        $pinpai = DB::table('me_join')->where('kind','品牌')->get();
        $coun1 = count($pinpai);
        $cou1 = '';
        if(is_int($coun1/9)){
            $cou1 = $coun1/9;
        }else{
            $cou1 = ceil($coun1/9);
        }
        $carousel1 = [];
        for($n=1;$n<=$cou1;$n++){
            $carousel1[$n] = $n-1;
        }
        $data['carousel1'] = $carousel1;
        $b = count($pinpai);
        $arr = [];
        $j = 0;
        for($i=1;$i<=$b;$i++){
            $a = array_shift($pinpai);
            $arr[$j][$i] = $a;
            if(is_int($i/9)){
                $j++;
            }
        }
        $data['pinpai'] = $arr;

        $meiti = DB::table('me_join')->where('kind','媒体')->get();
        $coun2 = count($meiti);
        $cou2 = '';
        if(is_int($coun2/9)){
            $cou2 = $coun2/9;
        }else{
            $cou2 = ceil($coun2/9);
        }
        $carousel2 = [];
        for($n=1;$n<=$cou2;$n++){
            $carousel2[$n] = $n-1;
        }
        $data['carousel2'] = $carousel2;
        $c = count($meiti);
        $arr2 = [];
        $p = 0;
        for($q=1;$q<=$c;$q++){
            $u = array_shift($meiti);
            $arr2[$p][$q] = $u;
            if(is_int($q/9)){
                $p++;
            }
        }
        $data['meiti'] = $arr2;

        $huoban = DB::table('me_join')->where('kind','伙伴')->get();
        $coun3 = count($huoban);
        $cou3 = '';
        if(is_int($coun3/9)){
            $cou3 = $coun3/9;
        }else{
            $cou3 = ceil($coun3/9);
        }
        $carousel3 = [];
        for($n=1;$n<=$cou3;$n++){
            $carousel3[$n] = $n-1;
        }
        $data['carousel3'] = $carousel3;
        $d = count($huoban);
        $arr3 = [];
        $s = 0;
        for($t=1;$t<=$d;$t++){
            $v = array_shift($huoban);
            $arr3[$s][$t] = $v;
            if(is_int($t/9)){
                $s++;
            }
        }
        $data['huoban'] = $arr3;

        $join_us = DB::table('me_last')->select('join_us1','join_us2')->get();
        $join_us = (array)$join_us[0];
        $data['join_us'] = $join_us;
        return view('qt_miyang_erji',$data);
    }


}