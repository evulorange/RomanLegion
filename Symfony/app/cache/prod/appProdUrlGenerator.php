<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    static private $declaredRoutes = array(
        '_census_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RomanLegion\\GameBundle\\Controller\\CensusController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/census',    ),  ),  4 =>   array (  ),),
        '_garrison_mapUnits' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RomanLegion\\GameBundle\\Controller\\GarrisonController::mapUnitsAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/garrison',    ),  ),  4 =>   array (  ),),
        'romanlegion_game_home_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RomanLegion\\GameBundle\\Controller\\HomeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),),
        '_market_available' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RomanLegion\\GameBundle\\Controller\\MarketController::availableAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/market',    ),  ),  4 =>   array (  ),),
        '_senatus_list' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RomanLegion\\GameBundle\\Controller\\SenatusController::listAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/senatus',    ),  ),  4 =>   array (  ),),
    );

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens);
    }
}
