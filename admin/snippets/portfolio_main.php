<?php
//individual portfolio pages
//Jacob Hamberg
//Project: DAGD 460 Final (Professor Nick Pattison)

require_once( 'admin/cms.php' );

?>
<!doctype html>
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
                <cms:pages masterpage="portfolio_entry.php" folder=k_folder_name start_on=k_archive_date stop_before=k_next_archive_date paginate="1" limit="4">
                <div class="col1"></div>
                <div class="col3">
                    <div class="header"><a href="<cms:show k_page_link />"><cms:show k_page_title /></a></div>
                    <div class="content"><img class="portfolio" src="<cms:show portfolio_content />"></div>
                    <div class="content">Outside Link:<a href="<cms:show link />">Here</a></div>
                    <div class="content"><cms:show description /></div>
                    <cms:if k_paginated_bottom >
                        <div class="col1 button"><cms:if k_paginate_link_prev ><a href="<cms:show k_paginate_link_prev />">Newer Posts</a></cms:if></div>
                        <div class="col3"></div>
                        <div class="col1 button"><cms:if k_paginate_link_next ><a href="<cms:show k_paginate_link_next />">Older Posts</a></cms:if></div>
                    </cms:if>
                </div>
                <div class="col1"></div> 
                <div class="clear"></div>
                </cms:pages>
            </div>
            <!--sidebar-->
            <div class="col1">
                <cms:embed "portfolio_sidebar.php" />
            </div>
        </div>
    </div>
</body>
</html>
<?php COUCH::invoke(); ?>