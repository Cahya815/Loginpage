<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Modern Login Page</title>
</head>
<body>
    
    <div class="container" id="container">
        <div class="form-container sign-up">
            <form action="register.php" method="POST">
                <h1>Create Account</h1>
                <div class="social-icons">
                    <a href="#"class="icons"><i class="fa-brands fa-google"></i></a>
                    <a href="#"class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"class="icons"><i class="fa-brands fa-github"></i></a>
                    <a href="#"class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>
                    or use your email password
                </span>
                <input type="text" name="name" id="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="signUp">
                    Sign Up
                </button>
            </form>
        </div>
        <div class="form-container sign-in">
            <form action="register.php" method="post">
                <h1>Sign In</h1>
                <div class="social-icons">
                    <a href="#"class="icons"><i class="fa-brands fa-google"></i></a>
                    <a href="#"class="icons"><i class="fa-brands fa-facebook-f"></i></a>
                    <a href="#"class="icons"><i class="fa-brands fa-github"></i></a>
                    <a href="#"class="icons"><i class="fa-brands fa-linkedin-in"></i></a>
                </div>
                <span>
                    or use your email password
                </span>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <a href="#">Forget Your Password?</a>
                <button type="submit" name="signIn">
                    Sign In
                </button>
            </form>
        </div>
        <div class="toggle-container">
            <div class="toggle">
                <div class="toggle-panel toggle-left">
                    <h1>Welcome Back</h1>
                    <p>Enter your personal detail to use all features</p>
                    <button class="hidden" id="login">Sign In</button>
                </div>
                <div class="toggle-panel toggle-right">
                    <h1>Hello</h1>
                    <p>Enter your personal detail to use all features</p>
                    <button class="hidden" id="register">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <script src="script.js"></script>
</body>
</html>
