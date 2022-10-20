<?php
    #If you want to frontload something to render immediately, its best to put it *here*

    #This header is specific to locations, as locations do not have the normal nav menu and render their own map

    #include dynamic array generation
    include('includes/arrays.php');
?>



<!DOCTYPE html>
<html>
    <head>
        <title><?php echo(TITLE); ?></title>
        <link href="/assets/styles.css" rel="stylesheet"> <!-- Link to stylesheet -->
    </head>
    <body id="final-example">

        <div class="wrapper">

            <div id="banner"> <!-- ie: ../img/LocationMaps/Northern/Route 6.png -->
                    <img src="../<?php echo($landmarkSpots[urldecode($location)]['map']);?>" width="80%" height="500px"
                    style="display:block; margin-left: auto; margin-right: auto; width: 70%" alt="This area's map is unavailable."/>
            </div>

            <div id="nav">
                <ul>
                    <li> <button class="backbutton" onclick="history.go(-1);" style="	display: block;
                                                                    background: #353535;
                                                                    outline: solid 2px #353535;
                                                                    border: solid 2px white;
                                                                    color: white;
                                                                    padding: 10px 15px;
                                                                    text-decoration: none;"
                    >Back to Navigation</button></li>
                </ul>
            </div>

            <div class="content">