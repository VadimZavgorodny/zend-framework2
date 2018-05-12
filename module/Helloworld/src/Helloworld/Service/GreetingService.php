<?php
/**
 * Created by PhpStorm.
 * User: Vadim
 * Date: 12.05.2018
 * Time: 16:22
 */

namespace Helloworld\Service;

class GreetingService
{
    /**
     * Получить приветствие
     */
    public function getGreeting()
    {
        if (date("H") < 11) {
            return 'Good morning, world';
        } else if (date("H") && date("H") < 17) {
            return 'Hello, world';
        } else {
            return 'Good evening, world';
        }
    }
}