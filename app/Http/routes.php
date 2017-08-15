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

// Route::get('/', function () {
//     return view('welcome');
// });
/*************************************************前台***************************************************/
/*************************************移动端*********************************/
Route::group(['domain' => 'm.meyoungbaby.com'], function(){
	Route::get('/','MobileController@index');
	//手机觅宝点赞
	Route::post('/me_bao/dodianzan','MobileController@doDianzan');
	//觅闻首推三级
	Route::get('/index/me_wen/cover/{id}','MobileController@me_wen_cover')->where('id', '[0-9]+');
	//觅尚首推三级
	Route::get('/index/me_shang/cover/{id}','MobileController@me_shang_cover')->where('id', '[0-9]+');
	//觅闻
	Route::get('/index/me_wen','MobileController@me_wen');
	//觅闻三级
	Route::get('/index/me_wen/details/{id}','MobileController@me_wen_details')->where('id', '[0-9]+');
	//觅秀
	Route::get('/index/me_xiu','MobileController@me_xiu');
	//觅秀三级
	Route::get('/index/me_xiu/third','MobileController@me_xiu_third');
	//觅尚
	Route::get('/index/me_shang','MobileController@me_shang_second');
	//觅尚三级
	Route::get('/index/me_shang/details/{id}','MobileController@me_shang_third')->where('id', '[0-9]+');
	//觅宝
	Route::get('/index/me_bao','MobileController@me_bao');
	//觅宝三级视频
	Route::get('/index/me_bao/video','MobileController@me_bao_third_video');
	//觅宝三级孩子
	Route::get('/index/me_bao/child','MobileController@me_bao_third_child');
	//省市区联动1
	Route::post('/index/liandong','MobileController@liandong');
	//省市区联动2
	Route::post('/index/liandong2','MobileController@liandong2');
	//觅宝三级表单查询
	Route::any('/index/me_bao/select_children','MobileController@me_bao_select_child');
	//觅样
	Route::get('/index/me_young','MobileController@me_young');
	//觅样三级
	Route::get('/index/me_join','MobileController@me_join');
	//微信
	Route::get('/index/me_join/weixin','MobileController@me_join_weixin');
	//微博
	Route::get('/index/me_join/weibo','MobileController@me_join_weibo');
	//淘宝
	Route::get('/index/me_join/taobao','MobileController@me_join_taobao');
	//QQ
	Route::get('/index/me_join/qq','MobileController@me_join_qq');
	//登录
	Route::get('/index/login','MloginController@me_login');
	//do登陆
	Route::post('/index/doLogin','MloginController@me_doLogin');
	//do退出登录
	Route::get('/index/logout','MloginController@me_logout');
	//注册
	Route::get('/index/register','MloginController@me_register');
	//验证手机号
	Route::post('/index/register/phone','MloginController@doPhone');
	//发送验证码
	Route::post('/sms/code','MloginController@sendCode');
	//发送修改密码验证码
	Route::post('/sms/forget/code','MloginController@sendforgetCode');
	//do注册
	Route::post('/index/doregister','MloginController@doRegister');
	//注册成功
	Route::get('/index/regsuccess','MloginController@regSuccess');
	//忘记密码
	Route::get('/index/forgetpass','MloginController@forgetPass');
	//忘记密码检测手机
	Route::post('/index/selectphone','MloginController@selectPhone');
	//do修改密码
	Route::post('/index/dopwdupdate','MloginController@dopwdUpdate');
});
/*************************************移动端*********************************/




/*************************************PC端*********************************/
//主页
Route::get('/','IndexController@index');
//觅闻首推
Route::get('/index/me_wen/cover/{id}','IndexController@me_wen_cover')->where('id', '[0-9]+');
//觅闻二级
Route::get('/index/me_wen','IndexController@me_wen');
//觅闻三级
Route::get('/index/me_wen/details/{id}','IndexController@me_wen_details')->where('id', '[0-9]+');
//觅秀二级
Route::get('/index/me_xiu','IndexController@me_xiu');
//觅秀三级
Route::get('/index/me_xiu/third','IndexController@me_xiu_third');
//觅尚首推三级
Route::get('/index/me_shang/cover/{id}','IndexController@me_shang_cover')->where('id', '[0-9]+');
//觅尚二级
Route::get('/index/me_shang','IndexController@me_shang_second');
//觅尚三级
Route::get('/index/me_shang/details/{id}','IndexController@me_shang_third')->where('id', '[0-9]+');
//觅宝
Route::get('/index/me_bao','IndexController@me_bao');
//觅宝二级点赞
Route::post('/index/me_bao/dodianzan','IndexController@doDianzan');
//觅宝三级孩子
Route::get('/index/me_bao/child','IndexController@me_bao_third_child');
//觅宝三级孩子地区查询
Route::any('/index/me_bao/city_child/{city}','IndexController@me_bao_third_child_city');
//觅宝三级地区表单查询
Route::any('/index/me_bao/city_children','IndexController@me_bao_third_city_child');
//觅宝三级表单查询
Route::any('/index/me_bao/select_children','IndexController@me_bao_select_child');
//觅宝三级视频
Route::get('/index/me_bao/video','IndexController@me_bao_third_video');
//省市区联动1
Route::post('/index/liandong','IndexController@liandong');
//省市区联动2
Route::post('/index/liandong2','IndexController@liandong2');
//尾页合作伙伴
Route::get('/index/me_join','IndexController@me_join');
//登陆
Route::get('/index/login','LoginController@me_login');
//do登陆
Route::post('/index/doLogin','LoginController@me_doLogin');
//do退出登录
Route::get('/index/logout','LoginController@me_logout');
//注册
Route::get('/index/register','LoginController@me_register');
//验证手机号
Route::post('/index/register/phone','LoginController@doPhone');
//发送验证码
Route::post('/sms/code','LoginController@sendCode');
//发送修改密码验证码
Route::post('/sms/forget/code','LoginController@sendforgetCode');
//do注册
Route::post('/index/doregister','LoginController@doRegister');
//注册成功
Route::get('/index/regsuccess','LoginController@regSuccess');
//忘记密码
Route::get('/index/forgetpass','LoginController@forgetPass');
//忘记密码检测手机
Route::post('/index/selectphone','LoginController@selectPhone');
//do修改密码
Route::post('/index/dopwdupdate','LoginController@dopwdUpdate');
/**************************新增跳转*****************************/
Route::get('/index/news','PageController@index_news');
Route::get('/index/show','PageController@index_show');
Route::get('/index/vogue','PageController@index_vogue');
Route::get('/index/child','PageController@index_child');
Route::get('/index/young','PageController@index_young');
/**************************新增跳转*****************************/
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
//屏幕视频管理
Route::get('/operation/screen_video','OperationController@screen_video');
//屏幕视频管理编辑
Route::get('/operation/screen_video/update/{id}','OperationController@screen_video_update')->where('id', '[0-9]+');
//do屏幕视频管理编辑
Route::post('/operation/doupdate/{id}','OperationController@screen_video_doUpdate')->where('id', '[0-9]+');
//banner图管理
Route::get('/banner/banner_pic','BannerController@banner_pic');
//banner图管理编辑
Route::get('/banner/banner_pic/update/{id}','BannerController@banner_pic_update')->where('id', '[0-9]+');
//dobanner图管理编辑
Route::post('/banner/banner_pic/doupdate/{id}','BannerController@banner_pic_doUpdate')->where('id', '[0-9]+');
//第二屏信息展示
Route::get('/second/second_screen','SecondController@second_screen');
//第二屏信息编辑
Route::get('/second/second_screen/update/{id}','SecondController@second_screen_update')->where('id', '[0-9]+');
//do第二屏信息编辑
Route::post('/second/second_screen/doupdate/{id}','SecondController@second_screen_doUpdate')->where('id', '[0-9]+');
//第六屏觅淘信息展示
Route::get('/metao/metao','MetaoController@meTao');
//第六屏觅淘信息编辑
Route::get('/metao/metao/update/{id}','MetaoController@meTao_update')->where('id', '[0-9]+');
//do第六屏觅淘信息编辑
Route::post('/metao/metao/doupdate/{id}','MetaoController@meTao_doUpdate')->where('id', '[0-9]+');
//第八屏觅样信息展示
Route::get('/melast/melast','MelastController@meLast');
//第八屏觅样信息编辑
Route::get('/melast/melast/update/{id}','MelastController@meLast_update')->where('id', '[0-9]+');
//do第八屏觅样信息编辑
Route::post('/melast/melast/doupdate/{id}','MelastController@meLast_doUpdate')->where('id', '[0-9]+');
//用户信息展示
Route::get('/user/index','UserController@index');
//删除用户信息
Route::post('/user/dodelete','UserController@index_doDelete');
//新增用户信息
Route::get('/user/insert','UserController@index_insert');
//do新增用户信息
Route::post('/user/doinsert','UserController@index_doInsert');
//用户信息编辑
Route::get('/user/update/{id}','UserController@index_update')->where('id', '[0-9]+');
//do用户信息编辑
Route::post('/user/doupdate/{id}','UserController@index_doUpdate')->where('id', '[0-9]+');
//合作伙伴展示
Route::get('/join/index','JoinController@join_index');
//删除合作伙伴
Route::post('/join/dodelete','JoinController@join_doDelete');
//新增合作伙伴
Route::get('/join/insert','JoinController@join_insert');
//do新增合作伙伴
Route::post('/join/doinsert','JoinController@join_doInsert');
//合作伙伴编辑
Route::get('/join/update/{id}','JoinController@join_update')->where('id', '[0-9]+');
//do合作伙伴编辑
Route::post('/join/doupdate/{id}','JoinController@join_doUpdate')->where('id', '[0-9]+');
//觅闻封面展示
Route::get('/me_news/cover','MenewsController@me_news_cover');
//觅闻封面编辑
Route::get('/me_news/cover/update/{id}','MenewsController@me_news_cover_update')->where('id', '[0-9]+');
//do觅闻封面编辑
Route::post('/me_news/cover/doupdate/{id}','MenewsController@me_news_cover_doUpdate')->where('id', '[0-9]+');
//觅闻封面三级图文详情展示
Route::get('/me_news/cover/index/{id}','MenewsController@me_news_cover_index')->where('id', '[0-9]+');
//删除觅闻封面三级图文详情
Route::post('/me_news/cover/dodelete','MenewsController@me_news_cover_doDelete');
//觅闻封面三级图文编辑
Route::get('/me_news/cover/index/update/{id}','MenewsController@me_news_cover_index_update')->where('id', '[0-9]+');
//do觅闻封面三级图文编辑
Route::post('/me_news/cover/index/doUpdate/{id}','MenewsController@me_news_cover_index_doUpdate')->where('id', '[0-9]+');
//新增三级觅闻封面详情图文
Route::any('/me_news/cover/insert/{id}','MenewsController@me_news_insert_cover')->where('id', '[0-9]+');
//do新增三级觅闻封面详情图文
Route::post('/me_news/cover/doinsert','MenewsController@me_news_doInsert_cover');
//觅闻展示
Route::get('/me_news/index','MenewsController@me_news_index');
//删除觅闻
Route::post('/me_news/dodelete','MenewsController@me_news_doDelete');
//新增觅闻
Route::get('/me_news/insert','MenewsController@me_news_insert');
//do新增觅闻
Route::post('/me_news/doinsert','MenewsController@me_news_doInsert');
//新增觅闻详情图文
Route::any('/me_news/insert/index','MenewsController@me_news_index_insert');
//do新增觅闻详情图文
Route::post('/me_news/doinsert/index','MenewsController@me_news_index_doInsert');
//觅闻编辑
Route::get('/me_news/update/{id}','MenewsController@me_news_update')->where('id', '[0-9]+');
//do觅闻编辑
Route::post('/me_news/doupdate/{id}','MenewsController@me_news_doUpdate')->where('id', '[0-9]+');
//觅闻三级图文详情展示
Route::get('/me_news/index/index/{id}','MenewsController@me_news_index_index')->where('id', '[0-9]+');
//删除觅闻三级图文详情
Route::post('/me_news/index/dodelete','MenewsController@me_news_index_doDelete');
//觅闻三级图文编辑
Route::get('/me_news/index/update/{id}','MenewsController@me_news_index_update')->where('id', '[0-9]+');
//do觅闻三级图文编辑
Route::post('/me_news/index/doupdate/{id}','MenewsController@me_news_index_doUpdate')->where('id', '[0-9]+');
//新增三级觅闻详情图文
Route::any('/me_news/index/insert/{id}','MenewsController@me_news_insert_index')->where('id', '[0-9]+');
//do新增三级觅闻详情图文
Route::post('/me_news/index/doinsert','MenewsController@me_news_doInsert_index');
//导航图片信息展示
Route::get('/navigation/navigation_image','NavigationController@navigation_image');
//导航图片信息编辑
Route::get('/navigation/navigation_image/update/{id}','NavigationController@navigation_image_update')->where('id', '[0-9]+');
//do导航图片信息编辑
Route::post('/navigation/navigation_image/doupdate/{id}','NavigationController@navigation_image_doUpdate')->where('id', '[0-9]+');
//觅秀左侧介绍图展示
Route::get('/me_xiu/image_left','MexiuController@image_left');
//觅秀左侧介绍图编辑
Route::get('/me_xiu/image_left/update/{id}','MexiuController@image_left_update')->where('id', '[0-9]+');
//do觅秀左侧介绍图编辑
Route::post('/me_xiu/image_left/doupdate/{id}','MexiuController@image_left_doUpdate')->where('id', '[0-9]+');
//觅秀右侧介绍图展示
Route::get('/me_xiu/image_right','MexiuController@image_right');
//觅秀右侧介绍图编辑
Route::get('/me_xiu/image_right/update/{id}','MexiuController@image_right_update')->where('id', '[0-9]+');
//do觅秀右侧介绍图编辑
Route::post('/me_xiu/image_right/doupdate/{id}','MexiuController@image_right_doUpdate')->where('id', '[0-9]+');
//觅秀二级视频管理
Route::get('/me_xiu/video/second','MexiuController@video_second');
//觅秀二级视频编辑
Route::get('/me_xiu/video_second/update/{id}','MexiuController@video_second_update')->where('id', '[0-9]+');
//do觅秀二级视频编辑
Route::post('/me_xiu/video_second/doupdate/{id}','MexiuController@video_second_doUpdate')->where('id', '[0-9]+');
//觅秀三级视频管理
Route::get('/me_xiu/video/third','MexiuController@video_third');
//觅秀三级视频删除
Route::post('/me_xiu/video/third/dodelete','MexiuController@video_third_doDelete');
//觅秀三级视频新增
Route::get('/me_xiu/video/third/insert','MexiuController@video_third_insert');
//do觅秀三级视频新增
Route::post('/me_xiu/video/third/doinsert','MexiuController@video_third_doInsert');
//觅秀三级视频编辑
Route::get('/me_xiu/video/third/update/{id}','MexiuController@video_third_update')->where('id', '[0-9]+');
//do觅秀三级视频编辑
Route::post('/me_xiu/video/third/doupdate/{id}','MexiuController@video_third_doUpdate')->where('id', '[0-9]+');
//觅尚首推展示
Route::get('/me_shang/cover','MeshangController@me_shang_cover');
//觅尚首推编辑
Route::get('/me_shang/cover/update/{id}','MeshangController@me_shang_cover_update')->where('id', '[0-9]+');
//do觅尚首推编辑
Route::post('/me_shang/cover/doupdate/{id}','MeshangController@me_shang_cover_doUpdate')->where('id', '[0-9]+');
//觅尚首推文字
Route::get('/me_shang/cover/text/{id}','MeshangController@me_shang_cover_text')->where('id', '[0-9]+');
//觅尚首推文字删除
Route::post('/me_shang/cover/text/dodelete','MeshangController@me_shang_cover_text_doDelete');
//觅尚首推文字编辑
Route::get('/me_shang/cover/text/update/{id}','MeshangController@me_shang_cover_text_update')->where('id', '[0-9]+');
//do觅尚首推文字编辑
Route::post('/me_shang/cover/text/doUpdate/{id}','MeshangController@me_shang_cover_text_doUpdate')->where('id', '[0-9]+');
//新增觅尚首推文字
Route::any('/me_shang/cover/text/insert/{id}','MeshangController@me_shang_cover_text_insert')->where('id', '[0-9]+');
//do新增觅尚首推文字
Route::post('/me_shang/cover/text/doinsert','MeshangController@me_shang_cover_text_doInsert');
//觅尚首推杂志图
Route::get('/me_shang/cover/magazine/{id}','MeshangController@me_shang_cover_magazine')->where('id', '[0-9]+');
//觅尚首推杂志图删除
Route::post('/me_shang/cover/magazine/dodelete','MeshangController@me_shang_cover_magazine_doDelete');
//觅尚首推杂志图编辑
Route::get('/me_shang/cover/magazine/update/{id}','MeshangController@me_shang_cover_magazine_update')->where('id', '[0-9]+');
//do觅尚首推杂志图编辑
Route::post('/me_shang/cover/magazine/doUpdate/{id}','MeshangController@me_shang_cover_magazine_doUpdate')->where('id', '[0-9]+');
//新增觅尚首推杂志图
Route::any('/me_shang/cover/magazine/insert/{id}','MeshangController@me_shang_cover_magazine_insert')->where('id', '[0-9]+');
//do新增觅尚首推杂志图
Route::post('/me_shang/cover/magazine/doinsert','MeshangController@me_shang_cover_magazine_doInsert');
//觅尚展示
Route::get('/me_shang/index','MeshangController@me_shang_index');
//删除觅尚
Route::post('/me_shang/index/dodelete','MeshangController@me_shang_doDelete');
//觅尚编辑
Route::get('/me_shang/index/update/{id}','MeshangController@me_shang_update')->where('id', '[0-9]+');
//do觅尚编辑
Route::post('/me_shang/index/doUpdate/{id}','MeshangController@me_shang_doUpdate')->where('id', '[0-9]+');
//觅尚新增
Route::get('/me_shang/index/insert','MeshangController@me_shang_insert');
//do觅尚新增
Route::post('/me_shang/index/doinsert','MeshangController@me_shang_doInsert');
//觅尚杂志图片详情展示
Route::get('/me_shang/magazine/index/{id}','MeshangController@me_shang_magazine_index')->where('id', '[0-9]+');
//删除觅尚杂志图片
Route::post('/me_shang/magazine/dodelete','MeshangController@me_shang_magazine_doDelete');
//觅尚杂志图片编辑
Route::get('/me_shang/magazine/update/{id}','MeshangController@me_shang_magazine_update')->where('id', '[0-9]+');
//do觅尚杂志图片编辑
Route::post('/me_shang/magazine/doUpdate/{id}','MeshangController@me_shang_magazine_doUpdate')->where('id', '[0-9]+');
//新增觅尚杂志图片
Route::any('/me_shang/magazine/insert/{id}','MeshangController@me_shang_magazine_insert')->where('id', '[0-9]+');
//do新增觅尚杂志图片
Route::post('/me_shang/magazine/doinsert','MeshangController@me_shang_magazine_doInsert');
//觅尚杂志文字详情展示
Route::get('/me_shang/text/index/{id}','MeshangController@me_shang_text_index')->where('id', '[0-9]+');
//删除觅尚杂志文字
Route::post('/me_shang/text/index/dodelete','MeshangController@me_shang_text_index_doDelete');
//觅尚杂志文字编辑
Route::get('/me_shang/text/index/update/{id}','MeshangController@me_shang_text_index_update')->where('id', '[0-9]+');
//do觅尚杂志文字编辑
Route::post('/me_shang/text/index/doUpdate/{id}','MeshangController@me_shang_text_index_doUpdate')->where('id', '[0-9]+');
//新增觅尚杂志文字
Route::any('/me_shang/text/index/insert/{id}','MeshangController@me_shang_text_index_insert')->where('id', '[0-9]+');
//do新增觅尚杂志文字
Route::post('/me_shang/text/index/doinsert','MeshangController@me_shang_text_index_doInsert');
//觅宝一级展示
Route::get('/me_bao/first','MebaoController@me_bao_first');
//觅宝一级编辑
Route::get('/me_bao/first/update/{id}','MebaoController@me_bao_first_update')->where('id', '[0-9]+');
//do觅宝一级编辑
Route::post('/me_bao/first/doUpdate/{id}','MebaoController@me_bao_first_doUpdate')->where('id', '[0-9]+');
//觅宝详情
Route::get('/me_bao/index','MebaoController@me_bao_index');
//删除觅宝
Route::post('/me_bao/index/dodelete','MebaoController@me_bao_index_doDelete');
//觅宝新增
Route::get('/me_bao/index/insert','MebaoController@me_bao_index_insert');
//do觅宝新增
Route::post('/me_bao/index/doinsert','MebaoController@me_bao_index_doInsert');
//觅宝编辑
Route::get('/me_bao/index/update/{id}','MebaoController@me_bao_index_update')->where('id', '[0-9]+');
//do觅宝编辑
Route::post('/me_bao/index/doUpdate/{id}','MebaoController@me_bao_index_doUpdate')->where('id', '[0-9]+');
//觅宝视频管理
Route::get('/me_bao/video','MebaoController@me_bao_video');
//删除觅宝视频
Route::post('/me_bao/video/dodelete','MebaoController@me_bao_video_doDelete');
//觅宝视频新增
Route::get('/me_bao/video/insert','MebaoController@me_bao_video_insert');
//do觅宝视频新增
Route::post('/me_bao/video/doinsert','MebaoController@me_bao_video_doInsert');
//觅宝视频编辑
Route::get('/me_bao/video/update/{id}','MebaoController@me_bao_video_update')->where('id', '[0-9]+');
//do觅宝视频编辑
Route::post('/me_bao/video/doUpdate/{id}','MebaoController@me_bao_video_doUpdate')->where('id', '[0-9]+');
//上传文件到本地
Route::get('/admin/file_upload','AdminController@admin_file_upload');
//do上传文件到本地
Route::post('/admin/file_doinsert','AdminController@admin_file_doInsert');
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

// Route::group(['middleware' => ['web']], function () {
//     //
// });
