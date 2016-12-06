<?php

use Laravel\Lumen\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
//    public function testExample()
//    {
//        // echo 'bat dau qua trinh test';
//        // $this->get('/');
//
//        // $this->assertEquals(
//        //     $this->app->version(), $this->response->getContent()
//        // );
//        // echo 'ket thuc test';
//        // print __FUNCTION__ . PHP_EOL;
//        $this->get('/')->seeJson(['version' => '1.0']);
//    }

    // public function testAbc() {
    //     // print __FUNCTION__ . PHP_EOL;
    // }


    public function testLoginAction() {
        $this->post('/login', ['email' => 'aaaaaa'])->seeJsonStructure([
            'errors' => ['email', 'password']
        ]);
    }

}
