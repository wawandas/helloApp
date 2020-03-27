<?php

namespace App\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Serializer\Serializer;

class FirstController extends AbstractController
{
    /**
     * @Route("/")
     */
    public function show()
    {
        return $this->render('pages/home/index.html.twig', [
            'data' => ['greeting' => 'hello world']
        ]);
    }
}