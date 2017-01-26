<?php
namespace Xuesheng\Route\Test;
use Xuesheng\Route;

class RouteCollectorTest extends \PHPUnit_Framework_TestCase
{
    public function testSetsDoctorWithConstructor()
    {
        $route = new Route\Route('Lisi');
        $this->assertAttributeEquals('Lisi', 'favoriteDoctor', $route);
    }

    public function testSaysDoctorName()
    {
        $route = new Route\Route('Lisi');
        $this->assertEquals('The best doctor is Lisi', $route->say());
    }

    public function testRespondToInAgreement()
    {
        $route = new Route\Route('Lisi');
        $this->assertEquals('I agree!', $route->respondTo('Lisi is the best doctor'));
    }

    public function testRespondToInDisagreement()
    {
        $route = new Route\Route('Lisi');
        $route->respondTo('Zhang san');
    }

}