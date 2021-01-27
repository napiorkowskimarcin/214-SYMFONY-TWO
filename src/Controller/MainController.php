<?php

namespace App\Controller;

use App\Repository\BudgetRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
// 

function sum($carry, $item)
{
    $carry += $item;
    return $carry;
}
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
        $data = $budgetRepository->findAll();
        
         dump($data);
        return $this->render('home.html.twig', ['data'=> $data]);
    }

}