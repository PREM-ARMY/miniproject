<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
    <style>
        /* Basic styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; /* Full height of the viewport */
            margin: 0; /* Remove default margin */
            font-family: Arial, sans-serif;
            background-color: #f2f2f2; /* Light background color */
        }
        form {
            width: 300px; /* Width of the form */
            padding: 20px;
            background-color: white; /* White background for form */
            border: 1px solid #ccc;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle shadow */
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 16px;
            border-radius: 4px;
            border: 1px solid #ccc;
            box-sizing: border-box; /* Ensure consistent box model */
        }
        button {
            width: 100%; /* Button should span full width of form */
            padding: 10px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        /* Styling for links */
        .links {
            text-align: center;
            margin-top: 16px; /* Space between form and links */
        }
        .links a {
            color: #4CAF50;
            text-decoration: none;
            margin: 0 8px; /* Space between links */
        }
        .links a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <form action="save_details.php" method="POST">
        <h2>Login</h2>
        <!-- Username or Email -->
        <label for="usernameOrEmail">Username or Email:</label>
        <input type="text" id="usernameOrEmail" name="usernameOrEmail" required>

        <!-- Password -->
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>

        <!-- Submit Button -->
        <button type="submit" name = "login" value = "login">Login</button>

        <!-- Links for "Sign Up" and "Forget Password" -->
        <div class="links">
            <a href="Registration.php">Sign Up</a>
            <a href="#">Forget Password</a>
        </div>
    </form>
</body>
</html>
