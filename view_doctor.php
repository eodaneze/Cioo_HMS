<?php 
require_once("./header.php");
require_once("./navbar.php");
require_once("./sidebar.php");
require_once("./includes/connection.php");
if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "SELECT * FROM doctor WHERE id = '$id'";
    $result = mysqli_query($con, $sql);
    $row = mysqli_fetch_assoc($result);
    $name = $row['name'];
    $dpic = $row['dpic'];
    $dept = $row['dept'];
    $dob = $row['dob'];

    $age = (date('Y') - date('Y', strtotime($dob)));
}

?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="all-content-wrapper">
    <div class="all-wrapper">
        <div style="padding: 8rem 0 20px 0; margin: 0 4%;">
            <h4>Profile</h4>
            <div class="all-container">
                <div class="all-main" style="justify-content: space-between">
                    <div class="profile-pic-section"
                        style="background-color: white; text-align: center; padding: 10px;">
                        <img src="./includes/doctorsdp/<?=$dpic?>" alt=""
                            style="width: 10rem; height: 10rem; border-radius: 50%;">
                        <h5><?=$name?></h5>
                        <h5>Department: <?=$dept?></h5>
                    </div>
                    <div class="info-section" style="background-color: white;">
                        <div class="single-pro-review-area mt-t-30 mg-b-15">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="product-payment-inner-st">
                                            <ul id="myTabedu1" class="tab-review-design"
                                                style="display: flex; justify-content:space-between">
                                                <li class="active"><a href="#description">Overview</a></li>
                                                <li><a href="#reviews"> Edit Profile</a></li>

                                            </ul>
                                            <div id="myTabContent" class="tab-content custom-product-edit">
                                                <div class="product-tab-list tab-pane fade active in" id="description">
                                                    <div class="row">
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <div class="review-content-section">
                                                                <div id="dropzone1" class="pro-ad">
                                                                    <h5>Profile Details</h5>
                                                                    <div style="display: flex;">
                                                                        <p>Name: </h>
                                                                        <p style="margin-left: 10%;">
                                                                            <?= $row['name'] ?>
                                                                        </p>
                                                                    </div>
                                                                    <div style="display: flex;">
                                                                        <p>Email: </h>
                                                                        <p style="margin-left: 10%;">
                                                                            <?= $row['email'] ?>
                                                                        </p>
                                                                    </div>
                                                                    <div style="display: flex;">
                                                                        <p>Address: </h>
                                                                        <p style="margin-left: 10%;">
                                                                            <?= $row['address2'] ?>
                                                                        </p>
                                                                    </div>
                                                                    <div style="display: flex;">
                                                                        <p>Phone: </h>
                                                                        <p style="margin-left: 10%;">
                                                                            <?= $row['mobileno'] ?>
                                                                        </p>
                                                                    </div>
                                                                    <div style="display: flex;">
                                                                        <p>Department: </h>
                                                                        <p style="margin-left: 10%;">
                                                                            <?= $row['dept'] ?>
                                                                        </p>
                                                                    </div>
                                                                    <div style="display: flex;">
                                                                        <p>Age: </h>
                                                                        <p style="margin-left: 10%;">
                                                                            <?= $age ?> Years
                                                                        </p>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="product-tab-list tab-pane fade" id="reviews">
                                                    <div class="row">
                                                        <div class="col-md-8 col-lg-9">
                                                            <img src="./includes/doctorsdp/<?=$row['dpic']?>"
                                                                alt="Profile">
                                                        </div>
                                                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                                            <form action="./includes/editDoctor.php" method="post"
                                                                enctype="multipart/form-data"
                                                                class="dropzone dropzone-custom needsclick add-professors"
                                                                id="demo1-upload">
                                                                <div class="row">
                                                                    <div class="col-lg-12 col-md-12 col-sm-6 col-xs-12">
                                                                        <div class="form-group">
                                                                            <input name="firstname" type="text"
                                                                                class="form-control"
                                                                                placeholder="Full Name"
                                                                                value="<?=$row['name']?>">
                                                                            <input type="hidden" name="id"
                                                                                value="<?=$row['id']?>">
                                                                            <input type="hidden" name="photo"
                                                                                value="<?=$row['dpic']?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="firstname" type="email"
                                                                                class="form-control" placeholder="Email"
                                                                                value="<?=$row['email']?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="address2" type="text"
                                                                                class="form-control"
                                                                                placeholder="Address"
                                                                                value="<?=$row["address2"] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="mobileno" type="number"
                                                                                class="form-control"
                                                                                placeholder="Mobile no."
                                                                                value="<?=$row['mobileno']?>">
                                                                        </div>
                                                                        <div class=" form-group">
                                                                            <input name="dob" id="finish" type="date"
                                                                                class="form-control"
                                                                                placeholder="Date of Birth"
                                                                                value="<?=$row['dob'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="postcode" id="postcode"
                                                                                type="text" class="form-control"
                                                                                placeholder="Postcode"
                                                                                value="<?=$row['pcode'] ?>">
                                                                        </div>
                                                                        <div class="form-group">
                                                                            <input name="dept" id="postcode" type="text"
                                                                                class="form-control"
                                                                                placeholder="department"
                                                                                value="<?=$row['dept'] ?>">
                                                                        </div>
                                                                        <div class="form-group res-mg-t-15">
                                                                            <textarea name="descp"
                                                                                placeholder="<?= $row['descp'] ?>"></textarea>
                                                                        </div>
                                                                        <div class="form-group alert-up-pd">
                                                                            <input type="file" title="Upload Profile "
                                                                                class="form-control" name="file" id="">
                                                                        </div>
                                                                        <div>
                                                                            <button type="submit"
                                                                                class="btn btn-primary btn-block"
                                                                                name="submit">Update</button>
                                                                            </dibv>
                                                                        </div>

                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php require_once("./footer.php") ?>