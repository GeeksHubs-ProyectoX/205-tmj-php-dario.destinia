<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Palabreitor\Palabreitor;

class Test01Test extends TestCase
{

    public function test1()
    {
        $expected = [7, 5, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $result = (new Palabreitor())->apply("abacaba");
        $this->assertEquals($result, $expected);
    }

    public function test2()
    {
        $expected = [0, 0, 0, 0, 1, 0, 0, 0, 1, 0, 1, 1, 2, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $result = (new Palabreitor())->apply("likemm");
        $this->assertEquals($result, $expected);
    }

    public function test3()
    {
        $expected = [30, 27, 0, 0, 1, 29, 1, 46, 8, 1, 41, 27, 12, 0, 5, 1, 1, 20, 17, 35, 1, 1, 1, 39, 22, 37];
        $result = (new Palabreitor())->apply("rkuhsxtflzvytbtwxyarsglibmhfmmikyolfmopbtkzxezjahq");
        $this->assertEquals($result, $expected);
    }

    public function test4()
    {
        $expected = [0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 10, 5, 9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $result = (new Palabreitor())->apply("ommnommnomm");
        $this->assertEquals($result, $expected);
    }

    public function test5()
    {
        $expected = [1, 0, 0, 0, 0, 18, 0, 9, 0, 1, 1, 1, 0, 4, 1, 1, 1, 0, 0, 1, 0, 20, 0, 1, 0, 17];
        $result = (new Palabreitor())->apply("ztvxhhkvfvlahvvvzjqvnvpnof");
        $this->assertEquals($result, $expected);
    }

    public function test6()
    {
        $expected = [20, 6, 1, 7, 4, 8, 1, 0, 0, 4, 17, 0, 1, 27, 1, 0, 12, 0, 29, 5, 1, 1, 24, 41, 35, 1];
        $result = (new Palabreitor())->apply("wwaxcdysyswdnozfxkxnqafwxtuevteqmkssjbnjygbx");
        $this->assertEquals($result, $expected);
    }

    public function test7()
    {
        $expected = [1, 0, 1, 1, 1, 0, 0, 8, 1, 0, 0, 1, 10, 1, 0, 0, 0, 1, 1, 0, 16, 11, 7, 0, 0, 1];
        $result = (new Palabreitor())->apply("muehvwcaimhwnzvrulds");
        $this->assertEquals($result, $expected);
    }

    public function test8()
    {
        $expected = [0, 3, 23, 1, 1, 0, 1, 0, 13, 1, 1, 18, 1, 1, 31, 0, 1, 0, 1, 1, 0, 1, 12, 12, 1, 1];
        $result = (new Palabreitor())->apply("ocxqcjbibmiolxcvtwziosdcgknywloe");
        $this->assertEquals($result, $expected);
    }

    public function test9()
    {
        $expected = [0, 1, 0, 0, 0, 0, 1, 1, 8, 0, 1, 0, 1, 1, 0, 0, 1, 0, 1, 0, 4, 0, 1, 0, 0, 0];
        $result = (new Palabreitor())->apply("gsniuwqubiimkh");
        $this->assertEquals($result, $expected);
    }

    public function test10()
    {
        $expected = [17, 1, 0, 1, 0, 1, 1, 30, 14, 35, 1, 0, 17, 5, 32, 6, 13, 0, 1, 38, 1, 0, 1, 35, 0, 17];
        $result = (new Palabreitor())->apply("gmotjiauxwhxhtpkzmiphhajqdbsqhnjzonxqxjhtfx");
        $this->assertEquals($result, $expected);
    }

    public function test11()
    {
        $expected = [0, 9, 0, 0, 1, 0, 0, 0, 0, 1, 0, 0, 1, 0, 1, 0, 0, 0, 1, 0, 0, 0, 0, 5, 0, 0];
        $result = (new Palabreitor())->apply("bjxosexmb");
        $this->assertEquals($result, $expected);
    }

    public function test12()
    {
        $expected = [1, 0, 0, 1, 0, 0, 0, 1, 1, 1, 0, 1, 0, 0, 0, 0, 0, 1, 0, 4, 1, 0, 0, 2, 0, 0];
        $result = (new Palabreitor())->apply("urtadtjihlxx");
        $this->assertEquals($result, $expected);
    }

    public function test13()
    {
        $expected = [4, 1, 0, 14, 1, 1, 0, 1, 9, 1, 1, 13, 1, 1, 14, 6, 1, 4, 1, 1, 0, 1, 1, 0, 0, 1];
        $result = (new Palabreitor())->apply("lrairavnljdilkpqetopzbodhmoowsfo");
        $this->assertEquals($result, $expected);
    }

    public function test14()
    {
        $expected = [1, 28, 32, 44, 0, 15, 0, 39, 0, 1, 1, 1, 29, 8, 17, 1, 46, 36, 1, 11, 0, 1, 15, 1, 47, 5];
        $result = (new Palabreitor())->apply("wmydqthmfhrcwbwtlcqxryfmdjnsmmboznaozopcbvckhrdoyq");
        $this->assertEquals($result, $expected);
    }

    public function test15()
    {
        $expected = [0, 1, 0, 0, 0, 0, 0, 0, 2, 1, 0, 1, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $result = (new Palabreitor())->apply("jliibn");
        $this->assertEquals($result, $expected);
    }

    public function test16()
    {
        $expected = [1, 1, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $result = (new Palabreitor())->apply("apqcbf");
        $this->assertEquals($result, $expected);
    }

    public function test17()
    {
        $expected = [7, 0, 1, 33, 16, 17, 44, 33, 0, 9, 26, 22, 1, 0, 32, 1, 0, 0, 15, 22, 1, 14, 1, 0, 0, 0];
        $result = (new Palabreitor())->apply("lgtjltldhfojopoluhkvelvtofkcshsavggewamdhoskg");
        $this->assertEquals($result, $expected);
    }

    public function test18()
    {
        $expected = [1, 42, 21, 1, 1, 15, 1, 24, 0, 1, 1, 1, 1, 0, 26, 7, 1, 1, 18, 8, 0, 1, 1, 29, 21, 23];
        $result = (new Palabreitor())->apply("bzeawxrxgoqpyhztjpsbcxtzhvosfhmsyxoshdlkcbf");
        $this->assertEquals($result, $expected);
    }

    public function test19()
    {
        $expected = [1, 1, 0, 0, 1, 0, 0, 0, 1, 0, 0, 1, 0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 1, 0];
        $result = (new Palabreitor())->apply("lieaboy");
        $this->assertEquals($result, $expected);
    }
}

