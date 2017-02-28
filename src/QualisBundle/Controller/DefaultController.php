<?php

namespace QualisBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('QualisBundle:Default:index.html.twig');
    }
}
