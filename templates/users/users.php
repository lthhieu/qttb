<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nhân sự</title>
    <link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
    
    <?php foreach($users as $user): ?>
        <div class='item-post'>
            <div>
                <h2><?php echo $user['username']?></h2>
                <p><?php echo $user['fullname']?></p>
            </div>
        </div>
    <?php endforeach; ?>

</body>
</html>