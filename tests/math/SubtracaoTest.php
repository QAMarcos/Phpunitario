<?php

namespace marcos\math;

use PHPUnit\Framework\TestCase;

class SubtracaoTest extends TestCase
{
  public function testSubtracaoDoisNumeros(){
      $soma = new Subtracao();
      $soma->setNum1(10);
      $soma->setNum2(20);

      $this->assertEquals(10, $soma->Subtrair());
  }

}