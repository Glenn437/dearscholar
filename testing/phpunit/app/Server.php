<?php
// Copyright (c) 2020 P.M. Kruyen, Institute for Management Research, Radboud University, the Netherlands. 

namespace App;

require_once "vendor/autoload.php";
 
use GuzzleHttp\Client;

// create transaction class
class Server {
  // Properties
  public $options;

  // Methods
  public function set_options($options) {
    $this->options = $options;
  }
  public function post_server() {
    $client = new \GuzzleHttp\Client(["base_uri" => "0.0.0.0:3306"]);
    $response = $client->post("/dearscholar.php", $this->options);
    return $response->getBody();
  }
}