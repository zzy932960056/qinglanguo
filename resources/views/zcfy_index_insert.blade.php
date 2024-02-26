<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>中财福源固资信息新增</title>

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

	@include('zcfy_top')

	<!-- END HEADER -->

	<!-- BEGIN CONTAINER -->

	<div class="page-container row-fluid">

		<!-- BEGIN SIDEBAR -->

		@include('zcfy_side')

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

							中财福源固资信息管理

							<small>中财福源固资信息新增</small>

						</h3>

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

									<span class="hidden-480">中财福源固资信息管理</span>

								</div>

							</div>

							<div class="portlet-body form">

								<div class="tabbable portlet-tabs">

									<ul class="nav nav-tabs">

										<li class="active"><a href="#portlet_tab1" data-toggle="tab">中财福源固资信息新增</a></li>

									</ul>

									<div class="tab-content">

										<div class="tab-pane active" id="portlet_tab1">

											<!-- BEGIN FORM-->

											<form action="/zcfy/index/doinsert" class="form-horizontal" method="post">

												<div class="control-group">

													<label class="control-label">编号<span class="required">*</span></label>

													<div class="controls">

														<input type="text" name="asset_tag" id="asset" placeholder="请输入固资编号" class="m-wrap huge" />

														<span class="help-inline" id="initial">请输入固资编号</span>

														<span class="help-inline" id="red2" style="color:red;">固资编号不能为空</span>

														<span class="help-inline" id="red" style="color:red;">固资编号重复</span>

														<span class="help-inline" id="green" style="color:green;">固资编号可用</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">类别<span class="required">*</span></label>

													<div class="controls">

														<input type="text" name="category" id="category" placeholder="请输入固资类别" class="m-wrap huge" />

														<span class="help-inline" id="cate1">请输入固资类别</span>

														<span class="help-inline" id="cate2" style="color:green;">固资类别可用</span>

														<span class="help-inline" id="cate3" style="color:red;">固资类别不能为空</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">固资名称<span class="required">*</span></label>

													<div class="controls">

														<input type="text" name="asset_name" id="asset_name" placeholder="请输入固资名称" class="m-wrap huge" />

														<span class="help-inline" id="asset_name1">请输入固资名称</span>

														<span class="help-inline" id="asset_name2" style="color:green;">固资类别可用</span>

														<span class="help-inline" id="asset_name3" style="color:red;">固资类别不能为空</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">单位</label>

													<div class="controls">

														<input type="text" name="unit" placeholder="请输入单位" class="m-wrap huge" />

														<span class="help-inline">请输入单位</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">规格型号</label>

													<div class="controls">

														<input type="text" name="model" placeholder="请输入规格型号" class="m-wrap huge" />

														<span class="help-inline">请输入规格型号</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">存放地点</label>

													<div class="controls">

														<input type="text" name="place" placeholder="请输入存放地点" class="m-wrap huge" />

														<span class="help-inline">请输入存放地点</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">状态</label>

													<div class="controls">

														<input type="text" name="status" placeholder="请输入状态" class="m-wrap huge" />

														<span class="help-inline">请输入状态</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">照片路径</label>

													<div class="controls">

														<input type="text" name="picture" placeholder="请输入照片路径" class="m-wrap huge" />

														<span class="help-inline">请输入照片路径</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">备注</label>

													<div class="controls">

														<input type="text" name="remark" placeholder="请输入备注" class="m-wrap huge" />

														<span class="help-inline">请输入备注</span>

													</div>

												</div>

												<div class="control-group">

													<label class="control-label">二维码路径</label>

													<div class="controls">

														<input type="text" name="qr_code" placeholder="请输入二维码路径" class="m-wrap huge" />

														<span class="help-inline">请输入二维码路径</span>

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

	@include('zcfy_foot')

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
			 $("#red").hide();
			 $("#red2").hide();
			 $("#green").hide();
			 $("#cate2").hide();
			 $("#cate3").hide();
			 $("#asset_name2").hide();
			 $("#asset_name3").hide();
		});

		$("#asset").blur(function(){
				var asset= $('#asset').val();
				var data = {asset_tag: asset};
				$.ajax({
							url:"/zcfy/index/asset",
							type:"post",
							data:data,
							success:function(content){
									if(content.msg == 'ok'){
											if(asset == ''){
														$("#initial").hide();
														$("#red").hide();
														$("#green").hide();
														$("#red2").show();
														return false;
											}
											$("#initial").hide();
											$("#red").hide();
											$("#red2").hide();
							 			 	$("#green").show();
											return true;
									}else if(content.msg == 'no'){
											alert('固资编号重复,请重新输入');
											$("#initial").hide();
											$("#red2").hide();
							 			 	$("#green").hide();
											$("#red").show();
											return false;
									}
							},
							dataType:"json"
				})
		})

		$("#category").blur(function(){
					var category= $('#category').val();
					if(category == ''){
							$("#cate1").hide();
							$("#cate2").hide();
							$("#cate3").show();
					}else{
							$("#cate1").hide();
							$("#cate2").show();
							$("#cate3").hide();
					}
		})

		$("#asset_name").blur(function(){
					var asset_name= $('#asset_name').val();
					if(asset_name == ''){
							$("#asset_name1").hide();
							$("#asset_name2").hide();
							$("#asset_name3").show();
					}else{
							$("#asset_name1").hide();
							$("#asset_name2").show();
							$("#asset_name3").hide();
					}
		})

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>
