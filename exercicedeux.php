<?php
echo "Veuillez entrer un nombre afin de définir si celui-ci est pair ou impair?";
$number=trim(fgets(STDIN));
if (is_numeric($number))
{

    if ($number%2==0)
    {
        echo $number." est pair";
    }

    else
    {
        echo $number." est impair";

    }
}
else
{
    echo $number." n'est pas un chiffre. Veuillez SVP rentrer un chiffre.";
}
?>