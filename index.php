<?php include('config/setup.php'); ?>
<!DOCTYPE html>
<html>

    <head>

        <meta charset="utf-8">

        <title><?php echo $page['title'].' | '.$site_title ?></title>

        <?php include('config/css.php'); ?>
        <?php include('config/js.php'); ?>


    </head>

    <body>

        <nav class="navbar navbar-default" role="navigation">
            <div class="container">
                <ul class="nav navbar-nav">
                    <li<?php if($pageid == 1) { echo ' class="active"'; } ?>><a href="?page=1">Home</a></li>
                    <li<?php if($pageid == 2) { echo ' class="active"'; } ?>><a href="?page=2">About Us</a></li>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Contact</a></li>

                </ul>
            </div>
        </nav>

        <div class="container">

            <h1><?php echo $page['header']; ?></h1>
            <p>
                <?php echo $page['body']; ?>
            </p>









        </div>



    <footer class="footer">
        <div class="container">
            <p class="footer-text">
                Place Content Here
            </p>

        </div>

    </footer>


    </body>

</html>
