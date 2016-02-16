<!DOCTYPE html>
<!--Design Created & Owned by H&H Design, licenced freely under a CCL-->
<!--Last Updated 14 Dec 15, at the request of V. Davis-->
<!--This domain is owned by Virginia Good Sam, and the subdomain operated by the Sundowners Chapter of VA Good Sam with the limited permission of R. Boughner.-->

<html>

<head>
    <link rel="stylesheet" type="text/css" href="../style.css">
    <link rel="stylesheet" type="text/css" href="schedule-style.css">
    <link rel="shortcut icon" href="../favicon.ico" type="image/x-icon">
    <link rel="icon" href="../favicon.ico" type="image/x-icon">

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
                <h1>
                    <select id="yearSelect" style="height:25px; line-height:25px; font-size:20px;">
                    <?php
                        for ($y = date("Y"); $y >= 2016; $y--) {
                            echo '<option value="'.$y.'">'.$y.'</option>';
                        }
                    ?>
                        <option value="2011">2011</option>
                    </select>
                 Tentative Camping Schedule</h1>
                <p>Camping weekends are usually the 2nd weekend of the month.   Dates or locations may change if necessary.   Please call one of the numbers listed to confirm each camping weekend. </p> 

                <p>Each unit is responsible for making their own reservation at the campground.</p>  

                <div id="displayedSchedule">
                    <?php
                        include 'formattedSchedule.php';
                        echo '<div id="2011" class="year" style="display:none">';
                        retrieveYearSchedule("2011");
                        echo '</div>';
                        for ($y = date("Y"); $y >= 2016; $y--) {
                            echo '<div id="'.$y.'" class="year" style="display:none">';
                            retrieveYearSchedule($y);
                            echo '</div>';
                        }
                    ?>
                </div>

                <br><br>Events may be added at any time, check back later!
            </section>
        </div>
    </div>

    <footer>
        <div id="footerContent">
            <?php
                echo 'Copyright &copy Sundowner Sams, '.date("Y");
            ?>
        </div>
    </footer>

</body>

</html>
