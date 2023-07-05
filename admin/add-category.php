<?php
error_reporting(0);
include 'conn.php';
include 'auth.php';

$a=4;
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Add Category</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
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
    <body class="hold-transition sidebar-mini">
    <div class="wrapper">
    <!-- Navbar -->
   

    <!-- Main Sidebar Container -->
    <?php include"sidebar.php"; ?>

    <?php
    if(isset($_GET['delete_id']))
    {
    $query_delete="DELETE FROM category WHERE id='".$_GET['delete_id']."'";
    $p = mysqli_query($con, $query_delete);
    echo "<script>alert('Deleted Successfully');</script>
        <script>window.location.href = 'add-category.php'</script>";
    }

    $edit = $_GET['edit'];

    $resultt = mysqli_query($con,"SELECT * FROM category where id=".$edit."");
    $roww = mysqli_fetch_array($resultt);
    $location = mysqli_query($con,"SELECT * FROM category");


    if(isset($_POST['add'])){
        
    $name = $_POST['cat_name'];

    if($edit==''){

    $insertdata = mysqli_query($con,"INSERT INTO category(cat_name)VALUES('$name')");
    echo "<script>alert('Added Successfully');</script>
        <script>window.location.href = 'add-category.php'</script>";
    }
    else{

    $insertdata = mysqli_query($con,"UPDATE category SET cat_name='$name' where id=".$edit."");
    echo "<script>alert('Updated Successfully');</script>
        <script>window.location.href = 'add-category.php'</script>";
    }


    }

    ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Add New Category</h1>
            </div>

            </div>
        </div><!-- /.container-fluid -->
        </section>

        <!-- Main content -->
        <section class="content">
        <div class="row">
            <div class="col-md-5">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="card card-outline card-info">
            
                
                <div class="card-header">
                <div class="form-group">
                    <label>Enter Category Name</label>
                    <input type="text" name="cat_name" value="<?php echo $roww["cat_name"]; ?>" class="form-control" placeholder="Enter ...">
                    </div>
                </div>
                <button type="submit" name="add" class="btn btn-block btn-primary btn-lg">Add</button>
                
            </div>
            </form>
            </div>
            <div class="col-md-7">
            <form action="" method="post" enctype="multipart/form-data">
            <div class="card card-outline card-info">
                <div class="card-header">
                <div class="form-group">
                    <label>All Category</label>
                    
                    </div>
                </div>
                
                <div class="card-header">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th></th>
                    </tr>
                    </thead>
                    <tbody>
            <?php  
            while ($location_ft = mysqli_fetch_array($location)) { 
            ?>
                    <tr>
                        
                        <td><?php echo $location_ft["cat_name"]; ?></td>
                        <td class="text-right py-0 align-middle">
                        <div class="btn-group btn-group-sm">
                            <a href="add-category.php?edit=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')"class="btn btn-info"><i class="fas fa-edit"></i></a>
                            <a href="add-category.php?delete_id=<?php echo $location_ft["id"]; ?>" onclick="return confirm('Are you sure?')" class="btn btn-danger"><i class="fas fa-trash"></i></a>
                        </div>
                        </td>
                    </tr>
            <?php
            }
            ?>
                    </tbody>
                </table>
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
    <!-- /.content-wrapper -->
    <?php include"footer.php"; ?>

    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
        <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->

    
    <script>
    $(function () {
        // Summernote
        $('.textarea').summernote()
    })
    </script>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
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
