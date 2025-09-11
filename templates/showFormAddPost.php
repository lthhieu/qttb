<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm tin mới</title>
    <link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
    <form class="form-add-post" action="?action=adding" method="post">
        <h2>Thêm tin mới</h2>
        <span>Tiêu đề:</span>
        <input type="text" name="title" />
        <span>Nội dung:</span>
        <textarea name="content"></textarea>
        <span>Ảnh nền:</span>
        <input type="text" name="thumbnail" />
        <!-- <input type="file" name="thumbnail" /> -->
        <span>Ngày đăng</span>
        <input type="date" name="createAt" />
        <button type="submit">Thêm tin</button>
    </form>
</body>
</html>