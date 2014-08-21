<!DOCTYPE html>
<html lang="en-US">
	<head>
		<meta charset="utf-8">
	</head>
	<body>
		<h2>Welcome wCut.co</h2>

		<p><b>Username:</b> {{{ $email }}}</p>
		<p>To activate your account <a href="{{ URL::to('users') }}/{{ $userId }}/activate/{{ urlencode($activationCode) }}">Click here.</a></p>
		<p>or point your browser to this address: <br /> {{ URL::to('users') }}/{{ $userId }}/activate/{{ urlencode($activationCode) }}</p>
		<p>Thank you, <br />
			 wCut.co</p>
	</body>
</html>
