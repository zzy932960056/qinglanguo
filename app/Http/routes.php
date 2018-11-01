<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

/*************************************************前台***************************************************/
/*************************************移动端*********************************/
Route::group(['domain' => 'm.kinglengo.com'], function(){
    //主页
    Route::get('/','MobileController@index');
    //青蓝果之家
    Route::get('/home','MobileController@home');
    //青蓝果教育
    Route::get('/education','MobileController@education');
    //青蓝果教育(锚链接)
    Route::get('/education{test}','MobileController@education');
    //青蓝果文化(园所理念)
    Route::get('/culture','MobileController@culture');
    //青蓝果文化(视觉形象)
    Route::get('/culture_vi','MobileController@culture_vi');
    //青蓝果文化(环境文化)
    Route::get('/culture_env','MobileController@culture_env');
    //青蓝果文化(食育文化)
    Route::get('/culture_food','MobileController@culture_food');
    //青蓝果动态
    Route::get('/news','MobileController@news');
    //青蓝果动态三级
    Route::get('/news/details/{id}','MobileController@news_details')->where('id','[0-9]+');
});

/*************************************移动端*********************************/
// //主页
// Route::get('/','MobileController@index');
// //青蓝果之家
// Route::get('/home','MobileController@home');
// //青蓝果教育
// Route::get('/education','MobileController@education');
// //青蓝果教育(锚链接)
// Route::get('/education{test}','MobileController@education');
// //青蓝果文化(园所理念)
// Route::get('/culture','MobileController@culture');
// //青蓝果文化(视觉形象)
// Route::get('/culture_vi','MobileController@culture_vi');
// //青蓝果文化(环境文化)
// Route::get('/culture_env','MobileController@culture_env');
// //青蓝果文化(食育文化)
// Route::get('/culture_food','MobileController@culture_food');
// //青蓝果动态
// Route::get('/news','MobileController@news');
// //青蓝果动态三级
// Route::get('/news/details/{id}','MobileController@news_details')->where('id','[0-9]+');


/*************************************PC端*********************************/
// 主页
Route::get('/','IndexController@index');
//青蓝果之家(中心)
Route::get('/home','IndexController@home');
//青蓝果之家(王舍)
Route::get('/home_ws','IndexController@home_ws');
//青蓝果之家(南家)
Route::get('/home_nj','IndexController@home_nj');
//青蓝果之家(芳草)
Route::get('/home_fc','IndexController@home_fc');
//青蓝果之家(颐丰)
Route::get('/home_yf','IndexController@home_yf');
//青蓝果教育
Route::get('/education','IndexController@education');
//青蓝果教育(锚链接)
Route::get('/education{test}','IndexController@education');
//青蓝果文化(园所理念)
Route::get('/culture','IndexController@culture');
//青蓝果文化(视觉形象)
Route::get('/culture_vi','IndexController@culture_vi');
//青蓝果文化(环境文化)
Route::get('/culture_env','IndexController@culture_env');
//青蓝果文化(食育文化)
Route::get('/culture_food','IndexController@culture_food');
//青蓝果动态
Route::get('/news','IndexController@news');
//青蓝果动态(锚链接)
Route::get('/news{test}','IndexController@news');
//青蓝果动态三级
Route::get('/news/details/{id}','IndexController@news_details')->where('id','[0-9]+');

/*************************************PC端*********************************/



/*************************************************前台***************************************************/



/*********************************************************后台管理***************************************************/
//后台管理
/*************************************管理员********************************************/
Route::get('/admin/login','AdminController@login');
Route::get('/admin/lock','AdminController@adminLock');
Route::post('/admin/locklogin','AdminController@lockLogin');
Route::get('/admin/logout','AdminController@logout');
Route::post('/admin/dologin','AdminController@doLogin');
Route::get('/admin/adminindex','AdminController@adminIndex');
Route::get('/admin/update','AdminController@update');
Route::post('/admin/self/doupdate','AdminController@doUpdate');
Route::get('/admin/admin','AdminController@admin');
Route::post('/admin/dodelete','AdminController@admin_doDelete');
Route::get('/admin/insert','AdminController@admin_insert');
Route::post('/admin/doinsert','AdminController@admin_doInsert');
Route::get('/admin/update/{id}','AdminController@admin_update')->where('id', '[0-9]+');
Route::post('/admin/doupdate/{id}','AdminController@admin_doUpdate')->where('id', '[0-9]+');
Route::get('/admin/role','AdminController@admin_role');
Route::get('/admin/role/insert','AdminController@admin_role_insert');
Route::post('/admin/role/doinsert','AdminController@do_admin_role_insert');
Route::post('/admin/role/dodelete','AdminController@admin_role_doDelete');
Route::get('/admin/role/update/{id}','AdminController@admin_role_update')->where('id', '[0-9]+');
Route::post('/admin/role/doupdate/{id}','AdminController@admin_role_doUpdate')->where('id', '[0-9]+');
Route::get('/admin/power','AdminController@admin_power');
Route::get('/admin/power/insert','AdminController@admin_power_insert');
Route::post('/admin/power/doinsert','AdminController@admin_power_doInsert');
Route::post('/admin/power/dodelete','AdminController@admin_power_doDelete');
Route::get('/admin/power/update/{id}','AdminController@admin_power_update')->where('id', '[0-9]+');
Route::post('/admin/power/doupdate/{id}','AdminController@admin_power_doUpdate')->where('id', '[0-9]+');
//七牛云视频上传
Route::get('/admin/upload','AdminController@admin_upload');
//上传图片
Route::get('/admin/pic_upload','AdminController@admin_pic_upload');
//do上传图片新增
Route::post('/admin/pic_doinsert','AdminController@admin_pic_doInsert');
//cdn图片管理
Route::get('/admin/cdnimage','AdminController@cdn_image');
//cdn图片删除
Route::post('/admin/cdnimage/dodelete','AdminController@admin_cdnimage_doDelete');
//cdn图片编辑
Route::get('/admin/image/update/{id}','AdminController@admin_image_update')->where('id', '[0-9]+');
//cdnDoUpdate(图片)
Route::post('/admin/pic_doupdate','AdminController@admin_image_doUpdate');
//cdn视频管理
Route::get('/admin/cdnvideo','AdminController@cdn_video');
//上传视频
Route::get('/admin/video_upload','AdminController@admin_video_upload');
//do上传视频新增
Route::post('/admin/video_doinsert','AdminController@admin_video_doInsert');
//cdn视频删除
Route::post('/admin/cdnvideo/dodelete','AdminController@admin_cdnvideo_doDelete');
//cdn视频编辑
Route::get('/admin/video/update/{id}','AdminController@admin_video_update')->where('id', '[0-9]+');
//cdnDoUpdate(视频)
Route::post('/admin/video_doupdate','AdminController@admin_video_doUpdate');
/*************************************管理员********************************************/
//banner图管理
Route::get('/banner/banner_pic','BannerController@banner_pic');
//banner图管理编辑
Route::get('/banner/banner_pic/update/{id}','BannerController@banner_pic_update')->where('id', '[0-9]+');
//dobanner图管理编辑
Route::post('/banner/banner_pic/doupdate/{id}','BannerController@banner_pic_doUpdate')->where('id', '[0-9]+');
//网站信息维护(底部)
Route::get('/info/info_index','InfoController@info_index');
//底部信息编辑
Route::get('/info/info_index/update/{id}','InfoController@info_index_update')->where('id', '[0-9]+');
//do底部信息编辑
Route::post('/info/info_index/doupdate/{id}','InfoController@info_index_doUpdate')->where('id', '[0-9]+');
//首页青蓝果之家
Route::get('/admin/home_info','HomeinfoController@home_info');
//首页青蓝果之家编辑
Route::get('/admin/home_info/update/{id}','HomeinfoController@home_info_update')->where('id', '[0-9]+');
//do首页青蓝果之家编辑
Route::post('/admin/home_info/doupdate/{id}','HomeinfoController@home_info_doUpdate')->where('id', '[0-9]+');
//青蓝果之家中心园
Route::get('/admin/home/zhongxin','HomeindexController@zhongxin');
//青蓝果之家王舍园
Route::get('/admin/home/wangshe','HomeindexController@wangshe');
//青蓝果之家南家园
Route::get('/admin/home/nanjia','HomeindexController@nanjia');
//青蓝果之家芳草园
Route::get('/admin/home/fangcao','HomeindexController@fangcao');
//青蓝果之家颐丰园
Route::get('/admin/home/yifeng','HomeindexController@yifeng');
//青蓝果之家编辑
Route::get('/admin/home/zhongxin/update/{id}','HomeindexController@zhongxin_update');
//do青蓝果之家编辑
Route::post('/admin/home/zhongxin/doupdate/{id}','HomeindexController@zhongxin_doUpdate')->where('id', '[0-9]+');
//青蓝果教育(传统文化)
Route::get('/admin/education/culture','EducationindexController@culture');
//青蓝果教育(传统文化)编辑
Route::get('/admin/education/update/{id}','EducationindexController@culture_update');
//do青蓝果教育(传统文化)编辑
Route::post('/admin/education/doupdate/{id}','EducationindexController@culture_doUpdate')->where('id', '[0-9]+');
//青蓝果教育(探究空间)
Route::get('/admin/education/space','EducationindexController@space');
//青蓝果教育(探究空间)编辑
Route::get('/admin/education/space_update/{id}','EducationindexController@space_update');
//do青蓝果教育(探究空间)编辑
Route::post('/admin/education/space/doupdate/{id}','EducationindexController@space_doUpdate')->where('id', '[0-9]+');
//青蓝果教育(健康领动)
Route::get('/admin/education/health','EducationindexController@health');
//青蓝果教育(健康领动)编辑
Route::get('/admin/education/health_update/{id}','EducationindexController@health_update');
//do青蓝果教育(健康领动)编辑
Route::post('/admin/education/health/doupdate/{id}','EducationindexController@health_doUpdate')->where('id', '[0-9]+');
//青蓝果教育(艺术创想)
Route::get('/admin/education/art','EducationindexController@art');
//青蓝果教育(艺术创想)编辑
Route::get('/admin/education/art_update/{id}','EducationindexController@art_update');
//do青蓝果教育(艺术创想)编辑
Route::post('/admin/education/art/doupdate/{id}','EducationindexController@art_doUpdate')->where('id', '[0-9]+');
//青蓝果教育(社会链接)
Route::get('/admin/education/social','EducationindexController@social');
//青蓝果教育(社会链接)编辑
Route::get('/admin/education/social_update/{id}','EducationindexController@social_update');
//do青蓝果教育(社会链接)编辑
Route::post('/admin/education/social/doupdate/{id}','EducationindexController@social_doUpdate')->where('id', '[0-9]+');
//青蓝果教育(师资力量)
Route::get('/admin/education/teach','EducationindexController@teach');
//青蓝果教育(师资力量)编辑
Route::get('/admin/education/teach_update/{id}','EducationindexController@teach_update');
//do蓝果教育(师资力量)编辑
Route::post('/admin/education/teach/doupdate/{id}','EducationindexController@teach_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-青蓝果解析
Route::get('/admin/culture/analysis','CultureindexController@analysis');
//青蓝果文化-园所理念-青蓝果解析编辑
Route::get('/admin/culture/analysis_update/{id}','CultureindexController@analysis_update');
//do青蓝果文化-园所理念-青蓝果解析编辑
Route::post('/admin/culture/analysis/doupdate/{id}','CultureindexController@analysis_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-青蓝精神
Route::get('/admin/culture/spirit','CultureindexController@spirit');
//青蓝果文化-园所理念-青蓝精神编辑
Route::get('/admin/culture/spirit_update/{id}','CultureindexController@spirit_update');
//do青蓝果文化-园所理念-青蓝精神编辑
Route::post('/admin/culture/spirit/doupdate/{id}','CultureindexController@spirit_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-青蓝果标语
Route::get('/admin/culture/slogan','CultureindexController@slogan');
//青蓝果文化-园所理念-青蓝果标语编辑
Route::get('/admin/culture/slogan_update/{id}','CultureindexController@slogan_update');
//do青蓝果文化-园所理念-青蓝果标语编辑
Route::post('/admin/culture/slogan/doupdate/{id}','CultureindexController@slogan_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-办园理念
Route::get('/admin/culture/idea','CultureindexController@idea');
//青蓝果文化-园所理念-办园理念编辑
Route::get('/admin/culture/idea_update/{id}','CultureindexController@idea_update');
//do青蓝果文化-园所理念-办园理念编辑
Route::post('/admin/culture/idea/doupdate/{id}','CultureindexController@idea_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-办园宗旨
Route::get('/admin/culture/purpose','CultureindexController@purpose');
//青蓝果文化-园所理念-办园宗旨编辑
Route::get('/admin/culture/purpose_update/{id}','CultureindexController@purpose_update');
//do青蓝果文化-园所理念-办园宗旨编辑
Route::post('/admin/culture/purpose/doupdate/{id}','CultureindexController@purpose_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-园训
Route::get('/admin/culture/teach','CultureindexController@teach');
//青蓝果文化-园所理念-园训编辑
Route::get('/admin/culture/teach_update/{id}','CultureindexController@teach_update');
//do青蓝果文化-园所理念-园训编辑
Route::post('/admin/culture/teach/doupdate/{id}','CultureindexController@teach_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-园所理念-团队文化
Route::get('/admin/culture/team','CultureindexController@team');
//青蓝果文化-园所理念-团队文化编辑
Route::get('/admin/culture/team_update/{id}','CultureindexController@team_update');
//do青蓝果文化-园所理念-团队文化编辑
Route::post('/admin/culture/team/doupdate/{id}','CultureindexController@team_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-视觉形象-标志
Route::get('/admin/vision/logo','VisionindexController@logo');
//青蓝果文化-视觉形象-标志编辑
Route::get('/admin/vision/logo_update/{id}','VisionindexController@logo_update');
//do青蓝果文化-视觉形象-标志编辑
Route::post('/admin/vision/logo/doupdate/{id}','VisionindexController@logo_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-视觉形象-吉祥物
Route::get('/admin/vision/mascot','VisionindexController@mascot');
//青蓝果文化-视觉形象-吉祥物编辑
Route::get('/admin/vision/mascot_update/{id}','VisionindexController@mascot_update');
//do青蓝果文化-视觉形象-吉祥物编辑
Route::post('/admin/vision/mascot/doupdate/{id}','VisionindexController@mascot_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-视觉形象-园服
Route::get('/admin/vision/clothes','VisionindexController@clothes');
//青蓝果文化-视觉形象-园服编辑
Route::get('/admin/vision/clothes_update/{id}','VisionindexController@clothes_update');
//do青蓝果文化-视觉形象-园服编辑
Route::post('/admin/vision/clothes/doupdate/{id}','VisionindexController@clothes_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-环境文化(pc端)
Route::get('/admin/env','EnvindexController@env');
//青蓝果文化-环境文化(pc端)编辑
Route::get('/admin/env_update/{id}','EnvindexController@env_update');
//do青蓝果文化-环境文化(pc端)编辑
Route::post('/admin/env/doupdate/{id}','EnvindexController@env_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-环境文化(移动端)
Route::get('/admin/env_yd','EnvindexController@env_yd');
//青蓝果文化-环境文化(移动端)编辑
Route::get('/admin/env_yd_update/{id}','EnvindexController@env_yd_update');
//do青蓝果文化-环境文化(移动端)编辑
Route::post('/admin/env_yd/doupdate/{id}','EnvindexController@env_yd_doUpdate')->where('id', '[0-9]+');
//青蓝果文化-食育文化
Route::get('/admin/food','FoodindexController@food');
//青蓝果文化-食育文化编辑
Route::get('/admin/food_update/{id}','FoodindexController@food_update');
//do青蓝果文化-食育文化编辑
Route::post('/admin/food/doupdate/{id}','FoodindexController@food_doUpdate')->where('id', '[0-9]+');
//青蓝果动态头图(pc端)
Route::get('/admin/news/picture','NewsindexController@picture');
//青蓝果动态头图(pc端)编辑
Route::get('/admin/news/picture_update/{id}','NewsindexController@picture_update');
//do青蓝果动态头图(pc端)编辑
Route::post('/admin/news/picture/doupdate/{id}','NewsindexController@picture_doUpdate')->where('id', '[0-9]+');
//青蓝果动态头图(移动端)
Route::get('/admin/news/picture_yd','NewsindexController@picture_yd');
//青蓝果动态头图(移动端)编辑
Route::get('/admin/news/picture_yd_update/{id}','NewsindexController@picture_yd_update');
//do青蓝果动态头图(移动端)编辑
Route::post('/admin/news/picture_yd/doupdate/{id}','NewsindexController@picture_yd_doUpdate')->where('id', '[0-9]+');
//青蓝果动态
Route::get('/admin/news','NewsindexController@news');
//青蓝果动态删除
Route::post('/admin/news/dodelete','NewsindexController@news_doDelete');
//新增青蓝果动态
Route::get('/admin/news/insert','NewsindexController@news_insert');
//do新增青蓝果动态
Route::post('/admin/news/doinsert','NewsindexController@news_doInsert');
//青蓝果动态编辑
Route::get('/admin/news/update/{id}','NewsindexController@news_update')->where('id', '[0-9]+');
//do青蓝果动态编辑
Route::post('/admin/news/doupdate/{id}','NewsindexController@news_doUpdate')->where('id', '[0-9]+');
//青蓝果动态详情展示
Route::get('/admin/news/details/{id}','NewsindexController@news_details')->where('id', '[0-9]+');
//青蓝果动态详情删除
Route::post('/admin/news/details/dodelete','NewsindexController@news_details_doDelete');
//青蓝果动态文本新增
Route::any('/admin/news/details/text/insert/{id}','NewsindexController@news_details_text_insert')->where('id', '[0-9]+');
//do青蓝果动态文本新增
Route::post('/admin/news/details/text/doinsert','NewsindexController@news_details_text_doInsert');
//青蓝果动态大图片新增
Route::any('/admin/news/details/big_pic/insert/{id}','NewsindexController@news_details_big_pic_insert')->where('id', '[0-9]+');
//do青蓝果动态大图片新增
Route::post('/admin/news/details/big_pic/doinsert','NewsindexController@news_details_big_pic_doInsert');
//青蓝果动态小图片新增
Route::any('/admin/news/details/small_pic/insert/{id}','NewsindexController@news_details_small_pic_insert')->where('id', '[0-9]+');
//do青蓝果动态小图片新增
Route::post('/admin/news/details/small_pic/doinsert','NewsindexController@news_details_small_pic_doInsert');
//青蓝果动态视频新增
Route::any('/admin/news/details/video/insert/{id}','NewsindexController@news_details_video_insert')->where('id', '[0-9]+');
//do青蓝果动态视频新增
Route::post('/admin/news/details/video/doinsert','NewsindexController@news_details_video_doInsert');
//青蓝果动态详情文本编辑
Route::get('/admin/news/details/text/update/{id}','NewsindexController@news_details_text_update')->where('id', '[0-9]+');
//do青蓝果动态详情文本编辑
Route::post('/admin/news/details/text/doupdate/{id}','NewsindexController@news_details_text_doUpdate')->where('id', '[0-9]+');
//青蓝果动态详情大图编辑
Route::get('/admin/news/details/big_pic/update/{id}','NewsindexController@news_details_big_pic_update')->where('id', '[0-9]+');
//do青蓝果动态详情大图编辑
Route::post('/admin/news/details/big_pic/doupdate/{id}','NewsindexController@news_details_big_pic_doUpdate')->where('id', '[0-9]+');
//青蓝果动态详情小图编辑
Route::get('/admin/news/details/small_pic/update/{id}','NewsindexController@news_details_small_pic_update')->where('id', '[0-9]+');
//do青蓝果动态详情小图编辑
Route::post('/admin/news/details/small_pic/doupdate/{id}','NewsindexController@news_details_small_pic_doUpdate')->where('id', '[0-9]+');
//青蓝果动态详情视频编辑
Route::get('/admin/news/details/video/update/{id}','NewsindexController@news_details_video_update')->where('id', '[0-9]+');
//do青蓝果动态详情视频编辑
Route::post('/admin/news/details/video/doupdate/{id}','NewsindexController@news_details_video_doUpdate')->where('id', '[0-9]+');

/*********************************************************后台管理***************************************************/

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/
