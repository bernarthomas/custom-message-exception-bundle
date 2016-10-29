<?php

namespace Bt\Bundle\CustomMessageExceptionBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

class DefaultController extends Controller
{
    /**
     * @Route("/")
     */
    public function indexAction()
    {
        return $this->render('CustomMessageExceptionBundle:Default:index.html.twig');
    }
}
