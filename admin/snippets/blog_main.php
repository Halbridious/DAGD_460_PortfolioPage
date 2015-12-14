<?php
//blog page
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)

require_once( 'admin/cms.php' );

?>
<!doctype html>
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
                        <cms:pages masterpage="blog_entry.php" folder=k_folder_name start_on=k_archive_date stop_before=k_next_archive_date paginate="1" limit="4">
                        <div class="col4">
                            <div class="header"><a href="<cms:show k_page_link/>"><cms:show k_page_title /></a></div>
                            <div class="content"><cms:excerptHTML count="50"><cms:show blog_content /></cms:excerptHTML></div>  
                            <div class="button content"><a href="<cms:show k_page_link />">Show More</a></div>
                        </div>
                        <div class="col1">
                            <div class="header">Meta</div>
                            <div class="content">Date:</div>
                            <div class="content"><cms:date k_page_date format="jS M, y" /></div><!--date-->
                            <div class="content">Category:</div>
                            <div class="content"><cms:show k_page_foldertitle /></div><!--topic-->
                        </div>
                        <cms:if k_paginated_bottom >
                            <div class="col4">
                                <div class="col1 button"><cms:if k_paginate_link_prev ><a href="<cms:show k_paginate_link_prev />">Newer Posts</a></cms:if></div>
                                <div class="col3"></div>
                                <div class="col1 button"><cms:if k_paginate_link_next ><a href="<cms:show k_paginate_link_next />">Older Posts</a></cms:if></div>
                            </div>
                            <div class="col1"></div>
                        </cms:if>
                        </cms:pages>
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
<?php COUCH::invoke(); ?>