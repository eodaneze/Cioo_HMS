<?php
require_once("./header.php");
  require("./navbar.php");
  require_once("./sidebar.php");
?>
<style>
.all-row {
    display: flex;
    gap: 2rem;
    align-items: center;
}

.row-1 img {
    width: 10rem;
    height: 10rem;
    border-radius: 50%;
}

.row-1 {
    background-color: white;
    text-align: center;
    flex-basis: 30%;
    border: 1px solid #ccc;
    padding: 10px;
    width: fit-content;
}

.row-1 h3 {
    margin-top: 15px;
}

.row-2 {
    flex-basis: 60%;
    background-color: white;
    padding: 10px;
    border: 1px solid #ccc;
}

.row-2 h4 {
    border-bottom: 2px solid blue
}
</style>
<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <div class="alert alert-success text-center  "><strong>Welcome <?=$title?>. <?=$name?></strong></div>
            <h4>CiooMedicals | Patient Dashboard</h4>
            <div>
                <div class="all-row">
                    <div class="row-1">
                        <img src="../includes/patientdp/<?=$pic?>" alt="">
                        <h3><?=$title?> <?=$name?></h3>
                    </div>
                    <div class="row-2">
                        <div>
                            <h4>Overview</h4>
                        </div>
                        <div>
                            <h3 style="color: #286090;">Personal Details</h3>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Patient Title
                                </div>
                                <div class="col-lg-4">
                                    <?=$title?>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Patient Name
                                </div>
                                <div class="col-lg-4">
                                    <?=$name?>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Patient Email
                                </div>
                                <div class="col-lg-4">
                                    <?=$email?>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Patient Adress
                                </div>
                                <div class="col-lg-4">
                                    <?=$address2?>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Gender
                                </div>
                                <div class="col-lg-4">
                                    <?=$gender?>
                                </div>

                            </div>

                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Marital Status
                                </div>
                                <div class="col-lg-4">
                                    <?=$mstatus?>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Phone No.
                                </div>
                                <div class="col-lg-4">
                                    <?=$phone?>
                                </div>

                            </div>
                            <div class="row" style="margin-bottom: 15px;">
                                <div class="col-lg-2">
                                    Age
                                </div>
                                <div class="col-lg-4">
                                    <?=$age?>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
  require("./footer.php");
?>