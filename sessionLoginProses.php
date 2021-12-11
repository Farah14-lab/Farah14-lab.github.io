<?php
        include "koneksi.php";

        $username=$_POST['username'];
        $password=$_POST['password'];

        $sql="Select * FROM user WHERE username ='$username' and password='$password'";
        $result=mysqli_query($connect, $sql);
        $cek=mysqli_num_rows($result);

        if($cek){
            session_start();
            $_SESSION['username'] = $username;
            $_SESSION['status'] = 'login';
            ?>
            Anda Berhasil Login Silahkan menuju
            <a href="homeSession.php">Halaman HOME</a><?php
        }else{
            ?>
            Gagal login, Silahhkaan Login Lagi
            <a href="sessionLoginForm.html">Halaman Login</a><?php 
            echo mysqli_error($connect);  
        }
?>