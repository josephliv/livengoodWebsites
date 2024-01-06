<style>
        .form-container {
            background-color: #EEEEEE;
            padding: 10px;
            font-size: var(--text-size);
        }
    </style>
<?php
$ref=$_SERVER['HTTP_REFERER'];
$pageRef="https://".$_SERVER['SERVER_NAME'].$_SERVER['REQUEST_URI'];
?>


        <div class="form-container">
            <form action="https://www.aiop-response.com/subscribe.php" method="post">
                <div class="form-group">
                    <label for="name" style="color: #000000;">Name:</label>
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="form-group">
                    <label for="email" style="color: #000000;">Email:</label>
                    <input type="text" class="form-control" id="email" name="email">
                </div>
                <button type="submit" class="btn btn-outline-primary btn-block mt-2">Be Informed</button>
                <div class="text-center" style="color: #000000; font-size: 12px;">
                    Powered by AIOP
                    <br>
                    <a href="https://aiop-response.com/p_p_d_p.php" target="_blank">
                        <img height="40" src="https://aiop-response.com/art.php?p=<?php echo urlencode($pageRef); ?>&r=<?php echo urlencode($ref); ?>&cp=113542">
                        <br>More Info Privacy Policy
                    </a>
                </div>
                <input type="hidden" name="user_id" value="113542" />
                <input type='hidden' name='came_from' value='<?php echo $ref; ?>'>
                <input type='hidden' name='page' value='<?php echo $pageRef; ?>'>
            </form>
        </div>
 
