<?php

try {
  // header('Content-Type: application/json');
  require_once dirname(__FILE__).'/classes/User.php';
  require_once dirname(__FILE__).'/classes/File.php';
  require_once dirname(__FILE__).'/classes/UserFormValidator.php';
  require_once dirname(__FILE__).'/classes/UserDatabase.php';
  require_once dirname(__FILE__).'/classes/DB.php';
  require_once dirname(__FILE__).'/classes/Crypt.php';

  $_POST = array_map('htmlspecialchars', $_POST);
  $user = new User(
    $_POST['firstname'],
    $_POST['lastname'],
    $_POST['email'],
    $_POST['pwd'],
    (int) $_POST['age'],
    $_POST['city'],
    $_POST['country'],
  );
  $userFormValidator = new UserFormValidator($user);
  if(!$userFormValidator->isNotFullyFilled() && $userFormValidator->checkwithRegex()) {
    $img = new File();
    $picture = $_FILES['picture'];
    $img->setFilename(dirname(__FILE__).'/../front/images/'.$picture['name']);
    $img->downloadImg($picture);
    // new ex11 from here
    $dbParams = require_once (dirname(__FILE__)).'/config/parameters.php';
    $db = new DB($dbParams);
    $auth = new UserDatabase(new Crypt(), $user, $db);
    $result = $auth->signup();
    if(isset($result['message']) && $result['message'] === 'ok') {
      echo json_encode(['message' => 'OK']);
      die();
    }
    // end new
  }
  $error['message'] = $result['message']??'KO';
  echo json_encode($error);
} catch(Exception|Error $e) {
  echo json_encode(['error' => 'contact admin please ! ']);
}