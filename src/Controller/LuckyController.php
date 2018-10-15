<?php

namespace App\Controller;

use Psr\Log\LoggerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number/{max}", name="app_lucky_number")
     * @param $max
     * @param LoggerInterface $logger
     * @return Response
     */
    public function number($max, LoggerInterface $logger2)
    {

        $logger2->info('fuck you');

//        $this->addFlash('notice', 'fuck you and I am go away');
//
//        $number = mt_rand(0, $max);

        return $this->render('base.html.twig');
    }
}