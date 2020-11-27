<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <section>
        <div class="section-header pb-6 text-white  " style="   background-color:#3b5999">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 col-md-8 text-center">
                        <h1 class="display-3 mb-4 font animate__animated animate__wobble animate__delay-1s">Names Start With <?php echo $alphabet ?></h1>
                        <p class="font">Islamic Baby Names is with you from day one, which makes us the source for the most popular baby names and more! </p>
                        <!-- <div class="alert alert-secondary align-items-center" role="alert">
                            <div class="container h-100 w-100">
                                <div class="d-flex justify-content-left ">
                                    <section class="container">
                                        <form action="">
                                            <input type="text" maxlength="25" class="col-md-6" />
                                        </form>
                                        <br>
                                        <a href="#" class="btn1">Search</a>
                                    </section>

                                </div>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>


            <div class="container-fluid">
                <div class="row offset-1 offset-0">
                    <div class="col-md-5">
                        <ul class="browsebyletter">

                            <?php echo   get_english_alphabets() ?>

                        </ul>
                    </div>
                    <div class="col-md-6 ">

                        <?php $this->load->view('arabic_alphabets'); ?>


                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="section section-lg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-md-12 col-lg-12">
                    <!-- Tab Nav -->
                    <div class="nav-wrapper position-relative mb-2">
                        <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-text" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0  <?php echo ($gender == "all" ? "active" : "") ?>" id="tabs-text-2-tab" href="<?php echo base_url() ?>names/letter/all/<?php echo $alphabet ?>" aria-controls="tabs-text-2">ALL</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0  <?php echo ($gender == "male" ? "active" : "") ?>" id="tabs-text-2-tab" href="<?php echo base_url() ?>names/letter/male/<?php echo $alphabet ?>" aria-controls="tabs-text-2">BOYS</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link mb-sm-3 mb-md-0 <?php echo ($gender == "female" ? "active" : "") ?> " id="tabs-text-2-tab" href="<?php echo base_url() ?>names/letter/female/<?php echo $alphabet ?>" aria-controls="tabs-text-2">GIRLS</a>
                               
                            </li>
                        </ul>
                    </div>



                    <div>
                        <div class="container">
                            <div class="row">
                                <?php

                                // $names = $name_ctr->select_names_by_alphabet($tab, $alphabat);

                                foreach ($all_names as $obj) {

                                ?>


                                    <div class="col-12 col-md-6 col-lg-3 text-center mb-lg-0">
                                        <div class="card border-dark mb-4  ">
                                            <div class="card-body  ">

                                                <h2 class=" mt-3"><?php echo   $obj->name;
                                                                    echo "<br>" . $obj->name_arabic ?></h2>
                                                                     <h5>
                                                        <?php
                                                        
                                                        $name_meaning= name_meaning($obj->id);
                                                        foreach($name_meaning as $obj1)
                                                        {
                                                            echo "<p>". $obj1->english_meaning  ."</p>";
                                                            echo "<p>". $obj1->meaning_arabic   ."</p>"; 
                                                            

                                                        }

                                                        ?>
                                                    </h5>
                                                    <b>

                                                        <h5> views<span style="font-size: 15px; padding-left:10px;">
                                                                <?php
                                                                echo   $obj->total_views;
        
                                                                ?>
                                                            </span>
                                                           
                                                        </h5>
                                                    </b>
                                                <a href="<?php echo base_url() ?>names/name_details/<?php echo $obj->id ?>" class="btn btn-primary btn-sm">More Information </a>
                                            </div>
                                        </div>


                                    </div>
                                <?php
                                }
                                ?></div>
                        </div>




                    </div>

                </div>
            </div>
        </div>
    </div>

</body>

</html>