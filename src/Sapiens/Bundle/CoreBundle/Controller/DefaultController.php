<?php

namespace Sapiens\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SapiensCoreBundle:Default:index.html.twig');
    }
}
