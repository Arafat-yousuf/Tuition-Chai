<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="storage/img/title_logo.png">
    <meta name="author" content="Arafat, Foisal">
    <title>Registration - Tuition Chai</title>
    
    <link rel="stylesheet" href="css/bootstrap.css?v=1">
    <link rel="stylesheet" href="css/font.css?v=1">
    <link rel="stylesheet" href="css/custom.css?v=1">
    
</head>
<body>
<div id="app">
    <header class="header-area">
    <div class="header-top-area py-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-5">
                    <a href="#" class="d-block d-sm-none text-white mt-1"><i class="fa fa-phone"></i> 012 3456 7890</a>
                    <ul class="list-inline text-white d-none d-sm-block">
                        <li class="list-inline-item mr-3"><i class="fa fa-phone mr-2"></i> 012 3456 7890</li>
                        <li class="list-inline-item"><i class="fa fa-envelope mr-2"></i> support@tuitionchai.com</li>
                    </ul>
                </div>

                <div class="col-md-6 col-7">
                    <div class="top-info-right">
                        <div class="top-social d-none d-sm-block">
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                                                    <div class="btn-group btn-group-sm" role="group" aria-label="Basic example">
                                <a href="login.php" class="btn outline-none btn-outline-primary text-light" ><i class="fa fa-lock"></i> Login</a>
                                <a href="register.php" class="btn outline-none btn-success"><i class="fa fa-sign-in"></i> Register</a>
                            </div>
                                            </div>
                </div>
            </div>
        </div>
    </div><!--top header-->


    <div class="header-bottom-area">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <img src="storage/img/logo.png" alt="tuitionchai.Com">
            </a>
            <nav class="main-nav float-right d-none d-lg-block">
                                    
                    <ul>
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tuition_request.php">GET A TUTOR</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tutor_list.php">ALL TUTORS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="tuition_list.php">TUITION OFFERS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">CONTACT US</a>
                    </li>
                </ul>
            </nav><!-- .main-nav -->

        </div>
    </div>


</header><!-- #header -->
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mt-5 mb-10">
                                        <div class="card-body">
                        <div class="wizard">
                            <div class="tab-content main-tab-content">
                                    <form action="tuitionchai.com/tutor/register" method="post" enctype="multipart/form-data">
                                        <input type="hidden" name="_token" value="">                                        
										<div class="row tutor-register justify-content-center">
                                            <div class="col-md-7">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Full Name*</label>
                                                    <input type="text" name="name" class="form-control" id="exampleInputName" title="type your full name" value="" placeholder="Enter your full name" required>
                                                    <div class="invalid-feedback">
                                                        Please provide your full name.
                                                    </div>
                                                </div>

                                                <div class="form-group row">
                                                    <label for="inputPhone" class="col-form-label col-md-3">Select your Gender : </label>
                                                    <div class="col-md-6 gender-btn">
                                                        <div class="btn-group btn-group-toggle d-flex" data-toggle="buttons">
                                                            <label class="btn btn-light flex-fill outline-none ">
                                                                <i class="fa fa-male"></i>
                                                                <input type="radio" name="teacher_gender"  value="Male">  Male
                                                            </label>
                                                            <label class="btn btn-light flex-fill outline-none ">
                                                                <i class="fa fa-female"></i>
                                                                <input type="radio" name="teacher_gender"  value="Female"> Female
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>

                                                <div class="form-group">
                                                    <label for="altNumber">Phone Number*</label>
                                                    <input type="text" name="a_phone_number" class="form-control" title="Enter your Alternative Phone Number" id="altNumber" value="" placeholder="Enter Alternative Phone Number">
                                                                                                    </div>

                                                <div class="form-group">
                                                    <label for="exampleInputEmail">Email address <small>(optional)</small></label>
                                                    <input type="email" name="email" class="form-control " title="Enter your valid email address" id="exampleInputEmail" value="" placeholder="Enter email">
                                                                                                    </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword">Password*</label>
                                                    <input type="password" name="password" class="form-control " title="password must be at least 6 characters" id="exampleInputPassword" placeholder="Password">
                                                                                                    </div>

                                                <div class="form-group">
                                                    <label for="exampleInputPassword1">Password confirmation*</label>
                                                    <input type="password" name="password_confirmation" class="form-control" title="confirm password"  id="exampleInputPassword1" placeholder="password confirmation">
                                                    <div class="invalid-feedback">
                                                        confirm password
                                                    </div>
                                                </div>
                                                <button type="submit" class="btn btn-lg btn-custom pull-right my-4 px-5">Register <i class="fa fa-check"></i> </button>
                                            </div>
                                        </div>
                                    </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="footer_area">
    <div class="container">
        <div class="footer_top">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer">
                        <h3>About Us</h3>
                        <p>Tuition Chai is a very easy to find online tutors and tuition, We connect the bridge between students and tutors</p>
                        <div class="footer_social">
                            <h3>Find Us Here</h3>
                            <ul>
                                <li><a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer">
                        <h3>Information</h3>
                        <ul>
                            <li><a href="index.php">Home</a></li>
                            <li><a href="tuition_request.php">Request for tutor</a></li>
                            <li><a href="contact.php">Contact Us</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer">
                        <h3>Work With Us</h3>
                        <ul>
                            <li><a href="register.php">Become a Tutor</a></li>
                            <li><a href="login.php">Login as Tutor</a></li>
                            <li><a href="tuition_request.php">Hire a Tutor</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="single_footer column_3">
                        <h3>Reach Us</h3>
                        <ul>
                            <li><i class="fa fa-home mr-2"></i> 696, 9 Lorem Ipsum, Dhaka 1200.</li>
                            <li><i class="fa fa-phone mr-2"></i> (88) 012 3456 7890</li>
                            <li><i class="fa fa-envelope-open-o mr-2"></i><a href="#">support@tuitionchai.com</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright_area">
            <div class="row">
                <div class="col-lg-6 col-md-12">
                    <div class="copyright_conent">
                        <p>Copyright &copy; 2019 <a href="#">tuitionchai.Com</a>. All Rights Reserved.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="footer_menu text-right">
                        <ul>
                            <li><a href="#">Home</a></li>
                            <li><a href="#">Request for tutor</a></li>
                            <li><a href="#">Tutor list</a></li>
                            <li><a href="#">Available Tuitions</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script type="text/javascript" src="js/bootstrap.js?v=1"></script>
<script type="text/javascript" src="plugins/mobile-nav/mobile-nav.js"></script>
<script type="text/javascript" src="js/custom.js?v=1"></script>
</body>

</html>