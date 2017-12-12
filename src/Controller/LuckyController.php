<?php
namespace App\Controller;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;



class LuckyController{
  public function number(){
    return new Response('Hello pilathraj..');
  }
  
  /**
    * @Route("/lucky/number2")
    */
  public function number2(){
    return new Response('from Cse..');
  }
}

