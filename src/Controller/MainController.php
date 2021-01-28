<?php

namespace App\Controller;

use App\Repository\BudgetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// 


// 
class MainController extends AbstractController
{


    /**
     * @Route("/", name="home")
     * @param BudgetRepository $budgetRepository
     * return Repsonse
     */
    public function index(BudgetRepository $budgetRepository)
    {
        //get all from sql
    $data = $budgetRepository->findAll();



    $totalArray = array(
	array("label"=> "HEALTHY FOOD", "y"=> array_sum(array_column($data, 'healthyFood'))),
	array("label"=> "UNHEALTHY FOOD", "y"=>  array_sum(array_column($data, 'unhealthyFood'))),
	array("label"=> "FARMACY", "y"=>  array_sum(array_column($data, 'farmacy'))),
	array("label"=> "CLOTHES", "y"=>  array_sum(array_column($data, 'clothing'))),
    array("label"=> "HOUSEHOLD", "y"=>  array_sum(array_column($data, 'household'))),
    );

    $totalArray = json_encode($totalArray,JSON_NUMERIC_CHECK);
    // dump($totalArray);
        
        return $this->render('home.html.twig', ['data'=> $data, 'totalArray'=>$totalArray]);
    }

}