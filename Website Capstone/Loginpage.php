<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LoginPage</title>
     <link rel="stylesheet" href="Loginstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
<main>
    
<section>
<div class="wrapper"> 
        <form action="">
            <h1>Login</h1>
            <div class="input-box">
                <input type="text" placeholder="Username" 
                required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="password" 
                placeholder="Password"  required>
                <i class='bx bxs-lock-alt' ></i>
            </div>

    <div class="remember-forgot">
        <label><input type="checkbox"> Remember me
        </label>
        <button><a href="Forgotpass.php">Forgot password?</button>  <!-- Forgot pass button-->
        
    </div>

    <form action="">
    <a href="website.php" class="back-icon"><i class='bx bx-arrow-back'></i></a>
</form>

    <button type="submit" class="btn" >Login</button>
    

    <div class="register-link">
        
        <button><a href="Register.php">Don't have account?</button> <!-- Register button -->
        
    </div>
    
    </form>
</section>   


</main>

</body>
</html>