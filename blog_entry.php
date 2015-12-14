<?php
//Individual blog pages
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)

require_once( 'admin/cms.php' );

?>
<cms:template title='blog_entry' clonable='1'> 
    <cms:editable name="blog_content" type="richtext"></cms:editable>
    <cms:folder name="content" title="Content Updates" />
    <cms:folder name="personal" title="Personal Updates" />
</cms:template>
<!doctype html>
<cms:if k_is_page>
<html>
<head>
    <meta charset="UTF-8">
    <title>JacobHamberg's Blogpage</title>
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
                <li id="blog" class="col1"><a href="blog_entry.php" class="current">BLOG</a></li>
                <li class="col1"></li>
                <li id="contact" class="col1"><a href="contact.php">CONTACT</a></li>
                <li class="col1"></li>
                <li id="portfolio" class="col1"><a href="portfolio_entry.php">PORTFOLIO</a></li>
            </ul>         
        </nav>
        <div id="backdrop" class="col5">
            <div class="col4">
                <div class = "header" style="text-align:center"> The BLOG </div>
                <div class="content">
                    <div><!--post container-->
                        <div class="col4">
                            <div class="header"><cms:show k_page_title /></div>
                            <div class="content"><cms:show blog_content /></div>
                        </div>
                        <div class="col1">
                            <div class="header">Meta</div>
                            <div class="content">
                                <div>Date:</div>
                                <div><cms:date k_page_date format="jS M, y" /></div>
                            </div><!--date-->
                            <div class="content">
                                <div>Cateory:</div>
                                <div>
                                    <cms:show k_page_foldertitle />
                                </div>                            
                            </div><!--topic-->
                        </div>
                    </div>
                    <div class="clear"></div>
                </div>                
            </div>
            
            <div class="col1">
               <cms:embed "blog_sidebar.php" />             
            </div>
        </div>
    </div>
</body>
</html>
<cms:else/>
    <cms:embed "blog_main.php"/>
</cms:if>
<?php COUCH::invoke(); ?>