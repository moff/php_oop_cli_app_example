<?php
namespace Src\Examination;

use Src\Logger;

class BloodGlucoseLevel extends Examination implements ExaminationInterface
{

    private $value;
    private $lastMealTime;

    public function run()
    {
        $this->value = rand(10, 15);
        $this->lastMealTime = (new \DateTime())->modify('-' . rand(3, 12) . ' hours')->format('d.m.Y H:i');

        echo $this->getPatient()->getFullname() . ' blood glucose level examination showed: value is ' . $this->value . ', last meal time is ' .  $this->lastMealTime . PHP_EOL;

        Logger::getInstance()->logEvent('Patient ' . $this->getPatient()->getFullname() . ' goes through blood glucose level examination' . PHP_EOL);
    }

}