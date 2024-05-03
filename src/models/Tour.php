<?php

namespace App\models;

class Tour extends Database
{
    private $id;
    private $departement;
    private $city;
    private $address;
    private $place;
    private $bigCity;
    private $date;

    private $errors;

    public function __construct()
    {
        parent::__construct();
    }



    public function validate() {
        $this->errors = [];

        if (empty($this->departement)) {
            $this->errors['tour_departement'] = "Department is required.";
        } elseif (!preg_match('/^[0-9]{2}$/', $this->departement)) {
            $this->errors['tour_departement'] = "Department must be 2 digits.";
        }

        if (empty($this->city)) {
            $this->errors['tour_city'] = "City is required.";
        }

        if (empty($this->address)) {
            $this->errors['tour_address'] = "Address is required.";
        }

        if (empty($this->place)) {
            $this->errors['tour_place'] = "Place is required.";
        }

        if ($this->bigCity === null) {
            $this->errors['tour_bigCity'] = "Big city indicator is required.";
        }

        if (empty($this->date)) {
            $this->errors['tour_date'] = "Date is required.";
        } elseif (!preg_match('/^[0-9]{4}-[0-9]{2}-[0-9]{2}$/', $this->date)) {
            $this->errors['tour_date'] = "Date must be in YYYY-MM-DD format.";
        }

        return $this->errors;
    }



    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getDepartement()
    {
        return $this->departement;
    }

    /**
     * @param mixed $departement
     */
    public function setDepartement($departement): void
    {

        $this->departement = htmlspecialchars((int)$departement);
    }

    /**
     * @return mixed
     */
    public function getCity()
    {
        return $this->city;
    }

    /**
     * @param mixed $city
     */
    public function setCity($city): void
    {
        $this->city = htmlspecialchars($city);
    }

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = htmlspecialchars($address);
    }

    /**
     * @return mixed
     */
    public function getPlace()
    {
        return $this->place;
    }

    /**
     * @param mixed $place
     */
    public function setPlace($place): void
    {
        $this->place = htmlspecialchars($place);
    }

    /**
     * @return mixed
     */
    public function getBigCity()
    {
        return $this->bigCity;
    }

    /**
     * @param mixed $bigCity
     */
    public function setBigCity($bigCity): void
    {
        $this->bigCity = (int)$bigCity;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date): void
    {
        $this->date = htmlspecialchars($date);
    }



}