
<div class="container" id="hero">
    <div class="site-title animated-title">
        <h1 class="<?php if($page != '/') echo 'main-page-title';?>">

            <?php if ($page == "/" || $page == "/testimonials") {
                    echo '<div class="main-title">
                    <span class="title-first-letter">G</span>oing
                    <span class="title-first-letter">B</span>eyond
                    <span class="title-first-letter">Y</span>our
                    <span class="title-first-letter">E</span>xpectations
                    '; 
            } else echo $main_title; 
                    ?>

        </h1>
        <h2 class="home-sub-title <?php 
                // This is the bring in the class if 404 is detected
                if($sub_title == '404') 
                {
                    echo "main-404-title"; // the class name
                } else {
                    echo ''; // no class which is default
                }
                ?>">
            <!-- puts in the current heading from index file -->

          
             <?= $sub_title; ?>
        </h2>
    </div>
   
                    

</div>