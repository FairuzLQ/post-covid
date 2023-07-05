<?php

    error_reporting(0);
    include "admin/conn.php";

    $category = $_GET['category'];
  
    $blog = mysqli_query($con,"SELECT * FROM blog WHERE category LIKE '%".$category."%' ORDER BY id DESC ");

	
    
?>

<!DOCTYPE html>
<html>
 	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
  		<title>Artikel</title>
  		<link rel="stylesheet" href="stylesheet/styleArtikel.css"/>
		<link rel="stylesheet" href="stylesheet/stylenav.css">
		<link rel="stylesheet" href="stylesheet/stylefoot.css">
		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
 	</head>
 	<body>
	 	<header>
			<?php include "navbar.php";?>
		</header>
		  <div class = "contents">
		  		
			  <div class="container">
				<div class="heading">
					<h1>Artikel Terbaru</h1>
					<hr>
				</div>
				<?php   
                        while ($row=mysqli_fetch_array($blog)){
                       
                    ?>
					
				<div class ="article-page">
					<img src="admin/images/blog/<?php echo $row['img']; ?>" alt="">
					<div class="text-content">
						<a href="blog-category.php?category=<?php echo $row['category']; ?>" class="topics"><?php echo $row['category']; ?></a>
						<h4><?php echo $row['date']; ?></h4>
						<h1><?php echo $row['title']; ?></h1>
						<p><?php 
                            $ddesc = $row['descrip']; 
                        echo $dec = substr($ddesc,0,200);
                        ?>...
						</p>
						<br>
						<a href="artikel-detail.php?id=<?php echo $row['id']; ?>" class="readmore">Baca Selengkapnya...</a>
					</div>
					<hr>
				</div>
				<?php  } ?>
				
			  </div>

			</div>
		 
		</div>
		<?php include "footer.php" ?>
 	</body>
</html>