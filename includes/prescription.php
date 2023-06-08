<?php
require("./connection.php");
if(isset($_GET['id']));{
    
    $id = $_GET['id'];

    $sql1 = "SELECT * FROM patient WHERE id = '$id'";
    $result1 = mysqli_query($con, $sql1);
    $row = mysqli_fetch_assoc($result1);
    $name = $row['name'];
}
 if(isset($_POST['prescribe'])){
     $med_name = $_POST['med'];
     $med_instruction = $_POST['instruct'];
     
     if($med_name == "" || $med_instruction == ""){
         $error = urlencode("All fields are required");
         header('location:../doctor/addPrescription.php?error='.$error);
     }else{
         $pid = $id;
         $sql = "INSERT INTO prescription(medicine, instructions, id)VALUES('$med_name', '$med_instruction', '$pid')";
         $result = mysqli_query($con, $sql);
         if($result){
             $success = urlencode('Prescription have bee added to the patient with the name ' . $name);
              header('location:../doctor/addPrescription.php?success='.$success);
         }else{
            $error = urlencode('Error adding prescription');
            header('location:../doctor/addPrescription.php?success='.$error);
         }
     }
 }else{
    $error = urlencode('Please Login first ');
    header('location:../index.php?success='.$error);
 }
?>