<?php

namespace App\models;

use App\models\Database;


class TourManager
{
    private $db;

    public function __construct(Database $db)
    {
        $this->db = $db;
    }

    public function addTour(Tour $tour)
    {
        $tourData = [
            'tour_departement' => $tour->getDepartement(),
            'tour_city' => $tour->getCity(),
            'tour_address' => $tour->getAddress(),
            'tour_place' => $tour->getPlace(),
            'tour_bigCity' => $tour->getBigCity(),
            'tour_date' => $tour->getDate(),
        ];
        // Capture the last inserted ID
        return $this->db->addRecord('tour', $tourData);
    }

    public function getTour($conditions)
    {
        return $this->db->readRecord('tour', $conditions);
    }

    public function getAllTours()
    {
        return $this->db->readRecord('tour', []);
    }

    public function updateTour($tourData, $conditions)
    {
        $this->db->updateRecord('tour', $tourData, $conditions);
    }

    public function deleteTour($conditions)
    {
        $this->db->deleteRecord('tour', $conditions);
    }
}
