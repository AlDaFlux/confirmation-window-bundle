<?php

namespace Aldaflux\ConfirmationWindowBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/test_confirmation")
     */
    public function indexAction()
    {
        return $this->render('AldafluxConfirmationWindowBundle:Default:index.html.twig');
    }
}

