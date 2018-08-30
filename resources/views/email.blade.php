

<html>
<head></head>
<body style="background: black; color: white">
<h1>{{$title="Forget password Notification"}}</h1>
<p>{{$content="You are receiving this email because we received a password forget request for your account. Click the link below to set your password"}}</p>
<p>{{url("/password/$value->rpToken")}}
</body>
</html>