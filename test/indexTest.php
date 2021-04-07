<?php

use PHPUnit\Framework\TestCase;
use SebastianBergmann\RecursionContext;


class IndexTest extends TestCase
{


    public function testHello()
    {
        $_GET['name'] = 'Issa';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Issa', $content);
    }
}
