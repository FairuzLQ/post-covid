<!-- Sidebar  -->
<nav id="sidebar">
            <div class="sidebar-header">
                <h3>Welcome to Admin Panel</h3>
            </div>

            <ul class="list-unstyled components">
                <a href="index.php"><p>Menu</p></a>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Blog</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="add-blog.php">Add Blog</a>
                        </li>
                        <li>
                            <a href="view-blog.php">View Blog</a>
                        </li>
                        
                    </ul>
                </li>
                <li>
                    <a href="add-category.php">Category</a>
                </li>
                

            <ul class="list-unstyled CTAs">
                <li>
                    <a href="logout.php" class="download">Log Out</a>
                </li>
                <li>
                    <a href="../index.php" class="article">Go To Site</a>
                </li>
            </ul>
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button>
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    
                </div>
            </nav>