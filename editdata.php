<?php
include("dbconn.php");
$get_id = isset($_GET['Id']) ?$_GET['Id'] : 0;
$query = "SELECT * FROM personal_details where randam_id = '".$get_id."' ";
$result = mysqli_query($conn,$query);

if (!$result) {
    die("Query failed: ".mysqli_error($conn));
}
while ($row = mysqli_fetch_assoc($result)) {
    //print_r($row);
   						 	
  
    $firstName = $row['first_name'];
    $lastName = $row['last_name'];
    $dateOfBirth = $row['date_of_birth'];
    $gender = $row['gender'];
    $email = $row['email'];
    $phone = $row['phone'];
    $address = $row['address'];
    $grade = $row['grade'];
    $hidden_id = $row['randam_id'];
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Student Form</title>
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
        .btn {
    padding: 10px 15px;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
   
}

.btn-update {
    background-color: #4CAF50; 
}

.btn-update:hover {
    background-color: #45a049; 
}


.btn-back {
    background-color: #f44336; 
}

.btn-back:hover {
    background-color: #d32f2f; 
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
        <input type="text" id="firstName" name="firstName" value ="<?php echo $firstName; ?>" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName" name="lastName" value ="<?php echo $lastName; ?>" required>

        <label for="dateOfBirth">Date of Birth:</label>
        <input type="date" id="dateOfBirth" name="dateOfBirth" value ="<?php echo $dateOfBirth; ?>" required>

        <label for="gender">Gender:</label>
        <div class="gender-options">
    <span class="gender-option">
        <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?> required>
        <label for="male">Male</label>
    </span>

    <span class="gender-option">
        <input type="radio" id="female" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>>
        <label for="female">Female</label>
    </span>

    <span class="gender-option">
        <input type="radio" id="other" name="gender" value="other" <?php if ($gender == 'other') echo 'checked'; ?>>
        <label for="other">Other</label>
    </span>
</div>

        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value ="<?php echo $email; ?>" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value ="<?php echo $phone; ?>" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value ="<?php echo $address; ?>" required>

        
        <label for="grade">Current Grade/Level:</label>
<select id="grade" name="grade">
    <option value="grade1" <?php if ($grade == 'grade1') echo 'selected'; ?>>Grade 1</option>
    <option value="grade2" <?php if ($grade == 'grade2') echo 'selected'; ?>>Grade 2</option>
    <option value="grade3" <?php if ($grade == 'grade3') echo 'selected'; ?>>Grade 3</option>
</select>
        
        <div class="back-button">
    <button type="submit" name="submit" id="submit" class="btn btn-update" value="update">Update</button>
    <input type="hidden" id="hidden_id" name="hidden_id" value ="<?php echo $hidden_id; ?>" >
    <a href="home.php"><button type="button" class="btn btn-back">Back<
        /button></a>
</div>
    </form>
</body>
</html>
