<?php

namespace App\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class GeneralController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdminBundle:General:index.html.twig');
    }
}
