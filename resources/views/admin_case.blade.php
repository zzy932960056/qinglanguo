<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>品牌案例管理</title>

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

							品牌案例管理 <small>品牌案例</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/admin/case">品牌案例管理</a> 

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">品牌案例</a>

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

								<div class="caption"><i class="icon-edit"></i>品牌案例列表</div>

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

											<th>品牌案例ID</th>

											<th>品牌案例标题</th>

											<th>是否在封面</th>

											<th>封面图</th>

											<th>封面图简介</th>

											<th>服务内容</th>

											<th>坐标</th>

											<th>是否热门</th>

											<th>轮播图</th>

											<th>园徽</th>

											<th>日期</th>

											<th>品牌文案</th>

											<th>品牌设计</th>

											<th>空间设计</th>

											<th>环创设计</th>

											<th>公仔图</th>

											<th>影音定制</th>

											<th>编辑</th>

											<th>删除</th>

										</tr>

									</thead>

									<tbody>
										@foreach($case as $ca)
										<tr class="">

											<td>{{$ca->id}}</td>

											<td>{{$ca->case_title}}</td>

											<td>{{$ca->is_cover == 1 ? '是' : '否'}}</td>

											<td><img src="{{$ca->cover_pic}}" width="255"/></td>

											<td>{{$ca->case_index}}</td>

											<td>{{$ca->service_content}}</td>

											<td>{{$ca->coord}}</td>

											<td>{{$ca->is_hot == 1 ? '是' : '否'}}</td>

											<td><a href="/admin/case/pic/{{$ca->id}}">轮播图</a></td>

											<td><img src="{{$ca->badge}}" width="100"/></td>

											<td>{{$ca->date_time}}</td>

											<td><a href="/admin/case/doc/{{$ca->id}}">品牌文案</a></td>

											<td><a href="/admin/case/design/{{$ca->id}}">品牌设计</a></td>

											<td><a href="/admin/case/space/{{$ca->id}}">空间设计</a></td>

											<td><a href="/admin/case/env/{{$ca->id}}">环创设计</a></td>

											<td><a href="/admin/case/doll/{{$ca->id}}">公仔图</a></td>

											<td><a href="/admin/case/video/{{$ca->id}}">影音定制</a></td>

											<td><a href="/admin/case/update/{{$ca->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

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

		$("#sample_editable_1_new").click(
				function(){
					location.href = "/admin/case/insert";
				}
			)

		$(".delete").click(
				function(othis){
					if(confirm('确认删除?') == false){
						return false;
					}
					var data = this.parentNode.parentNode.firstChild.nextSibling.innerHTML;
					$.ajax({
						url:"/admin/case/dodelete",
						type:"post",
						data:{'mid':data},
						success:function(content){
							if(content.msg == 'ok'){
								alert('删除品牌案例成功');
								location.href = "/admin/case";
							}else if(content.msg == 'no'){
								alert('发生未知错误');
								location.href = "/admin/case";
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