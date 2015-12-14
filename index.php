<?php
//Home page
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)
require_once( 'admin/cms.php' );
?>

<!doctype html>
<html>
<cms:template title='Main'>
    
</cms:template> 
<head>
    <meta charset="UTF-8">
    <title>JacobHamberg's homepage</title>
    <link href="style/style.css" rel="stylesheet">
    <script src="js/jquery-2.1.4.min.js"></script>
    <script src="js/stuff.js"></script>
</head>
    
<body>
    <div id="body">
        <header id="head" class="col5">
            <a href="index.php" class="current">Jacob Hamberg: The Website</a>
        </header>
        <nav id="mainNav" class="col5">
            <ul id = "navList">
                <li id="blog" class="col1"><a href="blog_entry.php">BLOG</a></li>
                <li class="col1"></li>
                <li id="contact" class="col1"><a href="contact.php">CONTACT</a></li>
                <li class="col1"></li>
                <li id="portfolio" class="col1"><a href="portfolio_entry.php">PORTFOLIO</a></li>
            </ul>         
        </nav>
        
        <!-- this is the Couch CMS tag -->
        
        <div id="backdrop" class="col5">
            <div class="col1 picture empty"></div>
            <div class="col3">
                <cms:pages masterpage="portfolio_entry.php">
                    <div class="col13 picture portLink"><a href="<cms:show k_page_link />"><img src="<cms:show portfolio_content />"></a></div>
                </cms:pages>
            </div>
            <div class="col1 picture empty"></div>
            <div class="clear"></div>
        </div>
    </div>
</body>
</html>
<?php COUCH::invoke(); ?>