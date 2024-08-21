<?php 
session_start();
include("dbconn.php");
                      //save
if (isset($_POST['submit']) && $_POST['submit'] == 'save') 
{
    $Name        = isset($_POST['firstName']) ? $_POST['firstName'] : '';
    $lastName    = isset($_POST['lastName']) ? $_POST['lastName'] : '';
    $dateOfBirth = isset($_POST['dateOfBirth']) ? $_POST['dateOfBirth'] : '';
   $gender       = isset($_POST['gender']) ? $_POST['gender'] : '';
   $email        = isset($_POST['email']) ? $_POST['email'] : '';
   $phone        = isset($_POST['phone']) ? $_POST['phone'] : '';
   $address      = isset($_POST['address']) ? $_POST['address'] : '';
   $grade        = isset($_POST['grade']) ? $_POST['grade'] : '';
   $rand_id      = substr(uniqid(),0,10);

   $int_sql = "INSERT INTO personal_details (first_name, last_name, date_of_birth, gender, email, phone,address,grade,randam_id) 
        VALUES ('$Name', '$lastName', '$dateOfBirth', '$gender', '$email', '$phone', '$address', '$grade','$rand_id')";
   $data = mysqli_query($conn, $int_sql);
   if ($data) {
    echo "<script>
        alert('Data inserted successfully.');
        window.location.href = 'index.php';
    </script>";
} else {
    echo "Error inserting data: " . mysqli_error($conn);
}
}

                                           //Update
        if (isset($_POST['submit']) && $_POST['submit'] == 'update') 
        {
        // print_r($_POST);
        // exit;
            $firstName        = isset($_POST['firstName']) ? $_POST['firstName'] : '';
            $lastName    = isset($_POST['lastName']) ? $_POST['lastName'] : '';
            $dateOfBirth = isset($_POST['dateOfBirth']) ? $_POST['dateOfBirth'] : '';
            $gender       = isset($_POST['gender']) ? $_POST['gender'] : '';
            $email        = isset($_POST['email']) ? $_POST['email'] : '';
            $phone        = isset($_POST['phone']) ? $_POST['phone'] : '';
            $address      = isset($_POST['address']) ? $_POST['address'] : '';
            $grade        = isset($_POST['grade']) ? $_POST['grade'] : '';
            $hidden_id    = isset($_POST['hidden_id']) ? $_POST['hidden_id'] : '';
                        
                      
            $upd_Sql = "UPDATE personal_details SET first_name = '$firstName',last_name = '$lastName',date_of_birth = '$dateOfBirth',gender = '$gender',email = '$email',phone = '$phone',address = '$address',grade = '$grade' WHERE randam_id = '$hidden_id' ";
 
                         $result = mysqli_query($conn, $upd_Sql);
                         if ($result ==1) {
                          echo "<script>
                              alert('Data Updated successfully.');
                              window.location.href = 'home.php';
                          </script>";
                      } else {
                          echo "Error inserting data: " . mysqli_error($conn);
                      }
         }

                                                  //Delete
        if (isset($_GET['action']) && $_GET['action'] == 'Delete') 
        {
    //    echo "hai";
    //     exit;
              $hidden_id = isset($_GET['Id']) ?$_GET['Id'] : 0;      
            $del_Sql = "DELETE FROM personal_details  WHERE randam_id = '$hidden_id' ";
 
                         $result = mysqli_query($conn, $del_Sql);
                         if ($result ==1) {
                          echo "<script>
                              alert('Record deleted successfully.');
                              window.location.href = 'home.php';
                          </script>";
                      } else {
                          echo "Error deleting record: " . mysqli_error($conn);
                      }
         }



                //Login
            if(isset($_POST['login']) && $_POST['login'] == 'login')
            {
                extract($_POST);
                $email = isset($usernameOrEmail) ? $usernameOrEmail :'';
                $password = isset($password) ? $password : '';
                $qrySel = "select * from personal_details where email='$email' and phone ='$password'";
                $resSel = mysqli_query($conn,$qrySel);
                $rows = $resSel->num_rows;
                if ($rows==1)
                {
                    $_SESSION['email'] = $email;
                    echo "<script>
                    alert('Login successfully.');
                    window.location.href = 'home.php';
                </script>";
                
                }else{
                    echo "<script>
                    alert('Login Invalid.');
                    window.location.href = 'index.php';
                </script>";
        
                }
        
        }
?>