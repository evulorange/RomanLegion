<?php

namespace RomanLegion\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;

class MarketController extends Controller
{
    /**
     * @Route("/market", name="_market_available")
     * @Template()
     */
    public function availableAction()
    {
        return array('name' => 'me');
    }
}
