<?php
/** 
 * This php script will be for several arrays that are used throughout the website
 * For instance, the nav menu items
 * 
 * 
*/

$navItems = array(

            array(
                # A slug is the part of a URL that identifies a particular page on a website in an easy-to-read form.
                "slug" => "index.php",
                "title" => "Home"
            ),

            array(
                "slug" => "storysofar.php",
                "title" => "The Story So Far"
            ),

            array(
                "slug" => "factions.php",
                "title" => "Factions"
            ),

            array(
                "slug" => "islandindetail.php",
                "title" => "The Island In Detail"
            )

            // array(
            //     "slug" => "calculator.php",
            //     "title" => "Damage Calculator"
            // )
);

$storiesSoFar = array(
            array(
                "story" => "The First Incursion",
                "characters" => array(
                    "Daedalus the Espeon", "Thalia the Archen (gone)",
                    "Wraith the Zoroark", "Vash the Luxray", "Draken the Charizard",
                    "Garlic the Excadrill (status unknown)", "Lizzy the Porygon-Z",
                    "Scaff the Porygon"
                ),
                "npcs" => array(
                    "Sigfried Bolting the Rapidash", "Comet the Zoroark", "Magnus the Typhlosion",
                    "Velos the Victini"
                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br>Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),

            array(
                "story" => "Arc 1, Chapter 1: The Amber Feast",
                "characters" => array(
                    "Grace the Lycanroc", "Blot the Smeargle (gone)",
                    "Neroh Corsair the Girafarig", "Cal the Lycanroc", "Myo the Furret",
                    "Weyland the Lucario", "Miasma the Ninetales", "Jolanda the Jigglypuff",
                    "Rose the Riolu", "Spike the Stufful", "Ninghe the Lucario (gone)",
                    "Sol the Leafeon", "Cotton the Ditto (gone)", "Briar the Skarmory (gone)"
                ),
                "npcs" => array(
                    "Lyn the Mightyena (Crusader)", "Striker the Jolteon (Crusader)",
                    "Manfred the Delphox (Crusader)", "Rufus the Feraligatr (Crusader)",
                    "Comet the Zoroark", "Anastasia the Reuniclus (Follower)"
                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br> Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),

            array(
                "story" => "Nature's Mysteries (002): The Mystery of Amawrys' Cove",
                "characters" => array(
                    "Hallow the Trevenant", "Cassandra the Sneasel", "Ayden the Breloom",
                    "Myo the Furret", "Nina the Espurr"
                ),
                "npcs" => array(
                    "Halvar the Walrein", "Amawrys the Milotic"
                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br> Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),

);


$islandLandmarks = array(
    "northern" => array(
        "Route 6", "Followers Territory", "Techne", "Route 7", "Mizanite City", "Route 4", "Mizanite Inlet",
        "Briesfall Town"
    ),

    "farnorthern" => array(
        "Northern Wastelands"
    ),

    "southwestern" => array(
        "Berlie City", "Route 5", "Alornue Town", "Route 9", "Field of Ages", "Via Matoya"
    ),

    "southeastern" => array(
        "Route 1", "Route 2", "Amber Bypass", "Vertum Town", "Vertum Onlook/Aviary", "Route 3",
        "Route 12", "Vicheranta City"
    ),

    "farsouthern" => array(
        "Amber Outpost", "Route 10", "Route 11", "Tamer's Reproach", "Medu Tierra"
    ),

    "grottos" => array(
        "Water", "Electric", "Rock", "Fire"
    ),

    "misc" => array(
        "Amawrys' Cove"
    )

);

$mapToFullName = array(
    "northern" => "Northern Island",
    "farnorthern" => "Far Northern Island",
    "southwestern" => "South-Western Island",
    "southeastern" => "South-Eastern Island",
    "farsouthern" => "Far Southern Island",
    "grottos" => "Tamer Grottos",
    "misc" => "Other Island Locations"
);

$landmarkSpots = array(
        //Northern Areas
        "Route 6" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Followers Territory" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array( 
            )
        ),
        
        "Techne" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 7" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Mizanite City" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 4" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Mizanite Inlet" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Briesfall Town" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        //Far Northern Areas
        "Northern Wastelands" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        //South-Western Areas
        "Berlie City" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 5" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Alornue Town" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 9" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Field of Ages" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Via Matoya" => array(
            "map" => "",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

);


?>