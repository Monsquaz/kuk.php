<html>
<head>
<title>kuk.php</title>
<style>
body { margin: 20px; }
</style>
</head>
<body>

<?php

srand((double)microtime() * 1000000);

$wordList = array("penis", "PENIS!!", "benis", "denis", "senis", "Dennis", "slick",
                    "oh yeah,", "Deven Gallo", "Deven Gallo's", "oh man,", "mad cockin'", "what a man!!",
                    "overclocked", "ah man,", "100%", "SEGA Genesis", "demanding", "big nuts", "firm nuts",
                    "overworked", "cockin'", "mad cocker", "incredible",
                    "amazing", "denis", "cocked", "cock!!!", "is", "the",
                    "and", "THE PENIS", "got", "extremely demanding", "extremely demanding on the hardware");
$notLast = array("deven gallo's", "is", "the", "and", "got", "oh man,", "ah man,", "oh yeah,");
$notFirst = array("what a man!!", "got", "is", "the", "and", "mad cocker",
                    "cock!!!", "cocked", "denis", "senis", "benis", "penis");

$wordListSize = count($wordList) - 1;

for($row=0;$row<5;$row++) { // START main loop
$numWords = rand(3, $wordListSize / 2);
$usedWords = array();
for ($i = 0; $i < $numWords; ++$i)
{
top:
    $wordListLookup = rand(1, $wordListSize);
    $word = $wordList[$wordListLookup];
    
    if (!in_array($word, $usedWords))
    {
        array_push($usedWords, $word);
        
        if ($i >= $numWords)
        {
            if (in_array($word, $notLast))
                goto top;
                
            echo $word;
        }
        else
        {
            if (($i == 0) && in_array($word, $notFirst))
                goto top;
                
            echo $word." ";
        }
    }
}
echo '<br><br>';
} // END main loop

$imgs = array("linus.png", "deven.png", "philcollins.png");
$img = rand(1, count($imgs)) - 1; 

echo "<img src=\"".$imgs[$img]."\"></img>";
echo '<hr><br>';
echo '<small>'.highlight_string(file_get_contents('kuk.php'), TRUE).'</small>';

?>
</body>
</html>
