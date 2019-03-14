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
        return $this->render('AldafluxConfirmationWindow/Default/index.html.twig');
    }
    
    /**
     * @Route("/confirmation-window-bundle.js" , name="confirmation-window-bundle.js")
     */
    public function jsAction()
    {
        
        $customs=$this->getParameter('confirmation_window.customs');

        return $this->render('@AldafluxConfirmationWindow/Default/confirmation-window-bundle.js.twig', ['customs'=>$customs]);
        
    }
    
    
}

