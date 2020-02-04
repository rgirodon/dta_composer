<?php

use Carbon\Carbon;
use Respect\Validation\Validator as v;
use Dta\ThirdComposer\Domain\Student;

require('vendor/autoload.php');

$now = Carbon::now('Europe/Paris');

echo '<div>'.$now->format(DateTime::ISO8601).'</div>';


$birth = Carbon::create(1978, 8, 25, 3, 0, 0);

echo 'Nb of seconds from birth : '.$now->diffInSeconds($birth);

echo '<br>';

echo 'Nb of days from birth : '.$now->diffInDays($birth);


$student = new Student('Michel', 'Dupont');

echo '<div>'.$student->getFullName().'</div>';


$number = 123;
echo '<div>Is 123 a valid number ? '
        .(v::numeric()->validate($number) ? 'true' : 'false')
        .'</div>';

$number = 'abc';
echo '<div>Is abc a valid number ? '
        .(v::numeric()->validate($number) ? 'true' : 'false')
        .'</div>';        

       