<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <style>
        /* Common styles */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh; 
            margin: 0; 
            font-family: Arial, sans-serif;
        }
        form {
            width: 500px; 
            padding: 100px;
            border: 1px solid #ccc;
            border-radius: 8px;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }
        input[type="text"],
        input[type="email"],
        input[type="number"],
        input[type="date"],
        input[type="radio"],
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: #4CAF50;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
        
        /* Styles for the radio button container */
        .gender-options {
            display: flex; /* Align radio buttons inline */
            gap: 10px; /* Add space between units */
            margin-bottom: 12px; /* Add space below the radio buttons */
        }

        /* Styles for each radio button and label pair */
        .gender-option {
            display: flex;
            align-items: center;
        }

    </style>
</head>
<body>
    <form action="save_details.php" method="POST">
        <h2>Student Registration Form</h2>
       
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName" name="firstName" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" required>

        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" required>

        <label for="gender">Gender:</label>
        <!-- Gender radio buttons grouped in a div -->
        <div class="gender-options">
            <span class="gender-option">
                <input type="radio" id="male" name="gender" value="male" required>
                <label for="male">Male</label>
            </span>

            <span class="gender-option">
                <input type="radio" id="female" name="gender" value="female">
                <label for="female">Female</label>
            </span>

            <span class="gender-option">
                <input type="radio" id="other" name="gender" value="other">
                <label for="other">Other</label>
            </span>
        </div>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required>

        <label for="grade">Current Grade/Level:</label>
        <select id="grade" name="grade">
            <option value="grade1">Grade 1</option>
            <option value="grade2">Grade 2</option>
            <option value="grade3">Grade 3</option>
        </select>
        
        <button type="submit" name="submit" id="submit" value="save">Submit</button>
    </form>
</body>
</html>
