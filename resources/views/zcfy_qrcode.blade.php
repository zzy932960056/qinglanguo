<!DOCTYPE html>

<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->

<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->

<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->

<!-- BEGIN HEAD -->

<head>

	<meta charset="utf-8" />

	<title>生成二维码</title>

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

	<link href="{{ URL::asset('/css/lock.css') }}" rel="stylesheet" type="text/css"/>

	<!-- END PAGE LEVEL STYLES -->

	<link rel="shortcut icon" href="{{ URL::asset('/image/favicon.ico') }}" />

</head>

<!-- END HEAD -->

<!-- BEGIN BODY -->

<body>

	<div class="page-lock">

		<div class="page-body">

			<div id="qrcode" style="float:left;"></div>

			<div class="page-lock-info">

				<h1>请输入固资编号生成</h1>

				<h1>相应二维码</h1>

				<span>左侧二维码图片可右键保存</span>

				<span><<<<<</span>

				<!-- <form class="form-search"> -->

					<div class="input-append">

						<input type="text" class="m-wrap" placeholder="请输入" id="qrno">

						<button  class="btn blue icn-only" id="btn"><i class="m-icon-swapright m-icon-white"></i></button>

					</div>

					<div class="relogin">

						<a href="/zcfy/index">返回</a>

					</div>

				<!-- </form> -->

			</div>

		</div>

		<div class="page-footer">

			2019 &copy; 中财福源

		</div>

	</div>

	<!-- BEGIN JAVASCRIPTS(Load javascripts at bottom, this will reduce page load time) -->

	<!-- BEGIN CORE PLUGINS -->

	<script src="{{ URL::asset('/js/jquery-1.10.1.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery-migrate-1.2.1.min.js') }}" type="text/javascript"></script>

	<!-- IMPORTANT! Load jquery-ui-1.10.1.custom.min.js') }} before bootstrap.min.js') }} to fix bootstrap tooltip conflict with jquery ui tooltip -->

	<script src="{{ URL::asset('/js/jquery-ui-1.10.1.custom.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/bootstrap.min.js') }}" type="text/javascript"></script>

	<!--[if lt IE 9]>

	<script src="media/js/excanvas.min.js"></script>

	<script src="media/js/respond.min.js"></script>

	<![endif]-->

	<script src="{{ URL::asset('/js/jquery.slimscroll.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.blockui.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.cookie.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.uniform.min.js') }}" type="text/javascript" ></script>

	<!-- END CORE PLUGINS -->

	<!-- BEGIN PAGE LEVEL PLUGINS -->

	<script src="{{ URL::asset('/js/jquery.backstretch.min.js') }}" type="text/javascript"></script>

	<script src="{{ URL::asset('/js/jquery.qrcode.min.js') }}" type="text/javascript"></script>

	<!-- END PAGE LEVEL PLUGINS -->

	<script src="{{ URL::asset('/js/app.js') }}"></script>

	<script src="{{ URL::asset('/js/lock.js') }}"></script>

	<script>

		jQuery(document).ready(function() {

		   App.init();

		   Lock.init();

		});

	</script>

	<script>
			var qrtext = '';
			$("#btn").on("click",function(){
				$("#qrcode").empty();
				qrtext = $("#qrno").val();
				if(qrtext){
					var fitext = "http://kinglengo.com/zcfy?asset_tag="+qrtext;
					$("#qrcode").qrcode({width: 200,height: 200,text: fitext});
				}
			});
	</script>

	<!-- END JAVASCRIPTS -->

</body>

<!-- END BODY -->

</html>
