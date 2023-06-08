<?php 
 require("./header.php");
 require("./navbar.php");
 require("./sidebar.php");

 $sql = "SELECT * FROM doctor WHERE deleted = 1";
 $result = mysqli_query($con, $sql);

 
 
 ?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h4>CiooMedicals | Doctors</h4>
            <div class="row" style="margin-bottom: 8rem;">
                <?php
                while($row = mysqli_fetch_array($result)){
                    $name = $row['name'];
                    $dept = $row['dept'];
                    $pic = $row['dpic'];
                    ?>
                <div class="col-lg-3"
                    style="background-color: white; padding: 8px; border: 1px solid #ccc; text-align: center;">
                    <div class="card" style="width: 18rem;">
                        <img src="../includes/doctorsdp/<?=$pic?>" class="card-img-top img-fluid" alt="..."
                            style="width: 100%">
                        <div class="card-body" style="margin-top: 15px;">
                            <h5 class=" card-title">Dr. <?=$name?></h5>
                            <p class="card-text">Specialization: <b><?=$dept?></b></p>
                            <a href="#" class="btn btn-primary">Send message</a>
                        </div>
                    </div>
                </div>
                <?php
                    
                }

?>
            </div>
        </div>
    </div>
</div>

<?php 
 require('./footer.php')
?>