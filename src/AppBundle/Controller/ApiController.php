<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use FOS\RestBundle\Controller\FOSRestController;
class ApiController extends Controller
{

	public function indexAction(){
		
        $data = array("hello" => "world");
        $view = $this->view($data);
        return $this->handleView($view);
    }
}
