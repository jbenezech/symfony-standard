<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Entity;

class DefaultController extends FOSRestController
{
    /**
     * @Route("/", name="homepage", defaults={"_format": "json"})
     */
    public function indexAction(Request $request)
    {
        $entity = new Entity(1);
        return $this->handleView(
            $this->view(
                $entity
            )
        );
    }
}
