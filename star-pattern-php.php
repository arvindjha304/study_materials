<?php

/*

	* * * * * * *
	* * * * * *
	* * * * *
	* * * *
	* * *
	* *
	*

*/


for($i=0;$i<8;$i++){
	for($k=0;$k<(8-$i);$k++){
		echo '* ';
	}
	echo '<br>';
}

echo '<br>';

/*

*
* *
* * *
* * * *
* * * * *
* * * * * *
* * * * * * *

*/

for($i=1;$i<8;$i++){
	for($k=1;$k<($i+1);$k++){
		echo '* ';
	}
	echo '<br>';
}

echo '<br>';

/*

*
* *
* * *
* * * *
* * * * *
* * * * * *
* * * * * * *
* * * * * *
* * * * *
* * * *
* * *
* *
*

*/


/* 
    *          
   ***        
  *****      
 *******    
*********
*/


for ($i=1; $i<=5; $i++) {  
    for($j=1; $j<=5-$i; $j++) {  
	 echo "&nbsp;" ;  
	}  
    for ($k=$i; $k<= (2 * $i - 1); $k++) {  
     echo " * ";   
	}  
	echo '<br>';
}


/* 
    *********
     *******  
      *****    
       ***      
        *   
*/
echo '<br>';


	for($i=5;$i>0;$i--)
	{
		for($j=5-$i;$j>0;$j--)
		{
			echo "&nbsp;" ;  
		}
		for($k=1;$k<=$i;$k++)
		{
			echo " * ";
		}
		echo '<br>';
	}




/*
        *
       ***
      *****
     *******
    *********
     *******
      *****
       ***
        *
*/

?>