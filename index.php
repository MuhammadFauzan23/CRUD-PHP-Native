<!DOCTYPE html>
<html>

<head>
	<title>Login Website</title>
</head>

<body>
	<h3>SELAMAT DATANG</h3>
	<p><b>Note</b>: Masukkan Username dan password dengan benar.</p>
	<form method="POST" action="cek_login.php">
		<table>
			<tr>
				<td>Username</td>
				<td>:</td>
				<td><input type="text" name="username" placeholder="Masukkan Username"></td>
			</tr>

			<tr>
				<td>Password</td>
				<td>:</td>
				<td><input type="password" name="password" placeholder="Masukkan Password"></td>
			</tr>

			<tr>
				<td></td>
				<td></td>
				<td><input type="submit" name="Login"></td>
			</tr>

		</table>
	</form>
</body>

</html>