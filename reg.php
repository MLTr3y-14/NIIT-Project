<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="reg.php"></a>Logo</p>
        </div>

        <div class="right-links">
            <a href="Log.php"><button class="btn">Login</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">

            <?php
                include("config.php");
                if(isset($_POST['submit'])){
                    $username = $_POST['username'];
                    $email = $_POST['email'];
                    $password = $_POST['password'];
            
                    //verifying the unique email
            
                    $verify_query = mysqli_query($conn, "SELECT Email FROM members WHERE Email ='$email'");
            
                    if(mysqli_num_rows($verify_query) !=0 ){
                        echo "<div class='message'>
                                    <p>This email has been used.</p>                  
                              </div> <br>";
                        echo "<a href='javascript:self.history.back()'><button class='btn'>Go Back</button>";
                    }
                    else{
            
                        mysqli_query($conn, "INSERT INTO members(Username,Email,Password) VALUES('$username', '$email', '$password')") or die("Error Occured");
            
                        echo "<div class='message'>
                                    <p>Registration Successful.</p>                  
                              </div> <br>";
                        echo "<a href='log.php'><button class='btn'>Login.</button>";
                    }
                }else{
            ?>

            <header>Sign Up</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="username">Username</label>
                    <input type="text" name="username" id="username" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" autocomplete="off" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" autocomplete="off" required>
                </div>

                <div class="field">
                    <input class="btn" type="submit" value="Register" name="submit">
                </div>

                <div class="links">
                    Already a member? <a href="log.php">Sign In!</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>

