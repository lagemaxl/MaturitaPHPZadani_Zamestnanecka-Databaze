<?php
    if(isset($_POST)) {
        header('Content-Type: text/html; charset=utf-8');

        $connect = new mysqli("localhost", "root", "", "employeesdatabase", 3307) or die();
    
        if($connect->connect_errno){
            echo "Nastala chyba neumíte pracovat s DB: ".$connect->connect_error;
        }
        else{
            echo "Připojili jste se úšpěšně k DB";
        }

        $name = $_POST['name'];
        $surname = $_POST['surname'];
        $password = $_POST['password'];
        $email = $_POST['email'];
        $depId = $_POST['department_id'];

        $sql = 'INSERT INTO employees VALUES(NULL, \''.$name.'\', \''.$surname.'\', \''.$password.'\', \''.$email.'\', \''.$depId.'\');';

        $connect->query($sql);
        
        // redirect to login page
        header('Location: login.php');
        exit();
    }
?>
