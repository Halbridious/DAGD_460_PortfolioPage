<?php
//Home page
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hamworks homepage</title>
    <link href="style/grid.css" rel="stylesheet">
    <script src="jquery-2.1.4.min.js"></script>
</head>
<body>
    <div id="body">
        <header id="head" class="col5">
            <a href="home.php" class="current">Jacob Hamberg: The Website</a>
        </header>
        <nav id="mainNav" class="col5">
            <ul id = "navList">
                <li id="blog" class="col1"><a href="blog.php">BLOG</a></li>
                <li class="col1"></li>
                <li id="contact" class="col1"><a href="contact.php">CONTACT</a></li>
                <li class="col1"></li>
                <li id="portfolio" class="col1"><a href="portfolio.php">PORTFOLIO</a></li>
            </ul>         
        </nav>
        <div id="backdrop" class="col5">
            <div class="col1 picture empty"></div>
            <div class="col1 picture"><a href="imgs/Dapper-Finery.jpg" class="portLink" ><img src="imgs/Dapper-Finery.jpg"></a></div>
            <div class="col1 picture"><a href="imgs/Dapper-Finery.jpg" class="portLink" ><img src="imgs/Dapper-Finery.jpg"></a></div>
            <div class="col1 picture"><a href="imgs/Dapper-Finery.jpg" class="portLink" ><img src="imgs/Dapper-Finery.jpg"></a></div>
            <div class="col1 picture empty"></div>
            
            <?
            /*
            *PHP LOOP is going to find total number of elements in the portfolio library
            *starting with an empty column, it will make a box for the header image of each element.  
            *every 3rd element will be followed by TWO "col1" elements for spacing
            *
            *the picture should be a random snapshot of the element
            */
            
            /*psuedocode until i figure out how to integrate wordpress
            *
            *$portfolioArray-> get portfolio table length
            *
            *for ($i = 0; i < $portfolioArray.length(); i++){
            *   insert <div class="col1 picture"><a href="$portfolioArray[i] page link" class="portLink" >
            *   <img src="$portfolioArray[i].img"></a></div>
            *
            *   if (i/3 % 0){
            *       insert <div class="col1 picture empty">
            *       insert <div class="col1 picture empty">
            *       
            *   }
            *
            *
            *}
            *
            *
            *
            *
            *
            *
            */            
            ?>
            
        </div>
    </div>

</body>
</html>