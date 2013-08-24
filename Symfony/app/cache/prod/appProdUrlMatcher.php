<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);

        // _census_list
        if ($pathinfo === '/census') {
            return array (  '_controller' => 'RomanLegion\\GameBundle\\Controller\\CensusController::listAction',  '_route' => '_census_list',);
        }

        // _garrison_mapUnits
        if ($pathinfo === '/garrison') {
            return array (  '_controller' => 'RomanLegion\\GameBundle\\Controller\\GarrisonController::mapUnitsAction',  '_route' => '_garrison_mapUnits',);
        }

        // romanlegion_game_home_index
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'romanlegion_game_home_index');
            }

            return array (  '_controller' => 'RomanLegion\\GameBundle\\Controller\\HomeController::indexAction',  '_route' => 'romanlegion_game_home_index',);
        }

        // _market_available
        if ($pathinfo === '/market') {
            return array (  '_controller' => 'RomanLegion\\GameBundle\\Controller\\MarketController::availableAction',  '_route' => '_market_available',);
        }

        // _senatus_list
        if ($pathinfo === '/senatus') {
            return array (  '_controller' => 'RomanLegion\\GameBundle\\Controller\\SenatusController::listAction',  '_route' => '_senatus_list',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
