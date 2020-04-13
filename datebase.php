<?php
// ログイン処理
function login($email, $password){
  $db = new PDO('mysql:host='us-cdbr-iron-east-01.cleardb.net';dbname='heroku_d13ac0e1fbf30ae, b7f64182afe5ac, fea367ae);
  $db->query('SET NAMES utf8');
  $sql = "SELECT *  FROM accounts  WHERE email = :email AND  password = :password";
  $stt = $db->prepare($sql);
  $stt->bindParam(':email', $email);
  $stt->bindParam(':password', $password);
  $stt->execute();
  while($row=$stt->fetch()){
    $result['id'] = $row['id'];
    $result['name'] = $row['name'];
    $result['email'] = $row['email'];
    $result['password'] = $row['password'];
  }
  if(isset($result)){
    return $result;
  }
}
// ログイン認証
function authCheck($email, $password){
  $db = new PDO('mysql:host='us-cdbr-iron-east-01.cleardb.net';dbname='heroku_d13ac0e1fbf30ae, b7f64182afe5ac, fea367ae);
  $db->query('SET NAMES utf8');
  $sql = "SELECT * FROM accounts WHERE email = :email AND password = :password ";
  $stt = $db->prepare($sql);
  $stt->bindParam(':email', $email);
  $stt->bindParam(':password', $password);
  $stt->execute();
  while($row=$stt->fetch()){
    $result['id'] = $row['id'];
    $result['name'] = $row['name'];
    $result['email'] = $row['email'];
    $result['password'] = $row['password'];
  }
  if(isset($result)){
    return $result;
  }
}
?>
