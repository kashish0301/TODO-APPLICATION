<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css\styles.css">
    <title>AGENT TODO APP</title>
</head>

<body>
    <h1 style="color: ivory;background-color:rgba(0, 0, 0, 0.5);">LOGIN PAGE</h1>
    <div class="top-container" style="margin-left: 300px; margin-right: 300px;">
        <form id="form1" method="POST" action="todo.php">
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
            <input name="submit" type="submit" id="butid" placeholder="LOGIN">
        </form>
    </div>


    
    <?php
    include('connect.php');
        
    if(isset($_POST['submit'])) {
        // $fname = $_POST['fname'];
             // Validate user name

             if(empty($_POST["email"]) && empty($_POST["pass"]))  
             {  
                  echo '<script>alert("Both Fields are required")</script>';  
             }  
             else  
             {  
                  $email = mysqli_real_escape_string($connect, $_POST["email"]);  
                  $pass = mysqli_real_escape_string($connect, $_POST["pass"]);  
                  $pass = md5($pass);  
            
 
    $res= mysqli_query($connect, "select * from `registe_agent` where email='$email' && pass='$pass' ");
    
             }
    
   if (mysqli_num_rows($res)==1 ) {

        echo '<p style="background-color:orange;text-align:center;font-size:200%;" >ACCOUNT LOGGED IN</p>';
       
    } 
    else {
        echo 'INCORRECT CREDENTIALS.';
        echo 'mysqli_error($connect)';
    }
        }
    ?>
</body>

</html>