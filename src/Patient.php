<?php
namespace Src;

class Patient
{

    private $name;
    private $surname;
    private $ssn;
    private $mrn;
    private $doctor;

    public function __construct($name, $surname, $ssn, $mrn)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->ssn = $ssn;
        $this->mrn = $mrn;
        Logger::getInstance()->logEvent('Patient ' . $this->getFullname() . ' was created' . PHP_EOL);
    }

    public function getFullname()
    {
        return $this->name . ' ' . $this->surname;
    }

    public function chooseDoctor(Doctor $doctor)
    {
        $this->doctor = $doctor;
        $doctor->addPatient($this);
        Logger::getInstance()->logEvent('Patient ' . $this->getFullname() . ' chose doctor ' . $doctor->getFullname() . PHP_EOL);
    }

}