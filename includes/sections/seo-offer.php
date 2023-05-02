<!-- free SEO evaluation -->

        

            <div class="custom-section">
                
                <div class="custom-section-item shadow">
                    <?php
                    $ref = $_SERVER['HTTP_REFERER'];
                    $page_link = "http://" . $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
                    ?>
                    <form class="form" action="https://www.aiop-response.com/subscribe.php" method="post">
                        <div class="form-floating my-2">
                            <input class="form-control" class="text-muted" type="text" name="name" id="name">
                            <label for="name" >Full Name:</label>
                        </div>
                        <div class="form-floating my-2">
                            <input class="form-control" class="text-muted" type="email" name="email" id="email" >
                            <label for="email" >Email:</label>
                        </div>
                        <div class="form-floating my-2">
                            <input class="form-control" class="text-muted" type="text" name="phone" id="phone" >
                            <label for="phone" >Phone:</label>
                        </div>
                        <div class="form-floating my-2">
                            <input class="form-control" class="text-muted" type="text" name="website-url" id="website-url" >
                            <label for="website-url" >Website URL:</label>
                        </div>
                        
                        <button type="submit" class="py-3 mt-4 btn btn-lg btn-primary">Get Your Evaluation!</button>
                           
                           <table>
                            <tr>
                                <td colspan="2" align="center">
                                    <font color="#000000">Powered by AIOP</font>
                                    <br><a href=https://aiop-response.com/p_p_d_p.php target=blank>
                                        <font color="#000000"><img src=https://aiop-response.com/art.php?p=<?= urlencode($page); ?>&r=<?= urlencode($ref); ?>&cp=118572><br>More Info Privacy Policy</font>
                                    </a>
                                </td>
                            </tr>

                            </table>
                            <input type="hidden" name="user_id" value="118572" />

                            <input type='hidden' name='came_from' value='<?= $ref; ?>'>
                            <input type='hidden' name='page' value='<?= $page_link; ?>'>
                    </form>
                </div>
            </div>
  
