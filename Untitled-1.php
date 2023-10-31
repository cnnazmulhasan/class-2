<?PHP
function sum ($studentname,$bangla,$english,$math){
    $result =$bangla + $english + $math;
    echo"$studentname marks is = $result";
    echo "</br>"."</br>";
}

sum('karim',50,60,40);
sum('rahim',60,55,75);
sum('salim',85,65,80);



function charm(int $x, int $y){                                   //2nd function
    $z =$x * $y;
    echo "result = $z";
    echo"<br> . <br>" ;
}
   charm(10,15);
   charm(15,30);
   charm(22,10) . "<br>";


   function printing($capital){                                  //3rd function
       echo strtoupper($capital);
       echo"</br>";
   }
   printing('karim');
   printing('rahim');
   printing('salim' . "</br>" . "</br>");



   function familyname($fname,$year){                            //4th 
    echo "$fname bron in $year <br>";
   }
   familyname("sultan","1973");
   familyname("razia","1993");
   familyname("rupa", "2008" . "</br>" . "</br>");



   function setheight(int $minheight =60){                         //5th
    echo "The height is: $minheight";
    echo"<br>" . "</br>";
   }

   setheight(400);
   setheight(500);
   setheight(300);



   function add(int$x,int $y){
    $z = $x+$y;
    return $z;
}

   echo "10 + 15" . add(10,15) . "<br>";
   echo "8 + 5" . add(8,5) . "<br>";
   echo "20 + 55" . add(20,55) . "<br>" ."</br>";


   function sub(int $x, int $y){
    $z = $x - $y;
    echo "difference = $z";
    echo "<br>"."</br>";
   } 
   sub (50,10);
   sub (40,5);
   sub (20,10);