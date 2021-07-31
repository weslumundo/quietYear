<?php
echo '<link rel="stylesheet" href="quietYear.css">';
$season = $_POST["season"];
$card = $_POST["card"];
$t1 = "help";
$t2 = "fjuck";

if($season == ""||$card == ""){
    echo "<p>No Input</p>";
}
else{
    if($season == "1"){
        if($card == "1"){
            
            $t1 = "What group has the highest status in the community?
            What must people do to gain inclusion in this group?";
            $t2 = "Are there distinct family units in the community? If so,
            what family structures are common?";
        }
        if($card == "2"){
            $t1 = "There’s a large body of water on the map.
            Where is it? What does it look like?";
            $t2 = "There’s a giant, man-made structure on the map.
            Where is it? Why is it abandoned?";
        }
        if($card == "3"){
            $t1 = "Someone new arrives. Who?";
            $t2 = "Two of the community’s younger members
            get into a fight. What provoked them?";
        }
        if($card == "4"){
            $t1 = "What important and basic tools
            does the community lack?";
            $t2 = "Where are you storing your food?
            Why is this a risky place to store things?";
        }
        if($card == "5"){
            $t1 = "There is a disquieting legend about this place. What is it?";
            $t2 = "Alarming weather patterns destroy something.
            How and what?";
        }
        if($card == "6"){
            $t1 = "Are there children in your community? If there are,
            what is their role in the community?";
            $t2 = "How old are the eldest members of the community?
            What special needs do they have?";
        }
        if($card == "7"){
            $t1 = "Where does everyone sleep? Who is unhappy
            with this arrangement, and why?";
            $t2 = "What natural predators roam this area? Are you safe? ";
        }
        if($card == "8"){
            $t1 = "An old piece of machinery is discovered,
            broken but perhaps repairable. What is it?
            What would it be useful for?";
            $t2 = "An old piece of machinery is discovered, cursed and
            dangerous. How does the community destroy it?";
        }
        if($card == "9"){
            $t1 = "A charismatic young girl convinces many to help her
            with an elaborate scheme. What is it? Who joins her
            endeavors? <b>Start a project to reflect.</b>";
            $t2 = "A charismatic young girl tries to tempt many into
            sinful or dangerous activity. Why does she do this?
            How does the community respond?";
        }
        if($card == "10"){
            $t1 = "There’s another community somewhere on the map.
            Where are they? What sets them apart from you?";
            $t2 = "What belief or practice helps to unify your community?";
        }
        if($card == "11"){
            $t1 = "You see a good omen. What is it?";
            $t2 = "You see a bad omen. What is it?";
        }
        if($card == "12"){
            $t1 = "What’s the most beautiful thing in this area?";
            $t2 = "What’s the most hideous thing in this area?";
        }
        if($card == "13"){
            $t1 = "A young boy starts digging in the ground, and
            discovers something unexpected. What is it?";
            $t2 = "An old man confesses to past crimes
            and atrocities. What has he done?";
        }
    }
    if($season == "2"){
        if($card == "1"){
            $t1 = "A contingent within the community demand to be heard.
            Who are they? What are they asking for?";
            $t2 = "A contingent within the community have acted on their
            frustrations. What have they damaged, and why did they
            damage it? Is it permanent?";
        }
        if($card == "2"){
            $t1 = "Someone new arrives. Who? Why are they in distress?";
            $t2 = "Someone leaves the community.
            Who? What are they looking for?";
        }
        if($card == "3"){
            $t1 = "Summer is a time for production and tending to the
            earth. <b>Start a project related to food production.</b>";
            $t2 = "Summer is a time for conquest and the gathering of
            might. <b>Start a project related to military readiness and
            conquest.</b>";
        }
        if($card == "4"){
            $t1 = "The eldest among you dies. What caused the death?";
            $t2 = "The eldest among you is very sick. Caring for them
            and searching for a cure requires the help of the entire
            community. <b>Do not reduce project dice this week.</b>";
        }
        if($card == "5"){
            $t1 = "<b>A project finishes early</b>.
            What led to its early completion?";
            $t2 = "The weather is nice and people can feel the potential
            all around them. <b>Start a new project.</b>";
        }
        if($card == "6"){
            $t1 = "Outsiders arrive in the area. Why are they a threat?
            How are they vulnerable?";
            $t2 = "Outsiders arrive in the area. How many?
            How are they greeted?";
        }
        if($card == "7"){
            $t1 = "Introduce a mystery at the edge of the map.";
            $t2 = "An unattended situation becomes problematic and scary.
            What is it? How does it go awry?";
        }
        if($card == "8"){
            $t1 = "Someone tries to take control of the community by force.
            Do they succeed? Why do they do this?";
            $t2 = "A headstrong community member decides to put one of
            their ideas in motion. <b>Start a foolish project.</b>";
        }
        if($card == "9"){
            $t1 = "<b>A project fails.</b> Which one? Why? ";
            $t2 = "Something goes foul and supplies are ruined.
            <b>Add a new Scarcity.</b>";
        }
        if($card == "10"){
            $t1 = "You discover a cache of supplies or resources.
            <b>Add a new Abundance.</b>";
            $t2 = "A Scarcity has gone unaddressed for too long!
            <b>Start a project that will alleviate that Scarcity.</b>";
        }
        if($card == "11"){
            $t1 = "Predators and bad omens are afoot. You are careless, and
            someone goes missing under ominous circumstances.
            Who?";
            $t2 = "Predators and bad omens are afoot. What measures do
            you take to keep everyone safe and under surveillance?
            <b>Do not reduce project dice this week.</b>";
        }
        if($card == "12"){
            $t1 = "<b>A project finishes early.</b> Which one? Why?";
            $t2 = "If there are no projects underway, boredom leads to quarrel.
            A fight breaks out between two people. What is it about?";
        }
        if($card == "13"){
            $t1 = "Summer is fleeting. <b>Discard the top two cards off the top of the deck and take two actions this week.</b>";
            $t2 = "Summer is fleeting. <b>Discard the top two cards off the top of the deck and take two actions this week.</b>";
        }
    }
    if($season == "3"){
        if($card == "1"){
            $t1 = "The community becomes obsessed with a single project. Which one? Why? Choose one:<br>
            • They decide to take more time to ensure that it is perfect. <b>Add 3 weeks to the project die.</b><br>
            • They drop everything else to work on it. <b>All other projects fail.</b>";
            $t2 = "f there are no projects underway, the community becomes obsessed with a grandiose vision.
            <b>Hold a discussion about this vision, in addition to your regular action for the week.</b>";
        }
        if($card == "2"){
            $t1 = "Someone returns to the community.
            Who? Where were they?";
            $t2 = "You find a body. Do people recognize who it is?
            What happened?";
        }
        if($card == "3"){
            $t1 = "Someone leaves the community after issuing a
            dire warning. Who? What is the warning?";
            $t2 = "Someone issues a dire warning, and the community
            leaps into action to avoid disaster. What is the warning?
            <b>Start a contentious project that relates to it.</b>";
        }
        if($card == "4"){
            $t1 = "The strongest among you dies. What caused the death?";
            $t2 = "The weakest among you dies.
            Who’s to blame for their death?";
        }
        if($card == "5"){
            $t1 = "The Parish arrives. Who are they? Why have they
            chosen your community, and for what?";
            $t2 = "A small gang of marauders is making its way
            through local terrain. How many are there?
            What weapons do they carry?";
        }
        if($card == "6"){
            $t1 = "Introduce a dark mystery among
            the members of the community.";
            $t2 = "Conflict flares up among community members,
            and as a result, <b>a project fails.</b>";
        }
        if($card == "7"){
            $t1 = "A project just isn’t working out as expected.
            <b>Radically change the nature of this project
            (don’t modify the project die). When it resolves, you’ll
            be responsible for telling the community how it went.</b>";
            $t2 = "Something goes foul and supplies are ruined.
            <b>Add a new Scarcity.</b>";
        }
        if($card == "8"){
            $t1 = "Someone sabotages a project, and <b>the project fails</b>
            as a result. Who did this? Why?";
            $t2 = "Someone is caught trying to sabotage the efforts of
            the community. How does the community respond?";
        }
        if($card == "9"){
            $t1 = "The community works constantly and
            as a result <b>a project finishes early.</b>";
            $t2 = "A group goes out to explore the map more thoroughly,
            and finds something that had been previously overlooked.";
        }
        if($card == "10"){
            $t1 = "Harvest is here and plentiful. <b>Add an Abundance.</b>";
            $t2 = "Cold autumn winds drive out your enemies.
            <b>Remove a threatening force from the map and the area.</b>";
        }
        if($card == "11"){
            $t1 = "<b>A project finishes early.</b> Which one? Why?";
            $t2 = "If there are no projects underway, restlessness creates animosity, and animosity leads to violence. Who gets hurt?";
        }
        if($card == "12"){
            $t1 = "Disease spreads through the community. Choose one:<br>
            • You spend the week quarantining and treating the disease. <b>Project dice are not reduced this week.</b>";
            $t2 = "• Nobody knows what to do about it. <b>Add “Health and Fertility” as a Scarcity.</b>";
        }
        if($card == "13"){
            $t1 = "A natural disaster strikes the area. What is it? Choose one:<br>
            • You focus on getting everyone to safety. <b>Remove an Abundance and a project fails.</b>";
            $t2 = "• You focus on protecting your supplies and hard work at any cost. Several people die as a result.";
        }
    }
    if($season == "4"){
        if($card == "1"){
            $t1 = "Now is the time to conserve energy and resources.
            <b>A project fails, but gain an Abundance.</b>";
            $t2 = "Now is the time for hurried labour and final efforts.
            <b>A project finishes early, but gain a Scarcity.</b>";
        }
        if($card == "2"){
            $t1 = "A headstrong community member takes charge of the
            community’s work efforts. <b>A project fails, and then a
            different project finishes early.</b>";
            $t2 = "A headstrong community member tries to take control of
            the community. How are they prevented from doing this?
            <b>Due to the conflict, project dice are not reduced this week.</b>";
        }
        if($card == "3"){
            $t1 = "Someone comes up with an ingenious solution to a big
            problem and as a result <b>a project finishes early.</b>
            What was their idea?";
            $t2 = "Someone comes up with a plan to ensure
            safety and comfort during the coldest months.
            <b>Start a project related to this.</b>";
        }
        if($card == "4"){
            $t1 = "All the animals and young children are crying and
            won’t stop. <b>Hold a discussion about this,</b>
            in addition to your regular action for the week.";
            $t2 = "A great atrocity is revealed. What is it? Who uncovers it?";
        }
        if($card == "5"){
            $t1 = "Winter elements destroy a food source. If this was your
            only food source, <b>add a Scarcity.</b>";
            $t2 = "Winter elements leave everyone cold, tired, and miserable.
            <b>Project dice are not reduced this week.</b>";
        }
        if($card == "6"){
            $t1 = "The time has come to consolidate your efforts and your
            borders. <b>Projects located outside the settlement fail,
            and all remaining projects are reduced by 2 this week.</b>";
            $t2 = "Someone finds a curious opportunity on the edge of the
            map. <b>Start a project related to this discovery.</b>";
        }
        if($card == "7"){
            $t1 = "What is winter like in this area? How do community members react to the weather?";
            $t2 = "What is winter like in this area? How do community members react to the weather?";
        }
        if($card == "8"){
            $t1 = "Winter is harsh, and desperation gives rise to fear mongering. Choose one:
            • Spend the week calming the masses and dispelling their violent sentiments.<b>The week ends immediately.</b>";
            $t2 = "• Declare war on someone or something. <b>This counts as starting a project.</b>";
        }
        if($card == "9"){
            $t1 = "Someone goes missing. They’re alone in the winter elements. Choose one:<br>
            • The community organizes constant search parties and eventually the person is found. <b>Project dice are not reduced this week.</b>";
            $t2 = "• No one ever hears from that person again.";
        }
        if($card == "10"){
            $t1 = "In preparation for the coming year, the community begins a huge undertaking.
            <b>Start a project that will take at least 5 weeks to complete.</b>";
            $t2 = "In preparation for the coming year, the community begins a huge undertaking.
            <b>Start a project that will take at least 5 weeks to complete.</b>";
        }
        if($card == "11"){
            $t1 = "An infected outsider arrives, seeking amnesty. They have some much-needed resources with them. Choose one:<br>
            • Welcome them into the community. <b>Remove a Scarcity,<\b> but also introduce an infection into the community.";
            $t2 = "• Bar them from entry.What Scarcity could they have addressed? How does its need become more dire this week?";
        }
        if($card == "12"){
            $t1 = "You see a good omen. What is it?";
            $t2 = "You see a good omen. What is it?";
        }
        if($card == "13"){
            $t1 = "The Frost Shepherds arrive. <b>The game is over.</b>";
            $t2 = "The Frost Shepherds arrive. <b>The game is over.</b>";
        }
    }
}
echo '<div id="option1">'. $t1 .'</div><div id="or">or...</div><div id="option2"> ' . $t2 . '</div>';
?>