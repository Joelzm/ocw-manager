<?php

namespace OCWm\OCWBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class OCWController extends Controller
{
    
    public function indexAction()
    {
        return $this->render('OCWmOCWBundle:OCW:index.html.twig', array());
    }
}