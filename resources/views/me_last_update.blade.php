<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>觅样尾屏设置</title>

	<meta content="width=device-width, initial-scale=1.0" name="viewport" />

	<meta content="" name="description" />

	<meta content="" name="author" />

	<!-- BEGIN GLOBAL MANDATORY STYLES -->

	<link href="{{ URL::asset('/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/bootstrap-responsive.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/style-metro.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/style.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/style-responsive.css') }}" rel="stylesheet" type="text/css"/>

	<link href="{{ URL::asset('/css/default.css') }}" rel="stylesheet" type="text/css" id="style_color"/>

	<link href="{{ URL::asset('/css/uniform.default.css') }}" rel="stylesheet" type="text/css"/>

	<!-- END GLOBAL MANDATORY STYLES -->

	<link rel="shortcut icon" href="{{ URL::asset('/image/favicon.ico') }}" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed">

	<!-- BEGIN HEADER -->

	@include('top')

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		@include('side')
		
		<!-- END SIDEBAR -->

		<!-- BEGIN PAGE -->  

		<div class="page-content">

			<!-- BEGIN PAGE CONTAINER-->

			<div class="container-fluid">

				<!-- BEGIN PAGE HEADER-->   

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN STYLE CUSTOMIZER -->

						@include('style')

						<!-- END BEGIN STYLE CUSTOMIZER -->  

						<h3 class="page-title">

							觅样尾屏管理

							 <small>觅样尾屏设置</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/melast/melast">觅样尾屏管理</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="/melast/melast">觅样尾屏信息</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">觅样尾屏设置</a></li>

						</ul>

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN SAMPLE FORM PORTLET-->   

						<div class="portlet box blue tabbable">

							<div class="portlet-title">

								<div class="caption">

									<i class="icon-reorder"></i>

									<span class="hidden-480">觅样尾屏设置</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">觅样尾屏设置</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/melast/melast/doupdate/{{$me_last['id']}}" class="form-horizontal" method="post">
												
												<div class="control-group">

													<label class="control-label">觅样尾屏id</label>

													<div class="controls">   

														<input class="m-wrap medium" name="lid" type="text" value="{{$me_last['id']}}" disabled/>

														<span class="help-inline">觅样尾屏id</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">微信二维码路径</label>

													<div class="controls">

														<input type="text" name="wechat" value="{{$me_last['wechat']}}" class="m-wrap large" />

														<span class="help-inline">请输入新路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">微博二维码路径</label>

													<div class="controls">

														<input type="text" name="weibo" value="{{$me_last['weibo']}}" class="m-wrap large" />

														<span class="help-inline">请输入新路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">淘宝二维码路径</label>

													<div class="controls">

														<input type="text" name="taobao" value="{{$me_last['taobao']}}" class="m-wrap large" />

														<span class="help-inline">请输入新路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">QQ二维码路径</label>

													<div class="controls">

														<input type="text" name="qq" value="{{$me_last['qq']}}" class="m-wrap large" />

														<span class="help-inline">请输入新路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">公司信息</label>

													<div class="controls">

														<input type="text" name="company" value="{{$me_last['company']}}" class="m-wrap large" />

														<span class="help-inline">请输入新信息</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">电子邮箱</label>

													<div class="controls">

														<input type="text" name="email" value="{{$me_last['email']}}" class="m-wrap large" />

														<span class="help-inline">请输入新电子邮箱</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">电话</label>

													<div class="controls">

														<input type="text" name="tel" value="{{$me_last['tel']}}" class="m-wrap large" />

														<span class="help-inline">请输入新电话信息/span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">公司地址</label>

													<div class="controls">

														<input type="text" name="address" value="{{$me_last['address']}}" class="m-wrap large" />

														<span class="help-inline">请输入新地址信息</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">地图标语</label>

													<div class="controls">

														<input type="text" name="map_slogan" value="{{$me_last['map_slogan']}}" class="m-wrap large" />

														<span class="help-inline">请输入新地图标语信息</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">地图路径</label>

													<div class="controls">

														<input type="text" name="map_image" value="{{$me_last['map_image']}}" class="m-wrap large" />

														<span class="help-inline">请输入新地图路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">加入我们电话1</label>

													<div class="controls">

														<input type="text" name="join_us1" value="{{$me_last['join_us1']}}" class="m-wrap large" />

														<span class="help-inline">请输入加入我们电话1</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">加入我们电话2</label>

													<div class="controls">

														<input type="text" name="join_us2" value="{{$me_last['join_us2']}}" class="m-wrap large" />

														<span class="help-inline">请输入加入我们电话2</span>

													</div>

												</div>

												<div class="form-actions">

													<button type="submit" class="btn blue"><i class="icon-ok"></i> 保存</button>

													<button type="reset" class="btn">重置</button>

												</div>

											</form>

											<!-- END FORM-->  

										</div>

									</div>

								</div>

							</div>

						</div>

						<!-- END SAMPLE FORM PORTLET-->

					</div>

				</div>

				<!-- END PAGE CONTENT-->         

			</div>

			<!-- END PAGE CONTAINER-->

		</div>

		<!-- END PAGE -->  

	</div>

	<!-- END CONTAINER -->

	<!-- BEGIN FOOTER -->

	@include('foot')

	<!-- END FOOTER -->

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{ URL::asset('/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js') }} before bootstrap.min.js') }} to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ URL::asset('/js/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>      

	<script src="{{ URL::asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="{{ URL::asset('/js/excanvas.min.js') }}"></script>

	<script src="{{ URL::asset('/js/respond.min.js') }}"></script>  

	<![endif]-->   

	<script src="{{ URL::asset('/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.blockui.min.js') }}" type="text/javascript"></script>  

	<script src="{{ URL::asset('/js/jquery.cookie.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.uniform.min.js') }}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<script src="{{ URL::asset('/js/app.js') }}"></script>     

	<script>

		jQuery(document).ready(function() {   

		   // initiate layout and plugins

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->   

</body>

<!-- END BODY -->

</html>