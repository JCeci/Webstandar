<?php

namespace Web\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdminController extends Controller
{
    //Muestra página principal administración
    public function adminAction()
    {
        $name='mensaje seccion';
        return $this->render('AdminBundle:Admin:admin.html.twig', array('name' => $name));        
    }
    //Muestra login
    public function loginAction()
    {
    	 $name='mensaje seccion';
        return $this->render('AdminBundle:Admin:login.html.twig', array('name' => $name)); 

    }
}
