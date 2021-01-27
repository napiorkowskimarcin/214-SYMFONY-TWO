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
     * @param Request $request
     * @return Response
     */
    public function create(Request $request){
        //Entity class
        $post = new Budget();
        

        //Post data
        $post->setHealthyFood(231);
        $post->setUnHealthyFood(232);
        $post->setHousehold(233);
        $post->setFarmacy(234);
        $post->setClothing(235);
        $post->setCreatedate();
        
        //DB connection
        $em = $this->getDoctrine()->getManager();
        $em->persist($post);
        $em->flush();

        //Response from server
        return new Response(content: 'created');
        
        
    }
}