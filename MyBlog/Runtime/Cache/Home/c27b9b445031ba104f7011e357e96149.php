<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="<?php echo Bootstrap_Css;?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo Bootstrap_Theme_Css;?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo Pace_Css;?>" rel="stylesheet" type="text/css"/> 
        <link href="<?php echo Animation_Css;?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo mCustomScrollbar_Css?>" rel="stylesheet" type="text/css"/>
        <link href="<?php echo Font_Awesome;?>" rel='stylesheet' type="text/css"/>
        <script src="<?php echo Jquery;?>"></script>
        <script src="<?php echo Bootstrap_Js;?>"></script>
        <script src="<?php echo Pace_Js;?>"></script>
        <script src="<?php echo jquery_mCustomScrollbar_concat_Js;?>"></script>
        <script src="<?php echo Ellipsis_JS;?>"></script>
        <script src="<?php echo history_adapter_jquery_js;?>" type="text/javascript"></script>
        <script src="<?php echo history_js;?>" type="text/javascript"></script>
        <style>
            html
            {/*整体html*/
                height:100%;
                margin:0;
            }
            body
            {/*body*/
                height:100%;
                margin:0;
                padding-left: 0px;
                padding-right: 0px;
                overflow-x: hidden;
                overflow-y: hidden;
                color:#777;
            }
            .with-full-screen{/*在做布局height 100%*/
                height:100%;
            }
             .container-fluid,.col-xs-1, .col-sm-1, .col-md-1, .col-lg-1, .col-xs-2, .col-sm-2, .col-md-2, .col-lg-2, .col-xs-3, .col-sm-3, .col-md-3, .col-lg-3, .col-xs-4, .col-sm-4, .col-md-4, .col-lg-4, .col-xs-5, .col-sm-5, .col-md-5, .col-lg-5, .col-xs-6, .col-sm-6, .col-md-6, .col-lg-6, .col-xs-7, .col-sm-7, .col-md-7, .col-lg-7, .col-xs-8, .col-sm-8, .col-md-8, .col-lg-8, .col-xs-9, .col-sm-9, .col-md-9, .col-lg-9, .col-xs-10, .col-sm-10, .col-md-10, .col-lg-10, .col-xs-11, .col-sm-11, .col-md-11, .col-lg-11, .col-xs-12, .col-sm-12, .col-md-12, .col-lg-12{
                /*重写 这些css 因为默认 是有边距的*/
                padding-left:0px;
            }
            .article-List{/*文章列表 div的 设置*/
                padding-bottom: 29px;
                padding-top: 29px;
                padding-left: 15px;
                padding-right:15px;
                height: 187px;
                border-bottom:1px solid #eee;
            }
             .article-Title{/*文章列表的 title*/
                width: 100%;
                /*width:7em; //em表示一个字符的宽度；*/
                display: block;     /*定义显示形式*/
                overflow: hidden;      /*截取超出字符*/
                text-overflow: ellipsis;     /*超出字符以…代替*/
                white-space: nowrap;     /*确定超出宽度字符不换行*/
                font-size:13pt;
            }
            .article-Introduction{
                /*文章 页面*/
                font-size:10pt;
                height:34px;
                width: 100%;
                overflow: hidden;
            }
            #Left{
                /*最左边blog信息 页面*/
                padding-left: 25px;
                padding-right:0px;
            }
            .mCSB_scrollTools{
                /*重写 滚动条*/
                margin-right:-5px;
            }
            .article-thisArticle{
                /*文章 父节点*/
                padding-top: 20px;
                padding-left: 15px;
                 padding-right: 15px;
            }
             .mCustomScrollBox {
                 padding-right:10px;
            }
            #article{
                /*文章内容 设置 滚动条*/
                overflow-y:scroll;
                
            }
            .sidebar-social-list{
                /*标志 ul 的样式*/
                margin: 0;
                padding: 0;
                text-align: center;
            }
            .sidebar-social-list li{
                /*标志 ul 下的li 的样式*/
                margin: 0 3px 0 0;
                display: inline-block;
                height: 30px;
                width:30px;
                border-radius:50%;
                 -webkit-transition: .3s;
                transition: .3s;
            }
            .sidebar-social-list li a{
                /*标志 ul 下的li 下的a 的样式*/
                border: none;
                line-height: 29px;
                font-size: 12px;
                color: #777;
                display: block;
                -webkit-transition: all 100ms linear;
                -o-transition: all 100ms linear;
                transition: all 100ms linear;
                border-radius: 30px;
            }
            .site-copyright{
                /*版权信息 的样式*/
                text-align: center;
                font-size: .78571428571429em;
                margin: 10px 0 0;
            }
        </style>
    </head>
    <body >
        <div class="container-fluid with-full-screen hidden-sm hidden-xs" style="width:100%;   z-index:1" >
            <div class="row-fluid with-full-screen" >
                <div class="row with-full-screen" >
                    <div class="col-md-4 col-ld-4  with-full-screen" style="border-right:1px solid #eee;padding-right:0px;" >
                        <!-- 主信息和文章列表 -->
                       
                            <div id="Left" class="col-md-4 col-ld-4 with-full-screen " style="overflow:hidden;border-right:1px solid #eee;">
                                <!-- 主信息 -->
                                <center>
                                    <div style="margin-top: 35px;">
                                        <h2 style='color:black;'><b>Blog</b></h2>
                                    </div>
                                    <center>
                                        <p style="color: #ABABAB;text-align: center;font-style:oblique;font-size: .875rem;">
                                            This's My Blog By ThinkPHP
                                        </p>
                                    </center>
                                    <div style="width:100%;padding-top: 40px;">
                                        <center>
                                            <p><b>首页</b></p>
                                            <p><b>联系</b></p>
                                             <p><b>关于</b></p>
                                        </center>
                                        <hr>
                                        
                                        <ul class="sidebar-social-list">
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-facebook  icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-twitter icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-dribbble icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-instagram icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-foursquare icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-flickr icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-youtube icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-google-plus-sign icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-tumblr icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-skype icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-google-plus icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-pinterest icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="icon-linkedin icon-large"></i>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="#">
                                                    <i class="fa icon-rss icon-large"></i>
                                                </a>
                                            </li>
                                        </ul>
                                          <hr>
                                        <p class="site-copyright">© Copyright 2014 - 2015</p>
                                    </div>
                                </center>
                            </div>
                            <div id="List" class="col-md-8 col-ld-8 with-full-screen" style="overflow:hidden;border-right:1px solid #eee;padding-right:0px;">
                                 <!-- 文章列表 -->
                            </div>
                    </div>
                    <div id='article' class="col-md-8 col-ld-8 with-full-screen" style=''>
                        <!-- 文章内容页-->
                        
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script type="text/javascript">
        //设置滚动条
        $("#Left").mCustomScrollbar();
        //鼠标进入事件
        $(".sidebar-social-list li").on("mouseover",function(){
           //#343b4a
           $(this).css("background-color",'#343b4a');
        });
        //鼠标离开事件
        $(".sidebar-social-list li").on("mouseout",function(){
           //#343b4a
           $(this).css("background-color",'');
       });
        
        //加载文章列表
        $("#List").load("<?php Url('Home','Index','articleList');?>");
        function openArtiele(id,e){
            window.history.pushState(null,null, id);

            $(".article-List").css('background-color', '');
            $(e).parent().parent().css('background-color', '#FBFBFB');
            $("#article").load("<?php Url('Home','Index','article')?>?id="+id);
        }

    </script>
</html>