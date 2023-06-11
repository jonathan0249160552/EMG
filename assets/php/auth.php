<?php

require_once 'config.php';
class Auth extends Database
{

    public function sendImage($post_code, $user_id, $filename)
    {
        $sql = "INSERT INTO image (post_id,cuser_id,image_path) VALUES (:post_code,:user_id,:filename)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'post_code' => $post_code, 'user_id' => $user_id, 'filename' => $filename]);

        return true;
    }


    

    // //Current User In Session
    // public function currentUser($user_name)
    // {
    //     $sql = "SELECT * FROM  users WHERE user_name =:user_name AND deleted IS NULL";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute(['user_name' => $user_name]);
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //     return $row;
    // }


    // // Check if use name fo customer already registered`

    // public function user_name_exist($user_name)
    // {
    //     $sql = "SELECT user_name  FROM customers WHERE user_name = :user_name ";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute(['user_name' => $user_name]);
    //     $result = $stmt->fetch(PDO::FETCH_ASSOC);


    //     return $result;
    // }


    // // Register New User

    // public function register_customer($user_id, $name, $user_name, $email, $phone, $password)
    // {
    //     $sql = "INSERT INTO customers (user_id,name,user_name,email,phone,password) VALUES (:user_id,:name,:user_name,:email,:phone,:password)";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute([
    //         'name' => $name, 'user_name' => $user_name, 'email' => $email,
    //         'phone' => $phone, 'password' => $password, 'user_id' => $user_id
    //     ]);

    //     return true;
    // }



    // //login existing user 
    // public function login_customer($user_name)
    // {
    //     $sql = "SELECT user_name,password FROM customers WHERE user_name = :user_name AND deleted IS NULL";
    //     $stmt = $this->conn->prepare($sql);
    //     $stmt->execute(['user_name' => $user_name]);
    //     $row = $stmt->fetch(PDO::FETCH_ASSOC);

    //     return $row;
    // }


}