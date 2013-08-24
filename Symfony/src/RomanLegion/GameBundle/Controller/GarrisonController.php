<?php

namespace RomanLegion\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class GarrisonController extends Controller
{
    /**
     * @Route("/garrison", name="_garrison_mapUnits")
     * @Template()
     */
    public function mapUnitsAction()
    {
        return array('name' => 'me');
    }
}
