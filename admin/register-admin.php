<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
	<link rel="stylesheet" type="text/css" href="../assets/css/register-admin.css">
  <link href="../assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
<div class="form-box register">

            <div class="form-box register">
                <h2>Register <span>|</span><a href="login-admin.php" class="login">Login </a></h2>
                
                    <p>Register untuk membuat akun</p>
                <form action="../assets/php/registeradmin-proses.php" method="post">
                    <div class="input-box">
                        <span class="icon"><i class="bi bi-person-fill"></i></span>
                        <input type="text" name="nama_admin" required>
                        <label>Nama</label>
                    </div>
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
                    <button type="submit" class="btn" name="register">register</button>
                </form>
            </div>
    </div>
    </div>
</body>
</html>
