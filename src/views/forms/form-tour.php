<?php
require_once __DIR__ . "/../../controller/form-tour-controller.php";
?>


<form action="../../controller/form-tour-controller.php" method="post" id="tourForm">
    <label for="tour_departement">Département du Tour :
        <input type="text" name="data[tour_departement]" id="tour_departement" value="">
        <span></span>
    </label>
    <label for="tour_city">Ville du Tour :
        <input type="text" name="data[tour_city]" id="tour_city">
        <span></span>
    </label>
    <label for="tour_address">Adresse du Tour :
        <input type="text" name="data[tour_address]" id="tour_address">
        <span></span>
    </label>
    <label for="tour_place">Place du Tour :
        <input type="text" name="data[tour_place]" id="tour_place">
        <span></span>
    </label>
    <fieldset>
        <legend>Le tour est dans une grande ville ?</legend>
        <div><label for="tour_bigCity_1">
                <input type="radio" name="data[tour_bigCity]" id="tour_bigCity_1" value="true">
                Oui</label>
        </div>
        <div><label for="tour_bigCity_0">
                <input type="radio" checked name="data[tour_bigCity]" id="tour_bigCity_0" value="false">
                Non</label>
        </div>
    </fieldset>
    <label for="tour_date">Date du Tour :
        <input type="date" name="data[tour_date]" id="tour_date">
        <span></span>
    </label>
    <input type="hidden" name="data[action]" value="create">
    <input type="submit" value="Créer">
</form>

<form  action="../../controller/form-tour-controller.php" method="post" id="tourFormHandle">
<div>
    <table>
        <thead>
        <tr>
            <th>Selectionner</th>
            <th>Département</th>
            <th>Ville</th>
            <th>Adresse</th>
            <th>Place</th>
            <th>Grande ville</th>
            <th>date</th>
        </tr>
        </thead>
        <tbody id="tours-list">
        <?php

        foreach ($allTours

                 as $key => $value) {
            ?>
            <tr><td>
                    <label>
                        <input name="data[id_tour][]" type="checkbox" value="<?= $value['id_tour'] ?>">
                    </label>
                </td>
                <td><?php echo $value['tour_departement']; ?></td>
                <td><?php echo $value['tour_city']; ?></td>
                <td><?php echo $value['tour_address']; ?></td>
                <td><?php echo $value['tour_place']; ?></td>
                <td><?php echo $value['tour_bigcity']; ?></td>
                <td><?php echo $value['tour_date']; ?></td>
            </tr>
            <?php
        }
        ?>
        </tbody>
    </table>
    <div class="validation-buttons">
        <input type="hidden" name="data[action]" value="delete">
        <input type="submit" name="action" value="Effacer">
    </div>
</div>


</form>

<script src="../../ajax/ajax-form-controller.js"></script>

