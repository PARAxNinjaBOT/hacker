<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Modern Login & Register</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <style>
        /* Global Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Arial', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #24f8c7,rgb(0, 225, 255));
            color: #fff;
            overflow: hidden;
        }

        .container {
            width: 100%;
            max-width: 400px;
            background-color: rgba(0, 0, 0, 0.7);
            border-radius: 8px;
            padding: 40px;
            box-shadow: 0 8px 24px rgba(0, 0, 0, 0.3);
            transition: transform 0.3s ease;
        }

        .container:hover {
            transform: scale(1.02);
        }

        h1.form-title {
            font-size: 32px;
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }

        .input-group {
            position: relative;
            margin-bottom: 20px;
        }

        .input-group input {
            width: 100%;
            padding: 15px;
            padding-left: 40px;
            border-radius: 25px;
            border: none;
            background-color: #333;
            font-size: 16px;
            outline: none;
            color: #fff;
            transition: 0.3s ease;
        }

        .input-group input:focus {
            background-color: #444;
            box-shadow: 0 0 10px rgba(5, 104, 104, 0.7);
        }

        .input-group label {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #bbb;
            font-size: 14px;
            transition: 0.3s ease;
        }

        .input-group input:focus + label {
            color: #24f8c7;
            top: -10px;
            font-size: 12px;
        }

        .input-group i {
            position: absolute;
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #bbb;
        }

        .btn {
            width: 100%;
            padding: 15px;
            background-color: #24f8c7;
            color: #fff;
            font-size: 18px;
            border: none;
            border-radius: 25px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn:hover {
            background-color: #rgb;
        }

        .or {
            text-align: center;
            color: #bbb;
            margin: 20px 0;
            font-size: 14px;
        }

        .icons {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-bottom: 20px;
        }

        .icons i {
            font-size: 28px;
            color: #ddd;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .icons i:hover {
            color: #24f8c7;
        }

        .links {
            text-align: center;
            font-size: 14px;
            color: #ddd;
        }

        .links button {
            background: none;
            border: none;
            color: #24f8c7;
            font-size: 16px;
            cursor: pointer;
            transition: color 0.3s ease;
        }

        .links button:hover {
            color: #24f8c7;
        }

        .recover {
            text-align: center;
            margin-top: 10px;
        }

        .recover a {
            color:rgb(9, 181, 184);
            text-decoration: none;
            font-size: 14px;
        }

        .recover a:hover {
            color: #rgb;
        }

        /* Mobile responsive */
        @media screen and (max-width: 480px) {
            .container {
                padding: 25px;
            }

            h1.form-title {
                font-size: 26px;
            }

            .input-group input {
                padding: 12px;
                font-size: 14px;
            }

            .btn {
                padding: 12px;
                font-size: 16px;
            }
        }
    </style>
</head>
<body>
    <div class="container" id="signup" style="display:none;">
        <h1 class="form-title">Register</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="fName" id="fName" placeholder="" required />
                <label for="fname">&emsp;&ensp;First Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-user"></i>
                <input type="text" name="lName" id="lName" placeholder="" required />
                <label for="lName">&emsp;&ensp;Last Name</label>
            </div>
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="" required />
                <label for="email">&emsp;&ensp;Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="" required />
                <label for="password">&emsp;&ensp;Password</label>
            </div>
            <input type="submit" class="btn" value="Sign Up" name="signUp" />
        </form>
        <p class="or">----------or--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Already Have Account?</p>
            <button id="signInButton">Sign In</button>
        </div>
    </div>

    <div class="container" id="signIn">
        <h1 class="form-title">Sign In</h1>
        <form method="post" action="register.php">
            <div class="input-group">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" id="email" placeholder="" required />
                <label for="email">&emsp;&ensp;Email</label>
            </div>
            <div class="input-group">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" id="password" placeholder="" required />
                <label for="password">     &emsp;&ensp; Password</label>
            </div>
            <p class="recover">
                <a href="#">Recover Password</a>
            </p>
            <input type="submit" class="btn" value="Sign In" name="signIn" />
        </form>
        <p class="or">----------or--------</p>
        <div class="icons">
            <i class="fab fa-google"></i>
            <i class="fab fa-facebook"></i>
        </div>
        <div class="links">
            <p>Don't have an account yet?</p>
            <button id="signUpButton">Sign Up</button>
        </div>
    </div>

    <script src="script1.js"></script>
</body>
</html>