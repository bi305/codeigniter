<?php $views;

?>

<body>
    <section>
        <div class="section-header pb-6 text-white  " style="   background-color:#3b5999">
            <div class="container">

            </div>
            <div class="container-fluid">
                <div class="row offset-1 offset-0">
                    <div class="col-md-5">
                        <ul class="browsebyletter">
                            <?php
                            echo  get_english_alphabets();
                            ?>

                        </ul>
                    </div>
                    <div class="col-md-6 ">


                        <?php $this->load->view('arabic_alphabets'); ?>

                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="pb-5 pt-5" style="background-image: url('<?php echo   base_url(); ?>assets/img/bg-img/re.jpg'); background-size :cover; background-attachment:fixed ; ">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-7">
                    <div class="card border-light px-4 py-5 " style=" background-color:rgb(0 0 0 / 68%);">
                        <div class="card-header  text-center pb-0  text-white" style="  background-color:rgb(0 0 0 / 0%);">
                            <h2 class="h1 mb-3 ">
                                <?php


                                echo  $all_name_data->name;


                                ?>
                            </h2>



                            <ul class="list-group list-group-flush col-md-12 font  ">
                                <li class="list-group-item">
                                    <h3>Gender :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php

                                        echo  $all_name_data->gender;

                                        ?></h3>
                                </li>
                                <li class="list-group-item">
                                    <h3>Origin :&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <?php

                                        echo  $all_name_data->origin;

                                        ?></h3>
                                    </h3>
                                </li>
                                <li class="list-group-item">
                                    <h3>Meaning :
                                        <?php foreach ($meaning_data as $obj) : ?>

                                            <?php echo  $obj->meaning; ?>

                                        <?php endforeach; ?>

                                    </h3>

                                </li>



                            </ul>




                        </div>

                    </div>
                </div>


                <div class="col-lg-5">
                    <div class="row">
                        <div class="col-md-12">

                            <div class="card border-light px-4 py-5"style=" background-color:rgb(0 0 0 / 68%);">
                                <div class="card-header  text-center pb-0 text-white"style=" background-color:rgb(0 0 0 / 0%);">
                                    <h2 class="h1 mb-3">Related Names</h2>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <?php

                                            foreach ($related_names as $obj) {
                                            ?><h1>
                                                    <?php echo  $obj->name; ?>
                                                </h1>

                                            <?php  }

                                            ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="col-md-12 mt-3">

                            <div class="card border-light px-4 py-5"style=" background-color:rgb(0 0 0 / 68%);">
                                <div class="card-header  text-center pb-0 text-white" style=" background-color:rgb(0 0 0 / 0%);">
                                    <h2 class="h1 mb-3">Famous People  </h2>
                                    <div class="row">
                                        
                                        <div class="col-md-12">
                                             
                                                <?php
                                                     $famous_people=  $famous_people_names;
                                                     foreach($famous_people as $obj)
                                                     {?>
                                                     <h4>

                                                         <?php 
                                                            echo  $obj->name." - "." ".$obj->name_arabic;
                                                         ?>
                                                     </h4>
                                                    
                                                     

                                                   <?php 
                                                    }
                                                      
                                                    ?>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>



            </div>
        </div>
    </section>







    <footer class="footer pt-7 pb-6 bg-dark text-white">
        <div class="container">
            <div class="row">
                <div class="col-md-5">
                    <p><strong>Islamic Baby Names </strong>is with you from day one, which makes us the source for the most popular baby names and more!</p>
                    <ul class="social-buttons mb-5 mb-lg-0">
                        <li>
                            <a href="#" aria-label="twitter social link" class="icon icon-xs icon-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Follow us on Twitter">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon icon-xs icon-white" aria-label="facebook social link" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like us on Facebook">
                                <span class="fab fa-facebook"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" aria-label="github social link" class="icon icon-xs icon-white" data-toggle="tooltip" data-placement="top" title="" data-original-title="Star us on Github">
                                <span class="fab fa-github"></span>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="icon icon-xs icon-white" aria-label="dribbble social link" data-toggle="tooltip" data-placement="top" title="" data-original-title="Like us on Dribbble">
                                <span class="fab fa-dribbble"></span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-6 col-md-4 mb-5 mb-lg-0">
                    <h4 class="h5">Baby Islamic Names</h4>
                    <ul class="links-vertical">

                        <li><a target="_blank" href="https://themesberg.com/about">About Us</a>
                        </li>
                        <li><a target="_blank" href="https://themesberg.com/contact">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-6 col-md-3 mb-5 mb-lg-0">
                    <h3 class="h5">Other</h3>
                    <ul class="links-vertical">
                        <li><a href="#" target="_blank">All Names
                            </a></li>
                        <li><a href=" " target="_blank">Boys Name</a></li>
                        <li><a target="_blank" href=" ">Girls Name</a>
                        </li>
                        <li><a target="_blank" href="#">Famous Names</a></li>
                    </ul>
                </div>

            </div>
            <hr class="my-5">
            <div class="row">
                <div class="col mb-md-0">

                    <div class="d-flex text-center justify-content-center align-items-center" role="contentinfo">
                        <p class="font-weight-normal font-small mb-0">Copyright © Islamic Baby Names
                            <span class="current-year">2020</span>. All rights reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="./vendor/jquery/dist/jquery.min.js"></script>
    <script src="/vendor/popper.js/dist/umd/popper.min.js"> </script>
    <script src="./vendor/bootstrap/dist/js/bootstrap.min.js">
    </script>
    <script src="./vendor/headroom.js/dist/headroom.min.js"></script>
    <!-- Vendor JS -->
    <script src="./vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="./vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="./vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="./vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="./vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="./vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="./vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="./vendor/vivus/dist/vivus.min.js"></script>
    <!-- Place this tag in your head or just before your close body tag. -->
    <!-- <script async defer src="https://buttons.github.io/buttons.js"></script> -->
    <!-- pixel JS -->
    <script src="./assets/js/pixel.js"></script>

    <!-- on scroll  js -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
</body>