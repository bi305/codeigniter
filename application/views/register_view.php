
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <!-- Primary Meta Tags -->
    <title>Sign up</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="Pixel Pages - Sign up">
    <meta name="author" content="Themesberg">
    <meta name="description" content="Open source and accessibility first Bootstrap Design System featuring over 80 premium components and 4 example pages.">
    <meta name="keywords" content="bootstrap, Bootstrap Design System, accessiblity, accessibility first, open source, open source Bootstrap Design System">
    <link rel="canonical" href="https://themesberg.com/product/ui-kits/pixel-lite-free-bootstrap-4-ui-kit">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://demo.themesberg.com/pixel-lite">
    <meta property="og:title" content="Pixel Pages - Sign up">
    <meta property="og:description" content="Open source and accessibility oriented Bootstrap Design System featuring over 80 premium components and 4 example pages.">
    <meta property="og:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-lite/pixel-lite-preview.jpg">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="https://demo.themesberg.com/pixel-lite">
    <meta property="twitter:title" content="Pixel Pages - Sign up">
    <meta property="twitter:description" content="Open source and accessibility oriented Bootstrap Design System featuring over 80 premium components and 4 example pages.">
    <meta property="twitter:image" content="https://themesberg.s3.us-east-2.amazonaws.com/public/products/pixel-lite/pixel-lite-preview.jpg">

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="120x120" href="../../assets/img/favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../../assets/img/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../../assets/img/favicon/favicon-16x16.png">
    <link rel="manifest" href="../../assets/img/favicon/site.webmanifest">
    <link rel="mask-icon" href="../../assets/img/favicon/safari-pinned-tab.svg" color="#ffffff">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="theme-color" content="#ffffff">

    <!-- Fontawesome -->
    <link type="text/css" href="<?php echo  base_url();?>assets/vendor/@fortawesome/fontawesome-free/css/all.min.css" rel="stylesheet">

    <!-- Pixel CSS -->
    <link type="text/css" href="<?php echo  base_url();?>assets/css/pixel.css" rel="stylesheet">


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
                                <h1 class="mb-0 h3">Create an account</h1>
                            </div>
                            <?php echo form_open('register/users_registeration') ?>
                                <!-- Form -->
                                <div class="form-group focused">
                                    <label for="exampleInputIcon4">Your name</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        </div>
                                        <!-- <input class="form-control" name="name" id="exampleInputIcon4" placeholder="Name" type="text" aria-label="email adress" required=""> -->
                                        <?php  echo  form_input(['type'=>'text','class'=>'form-control','name'=>'name','placeholder'=>'Name','required'=>''])?>
                                    </div>
                                </div>
                                <div class="form-group focused">
                                    <label for="exampleInputIcon4">Your email</label>
                                    <div class="input-group mb-4">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><span class="fas fa-envelope"></span></span>
                                        </div>
                                        <!-- <input class="form-control" name="email" id="exampleInputIcon4" placeholder="example@company.com" type="email" aria-label="email adress" required=""> -->
                                        <?php  echo  form_input(['type'=>'email','class'=>'form-control','name'=>'email','placeholder'=>'Email','required'=>''])?>
                                    </div>
                                </div>
                         
                                <div class="bg-primary " >
                                    <h1 class="text-center text-white">

                                        <?php
                                        // if (isset($_GET['error'])) {
                                        //     echo $error = $_GET['error'];
                                        // }
                                        // else
                                        // {
                                             
                                        //     unset($error);

                                        // }
                                        ?>
                                    </h1>
                                </div>
                                <!-- End of Form -->
                                <div class="form-group focused">
                                    <!-- Form -->
                                    <div class="form-group focused">
                                        <label for="password">Password</label>
                                        <div class="input-group mb-4">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><span class="fas fa-unlock-alt"></span></span>
                                            </div>
                                            <!-- <input class="form-control" id="password" placeholder="Password" type="password" name="password" aria-label="Password" required=""> -->
                                            <?php  echo  form_input(['type'=>'password','class'=>'form-control','name'=>'password','placeholder'=>'Password','required'=>''])?>
                                        </div>
                                    </div>
                                    <div class="bg-primary " >
                                    <h1 class="text-center text-white">

                                        <?php
                                        // if (isset($_GET['sign_up'])) {
                                        //     echo $error = $_GET['sign_up'];
                                        // }
                                        // else
                                        // {
                                        //     if(!isset($_GET['sign_up'])){
                                        //         unset($_GET['sign_up']);
                                        //     }
                                        // }
                                       
                                        ?>
                                    </h1>
                                </div>
                               
                                </div>
                                <!-- <input type="submit" name="submit" class="btn btn-block btn-primary"> -->
                                <?php  echo  form_input(['type'=>'submit','class'=>'btn btn-block btn-primary' ,'value'=>'Register'])?>
                            </form>
                            <div class="mt-3 mb-4 text-center">
                                <span class="font-weight-normal">or</span>
                            </div>
                            <div class="btn-wrapper my-4 text-center">
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook mr-2" type="button" aria-label="facebook button" title="facebook button">
                                    <span aria-hidden="true" class="fab fa-facebook-f"></span>
                                </button>
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-twitter mr-2" type="button" aria-label="twitter button" title="twitter button">
                                    <span aria-hidden="true" class="fab fa-twitter"></span>
                                </button>
                                <button class="btn btn-icon-only btn-pill btn-outline-light text-facebook" type="button" aria-label="github button" title="github button">
                                    <span aria-hidden="true" class="fab fa-github"></span>
                                </button>
                            </div>
                            <div class="d-block d-sm-flex justify-content-center align-items-center mt-4">
                                <span class="font-weight-normal">
                                    Already have an account?
                                    <a href="<?php echo  base_url();?>authentication" class="font-weight-bold">Login here</a>
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Core -->
    <script src=" vendor/jquery/dist/jquery.min.js"></script>
    <script src=" vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src=" vendor/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src=" vendor/headroom.js/dist/headroom.min.js"></script>

    <!-- Vendor JS -->
    <script src="vendor/onscreen/dist/on-screen.umd.min.js"></script>
    <script src="vendor/nouislider/distribute/nouislider.min.js"></script>
    <script src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
    <script src="vendor/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js"></script>
    <script src="vendor/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="vendor/jarallax/dist/jarallax.min.js"></script>
    <script src="vendor/smooth-scroll/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="vendor/vivus/dist/vivus.min.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async="" defer="" src="https://buttons.github.io/buttons.js"></script>

    <!-- pixel JS -->
    <script src="../../assets/js/pixel.js"></script>


</body>