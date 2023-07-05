<?php

    error_reporting(0);
    include "admin/conn.php";

    //fet id
    $id = $_GET['id'];

    //fetch blogs 
    $blog = mysqli_query($con,"SELECT * FROM blog WHERE id=$id");
    $fetch = mysqli_fetch_array($blog);


    //fetch recent post
    $recent = mysqli_query($con,"SELECT * FROM blog LIMIT 4");

      //fetch category

    $cat = mysqli_query($con,"SELECT * FROM category ORDER BY id DESC");
    
    

    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylesheet/stylenav.css">
	<link rel="stylesheet" href="stylesheet/stylefoot.css">
    <link rel="stylesheet" href="stylesheet/styleArtikel-detail.css">
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <title><?php echo $fetch['title'];  ?></title>
</head>
<body>
        <header>
			<?php include "navbar.php";?>
		</header>

      <div class="content-detail">
          <div class="img-content">
              <img src="admin/images/blog/<?php echo $fetch['img']; ?>" alt="">
          </div>
          <div class="text-content">
            <a href="blog-category.php?category=<?php echo $fetch['category']; ?>" class="topics"><?php echo $fetch['category'];  ?></a>
            <h4><?php echo $fetch['date'];  ?></h4>
            <h1><?php echo $fetch['title'];  ?></h1>
            <p><?php echo $fetch['descrip'];  ?>
            </p>

          </div>

      </div>
      <?php include "footer.php" ?>
</body>
</html>