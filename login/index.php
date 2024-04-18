<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@100;200;300;400;500;600;700;800;900&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
      rel="stylesheet">
    

    <!-- Icon -->
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

    <!-- icon -->

    <link rel="stylesheet" href="style.css">

    <title>Login</title>

</head>
<body>
    <section class="home">
        <div class="form_container">
            <i class="uil uil-times form_close"></i>

            <!-- Login Form -->
            <div class="form login_form">
                <form action="#">
                    <h2>Login</h2>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Enter your password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="option_field">
                        <span class="checkbox">
                            <input type="checkbox" id="check">
                            <label for="check">Remember me</label>
                        </span>

                        <a href="#" class="forgot_pw">Forgot Password?</a>
                    </div>

                    <button class="button">Login</button>

                    <div class="login_signup">
                        Don't have an account? <a href="#" id="signup">Signup</a>
                    </div>
                </form>
            </div>


            <!-- Signup Form -->

            <div class="form signup_form">
                <form action="#">
                    <h2>Signup</h2>

                    <div class="input_box">
                        <input type="email" placeholder="Enter your email" required />
                        <i class="uil uil-envelope-alt email"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Create password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>

                    <div class="input_box">
                        <input type="password" placeholder="Confirm password" required />
                        <i class="uil uil-lock password"></i>
                        <i class="uil uil-eye-slash pw_hide"></i>
                    </div>


                    <button class="button">Signup</button>

                    <div class="login_signup">
                        Already have an account? <a href="#" id="login">Login</a>
                    </div>
                </form>
            </div>

        </div>
    </section>

    <script src="script.js"></script>
    <script src="js/index.js"></script>
</body>
</html>