<!DOCTYPE html >
<html>
<head>
<title>USER LOGIN</title>
<link rel="stylesheet" type="text/css" href="styles.css">
</head>
<body id="body_bg">
<div <div align="center">

<h3>JokesApp LOGIN FORM</h3>
    <form id="login-form" method="post" action="authentication.php" >
        <table border="0.5" >
            <tr>
                <td><label for="user_id">User Name</label></td>
                <td><input type="text" name="user_id" id="user_id"></td>
            </tr>
            <tr>
                <td><label for="user_pass">Password</label></td>
                <td><input type="password" name="user_pass" id="user_pass"></input></td>
            </tr>
			
            <tr>
				
                <td><input type="submit" value="Submit" />
                <td><input type="reset" value="Reset"/>
				
            </tr>
        </table>
    </form>
		</div>
</body>
</html>