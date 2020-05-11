<?php
     ob_start();
     session_start();
     $pageTitle = 'Homepage';

     include 'init.php';
?>
     
<div class="container">
        <div class="row">
            <?php
                $allItems = getAllFrom('*', 'items', 'Where Approve = 1', '', 'Item_ID');   
                foreach ($allItems as $item) {
                    echo '<div class="col-sm-6 col-md-3">';
                        echo '<div class="thumbnail item-box">';
                            echo '<span class="price-tag">$' . $item['Price'] .'</span>';
                            echo '<img  class="img-responsive" src="ima.png" alt="" />';
                            echo '<div class="caption">';
                                echo '<h3><a href="Item.php?itemid='. $item['Item_ID'] .'">' . $item['Name'] . '</a></h3>';
                                echo '<p>' . $item['Description'] . '</p>';
                                echo '<div class="date">' . $item['Add_Date'] . '</div>';
                            echo '</div>';
                        echo '</div>';
                    echo '</div>';
                }
            ?>
        </div>
</div>

<?php
     include $tep . 'footer.php';  
     ob_end_flush();
?>