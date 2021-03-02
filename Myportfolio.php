<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- fontowesome -->
    <link href="fontawesome/css/fontawesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
    <link href="bootstrap/js/bootstrap.min.js" >

    <!-- bootatrap library -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
    <link  href="bootstrap/css/bootstrap.min.css" rel="stylesheet" >

    <!-- animation library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">    

    <!-- typed.js animation-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/typed.js/2.0.5/typed.min.js"></script>

    <!-- scrollreveal animation -->
    <script src="https://cdn.jsdelivr.net/npm/scrollreveal@4.0.7/dist/scrollreveal.min.js"></script>
    
    <!-- css file-->
    <link rel="stylesheet" href="portfolio.css">
    
    
    <script src="js1/jquery.js"></script>
	<script src="bootstrap/js/bootstrap.min.js"></script>


    <title>My Portfolio</title>
</head>
<body>
    <!--navigation bar and the background picture-->
    <div class="navbar navbar-inverse navbar-expand-md navbar-fixed-top">
        <div class="container">
            <a href="#home" class="navbar-brand">My<span>Port</span>folio.</a>
            
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbarNavDropdown">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="nav navbar-nav navbar-right">
                    <li><a class="animated bounceInDown" style="animation-delay: 0.1s" href="#about">About</a></li>
                    <li><a class="animated bounceInDown" style="animation-delay: 0.2s" href="#passion">Passion</a></li>
                    <li><a class="animated bounceInDown" style="animation-delay: 0.3s" href="#experience">Experience</a></li>
                    <li><a class="animated bounceInDown" style="animation-delay: 0.4s" href="#projects">Projects</a></li>
                    <li><a class="animated bounceInDown" style="animation-delay: 0.5s" href="#contacts">Contacts</a></li>
                </ul>
            </div>
        </div>
    </div>
        
    <div class="background" id="home">
        <!-- text on the background-->
        <div class="container banner">
            <div class="text1">Hi, my name is,</div>
            <div class="text2">Aernest Njuki</div>
            <div class="text3">And i'm a <span class="typing1"></span></div>
            <a href="#contacts" class="btn btn-light" type="submit">Get in touch</a>
            <a href="#projects" class="btn btn-light" type="submit">Project</a>
        </div>
    </div>  
    <!-- end of the navigation bar-->   
    
    
    <!-- little about me-->
    <div class="jumbotron about" id="about">
        <div class="container">
            <h3 class="text-center mt-4 me-scroll">About me</h3>
            <div class="under"></div>
            <div class="row row1">
                <div class="col-md-4 col-md-offset-1 col-xs-12">
                    <img src="pictures/njuki.jpg" alt="njuki" class="img-responsive image-scroll">
                </div>
                <div class="col-md-7 col-xs-12 about-text">
                    I am a software engineer currently based in Murang'a, Kenya. I enjoy building 
                    systems that live on the internet. I develop custom made websites and apps that interact 
                    with users and are also responsive to any device. They contain a well-designed frontend and also
                    a modern, efficient backend. <br><br>
                    At the moment am a third-year student as <span class="text-primary">Murang'a University of
                    Technology</span> pursuing a degree <span class="text-primary">Business Information Technology
                    (BBIT)</span> with great interest in software development. I aspire to further my career in pursuit
                    of more knowledge and skills to develop systems that will help society. <br><br>
                    <a href="file/Aernest njuki Resume.pdf">View Resume</a>
                </div>
            </div>
        </div>
    </div>
    <!-- end little about me--> 


    <!-- start of passion section-->
    <div class="container passion" id="passion">
        <h3 class="text-center mt-4 me-scroll">What i do</h3>
        <div class="centerline"></div>
        <div class="row my-5">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow mb-3">
                    <div class="inner">
                        <div class="wrapper text-center">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-center title">Programming</h5>
                        <div class="card-body">
                        When it comes to programming, a software engineer should be conversant with at least five programming languages. And since this is my field, I have worked with several languages to build systems. During the learning of these languages, getting error and debugging have sharpened my skills, not forgetting about documentation which important during development.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card scroll2 shadow mb-3">
                    <div class="inner">
                        <div class="wrapper text-center">
                            <i class="fa fa-line-chart" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-center title">Data Analysis</h5>
                        <div class="card-body">
                        With vast knowledge in Rstudio and SPSS, I have interacted with complex data requiring to be analysed. Due to this, I can organize the data, clean it, visualize it in any format, and most importantly, analyse the data to obtain factual information that can help an organization understand how it is performing. I am also looking forward to learn about data science in python.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card shadow mb-3">
                    <div class="inner">
                        <div class="wrapper text-center">
                            <i class="fa fa-laptop" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-center title">Design</h5>
                        <div class="card-body">
                        With robust web design experience, where I have designed many websites, I can test the design is not only how a website appears outside but also its internal functionality. Although the outer appearance also matters, I am still working to improve my skills to meet the users' needs and requirements. I also strive to come up with systems the users will enjoy while using on any platform.
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6 scroll4">
                <div class="card shadow mb-3">
                    <div class="inner">
                        <div class="wrapper text-center">
                            <i class="fa fa-cubes" aria-hidden="true"></i>
                        </div>
                        <h5 class="text-center title">Development</h5>
                        <div class="card-body">
                        As I am still growing in software development, I have associated myself with people who have also excelled in gaining more skilled and have new development ideas. Currently in the university, i am an active member of <span class="text-primary">MUT developer student</span> where we meet to learn more tricks. I have taken the responsibility to help other students and developer when they are stuck while programming.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end of passion section-->

    <!--start of experience section -->
    <div class="jumbotron experience" id="experience">
        <div class="container">
            <h3 class="text-center mt-4 me-scroll">Experience & Skills</h3>
            <div class="experienceline"></div>
            <div class="row">
                <div class="text-center mt-5 textScroll">
                I have been doing web design and other languages for at least three years, and since then, I have always been learning more and practising and doing research to enhance my skills and experience.
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 column1">
                    <h5 class="textScroll">Here are some of the languages and technologies i have worked with</h5>
                    <div class="images">
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/html.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/css.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/boot.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/python.png" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/jquery.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/react.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/vb.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/flutter.png" alt=""></div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/c++.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/sql.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/r.png" alt=""></div>
                            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3"><img src="pictures/js.png" alt=""></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 column2">
                    <h5 class="textScroll">Here is where i am in terms of skills and experience</h5>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-danger active" style="width: 90%; min-width: 20px;">
                            HTML 90%
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-primary active" style="width: 80%; min-width: 20px;">
                            CSS 80%
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-warning active" style="width: 82%; min-width: 20px;">
                            BOOTSTRAP 82%
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-info active" style="width: 70%; min-width: 20px;">
                            JQUERY  70%
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-success active" style="width: 60%; min-width: 20px;">
                            PHP & sql 60%
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-danger active" style="width: 75%; min-width: 20px;">
                            PYTHON 75%
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar progress-bar-striped progress-bar-primary active" style="width: 50%; min-width: 20px;">
                            FLUTTER 50%
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--end of experience section -->

    <!-- start of projects section -->
    <div class="container projects" id="projects">
        <h3 class="text-center mt-4 me-scroll">Projects i Have done</h3>
        <div class="projectline"></div>
        <h5 class="text-center textScroll">This just a part of my work and there is more coming</h5>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="pictures/shopping.PNG"><img src="pictures/shopping.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="https://aernestnjuki.github.io/nobleFurnitures/"><img src="pictures/chester.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="https://aernestnjuki.github.io/funTimes/"><img src="pictures/funtimes.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="https://aernestnjuki.github.io/choosengeneration/"><img src="pictures/chosen.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="pictures/cart.PNG"><img src="pictures/cart.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="#"><img src="pictures/portfolio.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
        </div>
        <h5 class="text-center textScroll">Here are some of the desktop app developed with python</h5>
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="pictures/restrant.PNG"><img src="pictures/restrant.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="pictures/member.PNG"><img src="pictures/member.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
            <div class="col-lg-4 col-md-4">
                <div class="showcase shadow">
                    <a href="pictures/phamaccy.PNG"><img src="pictures/phamaccy.PNG" alt="" class="img-responsive"></a>
                </div>
            </div>
        </div>
    </div>

    <!-- start of projects section -->

    <!-- start of contacts section -->
    <div class="contacts" id="contacts">
        <div class="container">
            <h3 class="text-center mt-4 me-scroll">Get in touch</h3>
            <div class="contactline"></div>
            <div class="form">
            <?php
                if(isset($_POST['submit'])){
                    $name = $_POST['fullName'];
                    $subject = $_POST['subject'];
                    $email = $_POST['email'];
                    $message = $_POST['message'];
                                    
                    if(empty($name) || empty($subject) || empty($email) || empty($message)){
                        ?>
                        <div class="alert alert-dismisable alert-warning">
                            <p><?php echo "All inputs are required!!" ?></p>
                        </div>

                        <?php
                    }else{
                        mail("aernestnjuki@gmail.com", $subject, $message, "From: $name <$message>");
                        ?>
                        <div class="alert alert-dismisable alert-success text-center">
                            <p><?php echo "Successfull" ?></p>
                        </div>
                        <?php
                    }
                }
            ?>
                <form method="post" action="Myportfolio.php">
                    <div class="scrollForm">
                        <input type="text" id="form_fullname" name="fullName" required="">
                        <label>
                            enter name
                        </label>
                    </div>
                    <div class="scrollForm">
                        <input type="text" id="form_subject" name="subject" required="">
                        <label>
                            Subject
                        </label>
                    </div>
                    <div class="scrollForm">
                        <input type="email" id="form_email" name="email" required="">
                        <label>
                            Email
                        </label>
                    </div>
                    <div class="scrollForm">
                        <input type="text" id="form_message" name="message" required="">
                        <label>
                            Email message
                        </label>
                    </div>
                    <input type="submit" value="Submit" name="submit">
                </form>
            </div>
        </div>
    </div>
    <!-- end of contacts section -->


    <!-- scrollUp button -->
    <div class="scrolltop float-right">
        <i class="fa fa-arrow-up" id="mybtn"></i>
    </div>

    <!-- social media section -->
    <div class="media">
        <a href="https://api.whatsapp.com/send?phone=254705203169&text=Hey%20Aernest%20i%20am%20.%20.%20.%20"><i class="fa fa-whatsapp" aria-hidden="true"></i></a><br>
        <a href="https://www.facebook.com/aernest.njuki"><i class="fa fa-facebook-square" aria-hidden="true"></i></a><br>
    </div>



    <!-- start of footer section-->
    <div class="footer text-center">
        Copyright &copy;2021 <span>MyPortfolio</span>. All rights Reserved.
    </div>
    <!-- start of footer section-->

    <script src="portfolio.js"></script>
</body>
</html>
