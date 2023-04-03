<?php 

class User {

  protected $table = "users";
  public $errors = [];

  public function validate($data) {
    $this->errors = [];

    if(empty($data['firstname'])) {
      $this->errors['firstname'] = "First Name is requried";
    }
    if (empty($data['lastname'])) {
      $this->errors['lastname'] = "Last Name is requried";
    }
    if (empty($data['email'])) {
      $this->errors['email'] = "Email is requried";
    }
    if (empty($data['password'])) {
      $this->errors['password'] = "Password is requried";
    }
    if ($data['password'] !== $data["confirm_password"]) {
      $this->errors['password'] = "Passwords Do Not Match";
    }
    if (empty($data['terms'])) {
      $this->errors['terms'] = "Please Accept The Terms";
    }

    if (empty($this->errors)) {
      return true;
    }

    return false;
  }
}