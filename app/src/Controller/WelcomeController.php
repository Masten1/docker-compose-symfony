<?php

namespace App\Controller;

use App\Patterns\Singleton\Singleton;
use App\Patterns\Strategy\FixedCostStrategy;
use App\Patterns\Strategy\Lecture;
use App\Patterns\Strategy\Seminar;
use App\Patterns\Strategy\TimedCostStrategy;
use App\Polymorphism\CluedUp;
use App\Polymorphism\Minion;
use App\Polymorphism\NastyBoss;
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

    /**
     * @Route("/polymorphism", name="polymorphism")
     */
    public function polymorphism()
    {
        $boss = new NastyBoss();
        $boss->addEmployee(new Minion("Test1"));
        $boss->addEmployee(new CluedUp("Test2"));
        $boss->addEmployee(new Minion("Test3"));

        $boss->projectFails();
        $boss->projectFails();
        $boss->projectFails();

        return $this->json([
            'message' => 'Welcome to your new controller!',
        ]);
    }

    /**
     * @Route("/singleton", name="singleton")
     */
    public function singleton()
    {
        $singl = Singleton::getInstance();
        $singl->setProperty("name", "firstName");

        dump($singl);
        dump($singl->getProperty("name"));

        unset($singl);

        $sing2 = Singleton::getInstance();
        dump($sing2);
        dump($sing2->getProperty("name"));

        return $this->json([
            'message' => 'Welcome to your new controller!',
        ]);
    }
}
