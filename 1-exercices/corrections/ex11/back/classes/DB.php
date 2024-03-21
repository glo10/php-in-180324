<?php

class DB {
  protected PDO $pdo;
  private string $host;
  private string $name;
  private string $user;
  private string $password;
  private string $port;
  private const ERRORS_MESSAGES = [
    'connect' => 'Impossible d\'établir la connexion pour le moment',
    'select' => 'Impossible de récupérer les informations demandées',
    'request' => 'Impossible d\'effectuer l\'opération pour le moment',
    'duplicata' => 'Impossible de vous enregistrer pour le moment'
  ];

  public function __construct(array $params) {
    $this->host = $params['host'];
    $this->name = $params['name'];
    $this->user = $params['user'];
    $this->password = $params['password'];
    $this->port = $params['port'];
  }

  /**
   * Database connection 
   *
   * @return self
   */
  public function connect (){
    try {
      $this->pdo =  new PDO('mysql:host='.$this->host.';port='.$this->port.';dbname='.$this->name, $this->user, $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException) {
      die(self::ERRORS_MESSAGES['connect']);
    }
    return $this;
  }
  
  /**
   * Standard insert, update or delete request
   *
   * @param string $sql
   * @param array $values
   * @param string $successMessage
   * @param string $errorMessage
   * @return string
   */
  public function request(string $sql, array $values, string $successMessage = 'ok', string $errorMessage = self::ERRORS_MESSAGES['request']) {
    try {
      $stmt = null;
      $req = $this->pdo->prepare($sql);
      $stmt = $req->execute($values);
      if ($stmt) {
        return $successMessage;
      }
      throw new Exception($errorMessage);
    } catch(PDOException $e) {
      if(preg_match('/duplicata.+email/i', $e->getMessage()) === 1){
        throw new Error(self::ERRORS_MESSAGES['duplicata']);
      }
      throw new PDOException(self::ERRORS_MESSAGES['request']);
    }
  }
}