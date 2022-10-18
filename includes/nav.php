<ul>
    <?php 
        #For each item, generates an a tag that links to the url and dynamically adds a button for it
        foreach ($navItems as $item) {
            echo "<li> <a href=\"$item[slug]\">$item[title]</a> </li>";
        }

        #Setting the target of an "a" to "_blank" opens the link in a new tab
        echo "<li> <a href=\"https://voltflare.github.io/The-Island-Damage-Calculator/\" target=\"_blank\">Damage Calculator</a> </li>";
    
    
    ?>

</ul>