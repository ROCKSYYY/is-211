<?php 
namespace Test;

use PHPUnit\Framework\TestCase;
use Routers\Router;

class InviteTest extends TestCase {
    public function test_router() {
        $invite = new Router();
        $html = $invite->route( "http://localhost/" );
        $pos= mb_strpos($html, "Привет!");
        $this->assertNotEquals(false, $pos);
    }
}