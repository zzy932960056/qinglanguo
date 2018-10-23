<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>青蓝果动态管理</title>

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

							青蓝果动态管理

							 <small>青蓝果动态</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/admin/news">青蓝果动态管理</a>

								<span class="icon-angle-right"></span>

							</li>

							</li>

							<li><a href="#">青蓝果动态</a></li>

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

									<span class="hidden-480">青蓝果动态设置</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">青蓝果动态设置</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/admin/news/doupdate/{{$news['id']}}" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">青蓝果动态id</label>

													<div class="controls">

														<input class="m-wrap medium" name="mid" type="text" value="{{$news['id']}}" readonly/>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">青蓝果动态标题</label>

													<div class="controls">

														<input type="text" name="news_title" value="{{$news['news_title']}}" class="m-wrap huge" />

														<span class="help-inline">请输入青蓝果动态标题</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">动态日期<span class="required">*</span></label>

													<div class="controls">

														<input type="date" name="news_date" class="m-wrap huge" value="{{$news['news_date']}}"/>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">动态季节<span class="required">*</span></label>

													<div class="controls">

														<select class="span6 m-wrap huge" name="news_season">
															@if($news['news_season'] == '春')
															<option value="春" selected = "selected">春</option>
															<option value="夏">夏</option>
															<option value="秋">秋</option>
															<option value="冬">冬</option>
															@elseif($news['news_season'] == '夏')
															<option value="春">春</option>
															<option value="夏" selected = "selected">夏</option>
															<option value="秋">秋</option>
															<option value="冬">冬</option>
															@elseif($news['news_season'] == '秋')
															<option value="春">春</option>
															<option value="夏">夏</option>
															<option value="秋" selected = "selected">秋</option>
															<option value="冬">冬</option>
															@elseif($news['news_season'] == '冬')
															<option value="春">春</option>
															<option value="夏">夏</option>
															<option value="秋">秋</option>
															<option value="冬" selected = "selected">冬</option>
															@endif
														</select>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">动态分类<span class="required">*</span></label>

													<div class="controls">

														<select class="span6 m-wrap huge" name="news_sort">
															@if($news['news_sort'] == '园所快报')
															<option value="园所快报" selected = "selected">园所快报</option>
															<option value="健康护航">健康护航</option>
															<option value="金色时光">金色时光</option>
															<option value="最美芳华">最美芳华</option>
															<option value="为爱同行">为爱同行</option>
															@elseif($news['news_sort'] == '健康护航')
															<option value="园所快报">园所快报</option>
															<option value="健康护航" selected = "selected">健康护航</option>
															<option value="金色时光">金色时光</option>
															<option value="最美芳华">最美芳华</option>
															<option value="为爱同行">为爱同行</option>
															@elseif($news['news_sort'] == '金色时光')
															<option value="园所快报">园所快报</option>
															<option value="健康护航">健康护航</option>
															<option value="金色时光" selected = "selected">金色时光</option>
															<option value="最美芳华">最美芳华</option>
															<option value="为爱同行">为爱同行</option>
															@elseif($news['news_sort'] == '最美芳华')
															<option value="园所快报">园所快报</option>
															<option value="健康护航">健康护航</option>
															<option value="金色时光">金色时光</option>
															<option value="最美芳华" selected = "selected">最美芳华</option>
															<option value="为爱同行">为爱同行</option>
															@elseif($news['news_sort'] == '为爱同行')
															<option value="园所快报">园所快报</option>
															<option value="健康护航">健康护航</option>
															<option value="金色时光">金色时光</option>
															<option value="最美芳华">最美芳华</option>
															<option value="为爱同行" selected = "selected">为爱同行</option>
															@endif
														</select>

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
