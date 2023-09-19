<?php

require_once 'config.php';
class Auth extends Database
{

    public function user_exist($username)
    {
        $sql = "SELECT username  FROM user WHERE username = :username ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['username' => $username]);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);


        return $result;
    }

    public function sendImage($post_code, $filename)
    {
        $sql = "INSERT INTO images (post_code,image_path) VALUES (:post_code,:image_path)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([
            'post_code' => $post_code, 'image_path' => $filename]);

        return true;
    }

    public function sendVideo($filename)
    {
        $sql = "INSERT INTO video (file_name) VALUES (:file_name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['file_name' => $filename]);

        return true;
    }


    public function sendReport($location,$emp_type,$description,$post_code,$gps,$contact,$phone,$name)
    {
        $sql = "INSERT INTO reported (location,emg_type,description,post_code,gps,contact,phone,name) VALUES
         (:location,:emg_type,:description,:post_code,:gps,:contact,:phone,:name)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['location' => $location,'emg_type' => $emp_type,'description'=>$description,'post_code'=>$post_code,'gps'=>$gps,'contact'=>$contact,'phone'=>$phone,'name'=>$name]);

        return true;
    }

    public function register($name,$username,$contact,$phone,$residence,$password,$val)
    {
        $sql = "INSERT INTO user (name,username,contact,phone,residence,password,admin) VALUES
         (:name,:username,:contact,:phone,:residence,:password,:admin)";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['name' => $name,'username' => $username,'contact'=>$contact,
        'phone'=>$phone,'residence'=>$residence,'password'=>$password,'admin'=>$val]);

        return true;
    }



    public function AllUsers()
    {
        $sql = "SELECT * FROM  user WHERE  deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allNotification()
    {
        $sql = "SELECT * FROM  notification WHERE deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function allNotificationUser($contact,$phone)
    {
        $sql = "SELECT * FROM  notification WHERE deleted IS NULL AND contact = '$contact' OR phone ='$phone' ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }


    public function userReport($contact,$phone)
    {
        $sql = "SELECT * FROM  reported WHERE deleted IS NULL AND contact= '$contact' OR phone ='$phone' ";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function AllReports()
    {
        $sql = "SELECT * FROM  reported  WHERE   deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function AllAdmins()
    {
        $sql = "SELECT * FROM  user  WHERE  admin= 1 AND deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $row = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $row;
    }

    public function changeStatus($id,$deleted,$table)
    {
        $sql = "UPDATE $table SET deleted = :deleted  WHERE id= :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id,'deleted'=>$deleted]);
        return true;
    }

    public function updateProfile($name,$username,$contact,$phone,$residence,$gender,$id)
    {
        $sql = "UPDATE user SET name = :name, username=:username,contact=:contact,phone=:phone,residence=:residence,gender=:gender  WHERE id= :id";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['id' => $id,'name'=>$name,'username'=>$username,'contact'=>$contact,'phone'=>$phone,'residence'=>$residence,'gender'=>$gender]);
        return true;
    }


       //Current User In Session
       public function currentUser($username)
       {
           $sql = "SELECT * FROM  user WHERE username =:username AND deleted IS NULL";
           $stmt = $this->conn->prepare($sql);
           $stmt->execute(['username' => $username]);
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
           return $row;
       }


       public function login_user($username)
       {
           $sql = "SELECT username,password FROM user WHERE username = :username AND deleted IS NULL" ;
           $stmt = $this->conn->prepare($sql);
           $stmt->execute(['username' => $username]);
           $row = $stmt->fetch(PDO::FETCH_ASSOC);
   
           return $row;
       }
   
     

       public function change_password($pass,$id){
        $sql = "UPDATE user SET password = :password WHERE id = $id AND deleted IS NULL";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute(['password'=>$pass]);
        return true;
      }
}

