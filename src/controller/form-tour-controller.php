<?php
require_once __DIR__ . '/../../vendor/autoload.php';

use App\models\TourManager;
use App\models\Database;
use App\models\Tour;

$db = new Database();
$manager = new TourManager($db);
$allTours = $manager->getAllTours();
$response = ['success' => false, 'errors' => []];

if ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST) && $_POST['data']['action'] === 'create') {
    $tour = new Tour();
    $errors = [];
    if (isset($_POST['data']['tour_departement']) && $_POST['data']['tour_departement'] !== '') {
        $tour->setDepartement((int)$_POST['data']['tour_departement']);
    } else {
        $errors['tour_departement'] = "Ce champ est obligatoire";
    }

    if (isset($_POST['data']['tour_city']) && $_POST['data']['tour_city'] !== '') {
        $tour->setCity($_POST['data']['tour_city']);
    } else {
        $errors['tour_city'] = "Ce champ est obligatoire";
    }

    if (isset($_POST['data']['tour_address']) && $_POST['data']['tour_address'] !== '') {
        $tour->setAddress($_POST['data']['tour_address']);
    } else {
        $errors['tour_address'] = "Ce champ est obligatoire";
    }

    if (isset($_POST['data']['tour_place']) && $_POST['data']['tour_place'] !== '') {
        $tour->setPlace($_POST['data']['tour_place']);
    } else {
        $errors['tour_place'] = "Ce champ est obligatoire";
    }

    if (isset($_POST['data']['tour_bigCity']) && $_POST['data']['tour_bigCity'] !== '') {
        $tour->setBigCity($_POST['data']['tour_bigCity']);
    } else {
        $errors['tour_bigCity'] = "Ce champ est obligatoire";
    }

    if (isset($_POST['data']['tour_date']) && $_POST['data']['tour_date'] !== '') {
        $tour->setDate($_POST['data']['tour_date']);
    } else {
        $errors['tour_date'] = "Ce champ est obligatoire";
    }

    if (empty($errors)) {
        $errors = $tour->validate();
    } else {
        $errors = array_merge($errors, $tour->validate());
    }

    if (empty($errors)) {
        $newTourID = $manager->addTour($tour);
        $allTours = $manager->getAllTours();
        $response['success'] = true;
        $response['newTourID'] = $newTourID;
        $response['newData'] = $allTours = $manager->getAllTours();
    } else {
        $response['errors'] = $errors;
    }

    try {
        echo json_encode($response, JSON_THROW_ON_ERROR);
    } catch (JsonException $e) {
        echo "Pas bon capitaine";
    }
} elseif ($_SERVER['REQUEST_METHOD'] === 'POST' && !empty($_POST) && $_POST['data']['action'] === 'delete') {
    if (empty($_POST['data']['id_tour'])) {
        $errors['action'] = "Veuillez sélectionner des lignes à supprimer";
    } else {
        $idTours = $_POST['data']['id_tour'];
        $conditions = ['id_tour' => $idTours];
        $manager->deleteTour($conditions);
        $response['newData'] = $allTours = $manager->getAllTours();
    }

}
