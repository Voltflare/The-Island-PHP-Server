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
                "synopsis" => "One calm night, just like most on the Island, the certain Zoroark entertainer that frequented Route 5 was simply holding one of her nightly campfire plays to an audience of miscellaneous Pokemon. She stresses that, tonight, what she shows them will be important- that 'north of Berlie City, tomorrow, night, something [will] give way.' Nobody really knew what this meant, but the Zoroark launched directly into her tale with reckless abandon.

                <br> <br>Using the flames of her campfire as a canvas, she shows the group a cave not far from Mizanite City (as you could hear the grunts of the stockier Pokemon fighting and sparring against one another). At the back of the cave, though, an injured Ponyta hobbled into view, before an invisible assailant grabbed its neck and promptly choked it to death. With that, after some remarks between the crowd of Archen, Charizard, Zoroark, Espeon, and Rapidash, the group dispersed.
                
                <br> <br> The next night, the curious Pokemon headed for the place the Zoroark had described- north of Berlie and seemingly south of Mizanite City lies Route 4, to the entrance of a cave in the middle of the route. Daedalus was already waiting for them- the most curious of the bunch, by far. At this ungodly hour, though, fortunately, there was no fighting of thugs and Mizanite forces. They were joined by an old, cross Rapidash named Sigfried Bolting- who doubted the legitimacy of the Zoroark's claims and seemingly wanted revenge for the contents of that play (which he later revealed was because that was his kid that died)- and Garlic, Draken's long-standing friend and partner-in-memes. 

                <br> <br> With the party enlarged, the group heads into the cave after hearing a loud roar from down below- the Mizanite Underpass, as they learned- to be greeted with a whole host of sleeping Camerupt who had conveniently decided to take a nap directly in the way of the tunnel heading further inside. Not wanting to cause a bunch of angry camels dropping the cave on their head, the goal was to sneak past them, until Daedalus happened across the dead body of the Ponyta from the Zoroark's play and absolutely freaked out- waking them and basically every other wild Pokemon in the vicinity right up.

                <br> <br> A firefight ensued that involved Garlic's mighty Earthquake almost bringing the place down on them, but at least, by the end, nobody died- and every one of the subterranean camels had been felled. Now they could move on! Peeking inside, they come across a Lopunny and a Weavile, the former brandishing a sword and the latter holding onto a burlap sack with something <i> decently big inside </i>.

                <br> <br> While most probably would have just left them alone- as the bigger do-gooders of the group like Daedalus were just happy to have gotten past the camels, the two other Pokemon had other ideas. Wraith, to nobody else's knowledge, was an ex-Follower; and these two happened to swear allegiance to the same thing she defected from. A fight broke out, but the vastly-outnumbered 'Mons were dispatched and felled relatively quickly.

                <br> <br> Inside the bag they had with them was a Porygon who had absolutely no freaking clue what was going on, as well as a few other goodies. While everyone else left the Pokemon and pilfered the goods to head onwards, Daedalus stuck back with the Porygon- learning that it was apparently from 'Nacrene City' in 'Unova'. The Espeon, wanting to know more and completely forgetting about the actual reason he came there, left the cave with Scaff to learn more about the Porygon and where he'd come from. Meanwhile, the Rapidash forged onwards, taking the rest of the group with him, until they came to a small bed of lava and a dead end.
                
                <br> <br> When the Rapidash approached said lava, though, it parted to allow passage- to basically everyone's amazement (and their suspicion). Fortunately, that suspicion was not enough to stop everyone from following him- where they were greeted with a massive plateau on the other side that fell into a canyon (complete with a trench of lava at the bottom- perfect for absolutely getting burnt to a crisp if you fell in there). To the side of said canyon was a rocky outcropping that has some sort of cave entrance into it, and on the other side of the canyon was a massive, dormant volcano. Not to mention all the idea, suffice to say that everyone who wasn't a Fire-Type or otherwise used to it was having a wonderful time.
                
                <br> <br> But, that wasn't the most interesting part. Sitting on the edge of the plateau, looking into the canyon, was a small, cream-colored Pokemon with tiny wings and a 'V' for a head- sitting on the blunt side of a sword. It didn't turn to greet them, and nobody particularly wanted another fight, so they all simply left them alone, though at least half the party was curious of what it was.
                
                <br> <br> Before they could do much else, a massive roar echoed through the cavern, and a couple boulders came flying up from the canyon's bed- though every single one of them were all telekinetically crushed into bits when the mysterious tiny Pokemon got up and pointed its sword at each of them. That Pokemon wasn't a friend, sure, but it was a darn good thing they weren't an enemy, either!

                <br> <br> Either way, the object in question was the volcano at the back of the cavern- and they had two options: fly over the canyon and risk being smashed by flying boulders, or walk through the cave to the side, which Sigfried had confirmed leads to the same place. Draken, as the one member who could fly, took Wraith over the canyon, while Vash followed the glowing Rapidash through the dark caves.

                <br> <br> When the latter two finally got over there, the pair that had chosen flight had already headed inside the volcano, which the path towards it seemed to lead into like the world's biggest underground tree-house, sporting a marble-like floor and a layered design centered around a massive fiery core a dozen levels down- as well as the sounds of something metallic clanking with armor, far below (though they couldn't get a good look for fear of heat death). So, without any aid, Wraith and Draken fought against a Type-Shifted Fire-Type Golurk that they eventually defeated by causing it to plummet to its death and into the fiery core below (though its hand mysteriously disappeared on the way down, a fact only Wraith bore witness to).

                <br> <br> At the same time, Daedalus and Scaff, who had left to the northern Mizanite City, met up with an unexpected visitor- <i> the Zoroark that had shown them that play </i>. Obviously, even she was curious about what was happening. At the same time, an errant Porygon-Z named Lizzy who had just been minding her business blowing up random shit late at night noticed the group of night-time gatherers and came to help. 

                <br> <br> The Zoroark learns that the rest of the Pokemon are still down there, and she, fearing the worst, wants the rest of them to head right back down into that cave. Daedalus gives in to help, Scaff finally relents (even though he isn’t a fan of how quickly the rest of them abandoned and threatened to deal with him), while Lizzy follows along once the Zoroark explains her view of the situation.

                <br> <br> They all return to see the sorry state the rest of the group left the cave- fainted Camerupts and wild Pokemon, and the two downed Followers. The Zoroark, especially, finds the dead Lopunny/Weavile to be interesting, while the other two explain what they know to Lizzy- the Zoroark eventually interjecting about her knowledge of those two being Followers. Lizzy even mentions that she had been programmed by humans, which gets a rise out of both the Zoroark and Daedalus- though neither dwell on it for long. Coming to the parted lava caste, the Zoroark explains that the place is the Fire-Type Tamer Grotto.

                <br> <br> Confused by the fact that this random Zoroark knew about the existence of this Tamer Grotto, Lizzy stops her, gets an explanation, and the Zoroark finally “introduces” herself as Comet to make communication easier. With that, they head inside, taking the same path through the caves that Sigfried and Vash had done- though, as Comet did not know its layout, it was significantly less... seamless. They encountered a few Fire-Types, but between Comet's inherent lethality and Lizzy's blunt force cannons, that Charmeleon didn’t stand a ghost of a chance.

                <br> <br> At one point, one of the cave's many paths opens into a large room, filled to the absolute brim with Fire-Type Pokemon, doing everything from drinking to chortling to fighting in a boxing ring. Considering that they’d literally just murdered a Charmeleon, walking inside and asking for directions was probably out of the question. Maybe covertly, using a guise of Zoroark as one of the many Fire-Types there? This felt rather risky, as if she was unmasked, she was probably dead to rights amidst a sea of Flamethrowers.

                <br> <br> And then, Daedalus volunteers to quite literally walk in there and ask for directions- which nobody has too many problems with. However, when they send him off, one of the Fire-Types inside, a Fletchinder with one heck of a mobster’s accent, notices the non-Fire-Types loitering outside and goes to investigate. Fortunately, he didn't stay for long- especially as they got the information they needed (directions to get out of this forsaken cave to the volcano), but unfortunately, Daedalus didn’t exactly come with them, stuck between a whole bunch of other Fire-Types asking him all sorts of questions, chiefly of which being a jolly old Typhlosion by the name of Magnus. While Lizzy wanted to wait for him to follow them, Comet convinces her otherwise- and that he would be safe in their company, as he is also a Fire-Type.

                <br> <br> On the way to the volcano, Lizzy finally asks what was up with the Rapidash and his group's hostility (and towards Scaff), as by now, she had made them well aware of what the problem was- and, upon learning that she believes Sigfried has a grudge against her and believes her to be what killed his child, she devises a plan to clear that right up and finally convinces the Zoroark to help. Comet produces a small, heart-shaped locket to help, claiming that it would help clear her name, as this was the heat-proofed locket found on the dead Ponyta’s body that she had picked up when they found it on the way in- far too burnt and mangled for her, a non-Fire-Type, to have managed to do.

                <br> <br> So, the plan was simple:

                <i> 'Those fuckers want YOU (Comet) dead on sight, and apparently they're assholes enough to kill YOU (Scaff) for some reason. So when we do see them: both of you stay the hell outta sight, and I'll go up and... I don't know, act like a messenger, I guess?' </i>

                <br> <br> And, considering everyone else had just finished with the aftermath of a pissed-off Fire Golurk and were already steaming, looking for Comet, on Sigfried’s behalf to wrong the rights- it went about as well as you’d expect. Nobody trusted Lizzy, even after she produced the locket Comet gave her. They all wanted Comet’s explanation of the situation, and not hers. So, with no other choice, she returns to bring the Zoroark with her, and what happens next is nothing short of unheard of. Instead of consoling the grieving father and clearing up what happened, Comet speaks about visions- visions of the future deaths of Pokemon- visions that she had to bear witness to, all the time. Each and every one, she attempted to find help for, using her nighttime shows as a muse to draw attention to it, for she could not bring herself to speak about it. Her presence in Mizanite that night was so that she could look for the Ponyta before the horse was brutally choked to death.

                <br> <br> The Rapidash, obviously, did not appreciate the fact that- while such a fate was tragic- it did not reveal the identity of his daughter’s killer. Unfortunately, Comet did not know who that someone or something could be (as otherwise, it would have been present in her campfire charade the night before), so Wraith moves to check the area for anyone that matches the description of 'invisible Fire-Type.' Then, she remembers the Golurk's hand disappearing- a large, detachable Fire-Type Golurk fist most definitely would have been enough to choke the life out of a Ponyta and sear through a fire-proofed locket with ease.

                <br> <br> So, with a murderer possibly identified, the annoyed father who wanted to take his revenge out on something, runs straight for the nearest wall- which bends and moves to reveal a stairwell leading further downwards, just like the lava had similarly reacted to his presence at the Grotto’s entrance. However, once he placed a hoof on it, a familiar figure met him there, the V-headed Pokemon, walking right back up with a motionless expression, a sword slung over its back, and a rope dragging the massive detached hand of that Golurk. 
                
                <br> <br> Most of the group reacted with confused shock, while Comet hid immediately- something about the Pokemon absolutely rubbing her the wrong way. Lizzy, having never seen it before, attempted to identify what it was… but found nothing. When someone tried to talk to it, it spoke in simply hand-wavey gestures that did not answer much and quickly annoyed Sigfried, though the second he tried to yell, his lips were telekinetically sealed.

                <br> <br> And then, those hand-waving gestures took form, speaking directly to the whole group in a form of telepathy far beyond the norm (as even Lizzy could hear it, though she did not have a conventional “mind” to speak of):

                <br> <br> <i>   'The Grotto merely returned your abandoning it. You have none to blame but yourself for your child's death.' </i>

                <br> <br> After some more back-and-forth, the strange Pokemon introduces itself as Velos- a Pokemon who has apparently seen animosity spike within Tamer Grottos- Pokemon inside suddenly turning on each other with reckless abandon- and is currently investigating what had happened. And with that, it leaves.

                <br> <br> Once Velos leaves, Sigfried explains what he believed the Pokemon’s comment to mean. In the Fire Grotto, there’s a large group of close-knit Fire-Type Pokemon, held together by a Jolly old doofus of a Typhlosion named Magnus- a group that he, himself, was part of. One day a couple years ago, they were attacked- out of the blue, by Pokemon he’d never seen before… and ones that were absolutely able to out-man each and every one of them. Sigfried, however, sensing the danger, fled with Aurora in a vain attempt to keep her safe- while the rest of his family died in the ensuing slaughter.

                <br> <br> Everyone, rightfully, flipped out on the horse for withholding this information, but the subject still remained… What next? That Golurk was very clearly dead- if not by Draken and Wraith, definitely by Velos, who carted its hand around like a trophy. Did they go look for these new assailants?

                <br> <br> Vash, fed up with all this informational bullshit, suggests leaving- and the horse agrees to lead everyone out, now that he’d at least been given closure in regards to this whole incident. On the way out back through the caves, they come across none other than Magnus, with Daedalus by his side. Apparently, he’d explained everything to the fire badger and had gotten him to help join the search for the rest of “his friends” to make sure they were all alright. Magnus, seeing the rest of the group (which contained a whole host of non-Fire-Type Pokemon), is about ready to lay into them, until Sigfried calms him down, and the two reunite.

                <br> <br> Meanwhile, Lizzy speaks with Magnus about what they’d heard from Sigfried- about this attack that happened several years ago, and Magnus reveals that every single female in his ‘gang’ was killed when those mysterious Pokemon showed up.

                <br> <br> <i> 'They showed up, killed all sorts of Pokemon, and vanished without a trace- and that's all we know about 'em, unfortunately. If I'd gotten the chance, don't ya think I'd be wringin' a neck or two for what they did to us? These hands ain't just for show, ya know?' </i>

                <br> <br> When she expressed that she, an “Anti-Fire” as he called those without a Fire-Type wanted to return (to help), Magnus allowed it without aggression, on two conditions: that the knowledge of that attack stays within the Grotto (ie: nobody is told) and that she and only a small group can come back. They shake on this, and Magnus brands her as proof of their agreement, promising that if they ever find anything on the Pokemon that attacked them, they’d have his entire horde of Fire-Types at their disposal.

                <br> <br> <b> And with that, the first investigation of the event that would soon be known as the First Incursion came to a close.

                <br> Friends were made and times, good and bad, were shared- but most Pokemon went their separate ways beyond the wall of lava that separated the Fires from the 'Anti-Fires.' Some, like the now-branded Lizzy, would return to the Grotto to poke around some more, and some wouldn't.
                
                <br> But what of these mystery assailants Magnus talked of? Who were they, and would the Pokémon here ever actually cross paths with them? Only time would truly tell... </b>



                
                "
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
                "synopsis" => "The contents of a rather odd letter- one stamped with the Knight's personal insignia- has been intercepted from a passerby (who, oddly, was not a Follower- and will not say where he obtained it from) and circulated around Berlie and the surrounding cities by hearsay- hearsay, since, well, the original letter barely survived an encounter or two within the city. However, any veteran Followers passing through that managed to glimpse such a thing would notice the calligraphy looked shaky- not at all what they’d expect from their Knight. Still, who among them was going to defy a direct order from their leader?

                <br> <br> They had been instructed to hold a banquet at the Amber Outpost in two weeks’ time- with the dual purpose of spreading their network to recruit interested passerby as well as crush any Guild members that happened to meddle in their affairs in the process. So, as specified by the letter, the Followers set up a lavish feast in the Amber Outpost- everything from freshly-prepared bread, only the best Berries, and everything in between. Even Pokemon from Berlie, who were more accustomed to things like getting drunk than feasting, could get their fill. Nobody really knew who started the feast, but it wasn’t like anyone was going to turn down free food in a place like the Island. You didn’t look a gift Pontya in the mouth- or any part, for that matter.

                <br> <br> Among the first to arrive were Grace and Blot, two Pokemon that had formed an unlikely bond in the time before the feast (along with one funny giraffe Neroh Corsair, who had also been there at the time but said he was working on something to bring to this feast)- given that the latter landed directly on a roof and was acclimated to the Island to the former. They were joined by Cal, another newcomer to the Island- and equally as concerned about what was going on. The Followers in attendance, though he didn’t know about them, had big scary swords- probably not just for show, either. The initial gathering was also joined by Myo, a Furret that had been introduced to the Island by a resident large dragon a couple days ago and was also still getting his bearings; as well as Weyland, a Lucario whose primal disaster sense had brought him here- just in case things went to shit. 

                <br> <br> With a half-dozen Pokemon there, the entirety of the group got to know who their friends were (and, for some, who their enemies were). It was a touching time- the resident blacksmith from Vertum, Jolanda the Jigglypuff, had even come to the banquet, wishing to sell her wares to the Followers (for they would certainly be interested in swords, right). Unsurprisingly, this meant she forewent festivities in lieu of business opportunities, which led her to Miasma- the wonderfully poisonous vaguely fox-shaped object that she was. 

                <br> <br> Blot, being a Pokemon that also gushed liquid from her tail, found this very interesting- especially when the conversation shifted to the Followers of the Sword. That name was noteworthy enough to attract Cal’s attention, but it quickly becomes “everyone hates Jolanda’s obnoxiously loud voice” the group, and the crowds soon disperse to eat- as more and more Pokemon arrive.

                <br> <br> The two most social Island newcomers, Cal and Myo, meet and greet about their experiences- and eventually learn that they’re in the same boat as each other, though the collective awkwardness of both makes that not last very long. Instead, Cal goes back to trying to speak with Miasma about the Followers- which goes about as well as you would expect. He tries to make some small talk and get information, but between her general eclectic nature, Jolanda constantly interrupting the conversation while half-drunk, and a couple other things, he doesn’t get too far besides the group behind the Feast. Of course, this would be the Followers- why else would she be here? The fox even introduces him to the nearby Anastasia the Reuniclus, one of the Followers’ higher-ups, and the same one that took her in many years ago.

                <br> <br> Soon, two rascals from Berlie arrive, ready for free food, partying, and chaos in general- Rose the Ghostly Riolu and Spike, Smokey the Bear but if the bear was actually smoking and not just named that. Apparently, they’d been tipped off at the local Burlyn’s- the biggest bar in all of Berlie- that there was to be a feast today in the Outpost. They speak with Cal, who had apparently become the world's most diplomatic and friendly dog today, who clues them on what this is- <i> a Follower's feast. </i>

                <br> <br> More Follower talk and Anastasia’s attention attracts Sol the Leafeon, another Follower who literally couldn’t be happier for who he was working under. Missing an entire paw was nothing compared to the security that being on the side of the world brought- and does his best sales pitch for recruitment purposes, since, y’know, that was part of why they were there. Both he and Miasma try to take in Cal, but he defers such an idea to a later meeting when he’s more informed. Fair enough. There were still many more Pokemon to speak to, after all!

                <br> <br> And so, after several hours, Miasma and Sol had made their rounds to just about everyone- scaring some half to death and garnering interest from others- introducing both Jolanda and Cotton to Anastasia, which the Multiplying Pokemon found pleasant enough. It was always splendid to find more Pokemon interested in carrying the banner of their Knight to one day take the entire Island under his wing. Jolanda even found a customer she could and would easily work with (besides the business opportunities with the Followers that she had actually managed to secure)- Cotton the Ditto. Some of the partygoers had either gotten too drunk to function properly, or like Blot, were all done with social interaction for the day. Or the week. Or their entire life. Something like that.

                <br> <br> The tail end of the party was heralded by the arrival of Comet, who stuck away from the festivities and simply wanted information as to what was going on- and of course the Lucario was already reaching out to her with Aura, much to her chagrin; and Briar, a Skarmory raised in the Vertum Aviary who honestly just wanted to fight. While he picks a fight with the nearby Ninghe, that energy spreads to Rose, who had been riled up by a few off-hand comments, and picks a fight with Myo out of annoyance and bored reprisal (given that she had, also, talked with most everyone).

                <br> <br> Grace finally explains to Blot, who had started to take interest in the Followers through Miasma, the inherent danger of what becoming a Follower had: “Do you like your arms? You do not simply ‘visit’ [Techne] as a tourist. You need to join them to do that- and the Black Knight they follow demands sacrifice.” And, because that was not enough to sway the Smeargle’s interest, she storms off to finally get some much-needed social interaction with others.

                <br> <br> Given that more Pokemon had arrived, Anastasia once again instructs the Followers in residence to talk to everyone- which results in more chaos when Miasma gets involved once more. Spike, this time, is the one to take the blame for it… but it’s a parlor trick that ends up spiraling the entire banquet into chaos.

                <br> <br> ...

                <br> <br> But first, a message from our spons- I mean the Crusaders- three to be in fact, Lyn the Mightyena, Manfred the Delphox, and Rufus the Feraligatr. Now, the Crusaders acted as the de-facto police force in the nearby area, so their presence here was something that everyone respected. Manfred pretty much screamed into the crowd for an answer and shoved a very beaten-up-looking Neroh to the ground for everyone to see, while Rufus held up a mangled pizza box. What an arrival to the party. Allegedly, the giraffe had poisoned one of the Crusaders, and they were here to make sure more shit like this wasn’t going to happen. Grace and Blot were about to step forward to help their friend, when Sol dropped the bombshell of accusing Neroh of being a Guild member- because only someone affiliated with that blasted Deity would have ever thought of trying to poison the Crusaders. Fortunately, although the Delphox was about to go ballistic over what he angrily termed the ‘blame game cesspool’ between the Followers and Guild members - because of course they would blame the Guildies for every little grievance in their life, Lyn stepped in as the much more quiet middlemon.

                <br> <br> With there not being fear of reprisal-by-oven from the angry fox, Blot could step in to defend Neroh- and even Spike, who had previously duped the giraffe into smoking a joint, could speak up. He seemed too dumb to be a Guild member- and that wasn’t even just an act. Fair, but that didn’t explain who sent him or why he would be here. There was no way that this Pokemon was that dumb- enough to walk up to a random feast and try to piss off the Crusaders at the same time, right? The possibility was brought that Neroh was, in fact, a Guildie- maybe the Crusaders had just intercepted a knowing package for the feast, ready to poison their enemies there? So, Lyn, Blot, and Grace attempt to reason through the whole thing- Manfred shouting the order that nobody is to leave until they find the guilty party responsible for this- but can only point it down so far as ‘if he was hired, he didn’t know what he was taking part of.’ While it isn’t a great answer, it’s enough to make a plan- ban Neroh from ever being in the Outpost, again, and patrol the area for the next few days for any more suspicious activity. The Crusaders finally let partygoers leave, if they wanted to (which most certainly did after such a damper was put on them), but… some Pokemon needed the last laugh.

                <br> <br> That someone happened to be Spike, who was now annoyed with both the Followers and the Crusaders. So, he does the most intelligent thing he could think of and lights a table on fire- one that just so happens to contain a whole lot of flammable materials on it… in a grassy Outpost. Not a very good combination, and when the fire suddenly fwoomfed into existence to cover almost half the Outpost, the whole thing was thrown into chaos. The Crusaders sprung into action, sending Lyn to run for help, while the others worked on dealing with the now-spreading fire. Most of the others were running for their lives, but Myo and Grace stayed behind to help combat the blaze with their fire-resistance Moves. Spike and Rose, obviously, fled the scene- but they were tailed by Comet, who had seen the perpetrator set the table ablaze, and of course Weyland, since this man could not help but follow after the Zoroark.

                <br> <br> Fortunately, the small band of three Pokemon didn’t need to combat the fire for too long, because help soon arrived in the form of more Crusaders and any Water-Type Pokemon close by to help. Next on the scene was Striker the Jolteon, the leader of the Crusaders, who quickly called down the rain, while the slew of other Water-Type Crusaders worked on getting anyone and everyone out of the blaze as they all fought back against it. 

                <br> <br> With the combined efforts of everyone, the blaze was successfully dealt with, and though several forest Pokemon were lost in the crossfire, smoke, and fire- the Outpost, itself, somewhat survived the terrible fire, only losing a few houses, tops.

                <br> <br> <b> With the final evacuation of the Amber Outpost for a couple days, sans the Crusaders and their efforts to more quickly disperse the fog and assess damages, the Amber Feast had drawn to a close. While the start had been rocky, and the ending rather cataclysmic, friendships and acquaintanceships appeared to be forged, while others were ground into dust by the internal turmoil of the situation. Some Pokemon, like a certain Neroh Corsair- had had their lives ruined by accusations thrown about the chaos of the dinner table; while others, like one Jolanda Smit, might even have garnered a bit of respect for her devotedness to her craft. 

                <br> <br> All Pokemon seemingly got  <i> something </i> out of it, whether good or bad, and- although it did not accomplish the entirety of the Followers' goals (to recruit everyone they could find and root out Guilds), it strengthened their foundation enough for even the stark Anastasia to be proud of what their group had accomplished. 
                
                <br> <br> A splendid showing for the Followers, and a dynamic turn for neutral parties involved. Certainly, this would not be the last time such an event would be called- at least, one could only hope so... </b>




                
                
                "
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
                "synopsis" => "<i> One of Nature’s many Mysteries... </i>

                <br> <br> One day, Halvar received word from a good friend in Vicheranta, Amawyrs the Milotic, about an odd cave that began to appear within their cove- a remote miniature island that so far had eluded the detection of anyone but her (and of course Halvar, as she trusted him with this information). According to her, the cave would appear one day, but disappear the next- like a cycle. Instead of attempting to delve inside, she went to him- knowing that he would be able to scrape together a squad of adventurers hardy enough for the job.

                <br> <br> Those Pokemon happened to be none other than Ayden the Breloom, the Follower farmer; Cassandra the Sneasel, a wandering Pokemon from Snowpoint City in Sinnoh that had recently been taken to the Island; Nina the Espurr, the most puntable psychic cat of the group (who had also been yoinked from her homeland), Myo, and Hallow the Trevenant- a wise old ent that hailed from the Tamer’s Reproach and a good friend of Halvar. Most of the resident boomers of the Island all knew each other, after all- it was a badge of honor for living this long.

                <br> <br> Once Halvar got them up to speed on what he knew and sent a messenger Pidgeotto off to tell the Milotic that they would be on their way, soon, the ragtag groups makes a bit of small talk- where those that had been transported to the Island discover just how many of them aren’t actually from the land (a whole 60% of them, in fact!). The discussion eventually shifts to Island politics- Guilds and Followers- since most were curious about Ayden’s missing claw, but it is quickly swept up by interest in their newfound mission. Would it be dangerous? Would it be a cakewalk? What  <i> would </i> this mysterious cove even be like? A place that was literally not even on the map?

                <br> <br> Well, only one way to find out.

                <br> <br> When the group arrives in Vicheranta, they come across the sent Pidgeotto waking up a sleeping Amawrys that had been sunning herself in the remaining hours of daylight on one of Vicheranta’s many port decks. At first, she doesn’t want to approach them- out of being overly shy- but the letter makes her realize who these Pokemon were. It was Halvar’s expedition squad, sent to investigate her cove problem. She soon reveals everything she knows about the cove- including important information that she intentionally withheld from the Walrein so that he wouldn’t worry. 

                <br> <br> When that cave appeared and opened, it would produce  <i> sounds </i>- terrible undead screeches and hisses and gargles and screams- that unnerved her to her very core. So far, nothing had come out of that cave and attacked her, but it sure kept her from even  <i> thinking </i> about sleeping. Just the morbid curiosity of what could even make noises like that- tortured souls abound- combined with the queasiness in her gut that came afterwards, was more than enough to drive her away from her own home every time that cave decided to rear its ugly head.

                <br> <br> Because the trek here had been long, and there was a lot to unpack, she offered them rest at that very Cove- and even had a boat that had apparently been constructed to ferry Halvar, himself (so it could carry all of them, easily), to do so. With no complaints, they set off- all crammed into this tiny boat like a family of five trying to fit in a 2016 Ford Fiesta. Hopefully, nobody got seasick. <strike> Laughs in Myo </strike>

                <br> <br> Boat thoughts and vibes continue into the sunset for a couple more hours, until the sun was naught but imagination, and the moon had taken up residence in the sky. The trip across the waters had been as calm as could be for sailing across the open ocean, all things considered. No wild Pokemon attacks, nobody falling overboard, and no minecraft zombie noises to keep you up at night. By the time the first speck of land was seen, most less-nocturnal Pokemon were probably asleep during the voyage across the (for ocean standards) quiet waters.

                <br> <br> And, honestly, the cove was  <i> worth </i> the wait- because it was nothing short of breathtaking- or, at least as breathtaking as a quiet little island could be when everyone really just wanted to sleep. Amawrys’ Cove was no more than a couple feet long, absolutely bursting forth with flowers and grasses and Berries of all different types. In the center was, interestingly enough, a freshwater lake segmented by pieces of the island (and odd sight, since, y’know,  <i> they were in the middle of the ocean. </i>

                <br> <br> Given that the place looked mostly undisturbed, one could conclude that she was the only one that lived here. And that made it all the more depressing that she could not enjoy the peace of this place with the tortured noises of angry demonic gremlins or whatever was causing it driving her off so much.
                
                <br> <br> Once the boat was docked and everyone was situated on dry land, Amawrys explains what was happening in more detail. In the middle of the island, directly encompassed by that freshwater lake, the cave would appear- and the sound would return. She had never had the courage to enter- and it was here that she also first formally introduced herself (even though everyone already knew her name from Halvar). Timidity and shyness were a fun combination, weren’t they?

                <br> <br> Planning and investigation soon came next: those that needed sleep would sleep, and those that could power through it (like Hallow- because he’s a Ghost) would keep watch. Ayden also volunteered, but he held himself to a pretty strict regiment, being a Follower and all. In shifts, the group investigates the Cove for any clues that would help them when they would inevitably need to face the terrifying minecraft zombie ambiance for themselves. Myo finds an Everstone wedged in a pile of rocks; Ayden finds and harvests a couple Durin and Figy Berries, which catches his attention due to the nature of those Berries- Durin Berries  <i> never </i> grew in the southern parts of the Island, so how were they here?; Nina comes across an invisible force that punts her into the dirt like the puntable little cat she is; while Cassandra attempts to console Amawrys and chill by the shoreline.

                <br> <br> During this investigation, a light green glow visible only to Hallow’s spectral eyes spreads across the lake. This was a glow the old tree recognized vividly, given that he was from the Tamer’s Reproach, that of a spirit- a Pokemon long since dead. The conclusion was natural: the Cove was haunted. By who or what, he wasn’t sure, but that glow most certainly couldn’t be ignored. 

                <br> <br> Amawrys… certainly didn’t take well to this information. This was all too much to take in- first the noises, then confirmation that a  <i> spirit </i> was responsible- an entity of which she’d heard way too many horror stories featuring vengeful revenants to count. While Ayden remains skeptical of the idea (despite the fact that most of the group had been magically whisked from their homelands and taken to the Island, something that Cass even notes), the tree does at least try to calm her down- as the Tender Pokemon’s defensive fetal position may or may not have involved almost squeezing Nina to death.

                <br> <br> Several hours pass, a few fantastic more shifts of sleep and searching, before something happens. It began the second Amawyrs finally nodded off to sleep. First, her body went deathly cold, and then, the entire Cove went <b> deathly silent </b>, like all the noise had been taken from the surroundings. The breeze no longer whistled through the plants, the waves no longer moved the shoreline, and so on. If you listened closely enough, you could even hear your own heartbeat speed up with anxiety. Hallow is the first to test the new spooky factor the Cove had just inherited by disturbing the central lake, but it appears and acts like normal water… Strange. What’s more, at the sound, the faint glow of the nearby spirit returned once again and shifted, as if somehow responding to the noise. Hallow concludes that this must somehow react to the Cove’s inhabitants falling asleep, as the supernatural didn’t really kick into high gear until Amawyrs fell asleep.

                <br> <br> Ayden went to check up on her, but quickly needed to shift gears to quickly set a fire and move her by it, as the Milotic had become bone-chillingly cold by now- the ramen noodle in the fridge that hadn’t quite made it to the bowl and sat there for three months. The cold then spread to the entire Island, chilling it at least a couple dozen degrees. 

                <br> <br>  <i> The center </i>. That was where Amawrys had told them the cave appeared- so might as well be a good time to check. Unfortunately, instead of finding any cave, they found five lines’ worth of undecipherable runes- even to the resident boomer Hallow. So, as Ayden attempts to keep Amawrys from literally freezing to death with all his survival skills, the rest of the group pokes around the runes… until the noises began.

                <br> <br> A low, rumbling <i> Rrrnnnn…. </i> followed by some ungodly hisses started a demonic chorus that rang through the quiet Cove like a death knell. Right on cue, the spirit Hallow had been eyeing disappeared, and Amawrys woke up- like she hadn’t been freezing at all. Of course, bad time to wake up- since she  <i> absolutely </i> recognized the noise and coiled right back up- thankfully this time not around Nina. As she lay there, shivering from fright, the fabled cave appeared. The ground where the runes were soon fell away, breaking apart to reveal a passage down into the depths under the ground.

                <br> <br> That was where they needed to go, it seemed, and after a few judgment calls to gauge depth (which wasn’t all that much of a drop- barely ten feet, if that), everyone heads inside- with enough gusto to even inspire the terrified Amawrys to join them.

                <br <br> The drop down wasn't all that bad- maybe a dozen feet of rough terrain, tops, but it wasn't anything that really messed with anyone, especially with Hallow helping everyone safely down. The ground below was made of hardened clay and stone- what you'd expect to be in such a place- but it was *uncharacteristically cold*. Maybe not as freezer-level-cold as the ethereal shenanigans that had afflicted the sleepers, earlier that night, but it certainly was no brisk jaunt through the sand anymore. Nothing but cold, hard, rock- and the serenade of a chorus of Minecraft zombie noises.

                <br> <br> The tunnel branched out into a small square room, about the size of a small garage. To the group's immediate left was a long hallway- like, even the little bit of light filtering in from where they entered could not hope to penetrate it. To the north was a smaller passage, narrow enough that the larger Pokemon in the ground would have a rough time meandering through. There, though, their light at least gave them something to go off of- a small dias of carved stones, neatly arranged and cast together in some sort of fashion.

                <br> <br> Hallow was quick to think this wasn’t exactly natural. Caves could form, sure, but this place didn’t seem to make spatial *or* natural sense. Ayden, ever the quick thinker, equips the group with torchlight that he hands off to Nina, while she and Cass sped forward through the narrow passageway to investigate the dias- finding a single mangled word in the process- the last of an inscription lost to time: <i>_om_de</i>. After some deliberating, Cass suggested a few different words it could mean- one of which was ‘comrade’.

                <br> <br> In the meantime, Ayden stayed back to comfort Amawrys, who, while compelled to follow them down into the hole, took only a few steps before beginning to panic. No mental breakdowns, yet, but she was certainly already on the edge of one. But… she also couldn’t bring herself to leave and abandon the party, either. Choices…

                <br> <br> With the power of Phantom Force and Myo as an anchor, the tree could soon follow right along with the rest of the group- while the Milotic crammed her face in the narrow passageway to watch, without daring to actually enter. 

                <br> <br>The rest of the room had a few more tunnels and passages, one of which looked like a bird’s nest and another that bore water. Nina, as the smallest ‘Mon there, went to investigate the smallest opening- that led into a set of small rooms and connecting, cramped tunnels lit only by torchlight. The group soon split up to investigate.

                <br> <br> Myo checks on the ‘bird’s nest’ and finds an abandoned Pokemon Egg, snug waaaaay down there. Good thing the Furret was literally part noodle and had no problem snaking his way in to get at it, right? Perhaps Myo was a dad in his past life or something, the way he handled Egg retrieval.

                <br> <br> Meanwhile, Cass checks the water-bound northern exit, only for her Keen Eyes to catch a trail of *Poke* scattered not too far from a bed of water more still than a painting. Being a Sneasel, she was drawn to pick it up, but the water seemed to really not like that- springing to life and hissing and gurgling. Something was certainly in the water- **and it definitely noticed she was there.** Daring to advance, the water suddenly heaved up something- an Umbreon, of all things, beaten and swollen to a bloody pulp and seemingly barely clinging to life. But, it didn’t seem like the mysterious water was done!

                <br> <br> Finally, Hallow just waited and listened- and waited and listened- until someone or something tapped him on the shoulder. Figuring he had the attention of whatever was controlling this place, he tries to communicate- for a half-formed mental image of some kind of Pokemon to show up in his mind. Amawrys, to nobody’s surprise, was scared stiff of this, as Hallow started talking to nobody at all…

                <br> <br> Then, the water caught everyone’s (well, but Nina- she was too far in mouse tunnel heck for that) attention, and it became a mad dash to go figure out what in the world was going on. While Hallow and Cassandra stood guard, the Umbreon finally responded: … *by coughing up a pile of blood right in front of them.* That couldn’t exactly be healthy.

                <br> <br> It seemed that everyone had moved through that narrow passage in one way or another to investigate- plenty of things to do, between Myo learning to rob eggs, Nina stumbling into Ronald Mc Donalds Playhouse of Fuck, and an Umbreon having such a morose skill issue that you could put him in a Resident Evil game and it would look normal.

                <br> <br> Everyone **except** Amawrys, who watched what little she could with the widened fear of a Deerling in the headlights. She didn't speak, nor say a word- especially after she saw Hallow reappear further inside. The Milotic had, by now, steeled herself about enough to actually follow them- until the same lack-of-stimuli that afflicted the Trevenant came to her, too. And then, something must have caught her attention, because, with one last glance towards the rest of the group through her little viewport, the Milotic was off into the westward darkness.

                <br> <br> Fortunately, it wasn’t long before Myo decided to check on Amawrys- only to find her missing. Just great- the Pokemon they were doing this all for had just vanished? Then, he caught a glimpse of her tail snaking its way into the darkness and darted after it. He called after her, but it was like nobody heard him- neither Amawrys nor the rest of the group.

                <br> <br> But, he soldiered on- and as his eyes adjusted to the darkness, he could see more and more of the Milotic. A straight path, a set of turns here and there, it all blurs into ‘look its Amawrys' tail, poking out of the darkness.’ And, finally, when it started to seem like he wasn’t getting any closer to finding her, Amawrys comes completely into view- scared to bits when she realizes that both of them have exactly no idea where they are, lost in the labyrinth under the ground.

                <br> <br> This took a while, though, so while the two noodles reunited, Hallow had also begun his chase into the darkness looking for them. This time, there was no Amawrys tail to chase, but it seemed that Spirit’s force he was talking with earlier was on his side- as every time he took a wrong path, he was unceremoniously corrected until he found them. 

                <br> <br> That room, however, appeared to hold a lot more secrets to it, as the Trevenant could notice that same green glow only he could see along the walls, as well as odd markings that ran along them to match. Unfortunately, nobody could glean anything from said markings- which certainly didn’t help Amawrys’ one single nerve ending a bit. After some more *obviously very careful* thought and planning regarding the markings’ meanings, Amawrys slammed her tail into the wall in an attempt to make them do something. However, that just broke the glow, entirely- so now, not even Hallow could see what in the world was going on. 

                <br> <br> Also, Nina eventually figured out what else lived in the tiny tunnels when she came to a fork in the road that turned into another tunnel full of chittering that she did not want any part of whatever satanic creature there was making. However, she also wasn’t exactly the best with directions- and once those noises started to invade her, she found herself right at the edge of a large drop. So, like any responsible adventure, she shines her torch over the gap to see what was down there- *only to be greeted by a couple dozen pairs of blood red eyes and the source of the chittering noises.* Turns out, Nina had found her way into part of a Durant nest. And they weren’t exactly happy about the presence of a fiery torch.

                <br> <br> So, while she started shouting and crawling back through those tunnels for her literal life, Ayden and Cass worked on stabilizing the Umbreon. Thankfully, the Breloom was easily strong enough to lift an emaciated, bloodied body around like a sack of flour- and it got the rest of that part of their group away from whatever was going on with the water, *even though it stopped completely once they left*, as if it could react to the presence of Pokemon. The Breloom also had a decent bit of experience with Herbs and Berries, given he was a farmer- and the Sneasel was great with the cold, perfect for slowing down the gushing of blood and icing swollen areas. So, between the two, they could stabilize him, force a Berry or two down his throat, watch him, and wait.

                <br> <br> That was when Nina’s bloodcurdling scream of a voice came out of her tunnel, and Cass jumped to try to widen the hole so they could get in after her. Arceus only knows what kind of fresh hell was there. Ayden, too, jumped in on the attempt, but that was only going to do so much.

                <br> <br> Thankfully, the Espurr came flying out of the tunnel a minute later like she’d been fired from a tennis ball machine. Un-thankfully, she came bearing news of what she’d found- an entire colony of Durant that she had now pissed the hell off by looking at them funny with a torch. In the ensuing commotion of what in the world to do, with the clock against them, their newfound Umbreon friend finally musters a few words, urging them to be quiet.

                <br> <br> That being said, Ayden was also an expert at dealing with these things and chucked an entire cluster of Seed Bombs into the tunnel- that very handily did exactly that. Probably wouldn’t slow down a bunch of tunnel-diggers for very long, but those extra few seconds were very precious, indeed. So, with those, the three rounded up the Umbreon, and the Egg Myo found, and beat a very quick retreat back up and out of the tunnel- and back to the surface. Half their group was still down there, sure, but Ayden reasoned it was unlikely the ants were going to go looking for them if they stayed put.

                <br> <br> And so, the split-second decision was made- Ayden stayed put and wanted to care for the Umbreon and that Egg on the surface, while the impulsive Nina dragged Cass into the western darkness once more- to look for the others- narrowly missing the wall of ants that flooded into the entrance afterwards.

                <br> <br> <hr>

                <br> <br> <i> Ayden and the Umbreon: </i>

                <br> <br> Back up top and out of harm’s way, the Umbreon finally was able to muscle out another couple words. And, the Egg was fine, to boot- no signs of damage or anything from the mad dash away from the Durant. With time to spare, he asks the Umbreon what in the world had happened- what led to the Pokemon getting thrown out of the mysterious water pool all bloodied and bruised.

                <br> <br> He claimed that he had woken up a couple hours ago, down there in that cave- to be similarly assaulted by the terrifying ambiance everyone else was familiar with. It was then that, looking for a way out, this shadowy thing found him and ran him through with its claws before disposing of what could be logically construed as a dead body in the nearby pool of water. The only thing he truly remembers from the encounter, besides a lot of pain, was the figure’s bright green eye. After a little bit more back-and-forth, the Umbreon also introduces himself as Osiris- or, at least, that’s what the shadowy figure addressed him by. He didn’t really remember all that much before waking up in that cave to begin with.

                <br> <br> As Osiris continues to struggle through the tale- and to even get a drink of water in him- Ayden surveys the area *just* in case there was something else, there. Amawrys said the place was pretty much empty, but those Durant may still be agitated- and if they found their way up top…

                <br> <br> Unfortunately, the ants were still *crawling* the place, looking for them. Fortunately, they didn’t seem smart enough to take the westward tunnel and ambush the rest of their group. *Un*fortunately, they also weren’t leaving the entryway- which meant said group, whenever they returned, would be in for a rude surprise.

                <br> <br> The air was starting to get colder, so he decides to start a fire to help out Osiris and the newfound Egg, which the Umbreon had started to take a liking to. Seems he was an alright guy, after all, doing what he could to look after the other defenseless ‘Mon there.

                <br> <br> Of course, this would certainly piss off the Durant- just ask Nina how quickly they responded to fire- so Ayden eventually elects to take a smoldering branch and stretch his arm down there with it in an attempt to shoo the ants off. One of them gets a *little* too close and pretty much gets cooked alive in an instant, which sends the rest of them into a frenzy.

                <br> <br> The sounds of Ayden’s machinations were enough to rouse the Umbreon to hobble over and check on it- only to command the Breloom to stand back, before loosing a Fire-Type Hidden Power straight into the heart of them- a fireball aimed with as much strength as he could put behind it. This gave Ayden enough time to lob a couple more burning sticks down there, and the combined assault was enough to fully ward off the ants. Angry and vengeful bitches they may be, none particularly wanted to trifle with the burning sticks and Fire-Type energy. And, with the path cleared, Ayden set Osiris back up by the fire and the Egg again, before heading down into the cave to find the others.

                <br> <br> <hr>

                <br> <br> While Ayden and the Umbreon started and played a game of Ant Tower Defense, that left the others still staring at runes in total darkness. Myo tried to be helpful and loose a bolt of Thunder (or two, or three, or-) to give the group a little bit of light and get their bearings, though it really just ended up flash-banging everyone a couple times. However, as it is decided that they need to turn around and find the rest of the group, Amawrys chances a glance backwards and goes totally pale. There was some sort of shadowy figure standing *right behind the Trevenant*- and Hallow sure whirled around at lightning speed to meet it. Even as Thunder’s light faded, he could still see it- a mess of shadows heralded by one detail- a singular, green eye. A Spirit? A Ghost? He wasn’t sure, so the term ‘phantom’ seemed to be the most appropriate. But, when the tree raised his claws to attack, the figure simply moved them back to his side.

                <br> <br> This was a problem. As Hallow, himself, put it: ‘The other two couldn’t see the threat at all – and the Milotic was on the verge of ‘breaking’ ever since this ordeal started. As things were, if something didn’t change, they would be playing this phantom’s own game.’

                <br> <br> So, he tried again- raising one arm and expecting the mysterious phantom to do the same. And, when it did, his other arm came up to forcibly grab it. An otherworldly chill ran through the Elder Tree Pokemon in an instant, and the room faded from his vision- replaced with torchlight of the same area. **Nina’s** torchlight. It seemed the pair of cats had made it to the same room, but at the same time, not.

                <br> <br> The ‘phantom’ looked in the cats’ direction in this alternate reality of a room, and that was enough for Hallow to consider it a threat. His hand lit up as he attempted to siphon the phantom’s energy, but all that managed to do was force more of the chill into him.

                <br> <br> Calling Amawrys to healing duty and Myo to support was about all he had time to do, before the phantom retaliated by firing an entire shotgun of Dark energy into the Trevenant that very nearly cripples him in an instant. This thing, whatever it was, was *not* playing games. And Hallow was not about to let it get away.
                
                <br> <br> The phantom addresses his efforts- a dull, grating voice like a war-grizzled grandpa’s vocal chords run through a cheese grater, and Hallow very quickly understood what was going on. These two rooms seemed to be overlapped, and this phantom was the bridge between the two of them. So, while he got Myo into position to help out- and the Milotic doing her best to keep the group afloat with Life Dew- Hallow’s voice came to Nina.

                <br> <br> She looked towards the sound, only to find the shadowy phantom in all of its torchlit glory and freak out. *There* was most likely their source of all of this- the one pulling all the strings in the tunnel, and quite possibly everything else along with it. Might even be responsible for the Umbreon’s injuries, too.

                <br> <br> Another visitor from another room showed up to the party- an Oranguru with the blankest expression known to ‘Monkind. Almost like it was possessed or something. So, when the monkey responded to Cass’ accusations with Psychic Terrain and a green flame appearing over its head, the pair of cats knew it had to go.

                <br> <br> Meanwhile, Hallow and Myo kept right on with the pressure. The Trevenant sent an Earthquake through the surroundings, and the Furret came down with an Iron Tail, only to be caught mid-charge *by the neck*.

                <br> <br> And, oh boy, the phantom certainly enjoyed that, turning to watch Hallow’s reaction while Myo struggled in its grip, before pointing and rippling an Expanding Force throughout the arena that assaulted everyone there- except for Nina and Cass. Even the monkey wasn’t safe, torn into by an unseen force.

                <br> <br> In the cats’ confusion, the green flame had moved to Nina- and she could now see everything going on with Hallow and friends- the Earthquake, the phantom force-choking Myo, and Amawrys absolutely losing it and screaming as loud as she could at the phantom- hey, Disarming Voice is a thing. And, between that, Myo’s attempt at an Iron Tail, and the Earthquake running a train through everything, the phantom’s shadowy frame started to fizzle and flicker.

                <br> <br> Speaking of Earthquakes, they still had an Oranguru to deal with- one that attempted to Instruct the phantom, though nothing happened. Then, when Hallow warped the dimensions even further with his Trick Room, the monkey decided the best course of action was taking out its frustration on the two cats with its own Earthquake.

                <br> <br> Unfortunately, all the fighting was very quickly too much for their resident Milotic- who, after taking the brunt of a couple combined Earthquakes, fell still and Fainted. One down. Hopefully not any more to go- though given how much Myo was getting the breath ripped out of him, that may come sooner rather than later.

                <br> <br> Fortunately for the group fighting on two fronts, Cass and Nina now had an ally to help them out- as the loud buzzing of wings weaponized itself into a blast of energy that joined itself with the cats’ reprisal on the monkey to fell the Pokemon as quickly as it appeared. Nina could see who their new ally was, too- a Ledian, clad in a tightly-knit blue scarf and radiating a faint green energy- though the Espurr wasn’t too keen on trusting the new ‘friend?’ immediately after everything they’d gone through today so far.

                <br> <br> The Ledian introduces himself as Comrade- the denizen of this Cove- and his glowy appearance as how Pokemon perceive Spirits, if they can even see them at all, that is. He reveals he was the one trying to talk to Hallow this entire time- those mental images and voices were his doing.

                <br> <br> But, one success did not change the outcome of the rest of the battle. Fortunately, they’d discovered another trick of the phantom’s- as their part of the group had heard Nina and Cass’ fighting. Perhaps the phantom could only attack those that could perceive it?
                It was a gamble, sure, but it was about all he had left. So, he let go- just as he was slammed in the chest by another Dark Pulse that sent him reeling and out of this world.

                <br> <br> The phantom moved to stand over Hallow’s defeated body, before chucking Myo right on top of him and disappearing with one last chilling remark: **’I would finish you, here, but I have learned all I require.’

                <br> <br> And with the phantom’s disappearance, the moans and screams that perpetuated the cavern disappeared; the ambient chill started to fade a little bit; and the two ‘versions’ of the same room seemed to merge together- reuniting both groups together as one again. This, of course, also let Nina and Cass and their new friend Comrade move to help!- because all of Hallow, Myo, and Amawrys had seen better days.

                <br> <br> First things first, the Ledian used Sunny Day in an attempt to help the plant out, but that quickly turned to worry when ‘he could not feel Hallow’s Essence.’ Myo comes to after his brief concussion from being chucked across the room, pretty soon after, and is grateful that the threat was gone, but still wildly confused. After all, *he can’t see Comrade and can only hear his voice.*

                <br> <br> As the group attempts to lick their wounds, the cats learn just a little bit more about Essence from the Ledian: ‘Essence makes up all life on this Island. We Spirits are quite sensitive to it, like moths to a flame. Typically, when a Pokemon dies, their Essence is released back into the earth, and they become what we call a Spirit. But…’ he frowns, scratching his head.

                <br> <br> ‘I don't believe I've ever seen a Pokemon who both appears alive and bereft of Essence. *You all are the first*- so, truthfully, if he is like the rest of you, my guess is as good as anyone else's whether your tree friend will make it or not.’ The only one who appeared to have this ‘Essence’ in them was Amawrys. Interesting…

                <br> <br> A couple more minutes and proverbial bandages later, Hallow eventually comes to again- still ready to throw hands with the phantom, only for it to be entirely gone. Comrade also didn’t seem to know what it was they’d fought- as he’d only come on the tail end of that clash.

                <br> <br> Hallow reveals to the others what he learned- its affinity for ice, but also Dark Pulses strong enough to rip through even him like butter and a surprising amount of resistance to Earthquakes to it. Not like any Ice-Type Pokemon he’d ever met. Nina starts listing off every detail she could remember about this mysterious phantom that they saw- 

                <br> <br> Until a familiar voice comes in from behind them. It was Ayden, clad with a couple torches and probably smelling like smoking Durant. Great to have some more support, in case something else was down here- but also great to have access to more Berries and supplies to help the near-defeated group! Time to get back to the surface- talking could be done after they weren’t in the potential striking range of more subterranean horrors.

                <br> <br> <b> So, back on the surface… </b>

                <br> <br> Time spent healing was time spent asking questions- and the question of the day was still the identity of this phantom anomaly. First things first, the group explained everything that happened to Comrade (plus or minus a couple more confused comments about talking to nothing if someone couldn’t see him), just in case the Ledian, in all of his Spirit-y ways, could piece something together that the rest of them couldn’t. The whole Durant fiasco confused him- given they were ‘quite peaceable.’

                <br> <br> It was around this time that Amawrys also came to, and it took her a moment to process that the infernal noise was gone, the weird phantom thing was gone, and they were back up on the surface. Hallow fills her in on what happened after she went unconscious during their fight against the phantom, before finally asking her about Osiris. Amawrys had said she was alone in the Cove, but the Milotic did not know who he was.

                <br> <br>  *‘I thought I was the only Pokemon on this island, too... No Umbreon, no Durant, and especially no spirits... I'd... I don't think I would have stayed if I knew a spirit dwelt here, too.’*

                <br> <br> The subject of Spirits also comes up, since a group of non-Islanders was certainly not familiar with them. Comrade explains that all life on this Island is made of Essence. When Pokemon are alive, that Essence is a part of them; when they die, they retain a fraction of it as a Spirit. And, inevitably, Spirits lose their way and give in to the feelings they carried with them upon death- becoming a ‘Fiend’- a mindless revenant with the goal of killing anyone and anything near it. There was no way to predict how long the transformation would take, and there was no way to stop it from happening- though there did exist Pokemon who prided themselves on hunting these Fiends that called themselves the Demon Slayers. 

                <br> <br> But, the ramifications of this whole process was something Hallow was very quick to pick up on, as Comrade was essentially admitting that, in an unspecified amount of time, he would become one of those ‘mindless revenants’. And, if Amawrys chose to stay on the Cove, there would come a day where she would be attacked by a zombie-mode Ledian.

                <br> <br> It was likely that the phantom the group fought was also one of these Fiends. This was why Amawrys could remain on the Cove, by herself, for so long- as it wasn’t causing problems until recently, when it became a Fiend. And, if it took *all of them* to take one down, the timid Milotic who almost had a heart attack no less than fifty times during all of that would stand absolutely no chance. That left her a choice- abandon the Cove (and Comrade) to an unavoidable fate, or stay and risk death at the hands of a Fiend-to-be. And that wasn’t a choice she had the willpower to make.

                <br> <br> Cassandra and Nina express interest in the prospect of kicking ass with a Demon Slayer or two- imagining them as these grizzled war veterans that can go toe-to-toe with the kind of ‘Pokemon’ they just had to fight and wanting to train enough to join their ranks and help out more Pokemon like Amawrys. Seeing the Milotic break down in tears over it just planted the idea all the more strongly. Maybe Halvar would know about how to find them?

                <br> <br> After an attempt from several group members to convince Amawrys to leave her home tearfully succeeds, everyone loads their boat back- a little bit more cramped than before, given that they now had Osiris and an Egg to add to the mix- and says their final goodbyes to the area. Nina did promise to one day return, though, and beat the fucking shit out of whatever Fiends were there as a proper Demon Slayer, one day. 

                <br> <br> *For Amawrys.*

                <br> <br> …

                <br> <br> The returning trip to Vicheranta (and ultimately, Mizanite to go see Halvar) went as perfect as it could, and the walrus was all-the-more-happy to see the group step back into his shack. But, that didn’t last long- everyone looked pretty darn beat up and mangled, they had an Umbreon with them, and Amawrys looked like she wanted to stop living. Hallow explains everything to him- from the Cove’s ‘haunting’, the Umbreon, the Fiend they encountered, the Durant- everything. But, when he references the idea of re-surfacing a mission to the Cove to the Demon Slayers, Halvar at first ignores it for the rest of the tale. They *did* do a spectacular job, though- and even saved a couple extra lives in there, to boot. He offers to make living arrangements for Amawrys- which, while it’s no Cove, is better than going back to town, something that the Milotic is adamant that she does not want to do- and Osiris, who was similarly fine with not ending up on the streets without a home.

                <br> <br> After that long-winded explanation, the Trevenant does reveal he needs to get back to tending his plants for the fall harvest, which prompts the walrus to reward them extremely handsomely for their work: *‘Help yourselves, I ain't gonna be stingy when you're savin' lives.’*

                <br> <br> During this, Cassandra asks once again about the Demon Slayers, to which Halvar gives her *that look*- of a teacher summoning you for after-class somethings or other. 

                <br> <br> So, after everyone picks up their rewards and leaves to go do who-knows-what, Cass and Nina stay behind to express their interest in the Demon Slayers again. Halvar, however, is very not interested in the idea, dismissing them as fanatical lunatics hungry for the thrill instead of actually protecting Pokemon. Nothing noble about a thrill-seeker pretending to be the Robin Hood of dead Pokemon.

                <br> <br> The two, however, are undeterred, and Nina’s sheer stubbornness about her situation, about what she believed the Slayers to be, and about the Island in general eventually convinces the old walrus to talk a little bit more. That tenacity reminded him of when he was younger, and how much he regretted being only focused on wanderlust. But, he would honor that window back into his own life by giving her what the pair wanted- an audience with the Slayers.

                <br> <br> Halvar gives them a small gold coin with a red angel’s wind emblazoned into its surface, instructing them to head to Berlie City’s most popular bar, Burlyn’s, and ask for a Pokemon named Aurelius. He eventually leaves them to their own devices, and the two make plans to visit Berlie in the near future and track down their membership with these illustrious Slayers.

                <br> <br> <hr>







                <hr>





                "
            ),

            array(
                "story" => "Nature's Mysteries (001): Behind the Water Grotto",
                "characters" => array(
                    "Verdant the Absol", "Lizzy the Porygon-Z", "Ayden the Breloom",
                    "Astereaux the Sylveon"
                ),
                "npcs" => array(
                    "Halvar the Walrein", "Ernesto the Slowbro", "Velos the Victini", "Jezebel the Dragonite"
                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br> Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),

            array(
                "story" => "Nature's Mysteries (003): The Islands' Sharpest Minds",
                "characters" => array(

                ),
                "npcs" => array(

                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br> Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),

            array(
                "story" => "The Honen Contest: Act I",
                "characters" => array(

                ),
                "npcs" => array(

                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br> Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),


            array(
                "story" => "Those Against the Doer: A Grand Heist",
                "characters" => array(

                ),
                "npcs" => array(

                ),
                "synopsis" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.

                <br> <br> Lectus nulla at volutpat diam. Enim nec dui nunc mattis enim ut tellus elementum. Elit at imperdiet dui accumsan. Erat pellentesque adipiscing commodo elit at. Eu feugiat pretium nibh ipsum consequat. Adipiscing vitae proin sagittis nisl rhoncus mattis rhoncus urna. Eu turpis egestas pretium aenean. Neque sodales ut etiam sit amet nisl. Quis eleifend quam adipiscing vitae proin sagittis. Dolor morbi non arcu risus quis varius quam quisque id. Ac auctor augue mauris augue neque gravida in. Purus non enim praesent elementum facilisis leo vel. Ullamcorper velit sed ullamcorper morbi tincidunt ornare. Congue nisi vitae suscipit tellus mauris a diam. At lectus urna duis convallis convallis tellus."
            ),


);


$islandLandmarks = array(
    "northern" => array(
        "Route 6", "Cragrune Outpost", "Route 8", "Techne", "Route 7", "Mizanite City", "Route 4", "Mizanite Inlet",
        "Briesfall Town"
    ),

    "farnorthern" => array(
        "Northern Wastelands"
    ),

    "southwestern" => array(
        "Berlie City", "Route 5", "Alornue Town", "Route 9", "Field of Ages", "Via Matoya"
    ),

    "southeastern" => array(
        "Route 1", "Route 2", "Amber Bypass", "Vertum Town", "Vertum Onlook", "Vertum Aviary", "Route 3",
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
            "map" => "img/Location Maps/Northern/Route 6.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(

            )
        ),

        "Cragrune Outpost" => array(
            "map" => "img/Location Maps/Northern/Cragrune Outpost.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array( 
                array(
                    "name" => "Cragrune Mines",
                    "info" => "The old brainchild of the Cragrune family, the mining savants that supplied most of the Island's power back in the day. Now, the Mines are a shadow of their former self and constantly ripped to shreds by the Followers in the search for better, stronger metals and ores."
                )
            )
        ),

        "Route 8" => array(
            "map" => "img/Location Maps/Northern/Route 8.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),
        
        "Techne" => array(
            "map" => "img/Location Maps/Northern/Techne.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 7" => array(
            "map" => "img/Location Maps/Northern/Route 7.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Mizanite City" => array(
            "map" => "img/Location Maps/Northern/Mizanite City.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Halvar's Mystery Shack",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                )
            )
        ),

        "Route 4" => array(
            "map" => "img/Location Maps/Northern/Route 4.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Mizanite Inlet" => array(
            "map" => "img/Location Maps/Northern/Mizanite Inlet.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Poli Bros. Logging",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                )
            )
        ),

        "Briesfall Town" => array(
            "map" => "img/Location Maps/Northern/Briesfall Town.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Briesfall Tower",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                ),
            )
        ),

        //Far Northern Areas
        "Northern Wastelands" => array(
            "map" => "img/Location Maps/Far Northern/Northern Wastelands.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        //South-Western Areas
        "Berlie City" => array(
            "map" => "img/Location Maps/South Western/Berlie City.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Burlyn's",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                ),

                array(
                    "name" => "Berlie Church",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                )
            )
        ),

        "Route 5" => array(
            "map" => "img/Location Maps/South Western/Route 5.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Alornue Town" => array(
            "map" => "img/Location Maps/South Western/Alornue Town.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 9" => array(
            "map" => "img/Location Maps/South Western/Route 9.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "The Grim Troupe's Main Stage",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                )
            )
        ),

        "Field of Ages" => array(
            "map" => "img/Location Maps/South Western/Field of Ages.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Via Matoya" => array(
            "map" => "img/Location Maps/South Western/Via Matoya.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        //South-Eastern Areas
        "Route 1" => array(
            "map" => "img/Location Maps/South Eastern/Route 1.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),
    
        "Route 2" => array(
            "map" => "img/Location Maps/South Eastern/Route 2.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Home of Delphi the Oracle",
                    "info" => "The most prominent oracle on the Island back before the Fragmenting was named Delphi, a mysterious Tamer that lived alone amidst a grove of pink trees. It is said that a secret lies behind her house, but no one has dared to potentially provoke the ire of the magical seals that may or may not exist, there. Currently, no Pokemon that has ever ventured into the woods beyond Delphi's home came back alive."
                )
            )
        ),

        "Amber Bypass" => array(
            "map" => "img/Location Maps/South Eastern/Amber Bypass.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "The Bastion of Marble",
                    "info" => "Hidden deep within the labyrinthine caverns of the Amber Bypass is one of the Island's two Guilds, the Bastion of Marble."
                )
            )
        ),

        "Vertum Town" => array(
            "map" => "img/Location Maps/South Eastern/Vertum Town.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Vertum Dojo",
                    "info" => "A building originally used for battling that has since been converted into another arm of the law. The chief, here, is named Marlon- a Machamp who prides himself on the ability to break up any fight in front of him."
                ),

                array(
                    "name" => "Anastasia's Weavery",
                    "info" => "Born of a desire to make the world look pretty, a Hatterene named Anastasia runs a boutique out of Vertum in her quest to keep the town and everyone in it adhereing to her impossible standards. She is sometimes assisted in this regard by Motorboard, a Rotom that helps her maintain the grass around town and around her shop."
                ),

                array(
                    "name" => "Vertum Pokemon Center",
                    "info" => "While the tech of olden day is long gone and inoperable, this place remains one of the only trustworthy clinics across the Island- at least, if you don't have good standing with the Followers!"
                ),

                array(
                    "name" => "Jolanda's Forge",
                    "info" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at."
                )
            )
        ),

        "Vertum Onlook" => array(
            "map" => "img/Location Maps/South Eastern/Vertum Onlook.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Vertum Aviary" => array(
            "map" => "img/Location Maps/South Eastern/Vertum Aviary.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 3" => array(
            "map" => "img/Location Maps/South Eastern/Route 3.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 12" => array(
            "map" => "img/Location Maps/South Eastern/Route 12.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array( 
            )
        ),

        "Vicheranta City" => array(
            "map" => "img/Location Maps/South Eastern/Vicheranta City.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        //Far Southern Areas
        "Amber Outpost" => array(
            "map" => "img/Location Maps/Far Southern/Amber Outpost.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Professor Hensley's Lab",
                    "info" => "The former lab of Albus Hensley, the Island's resident Pokemon Professor. Broken down and ransacked by bandits long ago, it used to hold untold knowledge and records of research, many books of which now sell for quite high prices on the black market. Daedalus the Espeon still chooses to live here."
                ),

                array(
                    "name" => "The Crusaders' Headquarters",
                    "info" => "A group of Pokemon that call themselves the Crusaders keep the peace in the southern reaches of the Island like an impromptu police force. Their headquarters are located on the eastern side of town."
                ),

                array(
                    "name" => "Amber Jail",
                    "info" => "A building created due to the Crusaders' wish to police the surrounding area. For the most part, it has been unused, though there are still a few troublemakers that get thrown in there from time to time."
                )
            )
        ),

        "Route 10" => array(
            "map" => "img/Location Maps/Far Southern/Route 10.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Route 11" => array(
            "map" => "img/Location Maps/Far Southern/Route 11.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Tamer's Reproach" => array(
            "map" => "img/Location Maps/Far Southern/Tamer's Reproach.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
                array(
                    "name" => "Medu Tierra Landing",
                    "info" => "A clearing in the thick jungle surrounding an ornate set of pillars and a mystical glyph that can teleport those worthy to Medu Tierra, the Pokemon paradise."
                ),

                array(
                    "name" => "Arija Tribe Settlement",
                    "info" => "Back when humans existed, a group of hardened Tamers that called themselves the Arijas forded the jungle long ago and made their settlement here. The place is still guarded by their chieftan, Ares', former Pokemon- Circe the Delphox- and all those who lay claim to the Arija bloodline."
                )
            )
        ),

        //Grottos
        "Water" => array(
            "map" => "img/Location Maps/Tamer Grottos/Water.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Electric" => array(
            "map" => "img/Location Maps/Tamer Grottos/Electric (first floor).png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Rock" => array(
            "map" => "img/Location Maps/Tamer Grottos/Rock (depths).png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        "Fire" => array(
            "map" => "img/Location Maps/Tamer Grottos/Fire (first floor).png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),

        //Misc Locations
        "Amawrys' Cove" => array(
            "map" => "img/Location Maps/Misc/Amawrys' Cove.png",
            "information" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Viverra orci sagittis eu volutpat odio facilisis mauris sit. Facilisis leo vel fringilla est ullamcorper eget nulla facilisi etiam. Nec sagittis aliquam malesuada bibendum arcu vitae elementum curabitur vitae. Nunc sed blandit libero volutpat sed cras ornare. Diam ut venenatis tellus in. Sit amet purus gravida quis. Netus et malesuada fames ac turpis egestas maecenas. Habitant morbi tristique senectus et netus. Aliquet lectus proin nibh nisl condimentum id venenatis a condimentum. Arcu non sodales neque sodales ut etiam sit. Varius sit amet mattis vulputate enim nulla aliquet. Erat imperdiet sed euismod nisi porta lorem mollis aliquam ut. Pellentesque pulvinar pellentesque habitant morbi tristique senectus et netus et. Elementum integer enim neque volutpat ac tincidunt vitae semper. Ullamcorper velit sed ullamcorper morbi tincidunt. In nisl nisi scelerisque eu ultrices. Vitae tempus quam pellentesque nec nam aliquam sem et tortor. Integer feugiat scelerisque varius morbi enim nunc faucibus a. Tortor dignissim convallis aenean et tortor at.",
            "notableplaces" => array(
            )
        ),


);


?>