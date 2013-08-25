<?php

namespace RomanLegion\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class HomeController extends Controller
{
    /**
     * @Route("/")
     * @Template()
     */
    public function indexAction()
    {
        return array('name' => 'me');
    }
    
    /**
     * @Route("/test")
     * @Template()
     */
    public function testAction()
    {
        $test = new \RomanLegion\GameBundle\Entity\Account(
            'Jonathan', 'password', 'Display Jonathan'
        );
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($test);
        $em->flush();
        die('done');
    }
}
