<?php
use PHPUnit\Framework\TestCase;

class TestOperaciones extends TestCase{

    private $resultado;

    public function setUp():void{
        $this->resultado= new Operaciones();
    }

    public function testSum(){
        $this->assertEquals(7,$this->resultado->sum(2,5));
       
    }

    public function testResta(){
        $this->assertEquals(4,$this->resultado->resta(6,2));
    
    }

    public function testDivision(){
        $this->assertEquals(5,$this->resultado->division(10,2));
        
    }

}