<?php

namespace RomanLegion\GameBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Component\HttpFoundation\Request;

use RomanLegion\GameBundle\Entity\Account;
use RomanLegion\GameBundle\Form\Type\AccountType;

class AccountController extends Controller
{
    /**
     * // This sets up the path in the browser to this controller action
     * @Route("/account/create", name="_account_create")
     * 
     * // Tnis tells Symfony to use the view file for this action
     * @Template()
     */
    public function createAction(Request $request)
    {
        // This is the account object to which data from the view will be bound
        $account = new Account('', '', '');

        // Create Account Form to accept the input and bind it as data to $account
        $form = $this->createForm(new AccountType(), $account);
        
        // Process the form using input from $request
        $form->handleRequest($request);
        
        // Has the form been submitted, and is the data valid?
        if ($form->isValid()) {
            
            // Get the entity manager (ORM tool) to persist the object to the database
            $em = $this->getDoctrine()->getEntityManager();
            
            // Persist $account and auto assign it an ID
            $em->persist($account);
            
            // Flush the changes to the database
            $em->flush();
        }

        return array(
            // Make the account form view available as a variable to the template
            'createAccountForm' => $form->createView(),
        );
    }
}
