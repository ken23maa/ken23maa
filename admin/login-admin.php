<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/login-admin.css">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
<div class="form-box login">
                <h2>Login <span>|</span> <a href="register-admin.php" class="register">Register</a></h2>
                
                    <p>Login untuk melihat data</p>
                <form action="../assets/php/loginadmin-proses.php" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <input type="text" name="username" required>
                        <label>Username</label>
                    </div>
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-lock-fill"></i></span>
                        <input type="password" name="password" required>
                        <label>Password</label>
                    </div>
                    <button type="submit" class="btn" name="login">Login</button>
                </form>
            </div>
    </div>
</body>
</html>
