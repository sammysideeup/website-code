<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Register</title>
    <link rel="stylesheet" href="Registerstyle.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>
    

 <div class="wrapper">

    
        <form action="">
            
            <h1>Register</h1>

            <div class="input-box">
                <input type="text" placeholder="Full Name" required>
                <i class='bx bxs-user'></i>
            </div>

            <div class="input-box">
                <input type="email" placeholder="Email" required>
                <i class='bx bxs-envelope'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Password" required>
                <i class='bx bxs-lock-alt'></i>
            </div>

            <div class="input-box">
                <input type="password" placeholder="Confirm Password" required>
                <i class='bx bxs-lock'></i>
            </div>

            <div class="remember-forgot">
                <label><input type="checkbox"> I agree to the terms & conditions</label>
            </div>

            <button type="submit" class="btn">Register</button>
            

            <div class="register-link">
                <p>Already have an account? <a href="Loginpage.php">Login</a></p>
                
            </div>
        </form>

        
    

    </div>


</body>
</html>