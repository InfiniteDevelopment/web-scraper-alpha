<!doctype html>
<html lang="rs">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>
    @include('ui._partials.css')
    @yield('css')
</head>
<body>
<!--Navigation start-->
<div class="navigation">
    <div class="navbar navbar-inverse">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-inverse-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="javascript:void(0)">web-scraper-alpha</a>
        </div>
        <div class="navbar-collapse collapse navbar-inverse-collapse">
            <ul class="nav navbar-nav">
                @include('ui._partials.navigation')
            </ul>
        </div>
    </div>
</div>
<!--Navigation end-->
<!--Content start-->
<div class="content">
    @yield('content')
</div>
<!--Content end-->
<!--Footer start-->
<div class="footer">
</div>
<!--Footer end-->
<div>
    @include('ui._partials.javascript')
    @yield('javascript')
</div>
</body>
</html>