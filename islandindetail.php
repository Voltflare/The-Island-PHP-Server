<?php
define("TITLE", "World Map: The Island");
define ("BANNER", "WorldMapFactions.png");
define ("BANNER_ALT", "The Island World Map");


include('includes/header.php');
?>

<div id="philosophy">
    <h1>The World in Detail:</h1>
    <p>The Island is home to a whole host of different locales and Pokemon. If you're ever unsure of what's where, this is the place to be.</p>
    <hr>
</div>

<div class="cf">
    <?php 
        /*
            The Island is broken up into several regions, each with their own respective cities and the like
        */
        foreach($islandLandmarks as $regionname => $region) { ?>
        <div class="cf location_dropdown" style="float: left; text-align: center; margin-right: 30px;">
            <select name=<?php echo($regionname);?> onchange="window.location.href = 'location.php/?location=' + this.value">
                <option value="<?php echo($regionname);?>" selected disabled> <?php echo($mapToFullName[$regionname]); ?> </option>
                <?php foreach($region as $location) {?>
                    <option value="<?php echo($location);?>"> <a href="islandindetail.php"> <?php echo($location);?>  </a> </option>
                <?php } ?>
            </select>

        </div>

        <?php } 
    ?>
</div>

<hr>



<?php

include('includes/footer.php')

?>