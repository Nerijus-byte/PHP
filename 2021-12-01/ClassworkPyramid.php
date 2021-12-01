<!--// "Nupieškite" tokio tipo piramidę ekrane dviem skirtingais būdais. :-->
<!--// 1-->
<!--// 22-->
<!--// 333-->
<!--// 4444-->
<!--// 55555-->
<!--// 666666-->
<!--// 7777777-->
<!--// 88888888-->
<!--// 999999999-->
<?php

echo '1'."<br>";
echo '22'."<br>";
echo '333'."<br>";
echo '4444'."<br>";
echo '55555'."<br>";
echo '666666'."<br>";
echo '7777777'."<br>";
echo '88888888'."<br>";
echo '999999999'."<br>";

function numpat($n)
{
    $num = 1;

    for ($no = 0; $no < $n; $no++)
    {
        for ($x = 0; $x <= $no; $x++ )
        {
            echo $num."";
        }
        $num = $num + 1;
        echo "<br>";
    }
}

$n = 9;
numpat($n);
