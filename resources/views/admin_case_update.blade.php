<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>匠几品牌案例设置</title>

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

							匠几品牌管理

							 <small>匠几品牌案例设置</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/admin/case">匠几品牌管理</a> 

								<span class="icon-angle-right"></span>

							</li>

							<li>

								<a href="/admin/case">匠几品牌案例</a>

								<span class="icon-angle-right"></span>

							</li>

							<li><a href="#">匠几品牌案例设置</a></li>

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

									<span class="hidden-480">匠几品牌案例设置</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">匠几品牌案例设置</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/admin/case/doupdate/{{$jiangji_case['id']}}" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">匠几品牌案例id</label>

													<div class="controls">   

														<input class="m-wrap medium" name="mid" type="text" value="{{$jiangji_case['id']}}" readonly/>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">匠几品牌案例标题</label>

													<div class="controls">

														<input type="text" name="case_title" value="{{$jiangji_case['case_title']}}" class="m-wrap huge" />

														<span class="help-inline">请输入匠几品牌案例标题</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">是否在匠几封面</label>

													<div class="controls">

														<input type="radio" name="is_cover" value="1" {{$jiangji_case['is_cover'] == '1'? 'checked' :''}} class="m-wrap large" />在匠几封面

														<input type="radio" name="is_cover" value="0" {{$jiangji_case['is_cover'] == '0'? 'checked' :''}} class="m-wrap large" />不在匠几封面

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">封面图路径</label>

													<div class="controls">

														<input type="text" name="cover_pic" value="{{$jiangji_case['cover_pic']}}" class="m-wrap huge" />

														<span class="help-inline">请输入封面图路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">封面图简介</label>

													<div class="controls">

														<input type="text" name="case_index" value="{{$jiangji_case['case_index']}}" class="m-wrap huge" />

														<span class="help-inline">请输入封面图简介</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">服务内容</label>

													<div class="controls">

														<input type="text" name="service_content" value="{{$jiangji_case['service_content']}}" class="m-wrap huge" />

														<span class="help-inline">请输入服务内容</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">坐标</label>

													<div class="controls">

														<input type="text" name="coord" value="{{$jiangji_case['coord']}}" class="m-wrap huge" />

														<span class="help-inline">请输入坐标</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">是否热门</label>

													<div class="controls">

														<input type="radio" name="is_hot" value="1" {{$jiangji_case['is_hot'] == '1'? 'checked' :''}} class="m-wrap large" />热门

														<input type="radio" name="is_hot" value="0" {{$jiangji_case['is_hot'] == '0'? 'checked' :''}} class="m-wrap large" />不热门

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">园徽路径</label>

													<div class="controls">

														<input type="text" name="badge" value="{{$jiangji_case['badge']}}" class="m-wrap huge" />

														<span class="help-inline">请输入园徽路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">日期</label>

													<div class="controls">

														<input type="text" name="date_time" value="{{$jiangji_case['date_time']}}" class="m-wrap huge" />

														<span class="help-inline">请输入日期("2016.01.01")</span>

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