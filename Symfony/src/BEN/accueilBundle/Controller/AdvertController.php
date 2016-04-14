<?php

// src/BEN/accueilBundle/Controller/AdvertController.php

namespace BEN\accueilBundle\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class AdvertController  extends Controller
{
    public function indexAction()
  {
    $content = $this->get('templating')->render('BENaccueilBundle:Advert:index.html.twig', array(
        'nom' => 'Benjamin'
    ));
    return new Response($content);
  }
}

