<?php
//individual portfolio pages
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)

require_once( 'admin/cms.php' );

?>
<cms:template title='portfolio_entry' clonable='1'> 
    <cms:editable name="portfolio_content" type="image" />
    <cms:editable name="link" type="text" />
    <cms:editable name="description" type="richtext" />
    <cms:folder name="3d" title="3D" />
    <cms:folder name="2d" title="2D" />
    <cms:folder name="programming" title="Programming" />
</cms:template>
<!doctype html>
<cms:if k_is_page>
<html>
<head>
    <meta charset="UTF-8">
    <title>JacobHamberg's Portfolio Entry</title>
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
                <li id="contact" class="col1"><a href="contact.php">CONTACT</a></li>
                <li class="col1"></li>
                <li id="portfolio" class="col1"><a href="portfolio_entry.php" class="current">PORTFOLIO</a></li>
            </ul>         
        </nav>
        <div id="backdrop" class="col5">
            <div class="col4">
                <div class="col4">
                    <div class="header"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></div>
                    <div class="content"><img class="portfolio" src="<cms:show portfolio_content />"></div>
                    <div class="content">Outside Link:<a href="<cms:show link />">Here</a></div>
                    <div class="content"><cms:show description /></div>
                </div>
                <div class="col1">
                    <div class="header">Meta</div>
                    <div class="content">
                        <div>Date:</div>
                        <cms:date k_page_date format="jS M, y" />
                        <div>Category:</div>
                        <cms:show k_page_foldertitle />
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <!--sidebar-->
            <div class="col1">
                <cms:embed "portfolio_sidebar.php" />
            </div>
        </div>
    </div>
</body>
</html>
<cms:else/>
    <cms:embed "portfolio_main.php"/>
</cms:if>
<?php COUCH::invoke(); ?>