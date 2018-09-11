<!DOCTYPE html>
<html>
<head>
    <title>@yield("title")</title>    
    <style>
        body {font-size:16pt; color:#999 margin:5px;}
        h1 {font-size:50pt; text-align:right; color:#f6f6f6; margin:-20px 0px -30px -0px; letter-spacng:-4pt;}
        ul {font-size:12pt;}
        hr {margin: 25px 100px; border-top: 1px dashed #ddd;}
        .menutitle {font-size:14pt; font-wight:bold;margin:0px;}
        .content {margin:0px;}
        .footer {text-align:rigt; font-size:10pt; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;}
        th {background-color:#999; color:#fff; padding:5px 10px;}
        td {border: solid 1px #aaa; color:#999; padding:5px 10px;}
    </style>
</head>
<body>
    <h1>@yield("title")</h1>
    @section("menubar")
    <ul>
        <p class="menutitle">*メニュー</p>
        <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">@yield("content")</div>
    <div class="footer">@yield("footer")</div>
    
</body>
</html>