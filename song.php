<?php
//At least 3 string variables
$title = "Fly Me to the Moon";
$artist = "Frank Sinatra";
$genre = "love";

//At least 2 numeric variables used with operators
$repeatChorus = 2;
$verseCount = 1; 
$totalNouns = 11;
$totalVerbs = 9;

//At least 1 array of nouns
$nouns = ["moon","stars","spring","Jupiter","Mars","hand","baby","song","heart","forevermore","you"];

//At least 1 array of verbs
$verbs = ["Fly","play","see","hold","kiss","Fill","sing","long","worship"];

//At least 1 array of song sections (chorus or verse)
$lastChorus = ["Fill my heart with song",
"And let me sing forevermore",
"You are all I long for",
"All I worship and adore",
"In other words, please be true",
"In other words, I love you"];

//Type juggling examples
$stringNumber = "15"; // String that looks like a number
$booleanValue = true; // Boolean value

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fly Me to the Moon</title>
    <style>

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: #333;
            margin: 0;
            padding: 20px;
            background-color:rgb(143, 207, 191);

        }

        h1 {
            color: #2c3e50;
            text-align: center;
            margin-bottom: 10px;
        }

        p {
            font-size: 1.1em;
            line-height: 1.6;
            max-width: 600px;
            margin: 0 auto 20px auto;
            text-align: center;
        }

        h3 {
            color: #34495e;
            text-align: center;
            margin-top: 40px;
        }

        br {
            display: block;
            margin: 5px 0;
        }
</style>

    
</head>
<body>
    <h1><?php echo $title?></h1>
    <p>by <?php echo $artist?><br>
    Genre: <?php echo $genre?></p>
    
    <!--Verse-->
    <h3>Verse</h3>
    <p><?php echo $verbs[0]; ?> me to the <?php echo $nouns[0]; ?><br>
Let me <?php echo $verbs[1]; ?> among the <?php echo $nouns[1]; ?><br>
And let me <?php echo $verbs[2]; ?> what <?php echo $nouns[2]; ?> is like<br>
On a-<?php echo $nouns[3]; ?> and <?php echo $nouns[4]; ?><br>
In other words, <?php echo $verbs[3]; ?> my <?php echo $nouns[5]; ?><br>
In other words, <?php echo $nouns[6]; ?>, <?php echo $verbs[4]; ?> me</p>

    <!--Chorus-->
    <h3>Chorus</h3>
<p><?php echo $verbs[5]; ?> my <?php echo $nouns[8]; ?> with <?php echo $nouns[7]; ?><br>
And let me <?php echo $verbs[6]; ?> <?php echo $nouns[9]; ?><br>
<?php echo $nouns[10]; ?> are all I <?php echo $verbs[7]; ?> for <br>
All I <?php echo $verbs[8]; ?> and adore <br>
In other words, please be true <br>
In other words, I love you <br>
</p>

    <!--Last Chorus-->
    <h3>Chorus</h3>
<p><?php echo $lastChorus[0]?><br>
<?php echo $lastChorus[1]?><br>
<?php echo $lastChorus[2]?><br>
<?php echo $lastChorus[3]?><br>
<?php echo $lastChorus[4]?><br>
<?php echo $lastChorus[5]?><br><br>

<!--At least 2 examples of operators (+, ., *, /, .= etc.)-->
Total Parts: <?php echo $repeatChorus + $verseCount ?><br>
Total Verbs and Nouns: <?php echo $totalNouns + $totalVerbs ?><br><br>

<!--Type Juggling Examples-->
Type Juggling Example 1 (String to Number): <?php echo $stringNumber + $verseCount ?><br>
Type Juggling Example 2 (Boolean to Number): <?php echo $booleanValue + $repeatChorus ?><br>
</p>


<!--Brief Comments explaining what I did-->
<!--What I did is I put all the index of the array of verbs and nouns inside the html lyrics.-->
<!--After that I tried to use the array index of the last chorus and put their index.-->
<!--I added type juggling examples where PHP automatically converts a string "15" to number 15,-->
<!--and converts boolean true to number 1 when used with the addition operator.-->
    
</body>
</html>