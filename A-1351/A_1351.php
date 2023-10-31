<?php
$t=fgets(STDIN);
while($t--)
{
    $line=fgets(STDIN);
    $add=explode(" ",$line);
    echo $add[0]+$add[1]."\n";
}