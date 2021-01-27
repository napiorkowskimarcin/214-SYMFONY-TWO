<?php

namespace App\Controller;

use App\Entity\Budget;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



/**
     * @Route("/new", name="new.")
     */



class PostDataController extends AbstractController
{
    /**
     * @Route("/", name="view")
     */
    public function index(): Response
    {
        return $this->render('new.html.twig', [
            'controller_name' => 'PostDataController',
        ]);
    }

    /**
     * @Route("/create", name="create")
     */
    public function create(Request $request){
        $post = new Budget();

        
        
    }
}