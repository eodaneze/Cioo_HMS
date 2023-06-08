<?php
require_once("./includes/connection.php");
require_once("./home_header.php");
require_once('./home_navbar.php')

?>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
    integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />

<body>

    <!-- ======= Top Bar ======= -->


    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to CiooMedicals</h1>
            <h2>Welcome to the best online medical consultation and prescription system</h2>
            <a href="#about" class="btn-get-started scrollto">Get Started</a>
        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">
                        <div class="content">
                            <h3>Why Choose CiooMedicals</h3>
                            <p>
                                CiooMedicals is the best online consultation and prescription system. at cioomedicals,we
                                offer the best medical services .
                            </p>
                            <div class="text-center">
                                <a href="#" class="more-btn">Learn More <i class="bx bx-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Why Us Section -->






        <!-- ======= Appointment Section ======= -->
        <section id="appointment" class="appointment section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Make Emergency</h2>
                    <p>.</p>
                </div>

                <form action="./includes/emergency.php" method="post">
                    <div class="row">
                        <div class="col-md-4 form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                                data-rule="email" data-msg="Please enter a valid email">

                        </div>
                        <div class="col-md-4 form-group mt-3 mt-md-0">
                            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone"
                                data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 form-group mt-3">
                            <input type="text" name="address2" class="form-control datepicker" id="date"
                                placeholder="Address" data-rule="minlen:4" data-msg="Please enter at least 4 chars">

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="dept" id="department" class="form-select">
                                <option value="">Select Department</option>
                                <?php 
                                $sql = "SELECT * FROM department WHERE deleted = 1";
                                $result = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $dept_name = $row['dept_name'];
                                  ?>
                                <option><?=$dept_name?></option>
                                <?php
                                }

                              ?>
                            </select>

                        </div>
                        <div class="col-md-4 form-group mt-3">
                            <select name="doctor" id="doctor" class="form-select">
                                <option>Select Doctor</option>
                                <?php 
                                $sql = "SELECT * FROM doctor WHERE deleted = 1";
                                $result = mysqli_query($con, $sql);
                                while($row = mysqli_fetch_array($result)){
                                    $name = $row['name'];
                                  ?>
                                <option>Dr. <?=$name?></option>
                                <?php
                                }

                              ?>

                            </select>

                        </div>
                    </div>

                    <div class="form-group mt-3 mb-5">
                        <textarea class="form-control" name="message" rows="5"
                            placeholder="Message (Optional)"></textarea>
                    </div>
                    <div class="text-center "><button class="btn btn-primary " name="submit">Book Emergency</button>
                    </div>
                </form>


            </div>
        </section><!-- End Appointment Section -->

        <!-- ======= Departments Section ======= -->
        <section id="departments" class="departments">
            <div class="container">

                <div class="section-title">
                    <h2>Departments</h2>
                    <p>CiooMedicals is the best online medical consultation and prescription system. CiooMedicals have
                        different departments and doctors that specializes on a particular line of health</p>
                </div>

                <div class="row gy-4">
                    <div class="col-lg-3">
                        <ul class="nav nav-tabs flex-column">
                            <li class="nav-item">
                                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">Cardiology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">Neurology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">Hematology</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-4">Pediatrics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#tab-5">Eye Care</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-9">
                        <div class="tab-content">
                            <div class="tab-pane active show" id="tab-1">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Cardiology</h3>
                                        <p class="fst-italic">A cardiologist is a physician who's an expert in the care
                                            of your heart and blood vessels. They can treat or help you prevent a number
                                            of</p>
                                        <p>Cardiology is the study of the heart. Cardiology is a branch of medicine that
                                            deals with disorders of the heart and the cardiovascular system. The field
                                            includes medical diagnosis and treatment of congenital heart defects,
                                            coronary artery disease, heart failure, valvular heart disease and
                                            electrophysiolog</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-1.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-2">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Neurology</h3>
                                        <p class="fst-italic">Neurology is the branch of medicine dealing with the
                                            diagnosis and treatment of all categories of conditions and disease
                                            involving the brain, the spinal ...</p>
                                        <p>Neurology is the branch of medicine concerned with the study and treatment of
                                            disorders of the nervous system. The nervous system is a complex,
                                            sophisticated system that regulates and coordinates body activities. It has
                                            two major divisions: Central nervous system: the brain and spinal cord.</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-2.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-3">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Hematology</h3>
                                        <p class="fst-italic">Hematologists are medical doctors who specialize in
                                            diagnosing and treating problems with the blood and related structures, such
                                            as the bone ..</p>
                                        <p>Hematology is the study of blood and blood disorders. Hematologists and
                                            hematopathologists are highly trained healthcare providers who specialize in
                                            diseases of the blood and blood components. These include blood and bone
                                            marrow cells</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-3.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-4">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>pediatrics</h3>
                                        <p class="fst-italic">Totam aperiam accusamus. Repellat consequuntur iure
                                            voluptas iure porro quis delectus</p>
                                        <p>A pediatrician is a doctor who focuses on the health of infants,
                                            children,
                                            adolescents and young adults. Pediatric care starts at birth and lasts
                                            through a child's 21st birthday or longer. Pediatricians prevent, detect
                                            and
                                            manage physical, behavioral and developmental issues that affect
                                            children
                                        </p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-4.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane" id="tab-5">
                                <div class="row gy-4">
                                    <div class="col-lg-8 details order-2 order-lg-1">
                                        <h3>Est eveniet ipsam sindera pad rone matrelat sando reda</h3>
                                        <p class="fst-italic">Omnis blanditiis saepe eos autem qui sunt debitis porro
                                            quia.</p>
                                        <p>Exercitationem nostrum omnis. Ut reiciendis repudiandae minus. Omnis
                                            recusandae ut non quam ut quod eius qui. Ipsum quia odit vero atque qui
                                            quibusdam amet. Occaecati sed est sint aut vitae molestiae voluptate vel</p>
                                    </div>
                                    <div class="col-lg-4 text-center order-1 order-lg-2">
                                        <img src="assets/img/departments-5.jpg" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section><!-- End Departments Section -->

        <!-- ======= Doctors Section ======= -->
        <section id="doctors" class="doctors">
            <div class="container">

                <div class="section-title">
                    <h2>Doctors</h2>
                    <p>
                        Doctors are medical professionals who are trained and licensed to diagnose, treat, and prevent
                        illnesses and injuries. They play a crucial role in maintaining the health and well-being of
                        individuals and communities. Here are some key aspects of a doctor's description. At cioo
                        medicals, we have different doctors who know their onion/p>
                </div>

                <div class="row">
                    <?php 
                     $sql = "SELECT * FROM doctor WHERE deleted = 1";
                     $result = mysqli_query($con, $sql);
                     while($row = mysqli_fetch_array($result)){
                         $pic = $row['dpic'];
                         $name = $row['name'];
                         $descp = $row['descp'];
                         ?>

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="./includes/doctorsdp/<?=$pic?>" class="img-fluid" alt=""></div>
                            <div class="member-info">
                                <h4><?=$name?></h4>
                                <span>Chief Medical Officer</span>
                                <p><?=$descp?></p>
                                <div class="social">
                                    <a href=""><i class="fa-brands fa-facebook-f"></i></a>
                                    <a href="">
                                        <i class="fa-brands fa-whatsapp"></i>
                                    </a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                     }


?>



                </div>

            </div>
        </section><!-- End Doctors Section -->



        <!-- ======= Contact Section ======= -->
        <section id="contact" class="contact">
            <div class="container">

                <div class="section-title">
                    <h2>Contact</h2>
                    <p>Send us a message if you have any question. </p>
                </div>
            </div>

            <div>
                <iframe style="border:0; width: 100%; height: 350px;"
                    src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621"
                    frameborder="0" allowfullscreen></iframe>
            </div>

            <div class="container">
                <div class="row mt-5">

                    <div class="col-lg-4">
                        <div class="info">
                            <div class="address">
                                <i class="bi bi-geo-alt"></i>
                                <h4>Location:</h4>
                                <p>No 20. Abakaliki Road Ebonyi State</p>
                            </div>

                            <div class="email">
                                <i class="bi bi-envelope"></i>
                                <h4>Email:</h4>
                                <p>cioo@example.com</p>
                            </div>

                            <div class="phone">
                                <i class="bi bi-phone"></i>
                                <h4>Call:</h4>
                                <p>+2348464869025</p>
                            </div>

                        </div>

                    </div>

                    <div class="col-lg-8 mt-5 mt-lg-0">

                        <form action="../includes/contact.php" method="post" role="form" class="php-email-form">
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <input type="text" name="name" class="form-control" id="name"
                                        placeholder="Your Name" required>
                                </div>
                                <div class="col-md-6 form-group mt-3 mt-md-0">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Your Email" required>
                                </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control" name="subject" id="subject"
                                    placeholder="Subject" required>
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message"
                                    required></textarea>
                            </div>

                            <div class="text-center"><button type="submit" name="submit">Send Message</button></div>
                        </form>

                    </div>

                </div>

            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">



        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    &copy; Copyright <strong><span>CiooMedicals</span></strong>. All Rights Reserved
                </div>
                <div class="credits">
                    Developed by <a href="https://bootstrapmade.com/">Dev_Daniels</a>
                </div>
            </div>
            <div class="social-links text-center text-md-right pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>