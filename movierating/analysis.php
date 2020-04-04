<?php
session_start();
$comment="";
$username = $_SESSION['username'];
$db = mysqli_connect('localhost:3308', 'root', 'aravind7', 'MoviesRating');
if (isset($_POST['comment']))
{
  $comment =$_REQUEST['cmt'];
  if (empty($comment)) { array_push($id, "id is required"); }
$comment = strtolower($comment);
$star = 0;
echo "<br>";
$directing = 0;
$writing = 0;
$editing=0;
$acting=0;
$music=0;

if (strpos($comment, 'excellent direction') !== false) 
{
    $directing = 20;
}
else if(strpos($comment, 'marevelous direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'great direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'superb direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'exceptional direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was excellent') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was great') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was superb') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was exceptional') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'outstanding direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was outstanding') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'sterling direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'wonderful direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'top notch direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'first class direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'world class direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'legendary direction') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was sterling') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was wonderful') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was top notch') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was first class') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was world class') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was legendary') !== false)
{
    $directing = 20;
}
else if(strpos($comment, 'the directing was out of the world') !== false)
{
    $directing = 20;
}
else if (strpos($comment, 'good direction') !== false) 
{
    $directing = 15;
}
else if(strpos($comment, 'fine direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'very good direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'acceptable direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'favorable direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'positive direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'satisfactory direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'satisfying direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'valueable direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'pleasing direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'nice direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'worthy direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'neat direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'splendid direction') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was good') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was fine') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was very good') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was acceptable') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was favorable') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was positive') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was satisfactory') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was satisfying') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was valueable') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was pleasing') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was nice') !== false)
{
    $directing = 15;
}
else if(strpos($comment, 'the direction was worthy') !== false)
{
    $directing = 15;
}
else if (strpos($comment, 'ok direction') !== false) 
{
    $directing = 10;
}
else if(strpos($comment, 'not bad direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'somewhat good direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'average direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'moderate direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'fair direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'standard direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'all right direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'sufficient direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'right on direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'tolerable direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'passable direction') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was ok') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was not bad') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was somewhat good') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was average') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was moderate') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was fair') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was standard') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was all right') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was sufficient') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was right on') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was tolerable') !== false)
{
    $directing = 10;
}
else if(strpos($comment, 'the direction was passable') !== false)
{
    $directing = 10;
}
else if (strpos($comment, 'bad direction') !== false) 
{
    $directing = 5;
}
else if(strpos($comment, 'not ok direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'attrocious direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'awful direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'cheat direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'crummy direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'dreadful direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'lousy direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'poor direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'unacceptable direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'blah direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'gross direction') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was bad') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was not ok') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was attrocious') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was awful') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was cheat') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was crummy') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was dreadful') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was lousy') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was poor') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was unacceptable') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was blah') !== false)
{
    $directing = 5;
}
else if(strpos($comment, 'the direction was gross') !== false)
{
    $directing = 5;
}
else if (strpos($comment, 'very bad direction') !== false) 
{
    $directing = 3;
}
else if(strpos($comment, 'worst direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'attrocious direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'overly bad direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'terrible direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'harmful direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'meanestest direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'horrible direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'meanest direction') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was very bad') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was worst') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was attrocious') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was overly bad') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was terrible') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was harmful') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was meanestest') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was horrible') !== false)
{
    $directing = 3;
}
else if(strpos($comment, 'the direction was meanest') !== false)
{
    $directing = 3;
}
else
{
    $directing = 10;
}
//NEXT EDITING
    if (strpos($comment, 'excellent editing') !== false) 
    {
        $editing = 20;
    }
    else if(strpos($comment, 'marevelous editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'great editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'superb editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'exceptional editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was excellent') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was great') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was superb') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was exceptional') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'outstanding editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was outstanding') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'sterling editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'wonderful editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'top notch editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'first class editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'world class editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'legendary editing') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was sterling') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was wonderful') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was top notch') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was first class') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was world class') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was legendary') !== false)
    {
        $editing = 20;
    }
    else if(strpos($comment, 'the editing was out of the world') !== false)
    {
        $editing = 20;
    }
    
    else if (strpos($comment, 'good editing') !== false) 
    {
        $editing = 15;
    }
    else if(strpos($comment, 'fine editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'very good editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'acceptable editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'favorable editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'positive editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'satisfactory editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'satisfying editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'valueable editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'pleasing editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'nice editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'worthy editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'agreeable editing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was good') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was fine') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was very good') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was acceptable') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was favorable') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was positive') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was satisfactory') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was satisfying') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was valueable') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was pleasing') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was nice') !== false)
    {
        $editing = 15;
    }
    else if(strpos($comment, 'the editing was worthy') !== false)
    {
        $editing = 15;
    }
    else if (strpos($comment, 'ok editing') !== false) 
    {
        $editing = 10;
    }
    else if(strpos($comment, 'not bad editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'somewhat good editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'average editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'moderate editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'fair editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'standard editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'all right editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'sufficient editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'right on editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'tolerable editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'passable editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'middling editing') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was ok') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was not bad') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was somewhat good') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was average') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was moderate') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was fair') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was standard') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was all right') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was sufficient') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was right on') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was tolerable') !== false)
    {
        $editing = 10;
    }
    else if(strpos($comment, 'the editing was passable') !== false)
    {
        $editing = 10;
    }
    else if (strpos($comment, 'bad editing') !== false) 
    {
        $editing = 5;
    }
    else if(strpos($comment, 'not ok editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'attrocious editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'awful editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'cheat editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'crummy editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'dreadful editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'lousy editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'poor editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'unacceptable editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'blah editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'gross editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'middling editing') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was bad') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was not ok') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was attrocious') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was awful') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was cheat') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was crummy') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was dreadful') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was lousy') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was poor') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was unacceptable') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was blah') !== false)
    {
        $editing = 5;
    }
    else if(strpos($comment, 'the editing was gross') !== false)
    {
        $editing = 5;
    }
    else if (strpos($comment, 'very bad editing') !== false) 
    {
        $editing = 3;
    }
    else if(strpos($comment, 'worst editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'attrocious editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'overly bad editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'terrible editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'harmful editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'meanestest editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'horrible editing') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'meanest editing') !== false)
    {
        $editing = 3;
    }

    else if(strpos($comment, 'the editing was very bad') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was worst') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was attrocious') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was overly bad') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was terrible') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was harmful') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was meanestest') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was horrible') !== false)
    {
        $editing = 3;
    }
    else if(strpos($comment, 'the editing was meanest') !== false)
    {
        $editing = 3;
    }

    else
    {
        $editing = 10;
    }
        //NEXT WRITING
    
    if (strpos($comment, 'excellent writing') !== false) 
    {
        $writing = 20;
    }
    else if(strpos($comment, 'marevelous writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'great writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'superb writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'exceptional writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was excellent') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was great') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was superb') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was exceptional') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'outstanding writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was outstanding') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'sterling writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'wonderful writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'top notch writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'first class writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'world class writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'legendary writing') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was sterling') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was wonderful') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was top notch') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was first class') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was world class') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was legendary') !== false)
    {
        $writing = 20;
    }
    else if(strpos($comment, 'the writing was out of the world') !== false)
    {
        $writing = 20;
    }
    if (strpos($comment, 'good writing') !== false) 
    {
        $writing = 15;
    }
    else if(strpos($comment, 'fine writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'very good writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'acceptable writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'favorable writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'positive writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'satisfactory writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'satisfying writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'valueable writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'pleasing writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'nice writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'worthy writing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was good') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was fine') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was very good') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was acceptable') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was favorable') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was positive') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was satisfactory') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was satisfying') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was valueable') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was pleasing') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was nice') !== false)
    {
        $writing = 15;
    }
    else if(strpos($comment, 'the writing was worthy') !== false)
    {
        $writing = 15;
    }
    if (strpos($comment, 'ok writing') !== false) 
    {
        $writing = 10;
    }
    else if(strpos($comment, 'not bad writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'somewhat good writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'average writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'moderate writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'fair writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'standard writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'all right writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'sufficient writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'right on writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'tolerable writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'passable writing') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was ok') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was not bad') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was somewhat good') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was average') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was moderate') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was fair') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was standard') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was all right') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was sufficient') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was right on') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was tolerable') !== false)
    {
        $writing = 10;
    }
    else if(strpos($comment, 'the writing was passable') !== false)
    {
        $writing = 10;
    }
    else if (strpos($comment, 'bad writing') !== false) 
    {
        $writing = 5;
    }
    else if(strpos($comment, 'not ok writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'attrocious writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'awful writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'cheat writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'crummy writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'dreadful writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'lousy writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'poor writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'unacceptable writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'blah writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'gross writing') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was bad') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was not ok') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was attrocious') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was awful') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was cheat') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was crummy') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was dreadful') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was lousy') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was poor') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was unacceptable') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was blah') !== false)
    {
        $writing = 5;
    }
    else if(strpos($comment, 'the writing was gross') !== false)
    {
        $writing = 5;
    }
    else if (strpos($comment, 'very bad writing') !== false) 
    {
        $writing = 3;
    }
    else if(strpos($comment, 'worst writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'attrocious writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'overly bad writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'terrible writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'harmful writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'meanestest writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'horrible writing') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'meanest writing') !== false)
    {
        $writing = 3;
    }

    else if(strpos($comment, 'the writing was very bad') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was worst') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was attrocious') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was overly bad') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was terrible') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was harmful') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was meanestest') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was horrible') !== false)
    {
        $writing = 3;
    }
    else if(strpos($comment, 'the writing was meanest') !== false)
    {
        $writing = 3;
    }
    else
    {
        $writing = 10;
    }
    if (strpos($comment, 'excellent acting') !== false) 
    {
        $acting = 20;
    }
    else if(strpos($comment, 'marevelous acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'great acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'superb acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'exceptional acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was excellent') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was great') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was superb') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was exceptional') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'outstanding acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was outstanding') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'sterling acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'wonderful acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'top notch acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'first class acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'world class acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'legendary acting') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was sterling') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was wonderful') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was top notch') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was first class') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was world class') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was legendary') !== false)
    {
        $acting = 20;
    }
    else if(strpos($comment, 'the acting was out of the world') !== false)
    {
        $acting = 20;
    }
    else if (strpos($comment, 'good acting') !== false) 
    {
        $acting = 15;
    }
    else if(strpos($comment, 'fine acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'very good acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'acceptable acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'favorable acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was good') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was fine') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was very good') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was acceptable') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'positive acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was favorable') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'satisfactoring acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'satisfying acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'valueable acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'pleasing acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'nice acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'worthy acting') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was positive') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was satisfactory') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was satisfying') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was valueable') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was pleasing') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was nice') !== false)
    {
        $acting = 15;
    }
    else if(strpos($comment, 'the acting was worthy') !== false)
    {
        $acting = 15;
    }
    if (strpos($comment, 'ok acting') !== false) 
    {
        $acting = 10;
    }
    else if(strpos($comment, 'not bad acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'somewhat good acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'average acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'moderate acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was ok') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was not bad') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was somewhat good') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was average') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'fair acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was moderate') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'satisfactoring acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'all right acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'sufficient acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'right on acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'tolerable acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'passable acting') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was fair') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was standard') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was all right') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was sufficient') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was right on') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was tolerable') !== false)
    {
        $acting = 10;
    }
    else if(strpos($comment, 'the acting was passable') !== false)
    {
        $acting = 10;
    }
    if (strpos($comment, 'very bad acting') !== false) 
    {
        $acting = 3;
    }
    else if(strpos($comment, 'worst acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'attrocious acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'overly bad acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'terrible acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was very bad') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was worst') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was attrocious') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was overly bad') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'harmful acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was terrible') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'satisfactoring acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'horrible acting') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'meanest acting') !== false)
    {
        $acting = 3;
    }

    else if(strpos($comment, 'the acting was harmful') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was meanestest') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was horrible') !== false)
    {
        $acting = 3;
    }
    else if(strpos($comment, 'the acting was meanest') !== false)
    {
        $acting = 3;
    }
    else
    {
        $acting = 10;
    }
        if (strpos($comment, 'excellent music') !== false) 
        {
            $music = 20;
        }
        else if(strpos($comment, 'marevelous music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'great music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'superb music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'exceptional music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was excellent') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was great') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was superb') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was exceptional') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'outstanding music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was outstanding') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'sterling music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'wonderful music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'top notch music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'first class music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'world class music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'legendary music') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was sterling') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was wonderful') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was top notch') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was first class') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was world class') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was legendary') !== false)
        {
            $music = 20;
        }
        else if(strpos($comment, 'the music was out of the world') !== false)
        {
            $music = 20;
        }
        else if (strpos($comment, 'good music') !== false) 
        {
            $music = 15;
        }
        else if(strpos($comment, 'fine music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'very good music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'acceptable music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'favorable music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'positive music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'satisfactory music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'satisfying music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'valueable music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'pleasing music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'nice music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'worthy music') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was good') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was fine') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was very good') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was acceptable') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was favorable') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was positive') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was satisfactory') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was satisfying') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was valueable') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was pleasing') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was nice') !== false)
        {
            $music = 15;
        }
        else if(strpos($comment, 'the music was worthy') !== false)
        {
            $music = 15;
        }
        if (strpos($comment, 'ok music') !== false) 
        {
            $music = 10;
        }
        else if(strpos($comment, 'not bad music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'somewhat good music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'average music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'moderate music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'fair music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'standard music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'all right music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'sufficient music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'right on music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'tolerable music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'passable music') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was ok') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was not bad') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was somewhat good') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was average') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was moderate') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was fair') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was standard') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was all right') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was sufficient') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was right on') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was tolerable') !== false)
        {
            $music = 10;
        }
        else if(strpos($comment, 'the music was passable') !== false)
        {
            $music = 10;
        }
        else if (strpos($comment, 'bad music') !== false) 
        {
            $music = 5;
        }
        else if(strpos($comment, 'not ok music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'attrocious music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'awful music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'cheat music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'crummy music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'dreadful music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'lousy music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'poor music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'unacceptable music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'blah music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'gross music') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was bad') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was not ok') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was attrocious') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was awful') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was cheat') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was crummy') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was dreadful') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was lousy') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was poor') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was unacceptable') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was blah') !== false)
        {
            $music = 5;
        }
        else if(strpos($comment, 'the music was gross') !== false)
        {
            $music = 5;
        }
        else if (strpos($comment, 'very bad music') !== false) 
        {
            $music = 3;
        }
        else if(strpos($comment, 'worst music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'attrocious music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'overly bad music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'terrible music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'harmful music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'meanestest music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'horrible music') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'meanest music') !== false)
        {
            $music = 3;
        }

        else if(strpos($comment, 'the music was very bad') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was worst') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was attrocious') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was overly bad') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was terrible') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was harmful') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was meanestest') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was horrible') !== false)
        {
            $music = 3;
        }
        else if(strpos($comment, 'the music was meanest') !== false)
        {
            $music = 3;
        }

        else
        {
            $music = 10;
        }
        if(strpos($comment, 'the movie was excellent') !== false)
        {
            $star = 100;
        }
        else if(strpos($comment, 'the movie was great') !== false)
        {
            $star = 100;
        }
        else if(strpos($comment, 'the movie was marvellous') !== false)
        {
            $star = 100;
        }        
        else if(strpos($comment, 'the movie was awesome') !== false)
        {
            $star = 100;
        }
        else if(strpos($comment, 'the movie was superb') !== false)
        {
            $star = 100;
        }
        else if(strpos($comment, 'the movie was good') !== false)
        {
            $star = 80;
        }
        else if(strpos($comment, 'the movie was somewhat good') !== false)
        {
            $star = 80;
        }
        else if(strpos($comment, 'the movie was positive') !== false)
        {
            $star = 80;
        }        
        else if(strpos($comment, 'the movie was nice') !== false)
        {
            $star = 80;
        }
        else if(strpos($comment, 'the movie was worthy') !== false)
        {
            $star = 80;
        }
        else if(strpos($comment, 'the movie was ok') !== false)
        {
            $star = 60;
        }
        else if(strpos($comment, 'the movie was average') !== false)
        {
            $star = 60;
        }
        else if(strpos($comment, 'the movie was fair') !== false)
        {
            $star = 60;
        }        
        else if(strpos($comment, 'the movie was tolerable') !== false)
        {
            $star = 60;
        }
        else if(strpos($comment, 'the movie was sufficient') !== false)
        {
            $star = 60;
        }
        else if(strpos($comment, 'the movie was bad') !== false)
        {
            $star = 40;
        }
        else if(strpos($comment, 'the movie was awful') !== false)
        {
            $star = 40;
        }
        else if(strpos($comment, 'the movie was poor') !== false)
        {
            $star = 40;
        }        
        else if(strpos($comment, 'the movie was garbage') !== false)
        {
            $star = 40;
        }
        else if(strpos($comment, 'the movie was blah') !== false)
        {
            $star = 40;
        }
        else if(strpos($comment, 'the movie was disturbing') !== false)
        {
            $star = 20;
        }
        else if(strpos($comment, 'the movie was horrible') !== false)
        {
            $star = 20;
        }
        else if(strpos($comment, 'the movie was meanest') !== false)
        {
            $star = 20;
        }        
        else if(strpos($comment, 'the movie was terrible') !== false)
        {
            $star = 20;
        }
        else if(strpos($comment, 'the movie was harmful') !== false)
        {
            $star = 20;
        }
        else
        {
            $star = $directing + $editing + $music + $writing + $acting;
        }
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo '<br>';
    echo "the rating of the movie is :";
    if($star > 0 && $star <=20)
    {
        echo "*";
    }
    if($star > 20 && $star <=40)
    {
        echo "**";
    }
    if($star > 40 && $star <=60)
    {
        echo "***";
    }
    if($star > 60 && $star <=80)
    {
        echo "****";
    }
    if($star > 80 && $star <=100)
    {
        echo "*****";
    }
  $user_check_query = "SELECT * FROM darkknight WHERE id='$id' OR 'slot=$slot' LIMIT 1";
  $result = mysqli_query($db, $user_check_query);
  $user = mysqli_fetch_assoc($result);

if (count($errors) == 0) {
  $query="INSERT INTO darkknight(username,comment,rating) values('$username','$comment','$star')";
    mysqli_query($db, $query);

    $_SESSION['id'] = $id;
    $_SESSION['success'] = "your slot is booked";
    header('location: single.php');
}
}
?>