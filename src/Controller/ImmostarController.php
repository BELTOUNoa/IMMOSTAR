<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class ImmostarController extends AbstractController
{
    /**
     * @Route("/Immostar", name="immostar")
     */
    public function index()
    {
        return $this->render('immostar/index.html.twig', [
            'controller_name' => 'ImmostarController',
        ]);
    }
}
