<?php

class AuthView{
    public function showLoginPage(){
        require_once('templates/auth/login.php');  
    }
    // public function showFormAddPost(){
    //     require_once('templates/showFormAddPost.php');  
    // }
    // public function notifyAddPost($status){
    //     if($status){
    //         echo "Thêm tin thành công, <a href='/qttb/news'>Xem danh sách tin</a>";
    //     } else {
    //         echo "Thêm tin thất bại";
    //     }  
    // }
}

?>