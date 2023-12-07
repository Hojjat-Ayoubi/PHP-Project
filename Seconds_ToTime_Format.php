<?php
$Seconds =  time() ;
function Seconds_ToTime_Format($Seconds){
    $Second = $Seconds % 60;
    $minutes = (int)(($Seconds % 3600) / 60);
    $h = (int)(($Seconds % 86400) / 3600);
    $Day = (int)(($Seconds % 2592000) / 86400);
    $Moon = (int)(($Seconds % 32400000) / 2592000);
    $Year = (int)(($Seconds % 3240000000) / 32400000);
    return("Year:$Year _ Moon:$Moon _ Day:$Day _ h:$h _ minutes:$minutes _ Second:$Second<br>");
}
echo Seconds_ToTime_Format($Seconds);
echo  "Seconds :" . time();
?>