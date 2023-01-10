
<div class="container" id="hero">
    <div class="site-title">
        <h1 class="<?php if($page != '/') echo 'main-page-title';?>">
            <?= $page_title; ?>
            <?php if ($page == "/" || $page == "/testimonials") 
                    echo '<div class="main-title">
                    <span class="title-first-letter">L</span>ivengood
                    <span class="title-first-letter">W</span>ebsites
                    '; 
                    ?>
        </h1>
        <h2 class="my-4 home-sub-title <?php 
                // This is the bring in the class if 404 is detected
                if($page_heading == '404') 
                {
                    echo "main-404-title"; // the class name
                } else {
                    echo ''; // no class which is default
                }
                ?>">
            <!-- puts in the current heading from index file -->

          
             <?= $page_heading; ?>
        </h2>
    </div>
   
                    

</div>