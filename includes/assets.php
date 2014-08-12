<?php
  define("ENV", "development");
  define("PRODUCTION_JS", "production.js");
  define("PRODUCTION_CSS", "main.css");

  function get_javascripts() {
    if(ENV == "development") {
      $script = "";
      error_log($_SERVER['DOCUMENT_ROOT'] . "/javascripts/vendor/*.js");
      foreach(glob($_SERVER['DOCUMENT_ROOT'] . "/javascripts/vendor/*.js") as $file) {
        $script .= "<script src='/javascripts/vendor/". basename($file) . "'></script>\n";
      }
      foreach(glob($_SERVER['DOCUMENT_ROOT'] . "/javascripts/src/*.js") as $file) {
        $script .= "<script src='/javascripts/src/". basename($file) . "'></script>\n";
      }
    } else {
      $script = "<script src='/javascripts/" . PRODUCTION_JS . "'></script>";
    }

    echo $script;
  }


  function get_stylesheets() {
    if(ENV == "development") {
      $css = "";
      error_log($_SERVER['DOCUMENT_ROOT'] . "/stylesheets/vendor/*.css");
      foreach(glob($_SERVER['DOCUMENT_ROOT'] . "/stylesheets/vendor/*.css") as $file) {
        $css .= "<link rel='stylesheet' href='/stylesheets/vendor/". basename($file) . "'>\n";
      }
      foreach(glob($_SERVER['DOCUMENT_ROOT'] . "/stylesheets/src/*.css") as $file) {
        $css .= "<link rel='stylesheet' href='/stylesheets/src/". basename($file) . "'>\n";
      }
    } else {
      $css = "<link rel='stylesheet' href='/stylesheets/" . PRODUCTION_CSS . "'>";
    }

    echo $css;
  }
?>