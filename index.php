<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>AGENT TODO APP</title>
</head>

<body>
    <h1 style="color: ivory;background-color:rgba(0, 0, 0, 0.5);">AGENT TODO APP</h1>
    <div class="top-container" style="margin-left: 300px; margin-right: 300px;">
        <form id="form1" method="POST" action="index.php">
            <table>
                <tr>
                    <td style="text-align: right;"><label id="email">AGENT_ID :</label></td>
                    <td><input type="email" id="email" name="email" placeholder="Enter your email" required></td>
                </tr>
                <br>
                <tr>
                    <td style="text-align: right;"><label id="pass">AGENT_ID :</label></td>
                    <td><input type="Password" id="Pass" name="pass" placeholder="Enter your Password" required></td>
                </tr>
            </table>
            <input name="submit" type="submit" id="butid" placeholder="REGISTER">
           
            
        </form>
    </div>


    
    <?php
    include('connect.php');
        
    if(isset($_POST['submit'])) {
        // $fname = $_POST['fname'];
             // Validate user name

             $pass=sha1($_REQUEST['pass']);


             $param_username = $username;
             $param_password = password_hash($password, PASSWORD_DEFAULT); 
         $email = $_POST['email'];
         $pass = $_POST['pass'];
         

 
    mysqli_query($connect, "INSERT into `register_agent`( `email`,`pass`)VALUES('$email','$pass')");
    

   if (mysqli_affected_rows($connect) > 0) {

        echo '<p style="background-color:orange;text-align:center;font-size:200%;" >SUCCESSFUL LOGIN</p>';
        echo '<p style="background-color:orange;text-align:center;font-size:200%;" ><a href="login.php">LOGIN</a></p>';
    } 
    else {
        echo 'AGENT NOT ADDED.';
        echo 'mysqli_error($connect)';
    }
        }
    ?>
</body>

</html>