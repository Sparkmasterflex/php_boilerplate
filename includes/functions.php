<?php
  function render($partial) {
    include $_SERVER['DOCUMENT_ROOT'] . "/includes/_" . $partial . ".php";
  }
?>