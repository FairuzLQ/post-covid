<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=2;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Blog</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" />
    <!-- include summernote css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <!-- include summernote js-->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>
    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="styles/style-admin-panel.css">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>
<body>
    <?php include"sidebar.php"; ?>
    <?php
    date_default_timezone_set('Asia/Jakarta');
    $today = date("D d M Y");
    $edit = $_GET['edit'];

    $resultt = mysqli_query($con,"SELECT * FROM blog where id=".$edit."");
    $roww = mysqli_fetch_array($resultt);

    if(isset($_POST['publise'])){
        
    $title1 = $_POST['title'];
    $title = str_replace("'","\'", $title1);
    $category = $_POST['category'];
    $descrip1 = $_POST['descrip'];
    $descrip = str_replace("'","\'", $descrip1);
    $url = $_POST['url'];

    if($_FILES['lis_img']['name']!=''){
    $lis_img = rand().$_FILES['lis_img']['name'];
    }
    else{
        $lis_img = $roww["img"];
    }

    $tempname = $_FILES['lis_img']['tmp_name'];
    $folder = "images/blog/".$lis_img;
    $valid_ext = array('png','jpeg','jpg');
    // file extension
    $file_extension = pathinfo($folder, PATHINFO_EXTENSION);
    $file_extension = strtolower($file_extension);
    // Check extension
    if(in_array($file_extension,$valid_ext)){
    // Compress Image
    compressImage($tempname,$folder,60);
    }
    if($edit==''){
    $insertdata = mysqli_query($con,"INSERT INTO blog(title,category,descrip,img,url,date,status)VALUES('$title','$category','$descrip','$lis_img','$url','$today','0')");
    echo "<script>alert('Posted Successfully');</script>
        <script>window.location.href = 'add-blog.php'</script>";
    }
    else{
    $insertdata = mysqli_query($con,"UPDATE blog SET title='$title',category='$category',descrip='$descrip',img='$lis_img',url='$url',date='$today' where id=".$edit."");
    echo "<script>alert('Updated Successfully');</script>
        <script>window.location.href = 'add-blog.php'</script>";
    }
    }

    // Compress image
    function compressImage($source, $destination, $quality) {

    $info = getimagesize($source);

    if ($info['mime'] == 'image/jpeg') 
        $image = imagecreatefromjpeg($source);

    elseif ($info['mime'] == 'image/gif') 
        $image = imagecreatefromgif($source);

    elseif ($info['mime'] == 'image/png') 
        $image = imagecreatefrompng($source);

    imagejpeg($image, $destination, $quality);

    }

    ?>

    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add blog</h1>
            </div>

            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-8">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="card card-outline card-info">
                
                
                <div class="card-header">
                <div class="form-group">
                    <label>Enter Title</label>
                    <input name="title" value="<?php echo $roww["title"]; ?>" type="text" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                    <div class="card-header">
                <div class="form-group">
                    <label>Select Category</label>
                    <select name="category" class="form-control">
                        <option>Select...</option>
                        <?php 
                        $location = mysqli_query($con,"SELECT * FROM category"); 
                        while ($location_ft = mysqli_fetch_array($location)) {   
                        ?>
                        <option <?php if($roww["category"]==$location_ft["cat_name"]){ echo 'selected'; } ?> value="<?php echo $location_ft["cat_name"]; ?>"><?php echo $location_ft["cat_name"]; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                    </div>
                </div>
                
                <div class="card-body pad">
                <label>Enter Description</label>
                <div class="mb-3">
                    <textarea name="descrip" class="textarea" placeholder="Place some text here"
                            style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"><?php echo $roww["descrip"]; ?></textarea>
                </div>
                </div>
                <div class="card-header">
                <div class="form-group">
                        <label for="exampleInputFile">Select Img<span style="color:red;">(only compresed)</span></label>
                        <p style="color:red;">img size 800px x 800px</p>
                            <input name="lis_img" type="file" required>
                        <?php echo $roww["img"]; ?>
                    </div>
                    
                </div>
        
                <div class="card-header">
                <div class="form-group">
                        <div class="row">
                        <div class="col-sm-6">
                        <!-- text input -->
                        <div class="form-group">
                    <button type="submit" name="publise" class="btn btn-primary btn-lg">Publish Post</button>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
            </form>
            </div>
            <!-- /.col-->
        </div>
        <!-- ./row -->
        </section>
        <!-- /.content -->
    </div>
    
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>
    
    
    
    <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>
    <!-- jQuery Custom Scroller CDN -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#sidebar").mCustomScrollbar({
                theme: "minimal"
            });

            $('#sidebarCollapse').on('click', function () {
                $('#sidebar, #content').toggleClass('active');
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });
    </script>
</body>
</html>