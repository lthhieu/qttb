<?php


class AuthController{
    public function showFormLogin(){
        require_once('views/auth.php');
        $authView = new AuthView();
        $authView->showLoginPage();
    }
    public function doLogin(){
        require_once('models/auth.php');
        $authModle = new AuthModel();

        $username = $_POST['username'] ?? '';
        $password = $_POST['password'] ?? '';

        $result = $authModle->login($username, $password);
        if($result){
            // Đăng nhập thành công
            session_start();
            $_SESSION['user'] = $result;
            header('Location: /qttb/news');
            exit;
        } else {
            // Đăng nhập thất bại
            echo '<p style="color:red;">Sai tên đăng nhập hoặc mật khẩu!</p>';
            require_once('views/auth.php');
            $authView = new AuthView();
            $authView->showLoginPage();
        }
    }
    public function logout() {
        session_start();
        session_unset();
        session_destroy();
        header('Location: /qttb/news');
        exit;
    }
}

?>