<?php

$randomnumber=rand(1,3);
$counter=0;
echo $randomnumber;
do
{
    echo "Veuillez entrez un nombre?";
    $usernumber=trim(fgets(STDIN));
    if (($usernumber==1&&$randomnumber==2) || ($usernumber==2 && $randomnumber==3) || ($usernumber==3 && $randomnumber==1) )
    {
        echo "1 point pour vous !";

    }
    else
        {
            echo "Perdu! Veuillez réessayer!";
            continue;
        }
    $counter++;
}
while($counter==3 );
    {
        echo "Felicitations! Vous avez gagné!";
    }
?>

