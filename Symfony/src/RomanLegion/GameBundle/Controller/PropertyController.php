<?php

namespace RomanLegion\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

//use RomanLegion\GameBundle\Entity\Property;
//use RomanLegion\GameBundle\Form\Type\PropertyType;

class PropertyController extends Controller
{
    /**
     * // This sets up the path in the browser to this controller action
     * @Route("/property/create", name="_property_create")
     * 
     * // Tnis tells Symfony to use the view file for this action
     * @Template()
     */
    public function createAction(Request $request)
    {
        // Get the entity manager (ORM tool) to persist the object to the database
        $em = $this->getDoctrine()->getEntityManager();

        // Assume this is the player that is currently submitting this request
        $purchasingPlayer = $em->find('Player', 1);
        
        // Create empty Property instance from which the view will be bound

        // Create Property Form to accept the input and bind it as data to $account
        
        // Process the form using input from $request
        
    }
}
