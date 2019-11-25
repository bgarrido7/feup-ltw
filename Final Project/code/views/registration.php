<?php

function createUser($name, $pword, $email, $bday, $profilePic) {
    $passwordhashed = hash('sha256', $pword);
    global $dbh;
    try {
  	  $stmt = $dbh->prepare('INSERT INTO Users(name, password, birthday, email) 
                            VALUES (:Username,:Password,:Birthday,:Email)');
  	  $stmt->bindParam(':Username', $name);
  	  $stmt->bindParam(':Password', $passwordhashed);
  	  $stmt->bindParam(':Email', $email);
  	  $stmt->bindParam(':Birthday', $bday);
      if($stmt->execute()){
        $id = getID($name);
        return $id;
      }
      else
        return -1;
    }catch(PDOException $e) { 
      return -1;
    } 
  }
//////////////////////isto é de sibd////////////////////////////////////
  $name = strip_tags($_POST['name']);
  $pword = $_POST['pword'];
  $hashedPword = hash('sha256', $pword);
  $email = $_POST['email'];
  $bday = $_POST['bday'];
  
  if (!$name || !$pword || !$repeatPword || !$email|| !$bday) {
      $_SESSION['error_message'] = 'All fields are mandatory!';
      $_SESSION['form_values'] = $_POST;
    //  header("Location: register.php");
  } else {
      try {
        if($pword!=$repeatPword){ //nao sei se é assim que se faz comparação
          $_SESSION['error_message'] = 'Passwords do not match';
        } 
        else if (isset($pword[2])) {
            createUser($name, $hashedPword, $email, $bday, $profilePic)
            $_SESSION['success_message'] = 'User registered with success!';
            //header("Location: index.php");
          }
          else{
              $_SESSION['error_message'] = 'Password needs to be 3 characters long';
         //     header("Location: register.php");
          }
      } catch (PDOException $e) {
          if (strpos($e->getMessage(), 'users_pkey') !== false)
              $_SESSION['error_message'] = 'Username already exists!';
              
          else
              $_SESSION['error_message'] = 'FAILLL!';

          $_SESSION['form_values'] = $_POST;
      //    header("Location: register.php");
      }
  }




  function createUser($name, $hashedPword, $bday, $email) {
    global $conn;
    $options = [
        'cost' => 12,
    ];
    $stmt = $conn->prepare('INSERT INTO Users VALUES (?, ?, ?, ?)');
    $stmt->execute(array($name, $hashedPword, $bday, $emial));
}

  ?>