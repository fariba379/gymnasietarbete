<?php

require_once 'config/db.php';

function insertForumpost($username, $message) {
    $sql = "insert into forum (username, message) 
    values (:username, :msg)";

    global $forum;

    $stmt = $forum->prepare($sql);

    $stmt->bindValue(':username', $username);
    $stmt->bindValue(':msg', $message);

    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}

function getForumPosts() {
    $sql = "select * from forum order by time desc";

    global $forum;
    $stmt = $forum->prepare($sql);
    $stmt->execute();
    return $stmt;
    
}
function login ($username,$password) {
        global $forum;
           
        $sql = "SELECT * FROM user
        WHERE username = :username
        AND password = :password";
    $stmt = $forum-> prepare($sql);
    $stmt->bindvalue (':username', $username);
     $stmt->bindvalue (':password', $password);
     $stmt->execute();
     if ($stmt->rowCount () > 0) {
return true;
}else {
return false;
 }

    }   
    function addUser($felt){ 
    //INSERT INTO `user`(`username`, `name`, `email`, `password`)
    // VALUES ('[value-1]','[value-2]','[value-3]','[value-4]')
    global $forum;
    $sql="INSERT INTO `user`(username, name, email, password )
    VALUES  (:username,:name,:email,:password)";
    $stmt = $forum->prepare($sql);

    $stmt->bindValue(':username', $felt['username']);
    $stmt->bindValue(':name',$felt ['name']);
     $stmt->bindValue(':email', $felt['email']);
      $stmt->bindValue(':password', $felt['password']);
try {
    return $stmt->execte();
}
catch(Exception $e){
    return false;
}
  //  if ($stmt->execute()) {
     //   return true;
  //  } else {
     //   return false;
 //   }
  }