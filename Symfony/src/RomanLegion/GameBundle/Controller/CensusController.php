<?php

namespace RomanLegion\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class CensusController extends Controller
{
    /**
     * @Route("/census", name="_census_list")
     * @Template()
     */
    public function listAction()
    {
        return array('name' => 'me');
    }
}
