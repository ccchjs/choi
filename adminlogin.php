
<?php

include('header.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
   <style>
    /* General styles */
    body {
    background-image: url(img/schoolinn.jpg);
    background-size: cover; /* Ensure the image covers the entire background */
    background-position: center; /* Center the background image */
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.5); /* Black shadow with 50% opacity */
    font-family: Arial, sans-serif;
    background-color: #f0f0f0; /* Fallback background color */
    margin: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 90vh; /* Adjusted height for centering */
}


        .wrapper {
            
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.4);
            border-radius: 8px;
            overflow: hidden;
            width: 400px;
        }

        /* Header styles */
        .wrapper h2 {
            margin: 20px 0;
            text-align: center;
            color: #333;
        }

        /* Form box styles */
        .form-box {
            padding: 20px;
        }

        .input-box {
            position: relative;
            margin-bottom: 20px;
        }

        .input-box input {
            width: 100%;
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 4px;
            outline: none;
        }

        .input-box input:focus {
            border-color: #007bff;
            /* Change border color on focus */
        }

        .input-box label {
            position: absolute;
            top: 10px;
            left: 10px;
            color: #888;
            pointer-events: none;
            transition: 0.3s;
        }

        .input-box input:valid ~ label,
        .input-box input:focus ~ label {
            top: -12px;
            left: 10px;
            background-color: #fff;
            padding: 0 5px;
            font-size: 12px;
            color: #007bff;
        }

        .input-box i {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            color: #888;
        }

        /* Button styles */
        .btn {
            display: block;
            width: 100%;
            padding: 10px;
            margin-top: 20px;
            background-color: #007bff;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 16px;
            transition: background-color 0.3s;
        }

        .btn:hover {
            background-color: #0056b3;
        }

        /* Info text styles */
        .info-text {
            text-align: center;
            padding: 20px;
            background-color: #007bff;
            color: #fff;
        }

        .info-text h2 {
            margin: 0 0 10px;
            font-size: 24px;
        }

        .info-text p {
            margin: 0;
            font-size: 18px;
        }

   </style>
 
</head>
<body>
    
    <div class="wrapper">
        <span class="bg-animate"></span>
        <div class="form-box login">
            <h2>Login</h2>
            <form name="adminlogin" action="loginlinkadmin.php" method="POST">
                <div class="input-box">
                    <input type="text" name="aid" required>
                    <label>Admin ID</label>
                    <i class='bx bxs-user'></i>
                </div>
                <div class="input-box">
                    <input type="password" name="apass" required>
                    <label>Password</label>
                    <i class='bx bxs-lock-alt' ></i>
                </div>
                <button type="submit" class="btn">Login</button>
            </form>
        </div>
       
    </div>
</body>
</html>
	