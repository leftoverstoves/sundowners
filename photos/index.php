<!DOCTYPE html>
<!--Created 14 Dec 15 by H&H Design-->
<!--Last Updated 14 Dec 15, at the request of V. Davis-->
<!--This domain is owned by Virginia Good Sam, and the subdomain operated by the Sundowners Chapter of VA Good Sam with the limited permission of R. Boughner.-->

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="photo-gallery-style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="lb-resources/lightbox.css">

    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script type="text/javascript" src="pickYear.js" ></script>
</head>

<body>

    <div id="wrap">
        <header>
            <title>Sundowners - VA Good Sam</title>
            <div id="headerContent">
                <h1><i>SUNDOWNER SAMS</i></h1>
                <h2>Good Sam RV Chapter</h2> 
                <h3>Richmond, VA</h3> 
            </div>
        </header>

        <div id="inner">

            <nav>
                <img id="logo" src="../site-resources/banner.png">

                <img class="navbarcurlies" src="../site-resources/navbar_top.gif">
                <ul id="navlist">   
                    <li><a class="lilink" href="../">About Us</a></li>
                    <li><a class="lilink" href="../contact-us">Contact Us</a></li>
                    <li><a class="lilink" href="../schedule">Camping Schedule</a></li>
                    <li><a class="lilink" href="../photos">Photos</a></li>
                    <li><a class="lilink" href="../projects">Projects</a></li>
                </ul>
                <img class="navbarcurlies" src="../site-resources/navbar_btm.gif">
            </nav>

            <section>
                <h1>Photos from: 
                    <select id="yearSelect" style="height:25px; line-height:25px; font-size:20px;">
                    <?php
                        for ($y = date("Y"); $y >= 2015; $y--) {
                            echo '<option value="'.$y.'">'.$y.'</option>';
                        }
                    ?>
                        <option value="2011">2011</option>
                    </select>
                 </h1>

                 <div id="displayedAlbums">
                    <?php
                        include 'formattedAlbums.php';
                        echo '<div id="2011" class="year" style="display:none">';
                        retrieveYearPhotos("2011");
                        echo '</div>';
                        for ($y = date("Y"); $y >= 2015; $y--) {
                            echo '<div id="'.$y.'" class="year" style="display:none">';
                            retrieveYearPhotos($y);
                            echo '</div>';
                        }
                    ?>
                </div>



            </section>
        </div>
    </div>

    <footer>
        <div id="footerContent">
            Copyright &copy Sundowner Sams, 2015
        </div>
    </footer>

    <script src="lb-resources/lightbox-plus-jquery.js"></script>
</body>

</html>
