<?php require __DIR__ . '/../app/config.php'; ?>
<?php require __DIR__ . '/../app/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "Index | Portfolio" ?></title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href=
    "https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&family=Varela+Round&display=swap"
     rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<?php view('layouts/header.php',['title' => 
'
<!----------- hero banner section ----------->
<div class="app">
        <div>
            <div class="row">
                <div class="col-2">
                    <h1><img src="images/hero-styler.png" alt=""></h1>
                    <p><b><i>"And this is my, Portfolio"</i></b></p>
                    <a href="/pages/contact.php" class="btn">Lets Talk &#8594;</a>
                </div>
                <div class="col-2">
                    <img src="images/image1.gif">
                </div>
            </div>
        </div>
    </div>
</div>
', 'heading' => 
'
<!----------- offer ----------->
<div class="offer">
    <div class="small-container">
            <div class="col-2">
                <center><h1><u>Projects</u></h1></center>
            </div>
        </div>
    </div>
</div>

']);?>
<!----------- offer ----------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/github-icon.svg" class="offer-img">
            </div>
            <div class="col-2">
                <h1>Check out my other Works</h1>
                <p><i>"on Github"</i></p>
                <small>
                    <p> I am a Self-taught Developer</p>
                    <p> I love using programming for problem solving and automation</p>
                    <p> I’m currently learning: Functional Programming (by my self).</p>
                    <p> I’m currently open for: Freelancing Full-Stack</p>
                    <p> Am always learning new things</p>
                    <p> So checkout my Github for my latest works</p>
                </small>
                <div><a href="https://github.com/machlepepe" class="btn">Github &#8594;</a></div>
            </div>
        </div>
    </div>
</div>

<!----------- offer ----------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/freelance-1.png" class="offer-img">
            </div>
            <div class="col-2">
                <small>
                    <p>My other Work's</p>
                </small>
                <h1>An e-Commerce website</h1>
                <small>
                    Called Men's Store
                </small>
                <div><a href="https://machlepepe.github.io/websiteportfolioc3wd/" class="btn">Check it out &#8594;</a></div>
            </div>
        </div>
    </div>
</div>
<!----------- offer ----------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <img src="images/freelance-2.png" class="offer-img">
            </div>
            <div class="col-2">
                <small>
                    <p>My other Work's</p>
                </small>
                <h1>thaanaOCR</h1>
                <small>
                    used with Keras, a high-end machine learning API
                </small>
                <div><a href="https://github.com/Sofwath/thaanaOCR" class="btn">Check it out &#8594;</a></div>
            </div>
        </div>
    </div>
</div>

<!----------- offer ----------->
<div class="offer">
    <div class="small-container">
        <div class="row">
            <div class="col-2">
                <h1><u>Checkout my other Service's</u></h1>
            </div>
        </div>
    </div>
</div>


<!----------- testimonial 1 ----------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>
                    As a Front-end Developer i am fully aware of the new UI features and determining the structure and design philosophy of web pages that is pleasing the end-user's eye
                    </p>
                    <img src="images/icon-1.png">
                    <h3>Front-End Developer</h3>
                </div>
                <div class="col-3">
                    <p>As a Back-end developer i keep myself updated with the best Web API's and services in PHP, Javascript and C++  </p>
                    <img src="images/icon-2.png">
                    <h3>Back-End Developer</h3>
                </div>
                <div class="col-3">
                    <p>My skills inter-mingle in this of both Design choice in the Front-end and the break-neck speed on performance in the Back-end</p>
                    <img src="images/icon-3.png">
                    <h3>Full-Stack Developer</h3>
                </div>
            </div>
        </div>
    </div>
    <!----------- testimonial 2 ----------->
    <div class="testimonial">
        <div class="small-container">
            <div class="row">
                <div class="col-3">
                    <p>
                    As in Computer networking, i can be commisioned to interconnect computing devices that can exchange data between and share resources with each user
                    </p>
                    <img src="images/icon-4.png">
                    <h3>Computer Networking</h3>
                </div>
                <div class="col-3">
                    <p>I am capable with Web Applications Developeing I can design, develop, and maintain iner and outer websites for my clients</p>
                    <img src="images/icon-5.png">
                    <h3>Web-App Developer</h3>
                </div>
                <div class="col-3">
                    <p>As chatbot developer, I can develop applications that automate communication and customer services in popular messaing apps or even SMS</p>
                    <img src="images/icon-6.png">
                    <h3>Bot Developer of any API or service</h3>
                </div>
                <div class="col-3">
                    <p>As a UI/UX designer, I create the user interface for an app, website, or other interactive media with articulated design decisions with my client through communication and the end-user</p>
                    <img src="images/icon-7.png">
                    <h3>UI/UX Designer</h3>
                </div>
            </div>
        </div>
    </div>
<!----------- brands ----------->
    <!-- <div class="brands">
        <div class="small-container">
            <div class="row">
                <div class="col-5">
                    <img src="images/logo-godrej.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-oppo.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-coca-cola.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-paypal.png">
                </div>
                <div class="col-5">
                    <img src="images/logo-philips.png">
                </div>
            </div>
        </div>
    </div> -->
    <?php include __DIR__ . '/../layouts/footer.php'; ?>
</div>
</div>
</body>
</html>