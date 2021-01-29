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


    $totalData = array(
	"healthyFood"=> array_sum(array_column($data, 'healthyFood')),
	"unhealthyFood"=>  array_sum(array_column($data, 'unhealthyFood')),
	"farmacy"=>  array_sum(array_column($data, 'farmacy')),
	"clothing"=>  array_sum(array_column($data, 'clothing')),
    "household"=>  array_sum(array_column($data, 'household')),
    );


    $chartArray = array(
	array("label"=> "HEALTHY FOOD", "y"=> $totalData['healthyFood']),
	array("label"=> "UNHEALTHY FOOD", "y"=>  $totalData['unhealthyFood']),
	array("label"=> "FARMACY", "y"=>  $totalData['farmacy']),
	array("label"=> "CLOTHES", "y"=>  $totalData['clothing']),
    array("label"=> "HOUSEHOLD", "y"=>  $totalData['household']),
    );

    $chartArray = json_encode($chartArray,JSON_NUMERIC_CHECK);
    //dump($chartArray);
        
        return $this->render('home.html.twig', ['data'=> $data, 'totalData'=> $totalData,    'chartArray'=>$chartArray]);
    }

}