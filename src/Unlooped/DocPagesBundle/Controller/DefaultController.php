<?php

namespace Unlooped\DocPagesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DocPagesBundle:Default:index.html.twig');
    }
}
