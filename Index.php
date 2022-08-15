<!DOCTYPE HTML>
<html>
    <head>
        <title>Halaman Login</title>
        <link rel="stylesheet" href="style4.css">
		<link rel="icon" href="assets/img/IDM.jpg" type="image/x-icon"/>
    </head>
   
    <body>
        <div class="container">
		<form action="cek_login.php" method="POST">
		<div class="form-group">
          <h1>Login</h1>
            <form>
                <label>Username</label><br>
                <input type="text" name="username" placeholder="masukkan username" required="" autofocus=""><br>
                <label>Password</label><br>
                <input type="password" name="password" placeholder="masukkan password" required="" ><br>
				<button type="Login">Login</button>
            </form>
        </div> 
<?php if(isset($_GET['pesan'])) { ?>
			<div class="error">
				<label>Oopps... <?php echo $_GET['pesan']; ?></label>
			</div>
		<?php } ?>
			
    </body>
</html>
