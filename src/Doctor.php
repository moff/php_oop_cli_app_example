<?php
namespace Src;

use Src\Examination\Examination;

class Doctor
{

    private $name;
    private $surname;
    private $speciality;
    private $patients;

    public function __construct($name, $surname, $speciality)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->speciality = $speciality;
        $this->patients = array();
        Logger::getInstance()->logEvent('Doctor ' . $name . ' ' . $surname . ' was created' . PHP_EOL);
    }

    public function getFullname()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function addPatient(Patient $patient)
    {
        $this->patients[] = $patient;
    }

    public function scheduleExamination(Examination $examination, Patient $patient, $datetime)
    {
        $examination->setPatient($patient);
        $examination->setDatetime($datetime);
        return $examination;
    }

}