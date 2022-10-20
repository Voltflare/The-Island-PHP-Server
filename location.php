<?php
define("TITLE", "Home: The Island");
//These different headers are defined so that 'header.php' knows what image to load!

//In the case of each location, the "BANNER" is the specific map of the area
if(isset($_GET['location'])) {
    $location = $_GET['location'];
    $region = $_GET['region'];
}


//define ("BANNER", "LocationMaps/Northern/Route 6.png");
//define ("BANNER_ALT", "Map of Location");


include('includes/locationheader.php');
?>

<div id="philosophy">
    <h1> <?php echo($location);?>: </h1>
    <p> <?php echo($landmarkSpots[$location]['information']);?></p>

    <?php if (!empty($landmarkSpots[$location]['notableplaces'])) {?>
        <h3>Notable Places:</h3>
        <?php foreach($landmarkSpots[$location]['notableplaces'] as $notablePlace) {?>
            <h5> <?php echo($notablePlace['name']); ?>: </h5>
            <p> <?php echo($notablePlace['info']); ?> </p>

        <?php } ?>
    <?php } else { }?>
</div>


<hr>

<?php

include('includes/footer.php');
?>