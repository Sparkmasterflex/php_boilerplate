<?php
  require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/assets.php";
  /*
   * Contact forms post to this file
   *   => this handles this post from an $.ajax request
   */
  if($_POST) {
    header('Content-Type: application/json');
    echo json_encode(mail_contact($_POST));
  }

  /* An easy way to include a partial housed int the includes directory
   *
   * Parameters:
   * $partial::String
   */
  function render($partial) {
    include $_SERVER['DOCUMENT_ROOT'] . "/includes/_" . $partial . ".php";
  }

  /* Validates information required builds email and sends to given email
   *
   * Parameters:
   * $partial::String
   *
   * Returns:
   * Boolean
   */
  function mail_contact($params) {
    $name    = $params['name'];
    $email   = $params['email'];
    $message = $params['message'];

    if($name == "" || $email == "" || $message == "") {
      return false;
    }


    // creates body of email
    $body = "
      name: $name\n
      email: $email\n
      message:\n\n
      $message";

    // emails form and returns true/false base on success of email
    return mail("fake@fake.com", "Contact from sparkmasterflex.com", $body, "From: $email") ? "true" : "false";
  }
?>