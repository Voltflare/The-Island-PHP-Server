<?php
define("TITLE", "The Story So Far: The Island");
define ("BANNER", "Calypso.jpg");
define ("BANNER_ALT", "Calypso, Hope of the Island.");
include('includes/header.php');
?>

<div id="philosophy">
<h1>The Story So Far:</h1>
<p>Ever wondered what's happened so far on the Island since the Black Knight took over? Wanted to keep tabs on your favorite characters? Look no further than here.</p>
</div>

<!-- <iframe src="https://docs.google.com/document/d/e/2PACX-1vRESrdgqc1CHOTQgmSUSmhMF4tQTsEbPpljaYOhldvBYhzi9T72H2AuWG3xwypKsEWot54yXhV7oChk/pub?embedded=true" width=100%></iframe> -->

<?php
    foreach($storiesSoFar as $currentStory) { ?>


        <!-- https://dev.to/jordanfinners/creating-a-collapsible-section-with-nothing-but-html-4ip9-->
        <details>
            <summary>
                <strong><?php echo($currentStory['story']);?></strong>
            </summary>
            <br>
            <div class="cf">
                <div class="npccol" style="float: left">
                    <strong>Major NPC's Involved:</strong>
                    <ul> 
                        <?php foreach($currentStory['npcs'] as $currentNPC) {?>
                            <li> <?php echo($currentNPC);?></li>
                        <?php } ?>
                    </ul>
                </div>

                <div class="playercol" style="float: right">
                    <strong>Player Characters Involved:</strong>
                    <ul> 
                        <?php foreach($currentStory['characters'] as $currentPlayer) {?>
                            <li> <?php echo($currentPlayer);?></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="clearfix" id="philosophy">
                <?php echo($currentStory['synopsis']);?>
            </div>
        </details>
        <br>
    <?php }
?>

<?php

include('includes/footer.php')

?>