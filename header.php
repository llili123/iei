<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3個meta標簽*必須*放在最前面，任何其他內容都*必須*跟隨其後！ -->
    <title>藝文國際</title>
    <link rel="Shortcut Icon" href="<?php bloginfo('template_directory'); ?>/images/favicon.ico" />
    <!-- Bootstrap -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://cdn.bootcss.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?php bloginfo('template_directory'); ?>/js/jquery-3.2.1.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php bloginfo('template_directory'); ?>/js/bootstrap.min.js"></script>
<?php wp_head();?>
</head>
<body>

<nav class="navbar navbar-default  " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse"
                    data-target="#example-navbar-collapse">
                <span class="sr-only">切換導航</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="http://yiwen-iei.com/">
                <img alt="Brand" class="img-resposive" src="<?php bloginfo('template_directory'); ?>/images/logo.png" />
                <span>藝文國際互動體驗館</span>
            </a>
        </div>
        <div>
        </div>
        <div class="collapse navbar-collapse" id="example-navbar-collapse">
            <ul class="nav navbar-nav ">
                <li ><a href="http://yiwen-iei.com/">首頁</a></li>
                <li><a href="http://localhost/kong/peixun/">培訓課程</a></li>
                <li><a href="http://localhost/kong/yanxue/">國際研學</a></li>
                <li><a href="http://localhost/kong/shengxue/">海外升學</a></li>
                <li><a href="http://localhost/kong/about/">關於我們</a></li>
                <li><a href="http://caci.hk/">返回藝文</a></li>
            </ul>
        </div>
    </div>
</nav>
