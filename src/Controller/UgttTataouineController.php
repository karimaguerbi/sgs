<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class UgttTataouineController extends AbstractController
{
    /**
     * @Route("/", name="ugtt_tataouine")
     */
    public function index()
    {
        return $this->render('ugtt_tataouine/index.html.twig', [
            'controller_name' => 'UgttTataouineController',
        ]);
    }
}
