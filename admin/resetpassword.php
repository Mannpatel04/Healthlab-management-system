<html>
<head>
<title>Login Form Design</title>
    <link rel="stylesheet" type="text/css" href="style.css">
<body>
<div class="logos">
        <img src="../images/health_lab.png" alt="" style="width:25%; height:150pt;">
    </div>
   
            <!-- <input type="submit" name="" value="Reset Password"> --> 
            <div class="loginbox">
    <img src="pic-2.png" class="avatar">
        <h1>Forget Password</h1>
        <form method="post" action="reqreset.php">
            <p>Username</p>
            <input type="text" name="txtemail" placeholder="Enter Email" required>
           
            <div class=custom-select>
            <select name="selsequ" >
                <option>Favourite Food?</option>
                <option>Favourite Actor?</option>  
            </select>
            <br>
            <br>
            <p>Answer</p>
            <input type="text" name="txtans" placeholder="Enter Your Answer" class="form-control" required>
</div>
<br>
            <input type="submit" name="" value="Reset Password">

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