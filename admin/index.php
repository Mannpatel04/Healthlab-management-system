<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
    <div class="logos">
        <img src="../images/health_lab.png" alt="" style="width:25%; height:150pt;">
    </div>
    <div class="loginbox">
    <img src="1.png" class="avatar" width="">
        <h1>Login Here</h1>
        <form method="post" action="reqlogin.php">
            <p>Username</p>
            <input type="text" name="txtun" placeholder="Enter Username" required>
            <p>Password</p>
            <input type="password" name="txtpass" placeholder="Enter Password" class="form-control" required>
            <div class=custom-select>
            <select name="selrole" >
                <option>Admin</option>
                <option>Collector</option> 
                <option>Lab</option>
            </select>
</div>
<br>
            <input type="submit" name="" value="Login">
            
            <a href="resetpassword.php">Lost your password?</a><br>

			<br>
			<?php
			if(isset($_GET['err']))
			{
			echo "Invalid username or password";
			}
			
			?>
        </form>
        
    </div>

</body>
</head>
</html>