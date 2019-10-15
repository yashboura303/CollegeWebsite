
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>ACE</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>    
    <link href="https://unpkg.com/ionicons@4.5.10-0/dist/css/ionicons.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href = "styles/home.css" type="text/css">
    
</head>
<body>
<script src="https://kit.fontawesome.com/1954039ce4.js" crossorigin="anonymous"></script>
    <section class="college-head container d-flex justify-content-center">
        <div class="pt-1">
            <a href="index.php"><img src="img/school (1).png" alt="" height="80" width="80"></a>
        </div>
        
        <div class="container pl-4 pt-2 pb-2" >
            <h1 class=" header-text text-dark  border-bottom border-dark">Andrew College Of Engineering</h1>
            <!-- <hr> -->
            <h6 class="header-text text-dark">Appproved by AICTE:ISO 9001:2015 Certified, Permanently Affiliated to University of
                Mumbai</h6>
        </div>
    </section>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark container-fluid p-0" id="navbarToggleExternalContent">
<button class="navbar-toggler m-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse " id="navbarSupportedContent">
  <ul class="navbar-nav mr-auto container d-flex justify-content-around">
            <li class="nav-item">
                <a class="nav-link text-white h4" href="index.php">Home </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white h4" href="#departmentSection">Departments</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white h4" href="authentication/teacherlogin.php">Teacher's Login</a>
            </li>
            <li class="nav-item ">
                <a class="nav-link text-white h4" href="main/student.php">Student</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-white h4 contact" href="main/contact.php" >Contact</a>
            </li>
        </ul>
  </div>
    </nav>
    <section class="image-carousel mx-auto mb-3">
        <div id="carouselExampleIndicators" class="carousel slide w-100 " data-ride="carousel">
            <div class="overlay">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="img/carousel1.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel3.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/carousel5.jpg" class="d-block w-100" alt="...">
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
    </section>
    <section class="about container-fluid">
        <div class="row justify-content-start">
            <div class="col-md-8 justify-content-start">
                <h2 class="text-left mt-4 ml-3 pt-3">About <span class="orangeTitle">ACE</span></h2>
                <p class="p-3">Andrew College Of Engineering (ACE) was established in 1999 with a view to create an
                    Engineering
                    Degree Institute to fulfill the long felt public need of an Institute of Excellence in Borivali.

                    SFIT has five UG Programs and two PG Programs in the most coveted disciplines considering both
                    industrial
                    need and public preference. These courses would lead to award of the Degree of Bachelor of
                    Engineering
                    (B.E.) in Computer Engineering, Electronics & Telecommunication Engineering, Information Technology,
                    Electrical Engineering and Mechanical Engineering and Master of Engineering (M.E.) as well as Ph.D.
                    (Technology) in Computer Engineering and Electronics & Telecommunication Engineering.
                    National Board of Accreditation (NBA) has granted accreditation to the three U.G. programs i.e.
                    Computer Engineering, Electronics & Telecommunication Engineering and Information Technology offered
                    by our Institute as per the validity period mentioned in their letter. The institute is
                    also certified for meeting with the Quality Management System Standards ISO 9001:2015, for providing
                    undergraduate courses in Engineering/Technology.</p>
            </div>
            <div class=" col-md-4 img-col">
                <img class="aboutSfit img" src="img/collegeabout.jpg" alt="">
            </div>
        </div>
    </section>
    <section class="why container-fluid p-5 my-3" id="whysection">
        <div class="container-fluid row ">
            <div class="col-sm-5 justify-content-end p-1">
                <img src="img/whysection.jpg" class=" border border-white whysectionImg my-2" alt="">
            </div>
            <div class=" container col-md-7 text-white justify-content-start">
                <h2 class="text-left whyTitle m-3"><i class="fas fa-eye fa-lg"></i>
                    Why <span class=" orangeTitlenoBorder ">ACE</span></h2>
                <div class="row">
                    <div class="col-sm-6 py-3">
                        <i class="fas fa-university fa-2x"></i>
                        <h4 class="pl-1">NBA Accredited</h4>
                    </div>
                    <div class="col-sm-6 py-3">
                        <i class="fas fa-home fa-2x"></i>
                        <h4>State of art Infrastructure</h4>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-sm-6 py-3">
                        <i class="fas fa-users fa-2x"></i>
                        <h4>High Placement Ratio</h4>
                    </div>
                    <div class="col-sm-6 py-3"><i class="fas fa-user-tie fa-2x"></i>
                        <h4>Highly Qualified Faculties</h4>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <section class="our-section pl-3 my-5 container-fluid">
        <h3 class="text-left pl-2 pt-3"><i class="icon ion-md-eye"></i>
            Our <span class="orangeTitle">Vision</span></h3>
        <p class="p-2">To be a chrysalis where bright youngsters are transformed into technological entrepreneurs and
            innovative leaders of tomorrow’s world, consistent with the Franciscan vision of integrity, peace and love.
        </p>
        <h3 class="text-left mt-4 pl-2 pt-3"><i class="icon ion-md-thumbs-up"></i>
            Our <span class="orangeTitle">Misson</span></h3>
        <p class="pl-2 ">For UG programme:- “To churn highly competent engineering graduates with a commitment to result
            oriented work, a perennial zest for learning, a quest for excellence, an open mind and the universal values
            of honesty, dignity and mutual care.”
        </p>
        <p class="pl-2 pt-1">
            For PG programme:- “To continually improve and progress in the path of developing post graduate scholars who
            will be competent in exploring, developing and disseminating new knowledge in their areas of specialisation
            so that the repository of new knowledge and innovation and its dissemination will be enhanced in scope of
            effectiveness.”</p>
    </section>

 

    <section class="department" id="departmentSection">
        <h3 class=" ml-4 text-left"><i class="pr-2 fas fa-toolbox"></i>Our <span class="orangeTitle">Departments</span></h3>
        <div class="container-fluid computer text-white mt-3">
            <h3 class="font-weight-bold department-h2 text-center orangeTitlenoBorder">Computer Engineering</h3>
            <div class="computerText container font-weight-bold">We have also started two postgraduate courses namely ME and Ph.D in Computer Engineering in year 2018 with the intake of 18 and 10 respectively. Each year about 25% of the final degree year students secure admission for higher studies at top and eminent Universities across the globe and reputed institutes in India. And as a result of this many of our students are emerging as Entrepreneurs. Total of 90% + of our eligible students are placed in reputed industries/organization every year.</div>
        </div>
        <div class="container-fluid electrical text-white">
            <h3 class=" font-weight-bold department-h2 text-center orangeTitlenoBorder">Electrical Engineering</h3>
            <div class="font-weight-bold computerText container">Department of Electrical Engineering (ELE) will strive to achieve academic excellence in electronics and electronics related technical education in University of Mumbai to develop internationally competent professionals with a sense of responsibility and social sensitivity.Total of 70% + of our eligible students are placed in reputed industries/organization every year.</div>
        </div>
        <div class="container-fluid mechanical text-white">
            <h3 class="font-weight-bold department-h2 text-center orangeTitlenoBorder">Mechanical Engineering</h3>
            <div class="font-weight-bold computerText container">We have also started two postgraduate courses namely ME and Ph.D in Mechanical Engineering in year 2018 with the intake of 25 and 15 respectively. Each year about 45% of the final degree year students secure admission for higher studies at top and eminent Universities across the globe and reputed institutes in India. And as a result of this many of our students are emerging as Entrepreneurs. Total of 80% + of our eligible students are placed in reputed industries/organization every year.</div>
        </div>
    </section>
    <section class="stakeholder container-fluid mt-3 mb-5">
        <h3 class="stackholderH2 text-left mt-4 ml-3 pt-3 mb-4"><i class="fas fa-handshake pr-1"></i>Our <span class="text-orange">StakeHolder</span> Say</h3>
        <div class="row  container-fluid justify-content-center">
            <div class="col-sm-4">
            <i class="fas fa-quote-left"></i>
            <p class="text-dark">I have always felt that I was so lucky to be a student at ACE, and not at any other college. The thing I admire the most about ACE is the support I received from everyone at the college. I wouldn't have been able to achieve what I have achieved without that caring environment.I can positively say that ACE has made me a better person.</p>
            <div class="container w-50 text-center">
            <img src="img/customer-3.jpg" alt="" class=" border border-dark float-sm-left rounded-circle">
            <p class="float-sm-right" style="margin-bottom:0px;">~Madan Panth</p>
            <p class="float-sm-right font-italic font-weight-lighter text-center" style="font-size:15px; margin-top:0px;">Student</p>
            </div>
            
            </div>
            <div class="col-sm-4">
            <i class="fas fa-quote-left"></i>
            <p class="text-dark">My journey of three years at ACE as a student and faculty has been a memorable experience. The most important values I learnt here are discipline and significance of time. During this period, I made some good friends and met some amazing people. Moreover, teaching staff and non-teaching staff were always helpful.</p>
            <div class="container w-50 text-center">
            <img src="img/customer-2.jpg" alt="" class=" border border-dark float-sm-left rounded-circle">
            <p class="float-sm-right" style="margin-bottom:0px;">~Vipula Rawte</p>
            <p class="float-sm-right font-italic font-weight-lighter text-center" style="font-size:15px; margin-top:0px;">Ph.D. Student</p>
            </div>
            
            </div>
            <div class="col-sm-4">
            <i class="fas fa-quote-left"></i>
            <p class="text-dark">ACE has had a huge influence on my life. The college enabled me to identify my strengths and weaknesses with respect to choosing my career path. Apart from the professors and the infrastructure, the technical and cultural festivals make the students interact with other colleges.</p>
            <div class="container w-50 text-center">
            <img src="img/customer-1.jpg" alt="" class=" border border-dark float-sm-left rounded-circle">
            <p class="float-sm-right" style="margin-bottom:0px;">~Prachi Savant</p>
            <p class="float-sm-right font-italic font-weight-lighter text-center" style="font-size:15px; margin-top:0px;">MBA</p>
            </div>
        </div>
    </section>
    <link rel="stylesheet" href = "../styles/footer.css" type="text/css">
<section class=" footer container-fluid bg-dark ">
<h4 class="aboutTitle text-white text-center p-2">Contact Details</h4>
<p class="text-white text-center ">Andrew College Of Engineering</p>
<p class="text-white text-center "><i class="fas fa-map-marker-alt pr-2"></i> Mount Gdgds S.V.P. Road, Derfg (West), Mumbai 400 103.</p>
<p class="text-white text-center "><i class="fas fa-phone-alt pr-2"></i>022-289200000</p>
<p class="text-white text-center "><i class="fas fa-envelope pr-2"></i>aceedu@ace.in</p>
        <p class="mb-0 text-white text-center mb-0">Copyright ©2019 Andrew College Of Engineering</p>  
</section>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<?php error_reporting(-1);
ini_set('display_errors', 'On');
set_error_handler("var_dump");?>
    </body>
</html>
