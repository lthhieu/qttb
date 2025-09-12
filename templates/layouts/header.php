<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Trang tin tức</title>
    <link rel="stylesheet" href="styles/styles.css" />
</head>
<body>
    <header>
        <div class="header-content">
            <div class="hamburger-menu" id="hamburger-menu">&#9776;</div>
            <h1>Trang tin tức QTTB</h1>
            <nav class="desktop-nav">
                
                    <a href="/qttb/news">Tin tức</a> |
                    <a href="/qttb/users">Nhân sự</a> |
                    <?php if (isset($_SESSION['user'])): ?>
                        <a href="/qttb/add-news">Thêm tin</a> |
                        <div class="dropdown">
                            <span class="dropdown-toggle">
                                <?php echo htmlspecialchars($_SESSION['user']['username']); ?>
                            </span>
                            <div class="dropdown-menu">
                                <a href="/qttb/logout">Đăng xuất</a>
                            </div>
                    </div>
                    <?php else: ?>
                        <a href="/qttb/login">Đăng nhập</a>
                    <?php endif; ?>
                
            </nav>
            <!-- <div class="hamburger-menu" id="hamburger-menu">&#9776;</div> -->
        </div>
        <nav class="mobile-nav" id="mobile-nav">
            <span class="close-btn" id="close-btn">&times;</span>
            <a href="/qttb/news">Tin tức</a>
            <a href="/qttb/users">Nhân sự</a>
            <?php if (isset($_SESSION['user'])): ?>
                        <a href="/qttb/add-news">Thêm tin</a>
                        <a href="/qttb/logout">Đăng xuất</a>
                    </div>
                    <?php else: ?>
                        <a href="/qttb/login">Đăng nhập</a>
                    <?php endif; ?>
        </nav>
    </header>
    <main>