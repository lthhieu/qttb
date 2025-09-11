<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách Tin tức</title>
    <link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
    
    <?php foreach($posts as $post): ?>
        <div class='item-post'>
            <img class='thumbnail-post' src='<?php echo $post['thumbnail']?>' />
            <div>
                <h2><?php echo $post['title']?></h2>
            <!-- <p><?php echo $post['content']?></p> -->
            <p>Ngày đăng: <?php echo $post['createAt']?></p>
            </div>
        </div>
    <?php endforeach; ?>

</body>
</html>