<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>找回密码</title>
</head>
<body>
	请点击<a href="http://www.isuning.com/reset?id={{$user->id}}&token={{$user->token}}">这里</a>重置密码,如果点击失败,可以将该url地址复制到浏览器地址栏中访问.<br>
	http://www.isuning.com/reset?id={{$user->id}}&token={{$user->token}}
</body>
</html>