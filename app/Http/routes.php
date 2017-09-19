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
Route::group(['domain' => 'm.jiangjimedia.com'], function(){
	//主页
	Route::get('/','MobileController@index');
	//匠几文化
	Route::get('/culture','MobileController@culture');
	//匠几服务
	Route::get('/service','MobileController@service');
	//配套采购
	Route::get('/purchase','MobileController@purchase');
	//联系匠几
	Route::get('/contact','MobileController@contact');
	//品牌案例
	Route::get('/case','MobileController@case');
	//品牌案例三级
	Route::get('/case/details/{id}','MobileController@case_details')->where('id','[0-9]+');
	//匠几动态
	Route::get('/news','MobileController@news');
	//匠几动态三级
	Route::get('/news/details/{id}','MobileController@news_details')->where('id','[0-9]+');
});

/*************************************移动端*********************************/
	//主页
	// Route::get('/','MobileController@index');
	// //匠几文化
	// Route::get('/culture','MobileController@culture');
	// //匠几服务
	// Route::get('/service','MobileController@service');
	// //配套采购
	// Route::get('/purchase','MobileController@purchase');
	// //联系匠几
	// Route::get('/contact','MobileController@contact');
	// //品牌案例
	// Route::get('/case','MobileController@case');
	// //品牌案例三级
	// Route::get('/case/details/{id}','MobileController@case_details')->where('id','[0-9]+');
	// //匠几动态
	// Route::get('/news','MobileController@news');
	// //匠几动态三级
	// Route::get('/news/details/{id}','MobileController@news_details')->where('id','[0-9]+');


/*************************************PC端*********************************/
//主页
Route::get('/','IndexController@index');
//匠几文化
Route::get('/culture','IndexController@culture');
//联系匠几
Route::get('/contact','IndexController@contact');
//配套采购
Route::get('/purchase','IndexController@purchase');
//匠几服务
Route::get('/service','IndexController@service');
//品牌案例
Route::get('/case','IndexController@case');
//品牌案例三级
Route::get('/case/details/{id}','IndexController@case_details')->where('id','[0-9]+');
//匠几动态
Route::get('/news','IndexController@news');
//匠几动态三级
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
//屏幕视频管理
Route::get('/operation/screen_video','OperationController@screen_video');
//屏幕视频管理编辑
Route::get('/operation/screen_video/update/{id}','OperationController@screen_video_update')->where('id', '[0-9]+');
//do屏幕视频管理编辑
Route::post('/operation/doupdate/{id}','OperationController@screen_video_doUpdate')->where('id', '[0-9]+');
//pc端banner图管理
Route::get('/banner/banner_pic','BannerController@banner_pic');
//pc端banner图管理编辑
Route::get('/banner/banner_pic/update/{id}','BannerController@banner_pic_update')->where('id', '[0-9]+');
//pc端dobanner图管理编辑
Route::post('/banner/banner_pic/doupdate/{id}','BannerController@banner_pic_doUpdate')->where('id', '[0-9]+');
//移动端banner图管理
Route::get('/banner/banner_mobile_pic','BannerController@banner_mobile_pic');
//移动端banner图管理编辑
Route::get('/banner/banner_mobile_pic/update/{id}','BannerController@banner_mobile_pic_update')->where('id', '[0-9]+');
//移动端dobanner图管理编辑
Route::post('/banner/banner_mobile_pic/doupdate/{id}','BannerController@banner_mobile_pic_doUpdate')->where('id', '[0-9]+');
//底部及弹窗公司信息展示
Route::get('/info/info_index','InfoController@info_index');
//底部及弹窗公司信息编辑
Route::get('/info/info_index/update/{id}','InfoController@info_index_update')->where('id', '[0-9]+');
//do第二屏信息编辑
Route::post('/info/info_index/doupdate/{id}','InfoController@info_index_doUpdate')->where('id', '[0-9]+');
//PC端匠几文化
Route::get('/admin/culture','CultureController@culture_index');
//PC端匠几文化信息编辑
Route::get('/admin/culture/update/{id}','CultureController@culture_index_update')->where('id', '[0-9]+');
//doPC端匠几文化信息编辑
Route::post('/admin/culture/doupdate/{id}','CultureController@culture_index_doUpdate')->where('id', '[0-9]+');
//移动端匠几文化
Route::get('/admin/culture_mobile','CultureController@culture_index_mobile');
//移动端匠几文化信息编辑
Route::get('/admin/culture_mobile/update/{id}','CultureController@culture_index_mobile_update')->where('id', '[0-9]+');
//do移动端匠几文化信息编辑
Route::post('/admin/culture_mobile/doupdate/{id}','CultureController@culture_index_mobile_doUpdate')->where('id', '[0-9]+');
//PC端配套采购
Route::get('/admin/purchase','PurchaseController@purchase_index');
//PC端配套采购信息编辑
Route::get('/admin/purchase/update/{id}','PurchaseController@purchase_index_update')->where('id', '[0-9]+');
//doPC端配套采购信息编辑
Route::post('/admin/purchase/doupdate/{id}','PurchaseController@purchase_index_doUpdate')->where('id', '[0-9]+');
//移动端配套采购
Route::get('/admin/purchase_mobile','PurchaseController@purchase_index_mobile');
//移动端配套采购信息编辑
Route::get('/admin/purchase_mobile/update/{id}','PurchaseController@purchase_index_mobile_update')->where('id', '[0-9]+');
//do移动端配套采购信息编辑
Route::post('/admin/purchase_mobile/doupdate/{id}','PurchaseController@purchase_index_mobile_doUpdate')->where('id', '[0-9]+');
//PC端联系匠几大图
Route::get('/admin/relation','RelationController@relation_pic');
//PC端联系匠几大图编辑
Route::get('/admin/relation/update/{id}','RelationController@relation_pic_update')->where('id', '[0-9]+');
//doPC端联系匠几大图编辑
Route::post('/admin/relation/doupdate/{id}','RelationController@relation_pic_doUpdate')->where('id', '[0-9]+');
//移动端联系匠几大图
Route::get('/admin/relation_mobile','RelationController@relation_pic_mobile');
//移动端联系匠几大图编辑
Route::get('/admin/relation_mobile/update/{id}','RelationController@relation_pic_mobile_update')->where('id', '[0-9]+');
//do移动端联系匠几大图编辑
Route::post('/admin/relation_mobile/doupdate/{id}','RelationController@relation_pic_mobile_doUpdate')->where('id', '[0-9]+');
//匠几服务展示
Route::get('/admin/service','ServiceController@service_index');
//匠几服务编辑
Route::get('/admin/service/update/{id}','ServiceController@service_index_update')->where('id', '[0-9]+');
//do匠几服务编辑
Route::post('/admin/service/doupdate/{id}','ServiceController@service_index_doUpdate')->where('id', '[0-9]+');
//匠几服务标签展示
Route::get('/admin/service/label/{id}','ServiceController@service_label_index')->where('id', '[0-9]+');
//删除匠几服务标签
Route::post('/admin/service/label/dodelete','ServiceController@service_label_index_doDelete');
//匠几服务标签编辑
Route::get('/admin/service/label/update/{id}','ServiceController@service_label_index_update')->where('id', '[0-9]+');
//do匠几服务标签编辑
Route::post('/admin/service/label/doUpdate/{id}','ServiceController@service_label_index_doUpdate')->where('id', '[0-9]+');
//新增匠几服务标签
Route::any('/admin/service/label/insert/{id}','ServiceController@service_label_index_insert')->where('id', '[0-9]+');
//do新增新增匠几服务标签
Route::post('/admin/service/label/doinsert','ServiceController@service_label_index_doInsert');
//匠几服务简介
Route::get('/admin/jiangji','JiangjiController@service_introduce');
//删除匠几服务简介
Route::post('/admin/jiangji/dodelete','JiangjiController@service_introduce_doDelete');
//匠几服务简介编辑
Route::get('/admin/jiangji/update/{id}','JiangjiController@service_introduce_update')->where('id', '[0-9]+');
//do匠几服务简介编辑
Route::post('/admin/jiangji/doUpdate/{id}','JiangjiController@service_introduce_doUpdate')->where('id', '[0-9]+');
//新增匠几服务简介
Route::any('/admin/jiangji/insert','JiangjiController@service_introduce_insert');
//do新增匠几服务简介
Route::post('/admin/jiangji/doinsert','JiangjiController@service_introduce_doInsert');
//移动端匠几服务简介
Route::get('/admin/mobile_jiangji','JiangjiController@service_introduce_mobile');
//移动端匠几服务简介编辑
Route::get('/admin/jiangji_mobile/update/{id}','JiangjiController@service_introduce_mobile_update')->where('id', '[0-9]+');
//do移动端匠几服务简介编辑
Route::post('/admin/jiangji_mobile/doUpdate/{id}','JiangjiController@service_introduce_mobile_doUpdate')->where('id', '[0-9]+');
//PC端匠几服务图文
Route::get('/admin/jiangji/module','ModuleController@module_index');
//PC端匠几服务图文编辑
Route::get('/admin/jiangji/module/update/{id}','ModuleController@module_index_update')->where('id', '[0-9]+');
//doPC端匠几服务图文编辑
Route::post('/admin/jiangji/module/doupdate/{id}','ModuleController@module_index_doUpdate')->where('id', '[0-9]+');
//移动端匠几服务图文
Route::get('/admin/jiangji_mobile/module','ModuleController@module_index_mobile');
//移动端匠几服务图文编辑
Route::get('/admin/jiangji_mobile/module/update/{id}','ModuleController@module_index_mobile_update')->where('id', '[0-9]+');
//do移动端匠几服务图文编辑
Route::post('/admin/jiangji_mobile/module/doupdate/{id}','ModuleController@module_index_mobile_doUpdate')->where('id', '[0-9]+');
//PC端匠几合作流程
Route::get('/admin/jiangji/cooperation','CooperationController@cooperation_index');
//PC端匠几合作流程编辑
Route::get('/admin/jiangji/cooperation/update/{id}','CooperationController@cooperation_index_update')->where('id', '[0-9]+');
//doPC端匠几合作流程编辑
Route::post('/admin/jiangji/cooperation/doupdate/{id}','CooperationController@cooperation_index_doUpdate')->where('id', '[0-9]+');
//移动端匠几合作流程
Route::get('/admin/jiangji_mobile/cooperation','CooperationController@cooperation_index_mobile');
//移动端匠几合作流程编辑
Route::get('/admin/jiangji_mobile/cooperation/update/{id}','CooperationController@cooperation_index_mobile_update')->where('id', '[0-9]+');
//do移动端匠几合作流程编辑
Route::post('/admin/jiangji_mobile/cooperation/doupdate/{id}','CooperationController@cooperation_index_mobile_doUpdate')->where('id', '[0-9]+');
//匠几团队成员
Route::get('/admin/team','TeamController@team_index');
//删除匠几团队成员
Route::post('/admin/team/dodelete','TeamController@team_index_doDelete');
//新增匠几团队成员
Route::get('/admin/team/insert','TeamController@team_index_insert');
//do新增匠几团队成员
Route::post('/admin/team/doinsert','TeamController@team_index_doInsert');
//匠几团队成员编辑
Route::get('/admin/team/update/{id}','TeamController@team_index_update')->where('id', '[0-9]+');
//do匠几团队成员编辑
Route::post('/admin/team/doupdate/{id}','TeamController@team_index_doUpdate')->where('id', '[0-9]+');
//匠几团队成员个人简介详情展示
Route::get('/admin/team/introduce/{id}','TeamController@team_introduce_index')->where('id', '[0-9]+');
//删除匠几团队成员个人简介
Route::post('/admin/team/introduce/dodelete','TeamController@team_introduce_index_doDelete');
//匠几团队成员个人简介编辑
Route::get('/admin/team/introduce/update/{id}','TeamController@team_introduce_index_update')->where('id', '[0-9]+');
//do匠几团队成员个人简介编辑
Route::post('/admin/team/introduce/doupdate/{id}','TeamController@team_introduce_index_doUpdate')->where('id', '[0-9]+');
//新增匠几团队成员个人简介
Route::any('/admin/team/introduce/insert/{id}','TeamController@team_introduce_index_insert')->where('id', '[0-9]+');
//do新增匠几团队成员个人简介
Route::post('/admin/team/introduce/doinsert','TeamController@team_introduce_index_doInsert');
//匠几品牌案例
Route::get('/admin/case','CaseController@case_index');
//删除匠几品牌案例
Route::post('/admin/case/dodelete','CaseController@case_index_doDelete');
//新增匠几品牌案例
Route::get('/admin/case/insert','CaseController@case_index_insert');
//do新增匠几品牌案例
Route::post('/admin/case/doinsert','CaseController@case_index_doInsert');
//匠几品牌案例编辑
Route::get('/admin/case/update/{id}','CaseController@case_index_update')->where('id', '[0-9]+');
//do匠几品牌案例编辑
Route::post('/admin/case/doupdate/{id}','CaseController@case_index_doUpdate')->where('id', '[0-9]+');
//匠几品牌案例三级轮播图展示
Route::get('/admin/case/pic/{id}','CaseController@case_pic_index')->where('id', '[0-9]+');
//匠几品牌案例三级轮播图编辑
Route::get('/admin/case/pic/update/{id}','CaseController@case_pic_update')->where('id', '[0-9]+');
//do匠几品牌案例三级轮播图编辑
Route::post('/admin/case/pic/doupdate/{id}','CaseController@case_pic_doUpdate')->where('id', '[0-9]+');
//匠几品牌文案展示
Route::get('/admin/case/doc/{id}','CaseController@case_doc_index')->where('id', '[0-9]+');
//匠几品牌文案编辑
Route::get('/admin/case/doc/update/{id}','CaseController@case_doc_update')->where('id', '[0-9]+');
//do匠几品牌文案编辑
Route::post('/admin/case/doc/doupdate/{id}','CaseController@case_doc_doUpdate')->where('id', '[0-9]+');
//匠几品牌设计展示
Route::get('/admin/case/design/{id}','CaseController@case_design_index')->where('id', '[0-9]+');
//匠几品牌设计编辑
Route::get('/admin/case/design/update/{id}','CaseController@case_design_update')->where('id', '[0-9]+');
//do匠几品牌设计编辑
Route::post('/admin/case/design/doupdate/{id}','CaseController@case_design_doUpdate')->where('id', '[0-9]+');
//匠几空间设计展示
Route::get('/admin/case/space/{id}','CaseController@case_space_index')->where('id', '[0-9]+');
//匠几空间设计编辑
Route::get('/admin/case/space/update/{id}','CaseController@case_space_update')->where('id', '[0-9]+');
//do匠几空间设计编辑
Route::post('/admin/case/space/doupdate/{id}','CaseController@case_space_doUpdate')->where('id', '[0-9]+');
//匠几环创设计展示
Route::get('/admin/case/env/{id}','CaseController@case_env_index')->where('id', '[0-9]+');
//匠几环创设计编辑
Route::get('/admin/case/env/update/{id}','CaseController@case_env_update')->where('id', '[0-9]+');
//do匠几环创设计编辑
Route::post('/admin/case/env/doupdate/{id}','CaseController@case_env_doUpdate')->where('id', '[0-9]+');
//匠几品牌案例公仔展示
Route::get('/admin/case/doll/{id}','CaseController@case_doll_index')->where('id', '[0-9]+');
//匠几品牌案例公仔编辑
Route::get('/admin/case/doll/update/{id}','CaseController@case_doll_update')->where('id', '[0-9]+');
//do匠几品牌案例公仔编辑
Route::post('/admin/case/doll/doupdate/{id}','CaseController@case_doll_doUpdate')->where('id', '[0-9]+');
//匠几品牌案例视频展示
Route::get('/admin/case/video/{id}','CaseController@case_video_index')->where('id', '[0-9]+');
//匠几品牌案例视频编辑
Route::get('/admin/case/video/update/{id}','CaseController@case_video_update')->where('id', '[0-9]+');
//do匠几品牌案例视频编辑
Route::post('/admin/case/video/doupdate/{id}','CaseController@case_video_doUpdate')->where('id', '[0-9]+');
//匠几动态
Route::get('/admin/news','NewsController@news_index');
//删除匠几动态
Route::post('/admin/news/dodelete','NewsController@news_index_doDelete');
//新增匠几动态
Route::get('/admin/news/insert','NewsController@news_index_insert');
//do新增匠几动态
Route::post('/admin/news/doinsert','NewsController@news_index_doInsert');
//匠几动态编辑
Route::get('/admin/news/update/{id}','NewsController@news_index_update')->where('id', '[0-9]+');
//do匠几动态编辑
Route::post('/admin/news/doupdate/{id}','NewsController@news_index_doUpdate')->where('id', '[0-9]+');
//匠几动态三级图文详情展示
Route::get('/admin/news/third/index/{id}','NewsController@news_third_index')->where('id', '[0-9]+');
//删除匠几动态三级图文1
Route::post('/admin/news/third/index/dodelete','NewsController@news_third_index_doDelete');
//新增首字母大写段落1
Route::any('/admin/news/third/index/first/{id}','NewsController@news_third_index_first_insert')->where('id', '[0-9]+');
//do新增首字母大写段落1
Route::post('/admin/news/third/index/first/doinsert','NewsController@news_third_index_first_doInsert');
//新增正常段落1
Route::any('/admin/news/third/index/second/{id}','NewsController@news_third_index_second_insert')->where('id', '[0-9]+');
//do新增正常段落1
Route::post('/admin/news/third/index/second/doinsert','NewsController@news_third_index_second_doInsert');
//新增样式一图片1
Route::any('/admin/news/third/index/third/{id}','NewsController@news_third_index_third_insert')->where('id', '[0-9]+');
//do新增样式一图片1
Route::post('/admin/news/third/index/third/doinsert','NewsController@news_third_index_third_doInsert');
//新增样式二图片1
Route::any('/admin/news/third/index/forth/{id}','NewsController@news_third_index_forth_insert')->where('id', '[0-9]+');
//do新增样式二图片1
Route::post('/admin/news/third/index/forth/doinsert','NewsController@news_third_index_forth_doInsert');
//匠几动态三级图文编辑1
Route::get('/admin/news/third/index/update/{id}','NewsController@news_third_index_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑1
Route::post('/admin/news/third/index/doupdate/{id}','NewsController@news_third_index_doUpdate')->where('id', '[0-9]+');
//删除匠几动态三级详情2模板
Route::post('/admin/news/third/index2/dodelete','NewsController@news_third_index2_doDelete');
//匠几动态三级图文编辑2模板
Route::get('/admin/news/third/index2/update/{id}','NewsController@news_third_index2_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑2模板
Route::post('/admin/news/third/index2/doupdate/{id}','NewsController@news_third_index2_doUpdate')->where('id', '[0-9]+');
//新增匠几动态三级图文2模板P标签
Route::any('/admin/news/third/index2/first/{id}','NewsController@news_third_index2_first_insert')->where('id', '[0-9]+');
//do新增匠几动态三级图文2模板P标签
Route::post('/admin/news/third/index2/first/doinsert','NewsController@news_third_index2_first_doInsert');
//新增匠几动态三级图文2模板ul-li标签
Route::any('/admin/news/third/index2/second/{id}','NewsController@news_third_index2_second_insert')->where('id', '[0-9]+');
//do新增匠几动态三级图文2模板ul-li标签
Route::post('/admin/news/third/index2/second/doinsert','NewsController@news_third_index2_second_doInsert');
//新增匠几动态三级图文2模板左大右小图片
Route::any('/admin/news/third/index2/third/{id}','NewsController@news_third_index2_third_insert')->where('id', '[0-9]+');
//do新增匠几动态三级图文2模板左大右小图片
Route::post('/admin/news/third/index2/third/doinsert','NewsController@news_third_index2_third_doInsert');
//新增匠几动态三级图文2模板3张并列图图片
Route::any('/admin/news/third/index2/forth/{id}','NewsController@news_third_index2_forth_insert')->where('id', '[0-9]+');
//do新增匠几动态三级图文2模板3张并列图图片
Route::post('/admin/news/third/index2/forth/doinsert','NewsController@news_third_index2_forth_doInsert');
//新增匠几动态三级图文2模板右大左小图片
Route::any('/admin/news/third/index2/fifth/{id}','NewsController@news_third_index2_fifth_insert')->where('id', '[0-9]+');
//do新增匠几动态三级图文2模板右大左小图片
Route::post('/admin/news/third/index2/fifth/doinsert','NewsController@news_third_index2_fifth_doInsert');
//匠几动态三级图文编辑3模板(模块1)
Route::get('/admin/news/third/index3/first/update/{id}','NewsController@news_third_index3_first_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑3模板(模块1)
Route::post('/admin/news/third/index3/first/doupdate/{id}','NewsController@news_third_index3_first_doUpdate')->where('id', '[0-9]+');
//匠几动态三级图文编辑3模板(模块2)
Route::get('/admin/news/third/index3/second/update/{id}','NewsController@news_third_index3_second_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑3模板(模块2)
Route::post('/admin/news/third/index3/second/doupdate/{id}','NewsController@news_third_index3_second_doUpdate')->where('id', '[0-9]+');
//匠几动态三级图文编辑3模板(模块3)
Route::get('/admin/news/third/index3/third/update/{id}','NewsController@news_third_index3_third_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑3模板(模块3)
Route::post('/admin/news/third/index3/third/doupdate/{id}','NewsController@news_third_index3_third_doUpdate')->where('id', '[0-9]+');
//匠几动态三级图文编辑3模板(模块4)
Route::get('/admin/news/third/index3/forth/update/{id}','NewsController@news_third_index3_forth_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑3模板(模块4)
Route::post('/admin/news/third/index3/forth/doupdate/{id}','NewsController@news_third_index3_forth_doUpdate')->where('id', '[0-9]+');
//匠几动态三级图文编辑3模板(模块5)
Route::get('/admin/news/third/index3/fifth/update/{id}','NewsController@news_third_index3_fifth_update')->where('id', '[0-9]+');
//do匠几动态三级图文编辑3模板(模块5)
Route::post('/admin/news/third/index3/fifth/doupdate/{id}','NewsController@news_third_index3_fifth_doUpdate')->where('id', '[0-9]+');
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
