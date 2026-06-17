<html>
    <head>
        <title>my web page</title>
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
    </head>
    <body>
        <div id="wrapper">
            <div class="header">
               
            </div>
            <div class="main-navigation">
                <a href="index.php">Home</a> /
                <a href="index.php?page=About_us">About us</a> /
                <a href="index.php?page=Mission_Vision">Mission and vision</a> /
                <a href="index.php?page=Gallery">Gallery</a>
            </div>
            <div class="container">
                <?php
                    switch(@$_GET["page"])
                    {
                        case "About_us":
                            include("About_us.php");
                            break;
                        case "Mission_Vision":
                            include("Mission_Vision.php");
                            break;
                        case "Gallery":
                            include("Gallery.php");
                            break;
                        default:
                            include("home.php");
                            break;
                    }
                ?>
            </div>
            <div class="footer">
            </div>
        </div>
    </body>
</html>