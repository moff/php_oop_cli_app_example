<?php
namespace Src\Examination;

use Src\Logger;

class BloodPressure extends Examination implements ExaminationInterface
{

    private $lower;
    private $higher;
    private $pulse;

    public function run()
    {
        $this->lower = rand(10, 15);
        $this->higher = rand(50,70);
        $this->pulse = rand(50, 90);

        echo $this->getPatient()->getFullname() . ' blood pressure examination showed: lower lever is ' . $this->lower . ', higher level is ' . $this->higher . ', pulse is ' . $this->pulse . PHP_EOL;

        Logger::getInstance()->logEvent('Patient ' . $this->getPatient()->getFullname() . ' goes through blood pressure examination' . PHP_EOL);
    }
    
}