<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>中财福源固定资产盘点</title>

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

	<!-- BEGIN PAGE LEVEL STYLES -->

	<!-- END PAGE LEVEL STYLES -->
	<style media="screen">
			.color1{background-color: #044b8c;}
			.color2{background-color: #055cac;}
			.color3{background-color: #046ccb;}
			.color4{background-color: #057ce8;}
			.color5{background-color: #2d97f8;}
			.color6{background-color: #48a6fb;}
			.color7{background-color: #55acfb;}
			.color8{background-color: #6cb7fa;}
			.fc{color:white}
			.bc{background-color:#69cefc!important;}
	</style>

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body class="page-header-fixed bc">

		<!-- <div class="space20 bc"></div> -->

		<h2 class="bc" style="font-weight:bold;color:white;text-align:center;"><img src="http://static.meyoungbaby.com/zcfy_logo.png" alt="" style="width:50px;height:50px;" >&nbsp;固定资产信息</h2>

		<div class="row-fluid top-news bc">

			<div class="span3">

				<a href="#" class="btn color1 fc">

				<span>资产编号</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['asset_tag']}}

				</em>

				<i class="icon-briefcase top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color2 fc">

				<span>类别</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['category']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color3 fc">

				<span>资产名称</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['asset_name']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color4 fc">

				<span>单位</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['unit']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color5 fc">

				<span>规格型号</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['model']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color6 fc">

				<span>存放地点</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['place']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color7 fc">

				<span>状态</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['status']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>

			<div class="span3">

				<a href="#" class="btn color8 fc">

				<span>备注</span>

				<em>

				<i class="icon-tags"></i>

				{{$info['remark']}}

				</em>

				<i class="icon-book top-news-icon"></i>

				</a>

			</div>
			@if($info['picture'])
			<div class="active item">

				<img src="{{$info['picture']}}" alt="照片">

			</div>
			@endif
			@if($info['qr_code'])
			<div class="active item">
				<div style="width:100%;height:270px;background:white;">
					<div style="padding:0px 70px 15px 70px;">
						<img src="{{$info['qr_code']}}" alt="二维码">
					</div>
				</div>
			</div>
			@endif
		</div>

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

		   App.init();

		});

	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>
