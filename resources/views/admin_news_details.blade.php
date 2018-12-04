<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>青蓝果动态详情管理</title>

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

							青蓝果动态管理 <small>青蓝果动态详情</small>

						</h3>

						<ul class="breadcrumb">

							<li>

								<i class="icon-home"></i>

								<a href="/admin/news">青蓝果动态管理</a>

								<i class="icon-angle-right"></i>

							</li>

							<li>

								<a href="#">青蓝果动态详情</a>

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

								<div class="caption"><i class="icon-edit"></i>青蓝果动态详情</div>

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

										添加文本 <i class="icon-plus"></i>

										</button>

									</div>

									<div class="btn-group">

										<button id="sample_editable_2_new" class="btn green">

										添加大图片（1张） <i class="icon-plus"></i>

										</button>

									</div>

									<div class="btn-group">

										<button id="sample_editable_5_new" class="btn green">

										添加中图片（2张） <i class="icon-plus"></i>

										</button>

									</div>

									<div class="btn-group">

										<button id="sample_editable_3_new" class="btn green">

										添加小图片（3张） <i class="icon-plus"></i>

										</button>

									</div>

									<div class="btn-group">

										<button id="sample_editable_4_new" class="btn green">

										添加视频 <i class="icon-plus"></i>

										</button>

									</div>

										<input type = "hidden" id="hidden" value="{{$nid}}" />

								</div>

								<table class="table table-striped table-hover table-bordered" id="sample_editable_1">
									<thead>

										<tr>

											<th>ID</th>

											<th>内容详情</th>

											<th>编辑</th>

											<th>删除</th>

										</tr>

									</thead>

									@foreach($details as $de)
									<input type="hidden" id="news_id" value="{{$de->news_id}}">
									@if($de->news_text)
									<tbody>

										<tr class="">

											<td>{{$de->id}}</td>

											<td>{{$de->news_text}}</td>

											<td><a href="/admin/news/details/text/update/{{$de->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

										</tr>

									</tbody>
									@elseif($de->news_pic_b)
									<tbody>

										<tr class="">

											<td>{{$de->id}}</td>

											<td><img src="{{$de->news_pic_b}}" width="50%"><span>大图</span></td>

											<td><a href="/admin/news/details/big_pic/update/{{$de->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

										</tr>

									</tbody>
									@elseif($de->news_pic_m1)
									<tbody>

										<tr class="">

											<td>{{$de->id}}</td>

											<td>
												<img src="{{$de->news_pic_m1}}" width="30%"><span>中图1</span>
												<img src="{{$de->news_pic_m2}}" width="30%"><span>中图2</span>
											</td>

											<td><a href="/admin/news/details/mid_pic/update/{{$de->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

										</tr>

									</tbody>
									@elseif($de->news_pic_s1)
									<tbody>

										<tr class="">

											<td>{{$de->id}}</td>

											<td>
												<img src="{{$de->news_pic_s1}}" width="20%"><span>小图1</span>
												<img src="{{$de->news_pic_s2}}" width="20%"><span>小图2</span>
												<img src="{{$de->news_pic_s3}}" width="20%"><span>小图3</span>
											</td>

											<td><a href="/admin/news/details/small_pic/update/{{$de->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

										</tr>

									</tbody>
									@elseif($de->news_video)
									<tbody>

										<tr class="">

											<td>{{$de->id}}</td>

											<td>
												<div><video src="{{$de->news_video}}" width="50%" controls="controls"></video><span>视频</span></div>

												<div><img src="{{$de->news_video_pic}}" width="50%"><span>视频封面图</span></div>
											</td>

											<td><a href="/admin/news/details/video/update/{{$de->id}}">编辑</a></td>

											<td><a class="delete" href="javascript:;">删除</a></td>

										</tr>

									</tbody>
									@endif
								@endforeach
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
					var hid = $('#hidden').val();
					location.href = "/admin/news/details/text/insert/"+hid;
				}
			)

		$("#sample_editable_2_new").click(
				function(){
					var hid = $('#hidden').val();
					location.href = "/admin/news/details/big_pic/insert/"+hid;
				}
			)

		$("#sample_editable_3_new").click(
				function(){
					var hid = $('#hidden').val();
					location.href = "/admin/news/details/small_pic/insert/"+hid;
				}
			)

		$("#sample_editable_4_new").click(
				function(){
					var hid = $('#hidden').val();
					location.href = "/admin/news/details/video/insert/"+hid;
				}
			)

		$("#sample_editable_5_new").click(
				function(){
					var hid = $('#hidden').val();
					location.href = "/admin/news/details/mid_pic/insert/"+hid;
				}
			)

		$(".delete").click(
				function(othis){
					if(confirm('确认删除?') == false){
						return false;
					}
					var data = this.parentNode.parentNode.firstChild.nextSibling.innerHTML;
					var news_id = $("#news_id").val();
					$.ajax({
						url:"/admin/news/details/dodelete",
						type:"post",
						data:{'mid':data},
						success:function(content){
							if(content.msg == 'ok'){
								alert('删除成功');
								location.href = "/admin/news/details/"+news_id;
							}else if(content.msg == 'no'){
								alert('发生未知错误');
								location.href = "/admin/news/details/"+news_id;
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
