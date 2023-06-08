<?php
require("./header.php");
require("./navbar.php");
require("./sidebar.php");

if(isset($_GET['id']))
$id = $_GET['id']
?>

<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h4>Doctor Dashboard | Add Prescription </h4>
            <?php
            if(isset($_GET['error'])){
                ?><div class="alert alert-danger container text-center"><?=urldecode($_GET['error'])?></div><?php
            }else if(isset($_GET['success'])){
                ?><div class="alert alert-success container text-center"><?=urldecode($_GET['success'])?></div><?php
            }
?>
            <form action="../includes/prescription.php?id=<?=$id?>" method="post">
                <div class="row">
                    <div class="col-lg-6" style="margin-bottom: 10px">
                        <select name="med" id="" class="form-control">
                            <option>--Add medicine--</option>
                            <?php 
                                      $sql = "SELECT * FROM  medicine WHERE deleted = 1";
                                      $result = mysqli_query($con, $sql);
                                      while($row = mysqli_fetch_array($result)){
                                          $name = $row['med_name']
                                          ?>

                            <option><?=$name?></option>
                            <?php
                                }
                                ?>
                        </select>
                    </div>
                    <div class=" col-lg-6">
                        <select name="instruct" id="" class="form-control">
                            <option>--add instruction--</option>
                            <option>Twice in a day (morning and night)</option>
                        </select>
                    </div>
                </div>
                <div>
                    <button class="btn btn-primary" name="prescribe"><i class="fa fa-plus-circle">
                        </i> Prescribe</button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
  require('./footer.php');
?>