<?php

use PeterNicholls\Nacho\Nacho;

/**
 * Created by PhpStorm.
 * User: peternicholls
 * Date: 08/03/2017
 * Time: 08:01
 */
class NachoTest extends PHPUnit_Framework_TestCase
{
    public function testNachHasCheese()
    {
        $nacho = new Nacho();
        $this->assertTrue($nacho->hasCheese());
    }

}