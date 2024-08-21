<?php

session_start();
// print_r($_SESSION);
// exit;
if (!isset($_SESSION['email'])) 
{
	# code...
header("location:index.php");
  
}


include("dbconn.php");
$query = "SELECT * FROM personal_details";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>small project</title>
    <style>
        /* Basic styling */
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h1 {
            text-align: center;
        }
        /* Logout button */
        .logout-button {
            display: block;
            margin-bottom: 20px;
            text-align: right;
        }
        .logout-button button {
            padding: 10px 15px;
            background-color: #f44336;
            color: white;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        .logout-button button:hover {
            background-color: #d32f2f;
        }
        /* Table styling */
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 12px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        .action-buttons {
            display: flex;
            gap: 8px;
        }
     /* Common button styles */
.action-buttons button {
    padding: 10px 12px;
    color: white;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

/* Style for the Edit button */
.btn-edit {
    background-color: #4CAF50; /* Green color */
}

.btn-edit:hover {
    background-color: #45a049; /* Darker green on hover */
}

/* Style for the View button */
.btn-view {
    background-color: #2196F3; /* Blue color */
}

.btn-view:hover {
    background-color: #1976D2; /* Darker blue on hover */
}

/* Style for the Delete button */
.btn-delete {
    background-color: #f44336; /* Red color */
}

.btn-delete:hover {
    background-color: #d32f2f; /* Darker red on hover */
}

    </style>
</head>
<body>
    <!-- Logout button -->
    <div class="logout-button">
    <a href ="logout.php"><button >Logout</button></a>
    </div>

    <!-- Page header -->
    <h1>Welcome Mr.<?php echo $_SESSION['email']?></h1>

    <!-- Data table -->
    <table>
        <tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Grade</th>
            <th>Actions</th>
        </tr>
        <?php
        // Loop through the fetched data and populate the table
        while ($row = mysqli_fetch_assoc($result)) {
            $id = $row['randam_id']; 
            $editUrl  = "editdata.php?Id=" . $id;
            $viewUrl   = "view.php?Id=" . $id;
            $deleteUrl = "save_details.php?Id=" . $id . "&action=Delete";
            //$editUrl = "#";
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['first_name'] . "</td>";
            echo "<td>" . $row['last_name'] . "</td>";
            echo "<td>" . $row['email'] . "</td>";
            echo "<td>" . $row['phone'] . "</td>";
            echo "<td>" . $row['grade'] . "</td>";
            echo "<td>";
            echo '<div class="action-buttons">';
            echo '<a href="' . $editUrl . '"><button class="btn-edit">Edit</button></a>';
            echo '<a href="' . $viewUrl . '"><button class="btn-view">View</button></a>';
            echo '<a href="' . $deleteUrl . '"><button class="btn-delete">Delete</button></a>';
            echo '</div>';
            
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <!-- Add JavaScript functions for button actions -->
    <script>
        function logout() {
            // Add logic for logging out the user
            alert("Logging out");
        }

        function edit(id) {
            // Add logic for editing the entry with the specified ID
            alert("Editing entry with ID: " + id);
        }

        function view(id) {
            // Add logic for viewing the entry with the specified ID
            alert("Viewing entry with ID: " + id);
        }

        function deleteEntry(id) {
            // Add logic for deleting the entry with the specified ID
            alert("Deleting entry with ID: " + id);
        }
    </script>
</body>
</html>

<?php
// Close the database connection
mysqli_close($conn);
?>
