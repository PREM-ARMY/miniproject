<!DOCTYPE html>
<html>
<head>
    <title>Student Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/reg.css">
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
        <!-- <label for="image">Image:</label>
        <input type="file" id="image" name="image" required> -->

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
