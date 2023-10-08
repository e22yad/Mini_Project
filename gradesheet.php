<?php
$W=$_POST['W'];
$O=$_POST['O'];
$D=$_POST['D'];
$total=$W+$O+$D;
$avearge=$total/3;
echo "<br>Total : " . $total;
echo "<br>Average : ".$avearge;
if($W <=100&& $W>=95)
echo "<br>". "Web Programing : " . "A+";
else
if($W <=94 && $W >=90)
echo "<br>"."Web Programing : "."A";
else
if($W <=89&& $W>=85)
echo "<br>"."Web Programing : "."B+";
else
if($W <=84&& $W>=80)
echo "<br>"."Web Programing : "."B";
else
if($W <=79&& $W>=75)
echo "<br>"."Web Programing : "."C+";
else
if($W <=74&& $W>=70)
echo "<br>". "Web Programing : "."C";
else
if($W <=69&& $W>=65)
echo "<br>"."Web Programing : "."D+";
else
if($W <=64&& $W>=60)
echo "<br>"."Web Programing : "."D";
else
if($W<=59)
echo "<br>". "Web Programing : "."F";
if($O <=100 && $O>=95)
echo "<br>". "Operating System : "."A+";
else
if($O <=94 &&$O>=90)
echo "<br>"."Operating System : "."A";
else
if($O <=89&&$O>=85)
echo "<br>". "Operating System : ". "B+";
else
if($O <=84&&$O>=80)
echo "<br>". "Operating System : ". "B";
else
if($O <=79&&$O>=75)
echo "<br>"."Operating System : ". "C+";
else
if($O <=74&&$O>=70)
echo "<br>"."Operating System : ". "C";
else
if($O <=69&&$O>=65)
echo "<br>"."Operating System : ". "D+";
else
if($O <=64&&$O>=60)
echo "<br>". "Operating System : ". "D";
else
if($O<=59)
echo "<br>"."Operating System : ". "F";
if($D <=100&& $D>=95)
echo "<br>"."Database : ". "A+";
else
if($D <=94&& $D>=90)
echo "<br>"."Database : ". "A";
else
if($D <=89&& $D>=85)
echo "<br>"."Database : ". "B+";
else
if($D <=84&& $D>=80)
echo "<br>"."Database : ". "B";
else
if($D <=79&& $D>=75)
echo "<br>"."Database : ". "C+";
else
if($D <=74&& $D>=70)
echo "<br>"."Database : ". "C";
else
if($D <=69&& $D>=65)
echo "<br>"."Database : ". "D+";
else
if($D <=64&& $D>=60)
echo "<br>"."Database : ". "D";
else
if($D<=59)
echo "<br>"."Database : ". "F";
?>