<!DOCTYPE html>
<html lang="en">
<head>
    @include('home.css')
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
<div class="loader_bg">
    <div class="loader"><img src="img/loading.gif" alt="#"/></div>
</div>
<!-- end loader -->
<!-- header -->
<header>
    <!-- header inner -->
    @include('home.header')
</header>
<!-- gallery -->
@include('home.galary')
<!-- end gallery -->
<!--  footer -->
@include('home.footer')
</body>
</html>