<?php

namespace App\Controllers;

class Pages extends BaseController
{
  public function index()
  {

    // $faker = Faker\Factory::create();
    $data = [
      "tittle" => "Home",
    ];
    return view('/Pages/home', $data);
  }
  public function about()
  {
    $data = [
      "tittle" => "About",

    ];
    return view('/Pages/about', $data);
  }
  public function contact()
  {
    $data = [
      "tittle" => "Contact",

    ];
    return view('/Pages/contact', $data);
  }
}
