<!DOCTYPE html>
<html>

<head>
	<title> Login System </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="CSS/style.css" />
</head>

<body>
	<div class="container">
		<div class="row header">
			<h2>University</h2>
			<hr>
		</div>
		<div class="row">
			<div class="col">
				<h1> Admin </h1>
			</div>
		</div>
		<div class="row">
			<div class="col-8">
				<form action="login_action.php" method="post">
					<div class="form-group">
						<tr>
							<td>
								<input type="text" class="form-control" name="user_name" placeholder="Admin Name" required />
							</td>
						</tr>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password" required />
					</div>
					<div class="form-group">
						<input type="submit" class="btn-primary" name="submit" value="Log In" />
				</form>
			</div>
		</div>

	</div>

</body>

</html>