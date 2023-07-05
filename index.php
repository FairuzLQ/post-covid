<?php
    include "admin/conn.php";
    $url = file_get_contents('https://covid19.mathdro.id/api/countries/Indonesia/confirmed');
    $data = json_decode($url, true);
    //fetch blog
    $blog = mysqli_query($con,"SELECT * FROM blog ORDER BY id DESC LIMIT 3");
    

    $url2 = file_get_contents('https://covid19.mathdro.id/api/countries/Indonesia');
    $data_update = json_decode($url2, true);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Covid</title>
    <link rel="stylesheet" href="stylesheet/stylesheet.css">
    <link rel="stylesheet" href="stylesheet/stylenav.css">
    <link rel="stylesheet" href="stylesheet/stylefoot.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
   
    
  </head>
  <body>
    <header>
        <?php include "navbar.php";?>
    </header>
    <div class="top-wrapper">
        <div class="container">
            <img src="images/lp_top_health.png" alt="health_illustration"/>
            <h1>Situs ini bertujuan untuk menyerukan gaya hidup sehat baik selama maupun setelah pandemi</h1>
        </div>
        <div class="btn-wrapper">
            <a href="Subscribe.php" class="btn learnmore">Subscribe Now</a>
        </div>
    </div>
    <div class="article-wrapper">
        <div class="container">
            <div class="heading">
                <br><br><br><br><br><br><br><br><br><br>
                <h1>Artikel Terbaru</h1>
                <hr>
            </div>
            
            <div class="articles">
                <?php
                        while($row=mysqli_fetch_array($blog)){
                    ?>
                <div class="article">
                    
                    <div class="article-image">
                        <img src="admin/images/blog/<?php echo $row['img']; ?>" alt="article1" width="350" height="199">
                    </div>
                    <h6><?php echo $row['date']; ?></h6>
                    <h3 class="text-contents"><b> <a href="artikel-detail.php?id=<?php echo $row['id']; ?>"> <?php echo $row['title']; ?></a></b></h3>
                    
                    <p><?php 
                            $ddesc = $row['descrip']; 
                        echo $dec = substr($ddesc,0,180);
                        ?>...</p>
                    <a href="blog-category.php?category=<?php echo $row['category']; ?>" class="topics"><?php echo $row['category']; ?></a>
                </div>
                <?php  } ?>
                <div class="clear"></div>
                
            </div>
            
        </div>
    </div>
    <div class="data-wrapper">
        <div class="container">
            <div class="heading-data">
                <h1>Data COVID-19 di Indonesia</h1>
                <p style="color: black;">Sumber : <a href="https://covid19.mathdro.id/api">https://covid19.mathdro.id/api</a> / <?= $data_update['lastUpdate']?> </p>
            </div>
            <div class="data">
                <div class="data1">
                    <div class="vl">
                        <h1><?= $data['0']['deaths'];?></h1>
                        <p>Meninggal Dunia</p>
                    </div>
                </div>
                <div class="data2">
                    <div class="vl">
                        <h1><?= $data['0']['confirmed'];?></h1>
                        <p>Kasus</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
    <div class="message-wrapper">
        <div class="container">
            <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
            <div class="heading-message">
                <hr>
                <h1 style="margin-bottom: 0px;">Ikuti Protokol Kesehatan!</h1>
                <p><i>Physical distancing</i> sangat penting untuk memerangi pandemi COVID-19. Kita harus melakukan segala upaya untuk sebisa mungkin menjaga jarak secara fisik untuk melindungi diri dan orang lain dari infeksi virus corona.</p>
            </div>
        </div>
        

    </div>
    <?php include "footer.php";?>
    
  </body>
</html>
