<?php

namespace App\Controller;

use App\Patterns\Strategy\FixedCostStrategy;
use App\Patterns\Strategy\Lecture;
use App\Patterns\Strategy\Seminar;
use App\Patterns\Strategy\TimedCostStrategy;
use App\Services\ShopProduct;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class WelcomeController extends AbstractController
{
    /**
     * @Route("/welcome", name="welcome")
     */
    public function index(ShopProduct $shopProduct)
    {
        $lessons[] = new Seminar(5, new TimedCostStrategy());
        $lessons[] = new Lecture(5, new FixedCostStrategy());

        foreach ($lessons as $lesson) {
            echo $lesson->cost();
            echo "<br>";
            echo $lesson->chargeType();
            echo "<br>";
        }



        return $this->json([
            'message' => 'Welcome to your new controller!',
            'path' => 'src/Controller/WelcomeController.php',
        ]);
    }
}
