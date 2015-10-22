<?php
require __DIR__ . '/vendor/autoload.php';
$loader = new \Aura\Autoload\Loader;
$loader->register();
$loader->addPrefix('Src', 'src');

$doctorJohn = new \Src\Doctor('John', 'Smith', 'therapist');
$patientSue = new \Src\Patient('Sue', 'White', '23423423', '3423423423');

$patientSue->chooseDoctor($doctorJohn);

$examinations = [];

$examinations[] = $doctorJohn->scheduleExamination(new \Src\Examination\BloodGlucoseLevel(), $patientSue, (new \DateTime())->modify('+' . rand(3, 12) . ' hours'));
$examinations[] = $doctorJohn->scheduleExamination(new \Src\Examination\BloodPressure(), $patientSue, (new \DateTime())->modify('+' . rand(3, 12) . ' hours'));

foreach($examinations as $examination)
{
    $examination->run();
}