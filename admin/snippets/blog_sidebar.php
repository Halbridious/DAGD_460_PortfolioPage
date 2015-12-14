<!--Blog Nav-->
<div class="sidebar">
    <div class ="header">
        Topics:
    </div>
    <div class="content">
        <ul>
            <cms:folders masterpage="blog_entry.php">
                <li><a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a></li>
            </cms:folders>
            <li><a href="blog_entry.php">All</a></li>
        </ul>
    </div>
    <div class ="header">
        Archives:
    </div>
    <div class="content">
        <ul>
            <li><a href="blog_entry.php">Latest</a></li>
            <cms:archives masterpage="blog_entry.php">
                <li><a href="<cms:show k_archive_link />"><cms:show k_archive_date format="F Y" /></a></li>
            </cms:archives>
        </ul>
    </div>
</div>