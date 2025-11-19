<!--
Jose John T. Rivera Jr.
WD-203

one complete set of song lyrics (clean & readable in browser) / complete
At least 3 string variables / complete
At least 2 numeric variables used with operators / complete
At least 1 array of nouns / complete
At least 1 array of verbs and adjectives / complete 
At least 1 array of song sections (chorus or verse) / complete
At least 2 examples of operators (+, ., *, /, .= etc.) / complete
At least 2 clear examples of type juggling / complete
Comments explaining what you did / complete

-->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Sailor Song by Gigi Perez</title>
    <img src="songimg.png" alt="Album Cover" style="width:200px; height:200px; margin: 1em auto; display: block;">
    <style>
        body {
            font-family: Times New Roman, sans-serif;
            background-color: #fdf6f0;
            color: #333;
            padding: 2em;
            line-height: 1.6;
            text-align: center;
            text-align: center;
        }

        h1 {   
            color:rgb(95, 151, 158);
        }

        p {
            margin-bottom: 1.5em;
        }

        strong {
            color: #444;
        }
    </style>
</head>

    <?php
    // At least 3 string variables
    $title = "Sailor Song";
    $artist = "Gigi Perez";
    $mood = "Adore";

    // At least 1 array of nouns
    $nouns = [
        "way", "Anne Hathaway", "pen", "knees", "baby", "things", "mouth", "sailor",
        "taste", "flavor", "God", "savior", "mom", "favor", "sleep", "time",
        "venom", "walls", "house", "cat", "mouse"
    ];

    // At least 1 array of verbs and adjectives
    $verbs = [
        "saw", "looking", "laughing", "hit", "coughed", "came", "begging", "do",
        "kiss", "love", "get", "tell", "believe", "say", "forget", "sleep", "wait",
        "take", "make", "worked", "tried", "capture", "spit", "run", "be", "laugh",
        "go", "sit"
    ];

    $adjectives = [
        "rightest", "happy", "dirty", "long", "worried", "covered", "dripping", "nothing"
    ];
    //At least 2 numeric variables used with operators
    $verse_1_lines = 7;

    //At least 1 array of song sections (chorus or verse)
    $verse1 = [
        "I saw her in the rightest " . $nouns[0],
        "Looking like " . $nouns[1],
        "Laughing while she hit her " . $nouns[2],
        "And " . $verbs[4] . ", and " . $verbs[4],
        "And then, she came up to my " . $nouns[3],
        "Begging, '" . $nouns[4] . ", would you please?",
        "Do the " . $nouns[5] . " you said you'd " . $verbs[7] . " to me, to me?'"
    ];

    $chorus1 = [
        "Oh, won't you " . $verbs[8] . " me on the " . $nouns[6] . " and " . $verbs[9] . " me like a " . $nouns[7],
        "And when you get a " . $nouns[8] . ", can you tell me what's my " . $nouns[9],
        "I don't believe in " . $nouns[10] . ", but I believe that you're my " . $nouns[11],
        "My " . $nouns[12] . " says that she's worried, but I'm " . $adjectives[5] . " in His " . $nouns[13],
        "And when we're getting " . $adjectives[2] . ", I " . $verbs[14] . " all that is wrong",
        "I " . $verbs[15] . " so I can see you 'cause I hate to " . $verbs[16] . " so " . $adjectives[3],
        "I " . $verbs[15] . " so I can see you and I hate to " . $verbs[16] . " so " . $adjectives[3]
    ];

    $chorus2 = [
        "Oh, won't you " . $verbs[8] . " me on the " . $nouns[6] . " and " . $verbs[9] . " me like a " . $nouns[7],
        "When you get a " . $nouns[8] . ", can you tell me what's my " . $nouns[9],
        "I don't believe in " . $nouns[10] . ", but I believe that you're my " . $nouns[11],
        "I know that you've been worried, but you're " . $adjectives[6] . " in my " . $nouns[13],
        "And when we're getting " . $adjectives[2] . ", I " . $verbs[14] . " all that is wrong",
        "I " . $verbs[15] . " so I can see you 'cause I hate to " . $verbs[16] . " so " . $adjectives[3],
        "I " . $verbs[15] . " so that I can see you and I hate to " . $verbs[16] . " so " . $adjectives[3]
    ];

    $verse2 = [
        "She " . $verbs[17] . " my fingers to her " . $nouns[6],
        "The kind of thing that makes you proud",
        "That " . $adjectives[7] . " else had ever",
        $verbs[19] . " out, " . $verbs[19] . " out",
        "And maybe I " . $verbs[20] . " other things",
        "But nothing can " . $verbs[21] . " the sting",
        "Of the " . $nouns[16] . " she's gonna " . $verbs[22] . " out right now"
    ];

    $outro = [
        "And we can " . $verbs[23] . " away to the " . $nouns[17] . " inside your " . $nouns[18],
        "I can be the " . $nouns[19] . ", baby, you can be the " . $nouns[20],
        "And we can " . $verbs[25] . " off things that we know " . $adjectives[7] . " about",
        "We can " . $verbs[26] . " forever until you wanna " . $verbs[27] . " it out"
    ];

    //At least 2 examples of operators (+, ., *, /, .=, etc.)
    $song_title = $title . " by " . $artist;

    //At least 2 clear examples of type juggling
    //At least 2 numeric variables used with operators
    $outro_lines = "Outro line and Verse 1 line count: " . (count($outro) + $verse_1_lines) . " lines in total.";
    ?>

    <!--At least 2 clear examples of type juggling the line <br>-->
    <h1><?= $song_title ?></h1> 
    <p><strong>Mood:</strong> <?= $mood ?></p>

    <!--used foreach for seperator-->
    <p><strong>Verse 1:</strong><br>
    <?php foreach ($verse1 as $line): ?>
        <?= $line ?><br>
    <?php endforeach; ?>
    </p>

    <p><strong>Chorus 1:</strong><br>
    <?php foreach ($chorus1 as $line): ?>
        <?= $line ?><br>
    <?php endforeach; ?>
    </p>

    <p><strong>Verse 2:</strong><br>
    <?php foreach ($verse2 as $line): ?>
        <?= $line ?><br>
    <?php endforeach; ?>
    </p>

    <p><strong>Chorus 2:</strong><br>
    <?php foreach ($chorus2 as $line): ?>
        <?= $line ?><br>
    <?php endforeach; ?>
    </p>

    <p><strong>Outro:</strong><br>
    <?php foreach ($outro as $line): ?>
        <?= $line ?><br>
    <?php endforeach; ?>
    </p>

    <p><?= $outro_lines ?></p>
</body>
</html>