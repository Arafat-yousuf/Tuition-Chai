<?php 

session_start();
$flag="";

if(isset($_GET['logout']))
{
	session_destroy();

}


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/x-icon" href="storage/img/title_logo.png">
    <meta name="author" content="Arafat, Foisal">

        <link rel="canonical" href="index.php" />
    <title>Tuition Chai is one of the fastest tutor and tuition media site in BD | Find a suitable Tutor In Your Area</title>
    
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
        <div class="search-area pt-4">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="ho-main-info mt-2">
                        <h1>Welcome to Tuition Chai</h1>
                        <h4>Get best quality tutor and tuition in your area</h4>
                        <div class="list-group">
                            <a href="tuition_request.php" class="list-group-item list-group-item-action">
                                <i class="fa fa-check-circle-o fa-2x mt-2 mr-3 float-left"></i>
                                <div class="">
                                    <strong class="text-dark">Request For Tutors</strong>
                                    <p class="text-left"> If you need an Expert Tutor for you, just fill out the Form!</p>
                                </div>
                            </a>
                            <a href="tutor_list.php" class="list-group-item list-group-item-action">
                                <i class="fa fa-check-circle-o fa-2x mt-2 mr-3 float-left"></i>
                                <div class="">
                                    <strong class="text-dark">Quick Search For Tutors</strong>
                                    <p class="text-left"> Tuition Chai will help easily find your favorite Tutors</p>
                                </div>
                            </a>
                            <a href="tuition_list.php" class="list-group-item list-group-item-action">
                                <i class="fa fa-check-circle-o fa-2x mt-2 mr-3 float-left"></i>
                                <div class="">
                                    <strong class="text-dark">Available Tuition Jobs</strong>
                                    <p class="text-left"> See all tuition and apply for the one that suits youl</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>


                <div class="col-md-6">
                    <div class="card mt-2 border-radius-none">
                        <div class="card-header">
                            <h4><i class="fa fa-search"></i> QUICK SEARCH FOR TUTORS</h4>
                            <h6>FIND A SUITABLE TUTOR IN YOUR AREA.</h6>
                        </div>
                        <div class="card-body">
                            <form method="GET" action="tuitionchai.com/search/results" accept-charset="UTF-8" class="search-form">
                            <input type="hidden" name="_token" value="">                            
							<div class="form-row">
                                <div class="form-group col-md-12">
                                    <select  name="districts" class="form-control districts single-select">
                                        <option value="">Select District</option>
                                                                                    <option value="1">BAGERHAT</option>
                                                                                    <option value="2">BANDARBAN</option>
                                                                                    <option value="3">BARGUNA</option>
                                                                                    <option value="4">BARISAL</option>
                                                                                    <option value="5">BHOLA</option>
                                                                                    <option value="6">BOGRA</option>
                                                                                    <option value="7">BRAHMANBARIA</option>
                                                                                    <option value="8">CHANDPUR</option>
                                                                                    <option value="9">CHITTAGONG</option>
                                                                                    <option value="10">CHUADANGA</option>
                                                                                    <option value="11">COMILLA</option>
                                                                                    <option value="12">COX&#039;S BAZAR</option>
                                                                                    <option value="13">DHAKA</option>
                                                                                    <option value="14">DINAJPUR</option>
                                                                                    <option value="15">FARIDPUR</option>
                                                                                    <option value="16">FENI</option>
                                                                                    <option value="17">GAIBANDHA</option>
                                                                                    <option value="18">GAZIPUR</option>
                                                                                    <option value="19">GOPALGANJ</option>
                                                                                    <option value="20">HABIGANJ</option>
                                                                                    <option value="21">JOYPURHAT</option>
                                                                                    <option value="22">JAMALPUR</option>
                                                                                    <option value="23">JESSORE</option>
                                                                                    <option value="24">JHALAKATHI</option>
                                                                                    <option value="25">JHENAIDAH</option>
                                                                                    <option value="26">KHAGRACHARI</option>
                                                                                    <option value="27">KHULNA</option>
                                                                                    <option value="28">KISHOREGANJ</option>
                                                                                    <option value="29">KURIGRAM</option>
                                                                                    <option value="30">KUSHTIA</option>
                                                                                    <option value="31">LAKSHMIPUR</option>
                                                                                    <option value="32">LALMONIRHAT</option>
                                                                                    <option value="33">MADARIPUR</option>
                                                                                    <option value="34">MAGURA</option>
                                                                                    <option value="35">MANIKGANJ</option>
                                                                                    <option value="36">MEHERPUR</option>
                                                                                    <option value="37">MOULVIBAZAR</option>
                                                                                    <option value="38">MUNSHIGANJ</option>
                                                                                    <option value="39">MYMENSINGH</option>
                                                                                    <option value="40">NAOGAON</option>
                                                                                    <option value="41">NARAIL</option>
                                                                                    <option value="42">NARAYANGANJ</option>
                                                                                    <option value="43">NARSINGDI</option>
                                                                                    <option value="44">NATORE</option>
                                                                                    <option value="45">C. NAWABGANJ</option>
                                                                                    <option value="46">NETRAKONA</option>
                                                                                    <option value="47">NILPHAMARI</option>
                                                                                    <option value="48">NOAKHALI</option>
                                                                                    <option value="49">PABNA</option>
                                                                                    <option value="50">PANCHAGARH</option>
                                                                                    <option value="51">RANGAMATI</option>
                                                                                    <option value="52">PATUAKHALI</option>
                                                                                    <option value="53">PIROJPUR</option>
                                                                                    <option value="54">RAJBARI</option>
                                                                                    <option value="55">RAJSHAHI</option>
                                                                                    <option value="56">RANGPUR</option>
                                                                                    <option value="57">SATKHIRA</option>
                                                                                    <option value="58">SHARIATPUR</option>
                                                                                    <option value="59">SHERPUR</option>
                                                                                    <option value="60">SIRAJGANJ</option>
                                                                                    <option value="61">SUNAMGANJ</option>
                                                                                    <option value="62">SYLHET</option>
                                                                                    <option value="63">TANGAIL</option>
                                                                                    <option value="64">THAKURGAON</option>
                                                                            </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select name="medium" class="form-control single-select">
                                        <option value="">Select Medium</option>
                                                                                    <option value="Bangla Medium">Bangla Medium</option>
                                                                                    <option value="English Medium">English Medium</option>
                                                                                    <option value="English Version">English Version</option>
                                                                            </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="class" class="form-control single-select">
                                        <option value="">Select Class</option>
                                                                                    <option value="Class I">Class I</option>
                                                                                    <option value="Class II">Class II</option>
                                                                                    <option value="Class III">Class III</option>
                                                                                    <option value="Class IV">Class IV</option>
                                                                                    <option value="Class V">Class V</option>
                                                                                    <option value="Class VI">Class VI</option>
                                                                                    <option value="Class VII">Class VII</option>
                                                                                    <option value="Class VIII">Class VIII</option>
                                                                                    <option value="Class IX">Class IX</option>
                                                                                    <option value="S.S.C">S.S.C</option>
                                                                                    <option value="HSC 1st year">HSC 1st year</option>
                                                                                    <option value="HSC 2nd year">HSC 2nd year</option>
                                                                                    <option value="Honours 1st year">Honours 1st year</option>
                                                                                    <option value="Honours 2nd year">Honours 2nd year</option>
                                                                                    <option value="Honours 3rd year">Honours 3rd year</option>
                                                                                    <option value="Honours 4th year">Honours 4th year</option>
                                                                                    <option value="Nursery">Nursery</option>
                                                                                    <option value="O Lavel">O Lavel</option>
                                                                                    <option value="A Lavel">A Lavel</option>
                                                                                    <option value="KG">KG</option>
                                                                            </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <select name="subject" class="form-control single-select">
                                        <option value="">Select Subject</option>
                                                                                    <option value="Accounting">Accounting</option>
                                                                                    <option value="Agriculture">Agriculture</option>
                                                                                    <option value="All Subject">All Subject</option>
                                                                                    <option value="Arabic">Arabic</option>
                                                                                    <option value="Arts and Crafts">Arts and Crafts</option>
                                                                                    <option value="Bangla">Bangla</option>
                                                                                    <option value="BANGLADESH &amp; GLOBAL STUDIES">BANGLADESH &amp; GLOBAL STUDIES</option>
                                                                                    <option value="Biology">Biology</option>
                                                                                    <option value="Buddhist Religious Studies">Buddhist Religious Studies</option>
                                                                                    <option value="Business Entrepreneurship">Business Entrepreneurship</option>
                                                                                    <option value="Career Education">Career Education</option>
                                                                                    <option value="Chemistry">Chemistry</option>
                                                                                    <option value="Christian Religious Studies">Christian Religious Studies</option>
                                                                                    <option value="Civics and Citizenship">Civics and Citizenship</option>
                                                                                    <option value="Easy Handwriting">Easy Handwriting</option>
                                                                                    <option value="Economics">Economics</option>
                                                                                    <option value="English">English</option>
                                                                                    <option value="Finance &amp; Banking">Finance &amp; Banking</option>
                                                                                    <option value="General Math">General Math</option>
                                                                                    <option value="General Science">General Science</option>
                                                                                    <option value="Geography and Environment">Geography and Environment</option>
                                                                                    <option value="Geometry">Geometry</option>
                                                                                    <option value="Higher Math">Higher Math</option>
                                                                                    <option value="Hindu Religious Studies">Hindu Religious Studies</option>
                                                                                    <option value="History and Civilization">History and Civilization</option>
                                                                                    <option value="History of Bangladesh &amp; World Civilization">History of Bangladesh &amp; World Civilization</option>
                                                                                    <option value="Home Economics">Home Economics</option>
                                                                                    <option value="ICT">ICT</option>
                                                                                    <option value="Islamic Studies">Islamic Studies</option>
                                                                                    <option value="Law">Law</option>
                                                                                    <option value="Math">Math</option>
                                                                                    <option value="Physical Studies &amp; Health">Physical Studies &amp; Health</option>
                                                                                    <option value="Physics">Physics</option>
                                                                                    <option value="Primary Science">Primary Science</option>
                                                                                    <option value="Psychology">Psychology</option>
                                                                                    <option value="Social Science">Social Science</option>
                                                                                    <option value="Statistics">Statistics</option>
                                                                                    <option value="Work and Life Oriented Studies">Work and Life Oriented Studies</option>
                                                                            </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <select name="gender" class="form-control single-select">
                                        <option value="">Select Gender</option>
                                        <option value="male">Male</option>
                                        <option value="female">Female</option>
                                    </select>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-custom btn-block">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
	<div class="home-page-slider mt-5">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="storage/img/tutor.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h5>Join one of the best tuition media site in Bangladesh</h5>
                        <p>Tuition Chai is great to find new Students. Find jobs according to your skill and passion. Work with us and earn additional income!</p>
                        <a href="register.php" class="btn btn-primary">Tutor Register</a>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="storage/img/tutor_one.jpg" alt="First slide">
                    <div class="carousel-caption">
                        <h5>Want a best quality tutor ?</h5>
                        <p>If you need a tutor, Post your requirements. Dont worry, it's absolutely free!!</p>
                        <a href="tuition_request.php" class="btn btn-success">Request tutor</a>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
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
                            <li><a href="login.php">login as tutor</a></li>
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