<?php


function user_data($user_id) {
    $data= array();
    $user_id=(int)$user_id;

    $func_num_args=func_num_args();
    $func_get_args=func_get_args();

    if ($func_num_args > 1) {
        unset($func_get_args[0]);

        $fields='`' . implode('`, `',$func_get_args) . '`';

        $conn= mysqli_connect('localhost','root','','warranty_management');
        $query=mysqli_query($conn,"SELECT $fields FROM users WHERE user_id=$user_id");
        $data=mysqli_fetch_assoc($query);
        return $data;
       die();

    }

}


function logged_in() {

    return (isset($_SESSION['user_id'])) ? true : false;
}

function user_id_from_username($username) {
    $conn= mysqli_connect('localhost','root','','warranty_management');
    $username=sanitize($username);
    $query=mysqli_query($conn,"SELECT user_id FROM users WHERE username = '$username'");
    $fetcharray=mysqli_fetch_array($query,MYSQLI_NUM);
    return $fetcharray[0];
}




function login($username,$password) {
    $conn= mysqli_connect('localhost','root','','warranty_management');
    $user_id=user_id_from_username($username);

    $username=sanitize($username);
    $password=md5($password);

    $query=mysqli_query($conn,"SELECT * FROM users WHERE username= '$username' AND password='$password'");
    $result=mysqli_num_rows($query);
    return ($result==1) ? $user_id :false;
}


?>