<?php
define("TITLE", "World Map: The Island");
define ("BANNER", "img/WorldMapFactions.png");
define ("BANNER_ALT", "The Island World Map");


include('includes/header.php');
?>

<div id="philosophy">
    <h1>The World in Detail:</h1>
    <p>The Island is home to a whole host of different locales and Pokemon. If you're ever unsure of what's where, this is the place to be.</p>
</div>

<hr>
<div class="cf">
    <?php 
        /*
            The Island is broken up into several regions, each with their own respective cities and the like
            Style is Hacked on there for now
        */
        foreach($islandLandmarks as $regionname => $region) { ?>
        <div class="cf location_dropdown" style="float: left; text-align: center; margin-right: 30px;">
            <select name=<?php echo($regionname);?> onchange="window.location.href = 'location.php/?region=<?php echo($regionname);?>' + '&location=' + this.value" style="	display: block;
                                                                    background: #353535;
                                                                    outline: solid 2px #353535;
                                                                    border: solid 2px white;
                                                                    color: white;
                                                                    padding: 10px 15px;
                                                                    text-decoration: none;">
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