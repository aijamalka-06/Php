<?php
$student1="Абдыева"; $name1="Акылай"; $come1=false;
$student2="Авазова"; $name2="Маржона"; $come2=false;
$student3="Аширбекова"; $name3="Назик"; $come3=false;
$student4="Ибраимова"; $name4="Айдай"; $come4=true;
$student5="Илияс у"; $name5="Билал"; $come5=false;
$student6="Исаков"; $name6="Тилек"; $come6=true;
$student7="Калыбекова"; $name7="Аэлита"; $come7=true;
$student8="Кубатова"; $name8="Курманжан"; $come8=true;
$student9="Кудайбердиева"; $name9="Айпери"; $come9=true;
$student10="Кырбашова"; $name10="Айдана"; $come10=true;
$student11="Молдогараева"; $name11="Жаркын"; $come11=false;
$student12="Мухидинов"; $name12="Шахриёр"; $come12=true;
$student13="Райымкулова"; $name13="Аиза"; $come13=false;
$student14="Рустам к"; $name14="Шахризада"; $come14=true;
$student15="Рысбек к"; $name15="Айжамал"; $come15=true;
$student16="Сайдинова"; $name16="Сыйда"; $come16=true;
$student17="Салыбаева"; $name17="Аяна"; $come17=false;
$student18="Сатыбалдиев"; $name18="Ильяз"; $come18=true;
$student19="Солтонов"; $name19="Дастанбек"; $come19=true;
$student20="Тагаева"; $name20="Айымкан"; $come20=true;
$student21="Токтошова"; $name21="Сумая"; $come21=true;
$student22="Уланова"; $name22="Айпери"; $come22=true;
$student23="Урманбетова"; $name23="Айдана"; $come23=false;

echo "<h3>if else</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' width='800px' align='center'>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришёл</th></tr>";

if($come1){$status="Да";}else{$status="Нет";} echo "<tr><td>$name1</td><td>$student1</td><td>$status</td></tr>";
if($come2){$status="Да";}else{$status="Нет";} echo "<tr><td>$name2</td><td>$student2</td><td>$status</td></tr>";
if($come3){$status="Да";}else{$status="Нет";} echo "<tr><td>$name3</td><td>$student3</td><td>$status</td></tr>";
if($come4){$status="Да";}else{$status="Нет";} echo "<tr><td>$name4</td><td>$student4</td><td>$status</td></tr>";
if($come5){$status="Да";}else{$status="Нет";} echo "<tr><td>$name5</td><td>$student5</td><td>$status</td></tr>";
if($come6){$status="Да";}else{$status="Нет";} echo "<tr><td>$name6</td><td>$student6</td><td>$status</td></tr>";
if($come7){$status="Да";}else{$status="Нет";} echo "<tr><td>$name7</td><td>$student7</td><td>$status</td></tr>";
if($come8){$status="Да";}else{$status="Нет";} echo "<tr><td>$name8</td><td>$student8</td><td>$status</td></tr>";
if($come9){$status="Да";}else{$status="Нет";} echo "<tr><td>$name9</td><td>$student9</td><td>$status</td></tr>";
if($come10){$status="Да";}else{$status="Нет";} echo "<tr><td>$name10</td><td>$student10</td><td>$status</td></tr>";
if($come11){$status="Да";}else{$status="Нет";} echo "<tr><td>$name11</td><td>$student11</td><td>$status</td></tr>";
if($come12){$status="Да";}else{$status="Нет";} echo "<tr><td>$name12</td><td>$student12</td><td>$status</td></tr>";
if($come13){$status="Да";}else{$status="Нет";} echo "<tr><td>$name13</td><td>$student13</td><td>$status</td></tr>";
if($come14){$status="Да";}else{$status="Нет";} echo "<tr><td>$name14</td><td>$student14</td><td>$status</td></tr>";
if($come15){$status="Да";}else{$status="Нет";} echo "<tr><td>$name15</td><td>$student15</td><td>$status</td></tr>";
if($come16){$status="Да";}else{$status="Нет";} echo "<tr><td>$name16</td><td>$student16</td><td>$status</td></tr>";
if($come17){$status="Да";}else{$status="Нет";} echo "<tr><td>$name17</td><td>$student17</td><td>$status</td></tr>";
if($come18){$status="Да";}else{$status="Нет";} echo "<tr><td>$name18</td><td>$student18</td><td>$status</td></tr>";
if($come19){$status="Да";}else{$status="Нет";} echo "<tr><td>$name19</td><td>$student19</td><td>$status</td></tr>";
if($come20){$status="Да";}else{$status="Нет";} echo "<tr><td>$name20</td><td>$student20</td><td>$status</td></tr>";
if($come21){$status="Да";}else{$status="Нет";} echo "<tr><td>$name21</td><td>$student21</td><td>$status</td></tr>";
if($come22){$status="Да";}else{$status="Нет";} echo "<tr><td>$name22</td><td>$student22</td><td>$status</td></tr>";
if($come23){$status="Да";}else{$status="Нет";} echo "<tr><td>$name23</td><td>$student23</td><td>$status</td></tr>";

echo "</table>";

echo "<h3>do while</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' width='900px' align='center'>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришёл</th></tr>";

$i=1;
do{
    if($i==1){$status=$come1?"Да":"Нет"; echo "<tr><td>$name1</td><td>$student1</td><td>$status</td></tr>";}
    if($i==2){$status=$come2?"Да":"Нет"; echo "<tr><td>$name2</td><td>$student2</td><td>$status</td></tr>";}
    if($i==3){$status=$come3?"Да":"Нет"; echo "<tr><td>$name3</td><td>$student3</td><td>$status</td></tr>";}
    if($i==4){$status=$come4?"Да":"Нет"; echo "<tr><td>$name4</td><td>$student4</td><td>$status</td></tr>";}
    if($i==5){$status=$come5?"Да":"Нет"; echo "<tr><td>$name5</td><td>$student5</td><td>$status</td></tr>";}
    if($i==6){$status=$come6?"Да":"Нет"; echo "<tr><td>$name6</td><td>$student6</td><td>$status</td></tr>";}
    if($i==7){$status=$come7?"Да":"Нет"; echo "<tr><td>$name7</td><td>$student7</td><td>$status</td></tr>";}
    if($i==8){$status=$come8?"Да":"Нет"; echo "<tr><td>$name8</td><td>$student8</td><td>$status</td></tr>";}
    if($i==9){$status=$come9?"Да":"Нет"; echo "<tr><td>$name9</td><td>$student9</td><td>$status</td></tr>";}
    if($i==10){$status=$come10?"Да":"Нет"; echo "<tr><td>$name10</td><td>$student10</td><td>$status</td></tr>";}
    if($i==11){$status=$come11?"Да":"Нет"; echo "<tr><td>$name11</td><td>$student11</td><td>$status</td></tr>";}
    if($i==12){$status=$come12?"Да":"Нет"; echo "<tr><td>$name12</td><td>$student12</td><td>$status</td></tr>";}
    if($i==13){$status=$come13?"Да":"Нет"; echo "<tr><td>$name13</td><td>$student13</td><td>$status</td></tr>";}
    if($i==14){$status=$come14?"Да":"Нет"; echo "<tr><td>$name14</td><td>$student14</td><td>$status</td></tr>";}
    if($i==15){$status=$come15?"Да":"Нет"; echo "<tr><td>$name15</td><td>$student15</td><td>$status</td></tr>";}
    if($i==16){$status=$come16?"Да":"Нет"; echo "<tr><td>$name16</td><td>$student16</td><td>$status</td></tr>";}
    if($i==17){$status=$come17?"Да":"Нет"; echo "<tr><td>$name17</td><td>$student17</td><td>$status</td></tr>";}
    if($i==18){$status=$come18?"Да":"Нет"; echo "<tr><td>$name18</td><td>$student18</td><td>$status</td></tr>";}
    if($i==19){$status=$come19?"Да":"Нет"; echo "<tr><td>$name19</td><td>$student19</td><td>$status</td></tr>";}
    if($i==20){$status=$come20?"Да":"Нет"; echo "<tr><td>$name20</td><td>$student20</td><td>$status</td></tr>";}
    if($i==21){$status=$come21?"Да":"Нет"; echo "<tr><td>$name21</td><td>$student21</td><td>$status</td></tr>";}
    if($i==22){$status=$come22?"Да":"Нет"; echo "<tr><td>$name22</td><td>$student22</td><td>$status</td></tr>";}
    if($i==23){$status=$come23?"Да":"Нет"; echo "<tr><td>$name23</td><td>$student23</td><td>$status</td></tr>";}
    $i++;
} while($i<=23);

echo "</table>";

echo "<h3>switch case</h3>";
echo "<table border='1' cellpadding='10' cellspacing='0' width='1000px' align='center'>";
echo "<tr><th>Имя</th><th>Фамилия</th><th>Пришёл</th></tr>";

function printSwitch($name,$student,$come){
    switch($come){
        case true: echo "<tr><td>$name</td><td>$student</td><td>Да</td></tr>"; break;
        case false: echo "<tr><td>$name</td><td>$student</td><td>Нет</td></tr>"; break;
    }
}

printSwitch($name1,$student1,$come1);
printSwitch($name2,$student2,$come2);
printSwitch($name3,$student3,$come3);
printSwitch($name4,$student4,$come4);
printSwitch($name5,$student5,$come5);
printSwitch($name6,$student6,$come6);
printSwitch($name7,$student7,$come7);
printSwitch($name8,$student8,$come8);
printSwitch($name9,$student9,$come9);
printSwitch($name10,$student10,$come10);
printSwitch($name11,$student11,$come11);
printSwitch($name12,$student12,$come12);
printSwitch($name13,$student13,$come13);
printSwitch($name14,$student14,$come14);
printSwitch($name15,$student15,$come15);
printSwitch($name16,$student16,$come16);
printSwitch($name17,$student17,$come17);
printSwitch($name18,$student18,$come18);
printSwitch($name19,$student19,$come19);
printSwitch($name20,$student20,$come20);
printSwitch($name21,$student21,$come21);
printSwitch($name22,$student22,$come22);
printSwitch($name23,$student23,$come23);

echo "</table>";
?>