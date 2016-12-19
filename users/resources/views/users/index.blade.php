<!DOCTYPE html>

<html>
	<head>
		<meta charset="UTF-8">
		<title></title>
	</head>

	<body>
		<h1>All users</h1>

		@foreach ($users as $user)
			<li>{{ $user->name }}</li>
		@endforeach

		<h2>Add user</h2>

		<form method="POST" action="/users">

			{{csrf_field()}}

			<p>
				<input type="text" name="name" placeholder="Name" required>
			</p>
			<p>
				<input type="email" name="email" placeholder="Email" required>
			</p>
			<p>
				<input type="password" name="password" placeholder="Password" required>
			</p>
			<p>
				<button type="submit">Add user</button>
			</p>
		</form>
	</body>
</html>