<?php
namespace Dta\ThirdComposer\Test;

use Dta\ThirdComposer\Domain\Student;
use PHPUnit\Framework\TestCase;

class StudentTest extends TestCase {


    public function testGetFullName() {

        $student = new Student('Michel', 'Dupont');

        $this->assertEquals('Michel Dupont', $student->getFullName());
    }
}