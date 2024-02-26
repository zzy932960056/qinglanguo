<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>固定资产查询</title>

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

		@include('zcfy_side2')

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

							固定资产检索

						</h3>

					</div>

				</div>

				<!-- END PAGE HEADER-->
				<div class="portlet box grey" style="width:30%">

					<div class="portlet-title">

						<div class="caption"><i class="icon-cogs"></i>检索</div>

						<div class="tools">

							<a href="javascript:;" class="collapse"></a>

							<a href="#portlet-config" data-toggle="modal" class="config"></a>

							<a href="javascript:;" class="reload"></a>

							<a href="javascript:;" class="remove"></a>

						</div>

					</div>

					<div class="portlet-body">

						<form>

								<h5 style="font-weight:bold;">请输入任意关键字</h5>

								<div id="pulsate-regular" style="padding:5px;">

									<input type="text" name="" value="" placeholder="请输入关键字" id="search">

								</div>


								<input type="button" class="btn green" id="pulsate-once" value="检索">

								<button class="btn red" id="pulsate-crazy" type="reset">重置</button>

								<div class="space10"></div>

						</form>

					</div>

				</div>
				<!-- BEGIN PAGE CONTENT-->

				<div class="row-fluid">

					<div class="span12">

						<!-- BEGIN EXAMPLE TABLE PORTLET-->

						<div class="portlet box blue">

							<div class="portlet-title">

								<div class="caption"><i class="icon-edit"></i>固定资产列表</div>

								<div class="tools">

									<a href="javascript:;" class="collapse"></a>

									<a href="#portlet-config" data-toggle="modal" class="config"></a>

									<a href="javascript:;" class="reload"></a>

									<a href="javascript:;" class="remove"></a>

								</div>

							</div>

							<div class="portlet-body">

								<div class="clearfix">


								</div>
								<div id="lalala">
								</div>

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

		});
		$("#pulsate-once").click(function(){
				var info = $("#search").val();
				var data = {info: info};
				$.ajax({
							url:"/zcfy/index/search",
							type:"post",
							data:data,
							success:function(content){
									if(content.msg == 'ok'){
											var info = content.info_details;
											var str = '';
											str += '<table class="table table-striped table-hover table-bordered" id="sample_editable_1">';
											str += '<thead>';
											str += '<tr>';
											str += '<th>固资ID</th>';
											str += '<th>编号</th>';
											str += '<th>类别</th>';
											str += '<th>固资名称</th>';
											str += '<th>单位</th>';
											str += '<th>规格型号</th>';
											str += '<th>存放地点</th>';
											str += '<th>状态</th>';
											str += '<th width="20%">照片</th>';
											str += '<th>备注</th>';
											str += '<th width="20%">二维码</th>';
											str += '</tr>';
											str += '</thead>';
											str += '<tbody>';
											$.each(info,function(key,val){
													str += '<tr class="">';
													str += '<td>' + info[key].id + '</td>';
													str += '<td>' + info[key].asset_tag + '</td>';
													str += '<td>' + info[key].category + '</td>';
													str += '<td>' + info[key].asset_name + '</td>';
													str += '<td>' + info[key].unit + '</td>';
													str += '<td>' + info[key].model + '</td>';
													str += '<td>' + info[key].place + '</td>';
													str += '<td>' + info[key].status + '</td>';
													str += '<td><img src="' + info[key].picture + '" /></td>';
													str += '<td>' + info[key].remark + '</td>';
													str += '<td><img src="' + info[key].qr_code + '" /></td>';
													str += '</tr>';
											});
											str += '</tbody>';
											str += '</table>';
											$("#lalala").html(str);
											return true;
									}else if(content.msg == 'no'){
											alert('未找到相关信息');
											return false;
									}
							},
							dataType:"json"
				})

		})

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>
