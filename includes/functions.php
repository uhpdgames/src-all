<?php
//this is for database connection
require_once('database.php');


//this is for checking the user
function checkUser($data)
{
    $db = $GLOBALS['db'];
    $username = mysqli_real_escape_string($db, $data['username']);
    $password = mysqli_real_escape_string($db, $data['password']);
    $password = md5 ($password);

    $query = "SELECT * FROM users_aff WHERE username='$username' AND password='$password'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);

    if (count($user) > 0) {
        return $user;
    } else {

        return false;
    }
}


//this is for checking email
function checkEmail($data)
{
    $db = $GLOBALS['db'];
    $email_id = mysqli_real_escape_string($db, $data['email_id']);
    $query = "SELECT * FROM users WHERE email_id='$email_id'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery, MYSQLI_ASSOC);
    if (count($user) > 0) {
        return true;
    } else {

        return false;
    }
}

//this is for checking the user
function checkRefCode($data)
{
    $db = $GLOBALS['db'];
    $ref_code = mysqli_real_escape_string($db, $data['ref_code']);

    $query = "SELECT * FROM users_aff WHERE user_code='$ref_code'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery) ?? array();
    if (count($user) > 0) {
        return true;
    } else {
        return false;
    }
}

//this id for generate user code
function genUserCode()
{
    $str = "AB1CDE2FG3HI4JK5LM6NO7PQ8RS9TU0VQXYZ" . time();
    $str = str_split($str, 1);
    $l = count($str);
    $user_code = '';
    for ($i = 0; $i < 6; $i++) {
        $tn = rand(0, $l);
        $user_code .= $str[$tn];
    }

    return $user_code;

}


 function register($data)
{

    $db = $GLOBALS['db'];
    $user = array();
    $user['errors'] = array();
    $full_name = mysqli_real_escape_string($db, $data['ten']);
    $username = mysqli_real_escape_string($db, $data['username']);
    $gender = mysqli_real_escape_string($db, $data['gioitinh']);
    $birthday = mysqli_real_escape_string($db, $data['ngaysinh']);
    $email_id = mysqli_real_escape_string($db, $data['email']);
    $password = mysqli_real_escape_string($db, $data['password']);
    $password = md5 ($password);
    $phone = mysqli_real_escape_string($db, $data['dienthoai']);
    $address = mysqli_real_escape_string($db, $data['diachi']);
    $date_create = date("Y-m-d H:i:s");


    if ($full_name == '' || $email_id == '' || $password == '') {
        $user['errors'][] = "all fields are required !";
    }
    /*   if(checkEmail($data)){
           $user['errors'][]="User already exists";
       }*/


    if (count($user['errors']) < 1) {
        $query = "INSERT INTO users_aff(name,username,password,gender,birthday,email,phone,address,date_create) ";
        $query .= "VALUES('$full_name','$username','$password','$gender','$birthday','$email_id','$phone','$address','$date_create')";
        $runQuery = mysqli_query($db, $query);

        if ($runQuery) {
            $user['success'] = $username . " is created successfully !";
        } else {
            $user['errors'][] = "Something went wrong !";
        }
    }
    return $user;


}


function getRefList($data)
{
    $db = $GLOBALS['db'];
    $ref_code = $data['ref_code'];
    $query = "SELECT * FROM users_aff WHERE ref_code='$ref_code'";
    $runQuery = mysqli_query($db, $query);
    $user = mysqli_fetch_all($runQuery, MYSQLI_ASSOC) ?? array();
    return $user;

}