<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="renderer" content="webkit">

    <title> hAdmin- 主页</title>
    <base href="<?php echo e(URL::asset('')); ?>admin/">
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!--[if lt IE 9]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->

    <link rel="shortcut icon" href="favicon.ico"> <link href="css/bootstrap.min.css?v=3.3.6" rel="stylesheet" />
    <link href="css/font-awesome.min.css?v=4.4.0" rel="stylesheet" />
    <link href="css/animate.css" rel="stylesheet" />
    <link href="css/style.css?v=4.1.0" rel="stylesheet" >
</head>

<body class="fixed-sidebar full-height-layout gray-bg" style="overflow:hidden">
    <div id="wrapper">
        <!--左侧导航开始-->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <div class="nav-close"><i class="fa fa-times-circle"></i>
            </div>
            <div class="sidebar-collapse">
                <ul class="nav" id="side-menu">
                    <li class="nav-header">
                        <div class="dropdown profile-element">
                            <a data-toggle="dropdown" class="dropdown-toggle" href="<?php echo e(url('admin/index/index')); ?>">
                                <span class="clear">
                                    <span class="block m-t-xs" style="font-size:20px;">
                                        <i class="fa fa-area-chart"></i>
                                        <strong class="font-bold">hAdmin</strong>
                                    </span>
                                </span>
                            </a>
                        </div>
                        <div class="logo-element">hAdmin
                        </div>
                    </li>

                    <li class="hidden-folded padder m-t m-b-sm text-muted text-xs">
                        <span class="ng-scope">导航</span>
                    </li>
                   <!-- <li>
                        <a class="J_menuItem" href="index_v1.html">
                            <i class="fa fa-home"></i>
                            <span class="nav-label">主页</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa fa-bar-chart-o"></i>
                            <span class="nav-label">统计图表</span>
                            <span class="fa arrow"></span>
                        </a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a class="J_menuItem" href="graph_echarts.html">百度ECharts</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_flot.html">Flot</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_morris.html">Morris.js</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_rickshaw.html">Rickshaw</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_peity.html">Peity</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_sparkline.html">Sparkline</a>
                            </li>
                            <li>
                                <a class="J_menuItem" href="graph_metrics.html">图表组合</a>
                            </li>
                        </ul>
                    </li> -->

                </ul>
            </div>
        </nav>
        <!--左侧导航结束-->
        <!--右侧部分开始-->
        <div id="page-wrapper" class="gray-bg dashbard-1">
            <div class="row border-bottom">
                <nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
                    <div class="navbar-header"><a class="navbar-minimalize minimalize-styl-2 btn btn-info " href="javascript:void(0)"><i class="fa fa-bars"></i> </a>
                        <form role="search" class="navbar-form-custom" method="post" action="search_results.html">
                            <div class="form-group">
                                <input type="text" placeholder="请输入您需要查找的内容 …" class="form-control" name="top-search" id="top-search">
                            </div>
                        </form>
                    </div>
                    <ul class="nav navbar-top-links navbar-right">
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
                            </a>
                            <ul class="dropdown-menu dropdown-messages">
                                <li class="m-t-xs">
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a7.jpg">
                                        </a>
                                        <div class="media-body">
                                            <small class="pull-right">46小时前</small>
                                            <strong>小四</strong> 是不是只有我死了,你们才不骂爵迹
                                            <br>
                                            <small class="text-muted">3天前 2014.11.8</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="dropdown-messages-box">
                                        <a href="profile.html" class="pull-left">
                                            <img alt="image" class="img-circle" src="img/a4.jpg">
                                        </a>
                                        <div class="media-body ">
                                            <small class="pull-right text-navy">25小时前</small>
                                            <strong>二愣子</strong> 呵呵
                                            <br>
                                            <small class="text-muted">昨天</small>
                                        </div>
                                    </div>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a class="J_menuItem" href="mailbox.html">
                                            <i class="fa fa-envelope"></i> <strong> 查看所有消息</strong>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                        <li class="dropdown">
                            <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                                <i class="fa fa-bell"></i> <span class="label label-primary">8</span>
                            </a>
                            <ul class="dropdown-menu dropdown-alerts">
                                <li>
                                    <a href="mailbox.html">
                                        <div>
                                            <i class="fa fa-envelope fa-fw"></i> 您有16条未读消息
                                            <span class="pull-right text-muted small">4分钟前</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <a href="profile.html">
                                        <div>
                                            <i class="fa fa-qq fa-fw"></i> 3条新回复
                                            <span class="pull-right text-muted small">12分钟钱</span>
                                        </div>
                                    </a>
                                </li>
                                <li class="divider"></li>
                                <li>
                                    <div class="text-center link-block">
                                        <a class="J_menuItem" href="notifications.html">
                                            <strong>查看所有 </strong>
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </div>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </nav>
            </div>
            <div class="row J_mainContent" id="content-main" style="overflow: auto">
                <div id="J_iframe">
                    <?php echo $__env->yieldContent('content'); ?>
                </div>
            </div>
        </div>
        <!--右侧部分结束-->
    </div>

    <!-- 全局js -->
    <script src="js/jquery.min.js?v=2.1.4"></script>
    <script src="js/bootstrap.min.js?v=3.3.6"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/layer/layer.min.js"></script>

    <!-- 自定义js -->
    <script src="js/hAdmin.js?v=4.1.0"></script>
    <script type="text/javascript" src="js/index.js"></script>

    <!-- 第三方插件 -->
    <script src="js/plugins/pace/pace.min.js"></script>
<div style="text-align:center;">
<p>来源:<a href="http://www.mycodes.net/" target="_blank">源码之家</a></p>
</div>
</body>
<script src="js/main.js"></script>
<script>
    $(document).ready(function() {
        function str_repeat(str, num){
            return new Array( num + 1 ).join( str );
        }
        $.ajax({
            type: "get",
            url: "<?php echo e(url('admin/index/adminnav')); ?>",
            data: '',
            dataType: 'json',
            success: function (msg) {
                var level = 1;
                var nextLevel = 1;
                var str = '';
                var length = msg.data.length;


                $.each(msg.data,function(k,v){
//                    alert(k+1);
                    if(v.sys_link == ''){
                        v.sys_link = 'javascript:void(0)';
                    }else{
                        v.sys_link = "<?php echo e(url('')); ?>/"+v.sys_link;
                    }
                    //开始部分
                    if( v.level <= level && v.level == 1){
                        if( length != k+1 && v.level < msg.data[k+1]['level'] ){
                            str += '<li><a href="javascript:void(0)"><i class="fa fa fa-bar-chart-o"> </i><span class="nav-label">'+v.sys_content+'</span><span class="fa arrow"></span></a>';
                        }else{
                            str += '<li><a class="J_menuItem" href="'+ v.sys_link +'"><i class="fa fa-home"> </i><span class="nav-label">'+ v.sys_content +'</span></a>';
                        }
                    }else if ( v.level <= level && v.level != 1) {
                        str += '<li> <a class="J_menuItem" href="'+ v.sys_link +'">'+ v.sys_content +'</a>';
                    }else if ( v.level > level ) {

                        str += '<ul class="nav nav-second-level collapse"> <li> <a class="J_menuItem" href="'+ v.sys_link +'">'+ v.sys_content +'</a>';
                    }else {
                        str += '<li> <a class="J_menuItem" href="'+ v.sys_link +'">'+ v.sys_content +'</a>';
                    }

                    //结束部分
                    if ( length == k+1) {
                        if(v.level == 1){
                            str += '</li>';
                        }else{
                            str += str_repeat('</li></ul>',parseInt(v.level)-1);
                        }
                    }else if ( v.level == msg.data[k+1]['level']) {
                        str += '</li>';
                    }else if ( v.level > msg.data[k+1]['level'] ) {
                        str += str_repeat('</li></ul></li>',parseInt(v.sys_desc)-parseInt(nextLevel));
                    }else {

                    }
                    level = v.level;
                });
                $('#side-menu').append(str);
            }
        });

        $('#side-menu').delegate('li','click',function(){
            if($(this).children().eq(1).attr('style') == undefined || $(this).children().eq(1).attr('style') != 'display: block;'){

                $(this).siblings().removeClass('active');
                $(this).addClass('active');
                $(this).children().eq(1).animate({
                    height: 'toggle', opacity: 'toggle'
                }, "slow");
            }else{
                $(this).children().eq(1).fadeOut('fast');
                $(this).removeClass('active');
            }
//            console.log($(this).children().eq(1).attr('style'));
        });
    })
</script>
</html>
