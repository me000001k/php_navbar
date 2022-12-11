<?php

    include_once 'include/functions.php';
    
?>
<!DOCTYPE html>
<html lang="ru">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Navigation</title>
        <link rel="stylesheet" href="css/styles.css">
    </head>
    <body>
        <header>
            <div class="categories">
                <ol>
                    
                    <?php
                    
                        foreach ($categories as $cat): ?>
                            
                            <li><a href="scripts/get_page.php?cat_id=<?=$cat['id']?>"><?=$cat['cat_name']?></a></li>
                        
                    <?php endforeach; ?>
                    
                </ol>
            </div>
        </header>
    </body>
</html>
