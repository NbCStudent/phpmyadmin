<?php

// Function to check the user login to access the platform

function checklogin($db,$login,$pass)
{
  $sql = $db->query("SELECT User,Password FROM user WHERE User = '".$login."' AND Password = PASSWORD('".$pass."')");
  $result = $sql->fetch(PDO::FETCH_ASSOC);
  if (!empty($result)) {
    $_SESSION['User'] = $result['User'];
    return (true);
  }
  else {
    return (false);
  }
}
function logout()
{
  unset($_SESSION['User']);
	session_destroy();
}
