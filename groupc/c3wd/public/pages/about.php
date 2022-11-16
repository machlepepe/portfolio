<?php require __DIR__ . '/../../app/config.php'; ?>
<?php require __DIR__ . '/../../app/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <title><?php echo "About us | Portfolio" ?></title>
    <link rel="stylesheet" href="/../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href=
    "https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;500;600;700&family=Varela+Round&display=swap"
     rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
            <?php view('/layouts/header.php',['title' => 
            '
            <!----------- offer ----------->
            <div class="offer">
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <img src="/../images/ID_Card_Photo.jpg" class="offer-img">
                        </div>
                        <div class="col-2">
                            <h1>About us</h1>
                            <p>Developer and Designer</p>
                            <h6>
                            I am a front-end web developer with experience in other programming paradigms like functional
                            and OOP programming. I can provide clean code and pixel perfect design, whilst making the website more interactive with web animation.
                            and responsive design making your website accessible to all users, regardless of which device they are using.
                            
                            </h6>
                            <div><a href="/pages/contact.php" class="btn">Hire Me. &#8594;</a></div>
                        </div>
                    </div>
                </div>
            </div>            
            '
            , 
            'heading' => 
            '

            '
            ]);?>
            <?php include __DIR__ . '/../../layouts/footer.php'; ?>
        </div>
</body>
</html>