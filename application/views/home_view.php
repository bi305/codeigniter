<section>
    <div class="section-header pb-6 text-white  " style="   background-color:#3b5999">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-8 text-center">
                    <h1 class="display-3 mb-4 font animate__animated animate__swing animate__delay-1s">Get Ready For Baby </h1>
                    <p class="font">Islamic Baby Names is with you from day one, which makes us the source for the most popular baby names and more! </p>
                    <div class="alert alert-secondary align-items-center" role="alert">
                        <div class="container h-100 w-100">
                            <div class="d-flex justify-content-left ">
                                <section class="container">
                                    <h3 class="text-white  text-center ">Names Of The Day</h3>
                                    <div class="row p-2 offset-1">
                                        <div class="col-md-5  mr-5 my-3 rounded border border-light">
                                            <h3 class="mt-3">Boy</h3>
                                            <p class="text-white text-center  " style="font-size: 20px; font-weight:900">
                                                <?php  echo   $name_of_the_day_male->name;

                                                 
                                                ?>
                                            </p>

                                            <h5 class="text-white text-center">Meanings: <span style="font-size: 15px;"><?php echo    get_meanings($name_of_the_day_male->id); ?></span>

                                            
                                            </h5>

                                        </div>
                                        <div class="col-md-5   my-3 rounded border border-light">
                                            <h3 class="mt-3">Girl</h3>
                                            <p class="text-white text-center  " style="font-size: 20px; font-weight:900">
                                                <?php  
                                                echo $name_of_the_day_female->name ;
 
                                                     
                                                  ?>
                                            </p>

                                            <h5 class="text-white text-center      ">Meanings: <span style="font-size: 15px;"><?php echo    get_meanings($name_of_the_day_female->id); ?> </span>
                                            </h5>

                                        </div>


                                    </div>

                                </section>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row offset-1 offset-0">
                <div class="col-md-5">
                    <ul class="browsebyletter">
                        <?php echo get_english_alphabets(); ?>
                    </ul>

                </div>
                <div class="col-md-6">
                    <ul class="browsebyletter urdu_letters ">

                        <?php $this->load->view('arabic_alphabets'); ?>

                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>


<div class="container-fluid  ">
    <div class="row ">
        <div class="mb_parallax_container" id="mb_parallax_one">
            <div class="container">


            </div>
        </div>
    </div>
</div>



<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-5" style="background-color: #3b5999">
                <p class="text-center text-uppercase font pt-4  font-weight-bolder " style="font-size:40px;">
                Trending names
                </p>
                <div class="row ">
                    <div class="col-md-12 d-flex justify-content-center">
                        <ul class="list-group list-group-flush col-md-6 font  text-center ">
                            <?php
                            $trending_names = trending_names();
                            foreach ($trending_names as $obj) { ?>
                             

                                <li class="list-group-item    ">
    
                                    <?php echo  $obj->name; ?>
    
                                <?php }
                                ?>
                                </li>
                             
    
    
                        </ul>

                    </div>


                    <!-- <ul class="list-group list-group-flush col-md-6 font  ">
                        <li class="list-group-item">Taimoor</li>
                        <li class="list-group-item">Osama</li>
                        <li class="list-group-item">Arsalan</li>
                        <li class="list-group-item">shah</li>

                    </ul> -->

                </div>
            </div>


            <div class="col-md-7   half " style="background-image: url('<?php echo base_url() ?>assets/img/bg-img/black.jpg'); ">



                <p class="text-uppercase text-center pt-4  font-weight-bolder " style=font-size:40px;color:#3b5999;> some quick links</p>
                <div class="container-fluid">

                    <div class="row pt-3   ">
                        <div class=" col-md-3 col-6 col-sm-6  ">
                            <a href="names.php" class="hvr-pulse-grow">Boys Names</a>

                        </div>
                        <div class=" col-md-3 col-6 col-sm-6 ">
                            <a href="#" class="hvr-pulse-grow">Girls Names</a>

                        </div>
                        <div class=" col-md-3 col-6 col-sm-6  ">
                            <a href="#" class="hvr-pulse-grow">All Names</a>

                        </div>
                        <div class=" col-md-3 col-6 col-sm-6  ">
                            <a href="#" class="hvr-pulse-grow">Famous Names</a>

                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>
</section>

<div class="container-fluid ">
    <div class="row">
        <div class="mb_parallax_container1" id="mb_parallax_one1">
            <!-- ` <div class="container">


                 </div>` -->
        </div>
    </div>
</div>