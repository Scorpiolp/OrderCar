<!doctype html>
<html class="no-js">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="viewport"
        content="width=device-width, initial-scale=1">
  <title>OrderCar</title>

  <!-- Set render engine for 360 browser -->
  <meta name="renderer" content="webkit">

  <!-- No Baidu Siteapp-->
  <meta http-equiv="Cache-Control" content="no-siteapp"/>

  <link rel="icon" type="image/png" href="assets/i/favicon.png">

  <!-- Add to homescreen for Chrome on Android -->
  <meta name="mobile-web-app-capable" content="yes">
  <link rel="icon" sizes="192x192" href="assets/i/app-icon72x72@2x.png">

  <!-- Add to homescreen for Safari on iOS -->
  <meta name="apple-mobile-web-app-capable" content="yes">
  <meta name="apple-mobile-web-app-status-bar-style" content="black">
  <meta name="apple-mobile-web-app-title" content="Amaze UI"/>
  <link rel="apple-touch-icon-precomposed" href="assets/i/app-icon72x72@2x.png">

  <!-- Tile icon for Win8 (144x144 + tile color) -->
  <meta name="msapplication-TileImage" content="assets/i/app-icon72x72@2x.png">
  <meta name="msapplication-TileColor" content="#0e90d2">

  <link rel="stylesheet" href="../../amazeui/assets/css/amazeui.min.css">
  <link rel="stylesheet" href="assets/css/app.css">
  <style type="text/css">
      .get {
      background: #1E5B94;
      color: #fff;
      text-align: center;
      padding: 100px 0;
    }

    .get-title {
      font-size: 200%;
      border: 2px solid #fff;
      padding: 20px;
      display: inline-block;
    }

    .get-btn {
      background: #fff;
    }

    .detail {
      background: #fff;
    }

    .detail-h2 {
      text-align: center;
      font-size: 150%;
      margin: 40px 0;
    }

    .detail-h3 {
      color: #1f8dd6;
    }

    .detail-p {
      color: #7f8c8d;
    }

    .detail-mb {
      margin-bottom: 30px;
    }

    .hope {
      background: #0bb59b;
      padding: 50px 0;
    }

    .hope-img {
      text-align: center;
    }

    .hope-hr {
      border-color: #149C88;
    }

    .hope-title {
      font-size: 140%;
    }

    .about {
      background: #fff;
      padding: 40px 0;
      color: #7f8c8d;
    }

    .about-color {
      color: #34495e;
    }

    .about-title {
      font-size: 180%;
      padding: 30px 0 50px 0;
      text-align: center;
    }

    .footer {
      background: #2d3e50;
    }

    .footer p {
      color: #7f8c8d;
      margin: 0;
      padding: 15px 0;
      text-align: center;
    }

    /* 禁用响应式*/
    .am-container {
      width: 980px !important;
      max-width: none;
    }

    .get,
    .hope,
    .footer {
      min-width: 980px;
    }

    .am-topbar-collapse {
      clear: none;
      padding: 0 10px;
    }

    .am-topbar-nav {
      float: left;
      margin: 0;
    }

    .am-topbar-nav > li {
      display: inline-block;
      margin: 0!important;
    }

    .am-topbar-collapse .am-dropdown.am-active .am-dropdown-content {
      position: absolute;
    }

    .am-topbar-nav > li > a {
      position: relative;
      line-height: 50px;
      padding: 0 10px;
    }
    .am-topbar-nav > li > a:after {
      position: absolute;
      left: 50%;
      margin-left: -6px;
      bottom: 0;
      content: "";
      display: inline-block;
      width: 0;
      height: 0;
      vertical-align: middle;
      border-bottom: 6px solid #f8f8f8;
      border-right: 6px solid transparent;
      border-left: 6px solid transparent;
      border-top: 0 dotted;
      -webkit-transform: rotate(360deg);
      -ms-transform: rotate(360deg);
      transform: rotate(360deg);
    }
    .am-topbar-nav > li > a:hover:after {
      border-bottom-color: #666666;
    }
    .am-topbar-nav > li.am-dropdown > a:after {
      display: none;
    }
    .am-topbar-nav > li.am-active > a,
    .am-topbar-nav > li.am-active > a:hover,
    .am-topbar-nav > li.am-active > a:focus {
      border-radius: 0;
      color: #0e90d2;
      background: none;
    }
    .am-topbar-nav > li.am-active > a:after {
      border-bottom-color: #0e90d2;
    }
  </style>
</head>
<body>
<!--在这里编写你的代码-->
<header class="am-topbar am-topbar-fixed-top am-topbar-inverse" >
  <div class="am-container">
    <h1 class="am-topbar-brand">
      <a href="/index.php/Custom" >Ordercar</a>
    </h1>

    <div class="am-topbar-collapse" id="collapse-head">
      <ul class="am-nav am-nav-pills am-topbar-nav">
        <li class=""><a href="/index.php/Custom">Home Page</a></li>
        <li><a href="/index.php/Custom/order">Ordercar</a></li>
        <li><a href="/index.php/Custom/login">Login</a></li>
		<li><a href="/index.php/Custom/myorder"><?php if($_SESSION['status']==1) {echo "Hi, ".$_SESSION['name'];}?></a></li>
      </ul>
    </div>
  </div>
</header>


<!--[if (gte IE 9)|!(IE)]><!-->
<script src="/amazeui/assets/js/jquery.min.js"></script>
<!--<![endif]-->
<!--[if lte IE 8 ]>
<script src="http://libs.baidu.com/jquery/1.11.3/jquery.min.js"></script>
<script src="http://cdn.staticfile.org/modernizr/2.8.3/modernizr.js"></script>
<script src="/amazeui/assets/js/amazeui.ie8polyfill.min.js"></script>
<![endif]-->
<script src="/amazeui/assets/js/amazeui.min.js"></script>
</body>
</html>