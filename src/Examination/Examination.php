<?php
namespace Src\Examination;

use Src\Doctor;
use Src\Patient;

abstract class Examination
{

    private $datetime;
    private $patient;

    public function getPatient()
    {
        return $this->patient;
    }

    public function setPatient(Patient $patient)
    {
        $this->patient = $patient;
    }

    public function setDatetime($datetime)
    {
        $this->datetime = $datetime;
    }

}