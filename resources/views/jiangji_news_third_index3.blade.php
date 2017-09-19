<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>匠几动态管理</title>

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

						<!-- BEGIN PAGE TITLE & BREADCRUMB-->

						<h3 class="page-title">

							匠几动态管理 <small>匠几动态</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/admin/news">匠几动态管理</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="/admin/news">匠几动态</a>

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">匠几动态三级详情</a>

							</li>

						</ul>

						<!-- END PAGE TITLE & BREADCRUMB-->

					</div>

				</div>

				<!-- END PAGE HEADER-->

				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-edit"></i>匠几动态三级图文列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

										<input type = "hidden" id="hidden" value="{{$nid}}" />

								</div>
								
								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>ID</th>

											<th>流程图图1.1</th>

											<th>流程图图1.2</th>

											<th>流程图图1.3</th>

											<th>流程图图1.4</th>

											<th>流程图图1.5</th>

											<th>流程图图1.6</th>

											<th>文字1.1</th>

											<th>文字1.2</th>

											<th>文字1.3</th>

											<th>文字1.4</th>

											<th>文字1.5</th>

											<th>文字1.6</th>

											<th>文字1.7</th>

											<th>编辑</th>

										</tr>

									</thead>

									<tbody>
										@foreach($news as $ne)
										<tr class="">

											<td>{{$ne->id}}</td>

											<td><img src="{{$ne->pic1_1}}" width="500"/></td>

											<td><img src="{{$ne->pic1_2}}" width="500"/></td>

											<td><img src="{{$ne->pic1_3}}" width="500"/></td>

											<td><img src="{{$ne->pic1_4}}" width="500"/></td>

											<td><img src="{{$ne->pic1_5}}" width="500"/></td>

											<td><img src="{{$ne->pic1_6}}" width="500"/></td>

											<td>{{$ne->text1_1}}</td>

											<td>{{$ne->text1_2}}</td>

											<td>{{$ne->text1_3}}</td>

											<td>{{$ne->text1_4}}</td>

											<td>{{$ne->text1_5}}</td>

											<td>{{$ne->text1_6}}</td>

											<td>{{$ne->text1_7}}</td>

											<td><a href="/admin/news/third/index3/first/update/{{$ne->id}}">编辑</a></td>

										</tr>
										@endforeach
									</tbody>

								</table>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_2">

									<thead>

										<tr>

											<th>ID</th>

											<th>模块二图2.1</th>

											<th>模块二图2.2</th>

											<th>模块二图2.3</th>

											<th>模块二文2.1.1</th>

											<th>模块二文2.1.2</th>

											<th>模块二文2.2.1</th>

											<th>模块二文2.2.2</th>

											<th>模块二文2.3.1</th>

											<th>模块二文2.3.2</th>

											<th>编辑</th>

										</tr>

									</thead>

									<tbody>
										@foreach($news as $ne)
										<tr class="">

											<td>{{$ne->id}}</td>

											<td><img src="{{$ne->pic2_1}}" width="155"/></td>

											<td><img src="{{$ne->pic2_2}}" width="155"/></td>

											<td><img src="{{$ne->pic2_3}}" width="155"/></td>

											<td>{{$ne->text2_1_1}}</td>

											<td>{{$ne->text2_1_2}}</td>

											<td>{{$ne->text2_2_1}}</td>

											<td>{{$ne->text2_2_2}}</td>

											<td>{{$ne->text2_3_1}}</td>

											<td>{{$ne->text2_3_2}}</td>

											<td><a href="/admin/news/third/index3/second/update/{{$ne->id}}">编辑</a></td>

										</tr>
										@endforeach
									</tbody>

								</table>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_3">

									<thead>

										<tr>

											<th>ID</th>

											<th>模块三图</th>

											<th>模块三文3.1</th>

											<th>模块三文3.2</th>

											<th>编辑</th>

										</tr>

									</thead>

									<tbody>
										@foreach($news as $ne)
										<tr class="">

											<td>{{$ne->id}}</td>

											<td><img src="{{$ne->pic3}}" width="255"/></td>

											<td>{{$ne->text3_1}}</td>

											<td>{{$ne->text3_2}}</td>

											<td><a href="/admin/news/third/index3/third/update/{{$ne->id}}">编辑</a></td>

										</tr>
										@endforeach
									</tbody>

								</table>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_4">

									<thead>

										<tr>

											<th>ID</th>

											<th>模块四图4.1</th>

											<th>模块四图4.2</th>

											<th>模块四图4.3</th>

											<th>模块四图4.4</th>

											<th>模块四图4.5</th>

											<th>模块四图4.6</th>

											<th>模块四文4.1.1</th>

											<th>模块四文4.1.2</th>

											<th>模块四文4.2.1</th>

											<th>模块四文4.2.2</th>

											<th>模块四文4.3.1</th>

											<th>模块四文4.3.2</th>

											<th>模块四文4.4.1</th>

											<th>模块四文4.4.2</th>

											<th>模块四文4.5.1</th>

											<th>模块四文4.5.2</th>

											<th>模块四文4.6.1</th>

											<th>模块四文4.6.2</th>																																

											<th>编辑</th>

										</tr>

									</thead>

									<tbody>
										@foreach($news as $ne)
										<tr class="">

											<td>{{$ne->id}}</td>

											<td><img src="{{$ne->pic4_1}}" width="255"/></td>

											<td><img src="{{$ne->pic4_2}}" width="255"/></td>

											<td><img src="{{$ne->pic4_3}}" width="255"/></td>

											<td><img src="{{$ne->pic4_4}}" width="255"/></td>

											<td><img src="{{$ne->pic4_5}}" width="255"/></td>

											<td><img src="{{$ne->pic4_6}}" width="255"/></td>

											<td>{{$ne->text4_1_1}}</td>

											<td>{{$ne->text4_1_2}}</td>

											<td>{{$ne->text4_2_1}}</td>

											<td>{{$ne->text4_2_2}}</td>

											<td>{{$ne->text4_3_1}}</td>

											<td>{{$ne->text4_3_2}}</td>

											<td>{{$ne->text4_4_1}}</td>

											<td>{{$ne->text4_4_2}}</td>

											<td>{{$ne->text4_5_1}}</td>

											<td>{{$ne->text4_5_2}}</td>

											<td>{{$ne->text4_6_1}}</td>

											<td>{{$ne->text4_6_2}}</td>																																	

											<td><a href="/admin/news/third/index3/forth/update/{{$ne->id}}">编辑</a></td>

										</tr>
										@endforeach
									</tbody>

								</table>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_5">

									<thead>

										<tr>

											<th>ID</th>

											<th>模块五图</th>

											<th>模块五文</th>

											<th>编辑</th>

										</tr>

									</thead>

									<tbody>
										@foreach($news as $ne)
										<tr class="">

											<td>{{$ne->id}}</td>

											<td><img src="{{$ne->pic5}}" width="255"/></td>

											<td>{{$ne->text5}}</td>

											<td><a href="/admin/news/third/index3/fifth/update/{{$ne->id}}">编辑</a></td>

										</tr>
										@endforeach
									</tbody>

								</table>

							</div>
							
						</div>
						
						<!-- END EXAMPLE TABLE PORTLET-->

					</div>

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