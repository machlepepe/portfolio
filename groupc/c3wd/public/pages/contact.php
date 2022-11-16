<?php require __DIR__ . '/../../app/config.php'; ?>
<?php require __DIR__ . '/../../app/functions.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo "Contact me | Portfolio" ?></title>
    <link rel="stylesheet" href="/../css/style.css">
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
            <!----------- offer ----------->
            <div class="offer">
                <div class="small-container">
                    <div class="row">
                        <div class="col-2">
                            <h1>Hire Me.</h1>
                            <p>I am available for freelance work. Connect with me via phone: +9607267757
                            or email yaishlikenoother@gmail.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            '
            , 'heading' => 
            '
                        <!--------  account page    --------->
            <div class="account-page">
                <div class="container">
                    <div class="row">
                            <div class="form-container">
                                <div class="form-container">
                                    <div class="form-btn">
                                    </div>
                                    </form>
                                    <form class="reg-form">
                                        <b><input type="text" placeholder="Username"></input>
                                        <input type="email" placeholder="Email"></input>
                                        <input type="password" placeholder="Write a subject"></input>
                                        <input type="password" placeholder="Your message"></input></b>
                                        <button type="submit" class="btn">Lets Talk</button>                               </form>
                        </div>
                    </div>
                </div>
            </div>
            '
            ]);?>

            
            <?php include __DIR__ . '/../../layouts/footer.php'; ?>
</body>
</html>