<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LuckyController extends Controller
{
    public function numberAction()
    {
        $vars = array(
            'lucky_number' => rand(0, 100),
        );
        return $this->render('AppBundle:Lucky:number.html.twig', $vars);
    }

}
