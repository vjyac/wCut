<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Password Reset</h2>

		<p>To reset your password, <a href="{{ URL::to('users') }}/{{ $userId }}/reset/{{ urlencode($resetCode) }}">Click here.</a>  Click here. If you did not request a password reset</p>
		<p>or point your browser to this address: <br /> {{ URL::to('users') }}/{{ $userId }}/reset/{{ urlencode($resetCode) }}</p>
		<p>Thank you, <br />
			 wCut.co</p>
	</body>
</html>
