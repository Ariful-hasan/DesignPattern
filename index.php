<?php
require_once __DIR__ . '/vendor/autoload.php';

use App\SimpleFactory\SimpleMotorcycleFactory;
use App\FactoryMethod\MotorcycleFactory;
use App\Strategy\Strategy;
use App\Strategy\NewyearStrategy;
use App\Strategy\BlackFridayStrategy;
use App\Strategy\SummerStrategy;



/**
 * simple factory design pattern calling
 */
// dump("Simple Factory Design Pattern");
// $simpleFactory = SimpleMotorcycleFactory::create('yahama', '1993');
// dump($simpleFactory);
// $simpleFactory = SimpleMotorcycleFactory::create('suzuki', '1990');
// dump($simpleFactory);



/**
 * Factory Method design pattern calling
 */
// dump("Factory Method Design Pattern");
// $factoryMethod = MotorcycleFactory::create('yamaha');
// dump($factoryMethod->getMakeAndModel());
// $factoryMethod = MotorcycleFactory::create('suzuki');
// dump($factoryMethod->getMakeAndModel());
// $factoryMethod = MotorcycleFactory::create('dukati');
// dump($factoryMethod->getMakeAndModel());



/**
 * Strategy design pattern calling
 */
// dump("Strategy Design Pattern");
// $strategy = new Strategy(new BlackFridayStrategy);
// dump($strategy->showDiscountPercentage());
// $strategy = new Strategy(new NewyearStrategy);
// dump($strategy->showDiscountPercentage());
// $strategy = new Strategy(new SummerStrategy);
// dump($strategy->showDiscountPercentage());