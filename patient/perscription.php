<?php
require_once("./header.php");
  require("./navbar.php");
  require_once("./sidebar.php");


  if(isset($_SESSION['patientid'])){
      $patientid = $_SESSION['patientid'];
      $ad = "SELECT * FROM patient WHERE id = '$patientid'";
      echo $patientid;
     //  die();
        
  }
 
 
  $sql = "SELECT * FROM  prescription WHERE id = '$patientid'";
  $result = mysqli_query($con, $sql);
  $row = mysqli_fetch_assoc($result);
  $med_name = $row['medicine'];
  $instruction = $row['instructions'];
  $num = 1
 
?>

<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h4>Patient Dashboard | Perscription</h4>
            <?php 
                 if($row){
                     ?>
            <div class="all-tables table-responsive text-nowrap">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">S/N</th>
                            <th scope="col">Medication</th>
                            <th scope="col">Instructions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th><a href=""><?=$num++?></a></th>
                            <td><?=$med_name?></td>
                            <td><?=$instruction?></td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <?php
                 }else{
                     ?>
            <h1>No prescription yet</h1>
            <?php
                 }

?>

        </div>
    </div>
</div>

<?php
 require_once("./footer.php");

?>