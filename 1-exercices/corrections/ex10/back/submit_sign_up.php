<?php

try {
  header('Content-Type: application/json');
  require_once dirname(__FILE__).'/classes/User.php';
  require_once dirname(__FILE__).'/classes/File.php';
  require_once dirname(__FILE__).'/classes/UserFormValidator.php';

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
    $userFile = new File();
    $userFilename = dirname(__FILE__).'/data/users/'.$user->getLastname().'_'.uniqid().'.json';
    $userFile->setFilename($userFilename);
    $userFile->createJson($user);
    echo json_encode(['message' => 'OK']);
  } else {
    echo '{"message":"KO"}';
  }
} catch(Exception|Error $e) {
  echo json_encode(['error' => 'contact admin please ! ']);
}