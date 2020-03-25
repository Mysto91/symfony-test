<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PortalController extends AbstractController
{
    /**
     * @Route("/portal", name="portal")
     */
    public function index()
    {
        return $this->render('portal/index.html.twig', [
            'controller_name' => 'PortalController',
        ]);
    }

    /**
     * @Route("/home", name="home")
     */
    public function home(){
        return $this->render('portal/home.html.twig', [
            'username' => 'Admin',
        ]);
    }
}
