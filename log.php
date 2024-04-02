<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="nav">
        <div class="logo">
            <p><a href="log.php">Logo</a></p>
        </div>

        <div class="right-links">
            <a href="reg.php"><button class="btn">Sign Up</button></a>
        </div>
    </div>

    <div class="container">
        <div class="box form-box">
            <?php
                include("config.php");
                if(isset($_POST['submit'])){
                    $email = mysqli_real_escape_string($conn,$_POST['email']);
                    $password = mysqli_real_escape_string($conn,$_POST['password']);

                    $result = mysqli_query($conn, "SELECT * FROM members WHERE Email='$email' AND Password='$password' ") or die ("Select Error");
                    $row = mysqli_fetch_assoc($result);

                    if(is_array($row) && !empty($row)){
                        $_SESSION['valid'] = $row['Email'];
                        $_SESSION['password'] = $row['Password'];
                        $_SESSION['id'] = $row['Id'];
                    }else{
                        echo "<div class='message'>
                                    <p>Wrong Email or Password.</p>                  
                              </div> <br>";
                        echo "<a href='log.php'><button class='btn'>Go Back.</button>";
                    }
                    if(isset($_SESSION['valid'])){
                        header("Location: index.php");
                    }
                }else{
            ?>
            <header>Login</header>
            <form action="" method="post">
                <div class="field input">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" required>
                </div>

                <div class="field input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>

                <div class="field">
                    <input class="btn" type="submit" value="Login" name="submit">
                </div>

                <div class="links">
                    Don't have an account? <a href="reg.php">Sign Up!</a>
                </div>
            </form>
        </div>
        <?php } ?>
    </div>
</body>
</html>