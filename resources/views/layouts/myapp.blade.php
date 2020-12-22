<!DOCTYPE html>
<html>
<head>
    <title>@yield('title')</title>
    <style>
        body { font-size:16pt; color:#000; margin:5px; }
        h1 { font-size:50pt; text-align:right; color:#000; margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
        hr { margin:25px 100px; border-top:1px dashed #000; }
        .content { margin:10px; }
        .footer { text-align:right; font-size:10pt; margin:10px; border-bottom:solid 1px #000; color:#000; }
        .error { margin:0px; color:#990000; background:#FFEBE8; border:1px solid #990000; }
    </style>
</head>
<body>
    <!-- タイトル。継承したテンプレートで埋め込むタイトル(文字列)を指定する。 -->
    <h1>@yield('title')</h1>
    <hr size="1">

   	@if(Auth::check())
		<form action = "/logout" method = "POST" style = "text-align:right">
		{{ csrf_field()}}
		login:{{Auth::user()->name}}
		<input type = "submit" value= "logout">
		</form>
	@else
		not login
	@endif

    <!-- コンテンツ部分。継承したテンプレートで埋め込むコンテンツを作成する。 -->
    <div class="content" align="center">
    @yield('content')
    </div>

    <!-- フッタ部分。-->
    <div class="footer">
      copyright 2019 xxx
    </div>

</body>
</html>
