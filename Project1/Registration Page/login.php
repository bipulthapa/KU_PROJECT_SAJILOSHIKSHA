<?php 
    session_start();
    require_once("connect.php");
    $errormessage="";
    if (isset($_POST) && !empty($_POST)){
        $username = mysqli_real_escape_string($con,$_POST['username']);
        $password = md5($_POST['password']);
    $sql = "SELECT * FROM register WHERE username='$username' AND password='$password'"; 
    $result = mysqli_query($con,$sql);
    $count =  mysqli_num_rows($result);
    if ($count==1){
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    }
    else{
        $errormessage = "Wrong Username and Password";
    }
    if(isset($_SESSION['username'])){
        header('Location: welcome.php');
    }    
    }
?>

<!DOCTYPE html>
<html lang="en">
    <head>
    <title>www.Sajiloshikshya.com</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="styles/style.css">
    </head>

<body>
    <div id="wrapper">
        <div id="header">
            <img src="logo.png" style="height: 100px;">
            Sajilo Shiksha
            
            <span id="searchbox">
                <input type="search" placeholder="Search...">
            </span>
            <div id="style01" title="Register" onclick="location.href = 'index.php'">Reg.</div>
        </div>
        
            <div id="side-section">
                Notification:
                <br>
                <?php echo $errormessage; ?>
            </div>
        
            <div id="main-section">
                
                <div id="signupheader">Sign UP for free!</div>
                <form action="<?php $_PHP_SELF ?>" method="post">
                <table id="register-table">
                    <tr>
                        <td>First Name:</td>
                        <td>
                            <input type="text" name="username" autocomplete="on" autofocus="on" placeholder="UserName" required/>
                        </td>
                    </tr>
                    <tr>
                    <td>Password:</td>
                        <td>
                            <input type="password" name="password" autocomplete="off" placeholder="Password" required/>
                        </td>
                    </tr>
                    <tr>
                    <td></td>
                        <td>
                        <input type="submit" name="submit" value="Login"/>
                    </td>
                    </tr>
                    </table>
                </form>
            </div>
    </div>
    
    </body>
</html>