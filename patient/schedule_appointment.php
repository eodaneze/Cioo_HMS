<?php
 require("./header.php");
 require("./navbar.php");
 require("./sidebar.php");

?>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h3 style="color: #555;">Patient | Book Appointment</h3>
            <div class="appointment" style="background-color: #fff; padding: 30px;">
                <?php
                  if(isset($_GET['error'])){
                       ?>
                <div class="alert alert-danger text-center"><?=urldecode($_GET['error'])?></div>

                <?php
                }else if(isset($_GET['success'])){
                    ?>
                <div class="alert alert-success text-center"><?=urldecode($_GET['success'])?></div>

                <?php
                }
                ?>
                <div style="border: 1px solid #ccc; padding: 20px">
                    <h6>Book Appointment</h6>

                    <div class="all-form">
                        <form action="../includes/appointment.php" method="post">
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-lg-6">
                                    <label for="">Doctor Specialization</label><br>
                                    <select name="special" id="" class="form-control">
                                        <option>--Choose Doctors Specialization</option>
                                        <?php 
                                       $sql = "SELECT * FROM department WHERE deleted = 1";
                                       $result = mysqli_query($con, $sql);
                                       while($row = mysqli_fetch_assoc($result)){
                                           $sname = $row['dept_name'];
                                           
                                           ?>
                                        <option>
                                            <?= $sname?>
                                        </option>
                                        <?php
                                       }
                                    ?>
                                    </select>
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Doctors</label><br>
                                    <select name="doc" id="" class="form-control">
                                        <option>--Choose Doctor--</option>
                                        <?php 
                                       $sql = "SELECT * FROM doctor WHERE deleted = 1";
                                       $result = mysqli_query($con, $sql);
                                       while($row = mysqli_fetch_assoc($result)){
                                           $name = $row['name'];
                                           
                                           ?>
                                        <option>
                                            Dr. <?= $name?>
                                        </option>
                                        <?php
                                       }
                                    ?>
                                    </select>

                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-lg-6">
                                    <label for="">Time</label><br>
                                    <input type="time" class="form-control" id="timepicker1" name="atime"> eg : 10:00 PM
                                </div>
                                <div class="col-lg-6">
                                    <label for="">Date</label><br>
                                    <input type="date" class="form-control" name="adate">
                                </div>
                            </div>
                            <div class="row" style="margin-bottom: 20px">
                                <div class="col-lg-12">
                                    <label for="">Appointment purpose</label><br>
                                    <textarea name="apurpose" id="" cols="30" rows="10" class="form-control"></textarea>
                                </div>
                            </div>
                            <div>
                                <button class="btn btn-primary" name="book">Book Now</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="../js/bootstrap-datetimepicker.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script>
jQuery(document).ready(function() {
    Main.init();
    FormElements.init();
});

$('.datepicker').datepicker({
    format: 'yyyy-mm-dd',
    startDate: '-3d'
});
</script>
<script type="text/javascript">
$('#timepicker1').timepicker();
</script>
<?php 
 require_once('./footer.php')

?>