<?php 
    include "admin/conn.php";
    

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subscribe Page</title>
    <link rel="stylesheet" href="stylesheet/styleSubscribe.css">
    <link rel="stylesheet" href="stylesheet/stylefoot.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <header>
        <?php include "navbar.php";?>
    </header>
    
    <div class="newsletter">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <div class="section-title text-center">
                            <h2>Berlangganan pada Situs kami</h2>
                            <p>Dengan menjadi Relawan Informasi. Anda bisa membagikan Informasi yang menyelamatkan jiwa masyarakat. Silahkan masukkan email anda pada kolom di bawah ini.</p>
                        </div>
                    </div>
                </div>
        
                <div class="row justify-content-center">
                    <div class="col-xl-7 col-lg-7">
                        <form class="newsletter-form" action="subscribe-back.php" id="subscribe" method="POST">
                            <input name='email' type="email" placeholder="Enter your email here" required>
                            <button name='subscribe' value='Subscribe' type="submit">Subscribe Now</button>
                        </form>
                    </div>
                </div>
            </div>
    </div>
    
    <?php include "footer.php" ?>
</body>
</html>