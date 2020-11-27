<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <!-- Fontawesome -->
    <link type="text/css" href="<?php echo base_url() ?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">
    <!-- Pixel CSS -->
    <link type="text/css" href="<?php echo base_url() ?>assets/css/pixel.css" rel="stylesheet">
    <!-- my css -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/my_css.css">
    <!-- hover css -->
    <link href="<?php echo base_url() ?>assets/css/hover.css" rel="stylesheet" media="all">
    <title>Document</title>
     

</head>
<body>


<section>

    <nav class="navbar navbar-expand-lg navbar-transparent navbar-dark navbar-theme-primary  fixed-top">
        <div class="container position-relative">
            <a class="navbar-brand mr-lg-5" href="<?php echo  base_url()?>">
                <img class="navbar-brand-dark" src="<?php echo base_url() ?>assets/img/brand/light.svg" alt="Pixel logo">
                <img class="navbar-brand-light" src="<?php echo base_url() ?>assets/img/brand/dark.svg" alt="Pixel Logo Dark">
            </a>
            <div class="navbar-collapse collapse" id="navbar-primary">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <a href="#">
                                <img src="./assets/img/brand/dark.svg" alt="Pixel logo">
                            </a>
                        </div>
                        <div class="col-6 collapse-close">
                            <span class="fas fa-times" data-toggle="collapse" role="button" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation"></span>
                        </div>
                    </div>
                </div>
                <ul class="navbar-nav navbar-nav-hover align-items-lg-center">

                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-link-inner-text">Contact us </span>


                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <span class="nav-link-inner-text">About us</span>
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link" data-toggle="dropdown" role="button">
                            <span class="nav-link-inner-text">Baby Names</span>
                            <span class="fas fa-angle-down nav-link-arrow ml-2"></span> 
                        </a>
                        
                    
                        <ul class="dropdown-menu">
                            <li class="dropdown-submenu">
                                <a href="names.php" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center">Boys Names
                                    <!-- <span class="fas fa-angle-right nav-link-arrow"></span> -->
                                </a>
                                <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="names.php" class="dropdown-item">All </a>
                                        <a href="#" class="dropdown-item">Neutral</a>
                                    </li>
                                </ul> -->
                            </li>
                            <li class="dropdown-submenu">
                                <a href="#" class="dropdown-toggle dropdown-item d-flex justify-content-between align-items-center" aria-haspopup="true" aria-expanded="false">Girls Names 
                                    <!-- <span class="fas fa-angle-right nav-link-arrow"></span> -->
                                </a>
                                <!-- <ul class="dropdown-menu">
                                    <li>
                                        <a href="#" class="dropdown-item">All</a>
                                        <a href="#" class="dropdown-item">Neutral
                                        </a>
                                    </li>
                                </ul> -->
                            </li>
                            <li><a class="dropdown-item" href="#">Famous Peoples Names</a></li>
                            
                        </ul>
                    </li>


                </ul>
            </div>
            <div class="d-flex align-items-center">
                <h5 class="text-white mb-0">
                    <?php
                    if ( isset($this->session->logged_in_user->name)) {
                        echo ucwords( $this->session->logged_in_user->name);
                    } else { ?>
                        <h5 class="text-white mb-0 ml-4"> <a href="<?php echo base_url();?>authentication">Login</a> </h5>

                    <?php  } ?>
                </h5>
                        <?php if(isset($this->session->logged_in_user->name)){?>
                       
                        <h5 class="text-white mb-0 ml-4"><a href="<?php echo base_url();?>authentication/logout">Logout</a> </h5>
                        <?php } ?>
            </div>

            <div class="d-flex align-items-center">
                <button class="navbar-toggler ml-2" type="button" data-toggle="collapse" data-target="#navbar-primary" aria-controls="navbar-primary" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </div>
    </nav>
</section> 

