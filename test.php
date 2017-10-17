<?php
/**
 * Created by PhpStorm.
 * User: jack
 * Date: 17.10.17
 * Time: 23:21
 */

use PHPUnit\Framework\TestCase;

class IndexTest extends TestCase
{
    public function testHello()
    {
        $_GET['name'] = 'Fabien';

        ob_start();
        include 'index.php';
        $content = ob_get_clean();

        $this->assertEquals('Hello Fabien', $content);
    }
}