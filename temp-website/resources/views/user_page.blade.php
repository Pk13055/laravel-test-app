
<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
</head>
<body>
	@if(isset($user))
		<h1> Welcome to  {{$user->name}}'s Homepage </h1>
			<ul>
				@foreach($user as $key => $value)
					<li>
						<ul>
							<li> {{$key}}</li>
							<li> {{$value}}</li>
						</ul>
					</li>
				@endforeach
			</ul>
	@endif
	@if(!isset($user))
			<h3> User not found </h3> 
	@endif
</body>
</html>