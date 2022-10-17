<ul>
    <?php 
        #For each item, generates an a tag that links to the url and dynamically adds a button for it
        foreach ($navItems as $item) {
            echo "<li> <a href=\"$item[slug]\">$item[title]</a> </li>";
        }
    
    
    ?>

</ul>