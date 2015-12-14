<?php
//Contacts page
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)

require_once( 'admin/cms.php' );

?>
<!doctype html>
<html>
<cms:template title='contact' />  
<head>
    <meta charset="UTF-8">
    <title>JacobHamberg's Contact</title>
    <link href="style/style.css" rel="stylesheet">
    <script src="js/less.min.js"></script>
</head>
<body>
    <div id="body">
        <header id="head" class="col5">
            <a href="index.php">Jacob Hamberg: The Website</a>
        </header>
        <nav id="mainNav" class="col5">
            <ul id = "navList">
                <li id="blog" class="col1"><a href="blog_entry.php">BLOG</a></li>
                <li class="col1"></li>
                <li id="contact" class="col1 current"><a href="contact.php" class="current">CONTACT</a></li>
                <li class="col1"></li>
                <li id="portfolio" class="col1"><a href="portfolio_entry.php">PORTFOLIO</a></li>
            </ul>         
        </nav>
        <div id="backdrop" class="col5">
            <div class = "col4">
                <div class = "col1"></div>
                <div class = "col3">
                    <div class = "header">
                        Contact Me in the Following Places:
                    </div>
                    <div class = "content">
                        Email: <cms:editable name="email" type="text" validator="email" />
                    </div>
                    <div class = "content">
                        Twitter: <cms:editable name="twitter" type="text" />
                    </div>
                </div>
            </div>
            <div id="twitter" class ="col1">
                <a class="twitter-timeline" data-dnt="true" href="https://twitter.com/Halbridious" data-widget-id="666081418607366144" width="200">Tweets by @Halbridious</a>
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div> 
        </div>
    </div>

</body>
</html>
<?php COUCH::invoke(); ?>