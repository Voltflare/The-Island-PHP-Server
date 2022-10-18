<?php
    #If you want to frontload something to render immediately, its best to put it *here*

    #Variables:
    // $companyName = "Franklin's Fine Dining";

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

            <div id="banner">
                    <img src = "img/hype.png" alt="Hype!"/>
            </div>

            <div id="nav">
                    <?php 
                        #include function is
                        include('includes/nav.php')
                    ?> 
            </div>

            <div class="content">