<?php





function sum( $u,  $v) {
    
     if((is_string($u)) && (is_string($v))) {
         return $u.$v;
     }  elseif((is_integer($u)) && (is_integer($v))) {
        return $u + $v;
    }  
      elseif((is_float($u)) && (is_float($v))) {
        return $u + $v;
    } 
        
  }
  
  echo "<b>Sum of float numbers: 5.5 + 10.5 = </b>" . sum(5.5, 10.5) . "<hr><br></hr>";
  echo "<b>Sum of two integers : 7 + 13 = </b>" . sum(7, 13) . "<hr><br></hr>";
  echo "<b>Sum of two string: 'Deepakshi'+ 'Joshi' =  </b>" .sum("Deepakshi ","Joshi") . "<hr><br></hr>";
  







?>