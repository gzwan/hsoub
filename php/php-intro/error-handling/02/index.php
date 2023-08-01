<?php

// Null Safe Operator (php >= V.8 )

class Address
{
  public $country;

  public function __construct($country)
  {
    $this->country = $country;
  }
}

class User
{

  public $address;

  public function __construct($country)
  {
    $this->address = new Address($country);
  }
}

class Session
{
  public $user;
  public function __construct($address)
  {
    //$this->user = new User($address);
  }
}



$session = new Session('India');

//$address = $session->user->address;


$address = $session->user ? $session->user->address : null;


$country = null;


$country = $session?->user?->address?->country ;

// if ($session !== null) {
//   $user = $session->user;
//   if ($user !== null) {
//     $address = $user->address;
//     if ($address !== null) {
//       $country = $address->country;
//     }
//   }
// }
