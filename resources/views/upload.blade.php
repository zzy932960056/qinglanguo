<!DOCTYPE html>
<!-- saved from url=(0027)http://jssdk.demo.qiniu.io/ -->
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <title>七牛云存储 - 上传工具</title>
    <link href="http://jssdk.demo.qiniu.io/images/favicon.ico" rel="shortcut icon">
    <link rel="stylesheet" href="{{URL::asset('/css4/bootstrap.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css4/main.css')}}">
    <link rel="stylesheet" href="{{URL::asset('/css4/highlight.css')}}">

    <!--[if lt IE 9]>
      <script src="http://cdn.staticfile.org/respond.js/1.4.2/respond.js"></script>
    <![endif]-->
<style type="text/css" adt="123"></style><script>if(!document.URL.match(/^http:\/\/v\.baidu\.com|http:\/\/music\.baidu\.com|http:\/\/dnf\.duowan\.com|http:\/\/bbs\.duowan\.com|http:\/\/newgame\.duowan\.com|http:\/\/my\.tv\.sohu\.com/)){
    (function() {
        function A() {}
        A.prototype = {
            rules: {
                /*'youku_loader': {
                 'find': /^http:\/\/static\.youku\.com\/.*(loader|player_.*)(_taobao)?\.swf/,
                 'replace': 'http://swf.adtchrome.com/loader.swf'
                 },
                 'youku_out': {
                 'find': /^http:\/\/player\.youku\.com\/player\.php\/.*sid\/(.*)/,
                 'replace': 'http://swf.adtchrome.com/loader.swf?VideoIDS=$1'
                 },*/
                'pps_pps': {
                    'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/pps_flvplay_s\.swf/,
                    'replace': 'http://swf.adtchrome.com/pps_20140420.swf'
                },
                /*'iqiyi_1': {
                 'find': /^http:\/\/www\.iqiyi\.com\/player\/cupid\/common\/.+\.swf$/,
                 'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf'
                 },
                 'iqiyi_2': {
                 'find': /^http:\/\/www\.iqiyi\.com\/common\/flashplayer\/\d+\/.+\.swf$/,
                 'replace': 'http://swf.adtchrome.com/iqiyi_20140624.swf'
                 },*/
                'ku6': {
                    'find': /^http:\/\/player\.ku6cdn\.com\/default\/.*\/\d+\/(v|player|loader)\.swf/,
                    'replace': 'http://swf.adtchrome.com/ku6_20140420.swf'
                },
                'ku6_topic': {
                    'find': /^http:\/\/player\.ku6\.com\/inside\/(.*)\/v\.swf/,
                    'replace': 'http://swf.adtchrome.com/ku6_20140420.swf?vid=$1'
                },
                /*'sohu': {
                    'find': /^http:\/\/tv\.sohu\.com\/upload\/swf(\/p2p)?\/\d+\/Main\.swf/,
                    'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf'
                },
                'sohu2':{
                    'find':/^http:\/\/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\/testplayer\/Main0?\.swf/,
                    'replace':'http://www.adtchrome.com/sohu/sohu_20150104.swf'
                },
                'sohu_share': {
                    'find': /^http:\/\/share\.vrs\.sohu\.com\/my\/v\.swf&/,
                    'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?'
                },
                'sohu_sogou' : {
                    'find': /^http:\/\/share\.vrs\.sohu\.com\/(\d+)\/v\.swf/,
                    'replace': 'http://www.adtchrome.com/sohu/sohu_20150104.swf?vid=$1'
                },
                'letv': {
                 'find': /^http:\/\/player\.letvcdn\.com\/.*p\/.*\/newplayer\/LetvPlayer\.swf/,
                 'replace': 'http://swf.adtchrome.com/20150110_letv.swf'
                 },
                 'letv_topic': {
                 'find': /^http:\/\/player\.hz\.letv\.com\/hzplayer\.swf\/v_list=zhuanti/,
                 'replace': 'http://swf.adtchrome.com/20150110_letv.swf'
                 },
                 'letv_duowan': {
                 'find': /^http:\/\/assets\.dwstatic\.com\/video\/vpp\.swf/,
                 'replace': 'http://yuntv.letv.com/bcloud.swf'
                 },*/
                '17173_in':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFile(Customer)?\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_in_20150522.swf"
                },
                '17173_out':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/PreloaderFileFirstpage\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_out_20150522.swf"
                },
                '17173_live':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream(_firstpage)?\.swf/,
                    'replace':"http://swf.adtchrome.com/17173_stream_20150522.swf"
                },
                '17173_live_out':{
                    'find':/http:\/\/f\.v\.17173cdn\.com\/(\d+\/)?flash\/Player_stream_(custom)?Out\.swf/,
                    'replace':"http://swf.adtchrome.com/17173.out.Live.swf"
                }
            },
            _done: null,
            get done() {
                if(!this._done) {
                    this._done = new Array();
                }
                return this._done;
            },
            addAnimations: function() {
                var style = document.createElement('style');
                style.type = 'text/css';
                style.innerHTML = 'object,embed{\
                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;\
                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;\
                -o-animation-duration:.001s;-o-animation-name:playerInserted;\
                animation-duration:.001s;animation-name:playerInserted;}\
                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}\
                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}';
                document.getElementsByTagName('head')[0].appendChild(style);
            },
            animationsHandler: function(e) {
                if(e.animationName === 'playerInserted') {
                    this.replace(e.target);
                }
            },
            replace: function(elem) {
                if(this.done.indexOf(elem) != -1) return;
                this.done.push(elem);
                var player = elem.data || elem.src;
                if(!player) return;
                var i, find, replace = false;
                for(i in this.rules) {
                    find = this.rules[i]['find'];
                    if(find.test(player)) {
                        replace = this.rules[i]['replace'];
                        if('function' === typeof this.rules[i]['preHandle']) {
                            this.rules[i]['preHandle'].bind(this, elem, find, replace, player)();
                        }else{
                            this.reallyReplace.bind(this, elem, find, replace)();
                        }
                        break;
                    }
                }
            },
            reallyReplace: function(elem, find, replace) {
                elem.data && (elem.data = elem.data.replace(find, replace)) || elem.src && ((elem.src = elem.src.replace(find, replace)) && (elem.style.display = 'block'));
                var b = elem.querySelector("param[name='movie']");
                this.reloadPlugin(elem);
            },
            reloadPlugin: function(elem) {
                var nextSibling = elem.nextSibling;
                var parentNode = elem.parentNode;
                parentNode.removeChild(elem);
                var newElem = elem.cloneNode(true);
                this.done.push(newElem);
                if(nextSibling) {
                    parentNode.insertBefore(newElem, nextSibling);
                } else {
                    parentNode.appendChild(newElem);
                }
            },
            init: function() {
                var desc = navigator.mimeTypes['application/x-shockwave-flash'].description.toLowerCase();
                /*if(desc.indexOf('adobe')>-1){
                 delete this.rules["iqiyi_1"];
                 delete this.rules["iqiyi_2"];
                 }*/
                if(document.URL.indexOf('tv.sohu.com')<=0){
                    delete this.rules["sohu"];
                }
                var handler = this.animationsHandler.bind(this);
                document.body.addEventListener('webkitAnimationStart', handler, false);
                document.body.addEventListener('msAnimationStart', handler, false);
                document.body.addEventListener('oAnimationStart', handler, false);
                document.body.addEventListener('animationstart', handler, false);
                this.addAnimations();
            }
        };
        new A().init();
    })();
}
// 20140730
(function cnbeta() {
    if (document.URL.indexOf('cnbeta.com') >= 0) {
        var elms = document.body.querySelectorAll("p>embed");
        Array.prototype.forEach.call(elms, function(elm) {
            elm.style.marginLeft = "0px";
        });
    }
})();
//去百度推广广告
if(document.URL.indexOf('www.baidu.com') >= 0){
    if(document && document.getElementsByTagName && document.getElementById && document.body){
        var a = function(){
            Array.prototype.forEach.call(document.body.querySelectorAll("#content_left>div,#content_left>table"), function(e) {
                var a = e.getAttribute("style");
                if(a && /display:(table|block)\s!important/.test(a)){
                    e.parentNode.removeChild(e)
                }
            });
        };
        a();
        document.getElementById("su").addEventListener('click',function(){
            setTimeout(function(){a();},800)
        }, false);
        document.getElementById("kw").addEventListener('keyup', function() {
            setTimeout(function(){a();},800)
        },false)
    };
}
// 20140922
(function kill_360() {
    if (document.URL.indexOf('so.com') >= 0) {
        document.getElementById("e_idea_pp").style.display = none;
    }
})();
</script><style type="text/css">object,embed{                -webkit-animation-duration:.001s;-webkit-animation-name:playerInserted;                -ms-animation-duration:.001s;-ms-animation-name:playerInserted;                -o-animation-duration:.001s;-o-animation-name:playerInserted;                animation-duration:.001s;animation-name:playerInserted;}                @-webkit-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-ms-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @-o-keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}                @keyframes playerInserted{from{opacity:0.99;}to{opacity:1;}}</style></head>
<body>
    <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-6" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="http://jssdk.demo.qiniu.io/#">七牛云存储 - 上传工具</a>
        </div>

      </div>
    </nav>

    <div class="container" style="padding-top: 60px;">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active">
                <a href="http://jssdk.demo.qiniu.io/#demo" id="demo-tab" role="tab" data-toggle="tab" aria-controls="demo" aria-expanded="true">上传</a>
            </li>

            <li role="presentation">
                <a href="http://jssdk.demo.qiniu.io/#log" id="log-tab" role="tab" data-toggle="tab" aria-controls="log">日志</a>
            </li>
        </ul>
        <div class="tab-content">
            <div role="tabpanel" class="tab-pane fade in active" id="demo" aria-labelledby="demo-tab">

                <div class="row" style="margin-top: 20px;">
                    <input type="hidden" id="domain" value="http://static.meyoungbaby.com/">
                    <input type="hidden" id="uptoken_url" value="uptoken">
                    <ul class="tip col-md-12 text-mute">
                        <li>
                            <small>上传文件前请修改名为<a style="color: red">英文或数字</a>组合, 不可以出现<a style="color: red">中文</a>,以免解析失败</small>
                        </li>

                        <li>
                            <small>本示例限制最大上传文件500M。</small>
                        </li>
                    </ul>
                    <div class="col-md-12">
                        <div id="container" style="position: relative;">
                            <a class="btn btn-default btn-lg " id="pickfiles" href="http://jssdk.demo.qiniu.io/#" style="position: relative; z-index: 1;">
                                <i class="glyphicon glyphicon-plus"></i>
                                <span>选择文件</span>
                            </a>
                        <div id="html5_1aj3rtennnga1n5h927gjn8343_container" class="moxie-shim moxie-shim-html5" style="position: absolute; top: 0px; left: 0px; width: 171px; height: 46px; overflow: hidden; z-index: 0;"><input id="html5_1aj3rtennnga1n5h927gjn8343" type="file" style="font-size: 999px; opacity: 0; position: absolute; top: 0px; left: 0px; width: 100%; height: 100%;" multiple="" accept=""></div></div>
                    </div>
                    <div style="display:none" id="success" class="col-md-12">
                        <div class="alert-success">
                            队列全部文件处理完毕
                        </div>
                    </div>
                    <div class="col-md-12 ">
                        <table class="table table-striped table-hover text-left" style="margin-top:40px;display:none">
                            <thead>
                              <tr>
                                <th class="col-md-4">Filename</th>
                                <th class="col-md-2">Size</th>
                                <th class="col-md-6">Detail</th>
                              </tr>
                            </thead>
                            <tbody id="fsUploadProgress">
                            </tbody>
                        </table>
                    </div>
                </div>

            </div>

            <div role="tabpanel" class="tab-pane fade" id="log" aria-labelledby="log-tab">
                <pre id="qiniu-js-sdk-log"><p>[qiniu-js-sdk][debug] init uploader start</p><p>[qiniu-js-sdk][debug] environment:  {"browser":"Chrome","version":50,"os":"Mac OS X","osVersion":"10.10.5","swf_url":"../flash/Moxie.swf","xap_url":"../silverlight/Moxie.xap","global_event_dispatcher":"moxie.core.EventTarget.instance.dispatchEvent","OS":"Mac OS X"}</p><p>[qiniu-js-sdk][debug] userAgent:  Mozilla/5.0 (Macintosh; Intel Mac OS X 10_10_5) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/50.0.2661.102 Safari/537.36</p><p>[qiniu-js-sdk][debug] invoke reset_chunk_size()</p><p>[qiniu-js-sdk][debug] op.chunk_size:  4mb</p><p>[qiniu-js-sdk][debug] option:  {"runtimes":"html5,flash,html4","browse_button":"pickfiles","container":"container","drop_element":"container","max_file_size":"1000mb","flash_swf_url":"bower_components/plupload/js/Moxie.swf","dragdrop":true,"chunk_size":"4mb","multi_selection":true,"uptoken_url":"uptoken","domain":"http://7xocov.com2.z0.glb.qiniucdn.com/","get_new_uptoken":false,"auto_start":true,"log_level":5,"init":{},"url":"http://upload.qiniu.com","multipart_params":{"token":""}}</p><p>[qiniu-js-sdk][debug] new plupload.Uploader(option)</p><p>[qiniu-js-sdk][debug] bind Init event</p><p>[qiniu-js-sdk][debug] bind FilesAdded event</p><p>[qiniu-js-sdk][debug] bind BeforeUpload event</p><p>[qiniu-js-sdk][debug] bind UploadProgress event</p><p>[qiniu-js-sdk][debug] bind ChunkUploaded event</p><p>[qiniu-js-sdk][debug] bind Error event</p><p>[qiniu-js-sdk][debug] bind FileUploaded event</p><p>[qiniu-js-sdk][debug] invoke uploader.init()</p><p>[qiniu-js-sdk][debug] init uploader end</p><p>[qiniu-js-sdk][debug] Init event activated</p><p>[qiniu-js-sdk][debug] get uptoken from:  uptoken</p><p>[qiniu-js-sdk][debug] get new uptoken:  JOiPUijNB0t8vbNKIufpn5gDKmg0G-uFHBlrQoV2:fAZ9PIhVnJ4hLNvGRQClLf9Bppg=:eyJzY29wZSI6Impzc2RrIiwiZGVhZGxpbmUiOjE0NjM2NDM2NDZ9</p></pre>
            </div>
        </div>
    </div>




<script type="text/javascript" src="{{URL::asset('/js4/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js4/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js4/moxie.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js4/plupload.dev.js')}}"></script>
<!-- <script type="text/javascript" src="bower_components/plupload/js/plupload.full.min.js"></script> -->
<script type="text/javascript" src="{{URL::asset('/js4/zh_CN.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js4/ui.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js4/qiniu.js')}}"></script>
<script type="text/javascript" src="{{URL::asset('/js4/highlight.js')}}"></script>
<!--<script type="text/javascript" src="./main.js"></script>-->
<script type="text/javascript">hljs.initHighlightingOnLoad();</script>

<script>
    /*global Qiniu */
    /*global plupload */
    /*global FileProgress */
    /*global hljs */


    $(function() {
        var uploader = Qiniu.uploader({
            runtimes: 'html5,flash,html4',
            browse_button: 'pickfiles',
            container: 'container',
            drop_element: 'container',
            flash_swf_url: 'bower_components/plupload/js/Moxie.swf',
            dragdrop: true,
            chunk_size: '4mb',

            // uptoken_url: $('#uptoken_url').val(),
            //uptoken:"4Ob38ZKy1VOFntbr8oDJVhR3Q9N6FnOTFzztypLh:RrJej_JDVbeYs3kY5Nb-E-mmPEY=:eyJzY29wZSI6Imh5emUiLCJkZWFkbGluZSI6MTQ4NzAxMDU4MSwidXBIb3N0cyI6WyJodHRwOlwvXC91cC16MS5xaW5pdS5jb20iLCJodHRwOlwvXC91cGxvYWQtejEucWluaXUuY29tIiwiLUggdXAtejEucWluaXUuY29tIGh0dHA6XC9cLzEwNi4zOC4yMjcuMjciXX0=",
            //uptoken:"4Ob38ZKy1VOFntbr8oDJVhR3Q9N6FnOTFzztypLh:VSPz0RjCgbsaEuiuKcE5vYJyrmI=:eyJzY29wZSI6Imh5emUiLCJkZWFkbGluZSI6MTQ4NzA3Mjk1MSwidXBIb3N0cyI6WyJodHRwOlwvXC91cC16MS5xaW5pdS5jb20iLCJodHRwOlwvXC91cGxvYWQtejEucWluaXUuY29tIiwiLUggdXAtejEucWluaXUuY29tIGh0dHA6XC9cLzEwNi4zOC4yMjcuMjciXX0=",
            uptoken:"{{$uptoken}}",
            multi_selection: !(mOxie.Env.OS.toLowerCase()==="ios"),


            filters : {
                max_file_size : '10000mb',
                prevent_duplicates: true,
                //Specify what files to browse for
                mime_types: [
                    // {title : "mp4 files", extensions : "mkv"}
                    // {title : "flv files", extensions : "flv,jpg"}
                    // {title : "Video files", extensions : "flv,mpg,mpeg,avi,wmv,mov,asf,rm,rmvb,mkv,m4v,mp4"}
                    // {title : "Video files", extensions : "avi,mp4,wmv,mpg,mov,flv,mkv,mpeg"}
                    // {title : "Image files", extensions : "jpg,gif,png"}
                    // {title : "Zip files", extensions : "zip"}
                ]
            },
            // uptoken_func: function(){
            //     var ajax = new XMLHttpRequest();
            //     ajax.open('GET', $('#uptoken_url').val(), false);
            //     ajax.setRequestHeader("If-Modified-Since", "0");
            //     ajax.send();
            //     if (ajax.status === 200) {
            //         var res = JSON.parse(ajax.responseText);
            //         console.log('custom uptoken_func:' + res.uptoken);
            //         return res.uptoken;
            //     } else {
            //         console.log('custom uptoken_func err');
            //         return '';
            //     }
            // },
            domain: 'http://static.meyoungbaby.com/',
            get_new_uptoken: false,
            // downtoken_url: '/downtoken',
            // unique_names: true,
            // save_key: true,
            // x_vars: {
            //     'id': '1234',
            //     'time': function(up, file) {
            //         var time = (new Date()).getTime();
            //         // do something with 'time'
            //         return time;
            //     },
            // },
            auto_start: true,
            log_level: 5,
            init: {
                'FilesAdded': function(up, files) {
                    $('table').show();
                    $('#success').hide();
                    plupload.each(files, function(file) {
                        var progress = new FileProgress(file, 'fsUploadProgress');
                        progress.setStatus("等待...");
                        progress.bindUploadCancel(up);
                    });
                },
                'BeforeUpload': function(up, file) {
                    var progress = new FileProgress(file, 'fsUploadProgress');
                    var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                    if (up.runtime === 'html5' && chunk_size) {
                        progress.setChunkProgess(chunk_size);
                    }
                },
                'UploadProgress': function(up, file) {
                    var progress = new FileProgress(file, 'fsUploadProgress');
                    var chunk_size = plupload.parseSize(this.getOption('chunk_size'));
                    progress.setProgress(file.percent + "%", file.speed, chunk_size);
                },
                'UploadComplete': function() {
                    $('#success').show();
                },
                'FileUploaded': function(up, file, info) {

                    var progress = new FileProgress(file, 'fsUploadProgress');
                    progress.setComplete(up, info);
                },
                'Error': function(up, err, errTip) {
                    $('table').show();
                    var progress = new FileProgress(err.file, 'fsUploadProgress');
                    progress.setError();
                    progress.setStatus(errTip);
                }
                // ,
                // 'Key': function(up, file) {
                //     var key = "";
                //     // do something with key
                //     return key
                // }
            }
        });

        uploader.bind('FileUploaded', function() {
            console.log('hello man,a file is uploaded');
        });
        $('#container').on(
                'dragenter',
                function(e) {
                    e.preventDefault();
                    $('#container').addClass('draging');
                    e.stopPropagation();
                }
        ).on('drop', function(e) {
            e.preventDefault();
            $('#container').removeClass('draging');
            e.stopPropagation();
        }).on('dragleave', function(e) {
            e.preventDefault();
            $('#container').removeClass('draging');
            e.stopPropagation();
        }).on('dragover', function(e) {
            e.preventDefault();
            $('#container').addClass('draging');
            e.stopPropagation();
        });



        $('#show_code').on('click', function() {
            $('#myModal-code').modal();
            $('pre code').each(function(i, e) {
                hljs.highlightBlock(e);
            });
        });


        $('body').on('click', 'table button.btn', function() {
            $(this).parents('tr').next().toggle();
        });


        var getRotate = function(url) {
            if (!url) {
                return 0;
            }
            var arr = url.split('/');
            for (var i = 0, len = arr.length; i < len; i++) {
                if (arr[i] === 'rotate') {
                    return parseInt(arr[i + 1], 10);
                }
            }
            return 0;
        };

        $('#myModal-img .modal-body-footer').find('a').on('click', function() {
            var img = $('#myModal-img').find('.modal-body img');
            var key = img.data('key');
            var oldUrl = img.attr('src');
            var originHeight = parseInt(img.data('h'), 10);
            var fopArr = [];
            var rotate = getRotate(oldUrl);
            if (!$(this).hasClass('no-disable-click')) {
                $(this).addClass('disabled').siblings().removeClass('disabled');
                if ($(this).data('imagemogr') !== 'no-rotate') {
                    fopArr.push({
                        'fop': 'imageMogr2',
                        'auto-orient': true,
                        'strip': true,
                        'rotate': rotate,
                        'format': 'png'
                    });
                }
            } else {
                $(this).siblings().removeClass('disabled');
                var imageMogr = $(this).data('imagemogr');
                if (imageMogr === 'left') {
                    rotate = rotate - 90 < 0 ? rotate + 270 : rotate - 90;
                } else if (imageMogr === 'right') {
                    rotate = rotate + 90 > 360 ? rotate - 270 : rotate + 90;
                }
                fopArr.push({
                    'fop': 'imageMogr2',
                    'auto-orient': true,
                    'strip': true,
                    'rotate': rotate,
                    'format': 'png'
                });
            }

            $('#myModal-img .modal-body-footer').find('a.disabled').each(function() {

                var watermark = $(this).data('watermark');
                var imageView = $(this).data('imageview');
                var imageMogr = $(this).data('imagemogr');

                if (watermark) {
                    fopArr.push({
                        fop: 'watermark',
                        mode: 1,
                        image: 'http://www.b1.qiniudn.com/images/logo-2.png',
                        dissolve: 100,
                        gravity: watermark,
                        dx: 100,
                        dy: 100
                    });
                }

                if (imageView) {
                    var height;
                    switch (imageView) {
                        case 'large':
                            height = originHeight;
                            break;
                        case 'middle':
                            height = originHeight * 0.5;
                            break;
                        case 'small':
                            height = originHeight * 0.1;
                            break;
                        default:
                            height = originHeight;
                            break;
                    }
                    fopArr.push({
                        fop: 'imageView2',
                        mode: 3,
                        h: parseInt(height, 10),
                        q: 100,
                        format: 'png'
                    });
                }

                if (imageMogr === 'no-rotate') {
                    fopArr.push({
                        'fop': 'imageMogr2',
                        'auto-orient': true,
                        'strip': true,
                        'rotate': 0,
                        'format': 'png'
                    });
                }
            });

            var newUrl = Qiniu.pipeline(fopArr, key);

            var newImg = new Image();
            img.attr('src', 'images/loading.gif');
            newImg.onload = function() {
                img.attr('src', newUrl);
                img.parent('a').attr('href', newUrl);
            };
            newImg.src = newUrl;
            return false;
        });

    });



</script>
</body></html>