<?php
if (!isset($_SESSION["id"])) {

?>
        <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d3d3d3">
        <div class="container fluid">
                <a href="index.php" class="navbar-brand ">
                    <i class="bi bi-house-door-fill pe-2"></i>Home
                </a>
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a href="login.php" class="nav-link">
                        <i class="bi bi-pencil-square pe-2"></i>เข้าสู่ระบบ</a>
                    </li>
                </ul>


                </div>
        </nav>    
<?php
} else { ?>
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#d3d3d3">
        <div class="container-fluid">
                <a href="index.php" class="navbar-brand ">
                    <i class="bi bi-house-door-fill pe-2"></i>Home
                </a>
                <ul class="navbar-nav">
                    <div class="dropdown">
                        <a href="" class="btn btn-outline-secondary dropdown-toggle btn-sm" 
                        type="button" id="button1" data-bs-toggle="dropdown" 
                        aria-expanded="false">
                        <i class="bi bi-person-lines-fill"></i>
                    <?php echo $_SESSION["username"];?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="button1">
                        <li>
                            <a href="logout.php" class="dropdown-item">
                            <i class="bi bi-person-lines-fill pe-2">ออกจากระบบ</i>
                            </a>
                        </li>

                    </ul>
                    </div>
                </ul>


                </div>
        </nav>

<?php   }  ?>