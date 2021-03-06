
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Primary Meta Tags -->
    <title> Sign in</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Pixel Pages - Sign in">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Open source and accessibility first Bootstrap Design System featuring over 80 premium components and 4 example pages.">
    <meta name="keywords" content="bootstrap, Bootstrap Design System, accessiblity, accessibility first, open source, open source Bootstrap Design System">
    <link rel="canonical" href="https://themesberg.com/product/ui-kits/pixel-lite-free-bootstrap-4-ui-kit">

    <!-- Open Graph / Facebook -->


    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/pixel-lite">
    <meta property="twitter:title" content="Pixel Pages - Sign in">
    <meta property="twitter:description" content="Open source and accessibility oriented Bootstrap Design System featuring over 80 premium components and 4 example pages.">
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-lite/pixel-lite-preview.jpg">

    <!-- Favicon -->
  

    <!-- Fontawesome -->
    <link type="text/css" href="<?php echo  base_url()?>vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="<?php echo  base_url()?>assets/css/pixel.css" rel="stylesheet">


</head>

<body>
    <main>

    

        <!-- Section -->
        <section class="min-vh-100 d-flex align-items-center bg-soft">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-12 d-flex align-items-center justify-content-center">
                        <div class="signin-inner mt-3 mt-lg-0 bg-white shadow-soft border rounded border-light p-4 p-lg-5 w-100 fmxw-500">
                                         



                            <div class="text-center text-md-center mb-4 mt-md-0">
                                <h1 class="mb-0 h3">Sign in to our platform</h1>
                            </div>
                            <!-- <form action="" method="POST" class="mt-4"> -->
                                <?php echo form_open('authentication/login');?>
                                <!-- Form -->
                                <div class="form-group" >
                                   

                                    <label for="exampleInputIcon3">Your email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        </div>
                                        
                                        <?php echo form_input(['class'=>'form-control' ,'type'=>'email','placeholder'=>'example@company.com'  ,'name'=>'email' ]);?>
                                    </div>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group">
                                    <!-- Form -->
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            </div> 
                                            <?php echo form_input(['class'=>'form-control' ,'type'=>'password','placeholder'=>'password'  ,'name'=>'password' ]);?>
                                        </div>
                                    </div>
                                    <!-- End of Form -->
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <div class="form-check m-0">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck5">
                                            <label class="form-check-label" for="defaultCheck5">
                                                Remember me
                                            </label>
                                        </div>
                                        <div><a href="#" class="small text-right">Lost password?</a></div>
                                    </div>
                                </div>
                    <?php 
                    
                    // $error=$this->session->flashdata('login_error');                        
                    if($this->session->flashdata('login_error'))
                    { 
                    ?>
                    
                        <h4  ><?php echo $this->session->flashdata('login_error'); ?></h4>

                    <?php }
                     ?>

                    
                                <?php echo  form_submit(['type'=>'submit','value'=>'login','name'=>'submit' ,'class'=>'btn btn-block btn-primary']) ?>
                               
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="font-weight-normal">or login with</span>
                            </div>
                            <div class="btn-wrapper my-4 text-center">
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                </button>
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                </button>
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-github" type="button" aria-label="github button" title="github button">
                                    <span aria-hidden="true" class="fab fa-github"></span>
                                </button>
                            </div>
                            <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    Not registered?
                                    <a href="register" class="font-weight-bold">Create account</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main> 
    <!-- Core -->
    <script src="<?php echo  base_url();?>vendor/jquery/dist/jquery.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="<?php echo  base_url();?>vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="<?php echo  base_url();?>vendor/vivus/dist/vivus.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

    <!-- pixel JS -->
    <script src="assets/js/pixel.js"></script>


</body>

</html>