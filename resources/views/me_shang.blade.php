<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>觅尚杂志管理</title>

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

							觅尚杂志管理 <small>觅尚杂志</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/me_shang/index">觅尚杂志管理</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="/me_shang/index">觅尚杂志</a>

								<i class="icon-angle-right"></i>

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

								<div class="caption"><i class="icon-edit"></i>觅尚杂志列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">

									<div class="btn-group">

										<button id="sample_editable_1_new" class="btn green">

										新增 <i class="icon-plus"></i>

										</button>

									</div>

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">

									<thead>

										<tr>

											<th>觅尚杂志ID</th>

											<th>觅尚杂志封面图路径</th>

											<th>觅尚杂志封面图</th>

											<th>觅尚杂志主题</th>

											<th>觅尚杂志主体介绍</th>

											<th>觅尚杂志日期</th>

											<th>觅尚杂志期数</th>

											<th>觅尚杂志图片详情</th>

											<th>觅尚杂志文字详情</th>

											<th>编辑</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
										@foreach($me_shang as $shang)
										<tr class="">

											<td>{{$shang->id}}</td>

											<td>{{$shang->magazine_path}}</td>

											<td><img src="{{$shang->magazine_path}}" width="255"/></td>

											<td>{{$shang->magazine_theme}}</td>

											<td>{{$shang->magazine_index}}</td>

											<td>{{$shang->date}}</td>

											<td>{{$shang->volume}}</td>

											<td><a href="/me_shang/magazine/index/{{$shang->id}}">觅尚杂志图片详情</a></td>

											<td><a href="/me_shang/text/index/{{$shang->id}}">觅尚杂志文字详情</a></td>

											<td><a href="/me_shang/index/update/{{$shang->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

										</tr>
										@endforeach
									</tbody>

								</table>
								<!-- 分页 -->
								<div class="pull-right">
									{{$me_shang->render()}}
								</div>
								<style type="text/css">
									.pagination li{float: left; list-style: none; 
										margin: 0 10px; padding: 5px; font-size: 18px;
										 margin-top: 30px; }
								</style>
								<!-- 分页结束 -->
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

		$("#sample_editable_1_new").click(
				function(){
					location.href = "/me_shang/index/insert";
				}
			)

		$(".delete").click(
				function(othis){
					if(confirm('确认删除?') == false){
						return false;
					}
					var data = this.parentNode.parentNode.firstChild.nextSibling.innerHTML;
					$.ajax({
						url:"/me_shang/index/dodelete",
						type:"post",
						data:{'mid':data},
						success:function(content){
							if(content.msg == 'ok'){
								alert('删除杂志成功');
								location.href = "/me_shang/index";
							}else if(content.msg == 'no'){
								alert('发生未知错误');
								location.href = "/me_shang/index";
							}
						},
						dataType:"json"
					})
				}
			)
	</script>

	<!-- END JAVASCRIPTS -->   

</body>

<!-- END BODY -->

</html>