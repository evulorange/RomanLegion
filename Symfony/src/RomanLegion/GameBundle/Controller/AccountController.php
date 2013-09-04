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
     * @Route("/account/create", name="_account_create")
     * @Template()
     */
    public function createAction(Request $request)
    {
        $account = new Account('', '', '');

        $form = $this->createForm(new AccountType(), $account);
        $form->handleRequest($request);
        
        if ($form->isValid()) {
            $em = $this->getDoctrine()->getEntityManager();
            $em->persist($account);
            $em->flush();
        }

        return array(
            'createAccountForm' => $form->createView(),
        );
    }
}
