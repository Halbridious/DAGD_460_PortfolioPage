<div class="sidebar">
    <div class="header">Types:</div>
    <div class="content">
        <ul>
            <li><a href="portfolio_entry.php">All</a></li>
        <cms:folders masterpage="portfolio_entry.php">
            <li><a href="<cms:show k_folder_link />"><cms:show k_folder_title /></a></li>
        </cms:folders>
        </ul>
    </div>
    <div class="header">Archives:</div>
    <div class="content">
        <ul>
            <li><a href="portfolio_entry.php">Latest</a></li>
        <cms:archives masterpage="portfolio_entry.php">
            <li><a href="<cms:show k_archive_link />"><cms:show k_archive_date format="F Y" /></a></li>
        </cms:archives>
        </ul>
    </div>
    
</div>