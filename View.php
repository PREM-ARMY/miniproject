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
    <title>View Student Form</title>
    <style>
        
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
        select {
            width: 100%;
            padding: 8px;
            margin-bottom: 12px;
            border-radius: 4px;
            border: 1px solid #ccc;
        }
        button {
            background-color: red;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <form >
        <h2> View Student</h2>
       
        <label for="firstName">First Name:</label>
        <input type="text" id="firstName"  value ="<?php echo $firstName; ?>" required>

        <label for="lastName">Last Name:</label>
        <input type="text" id="lastName"value ="<?php echo $lastName; ?>" required>

        <label for="dateOfBirth">Date of Birth:</label>
        <input type="text" id="dateOfBirth"  value ="<?php echo $dateOfBirth; ?>" required>

        <label for="gender">Gender:</label>
        <input type="text" id="gender"  value ="<?php echo $gender; ?>" required>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" value ="<?php echo $email; ?>" required>

        <label for="phone">Phone Number:</label>
        <input type="text" id="phone" name="phone" value ="<?php echo $phone; ?>" required>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" value ="<?php echo $address; ?>" required>

        
        <label for="grade">Current Grade/Level:</label>
        <input type="text" id="gendgradeer"  value ="<?php echo $grade; ?>" required>
   
        <a href="home.php"><button type="button" class="btn btn-back">Back</button></a>
    </form>
</body>
</html>
