<?php
class File {
  public function __construct(private ?string $filename = null) {}

  public function downloadImg(array $data) {
    $pic = $data['tmp_name'];
    $tmp = $pic??null;
    if($tmp === null) {
      throw new Exception('file has not been uploaded');
    }
    $filename = $this->getFilename();
    $extension = pathinfo($data['name'], PATHINFO_EXTENSION);
    if(preg_match('@jpeg|jpg|png@i', $extension) != 1) {
      throw new Exception('only Images .jpeg, .jpg, .png');
    }
    
    if(!move_uploaded_file($data['tmp_name'], $filename)) {
      throw new Exception('can\'t upload file');
    }
  }

  public function createJson(User $user) {
    $fp = fopen($this->filename, 'w');
    fwrite($fp, $user);
    fclose($fp);
  }

  /**
   * Get the value of filename
   */ 
  public function getFilename()
  {
    return $this->filename;
  }

  /**
   * Set the value of filename
   *
   * @return  self
   */ 
  public function setFilename($filename)
  {
    $this->filename = $filename;

    return $this;
  }
}