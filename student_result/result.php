<?php

$SubNum1 = 53;
$SubNum2 = 23;
$SubNum3 = 64;
$SubNum4 = 33;
$SubNum5 = 133;

//Print Result function
function printResult($grade , $totalMarks=0,$averageMarks=0){
   switch ($grade) {
      case 'F':
           echo "Grade: {$grade} <br/>";
           break;
      default:
         echo "Total Marks: {$totalMarks} <br/>";
         echo "Average Marks: {$averageMarks} <br/>";
         echo "Grade: {$grade} <br/>";
         break;
   }
}

// Check mark range and individual subject failure function
function isOutOfRangeOrFail($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 ){
   switch (true) {
      case ($SubNum1>100 || $SubNum1<0 || $SubNum2>100 || $SubNum2<0 ||$SubNum3>100 || $SubNum3<0 || $SubNum4>100 || $SubNum4<0 ||$SubNum5>100 || $SubNum5<0):
         echo "Mark range is invalid!! <br/>";
         return true;
      case($SubNum1<33||  $SubNum2<33||  $SubNum3<33|| $SubNum4<33 ||$SubNum5<33):
          printResult('F');
         return true;
      default:
         return false;
   }
}
// Grade calculation function
function gradeCalculation($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 ){

$totalMarks=$SubNum1+ $SubNum2+$SubNum3+$SubNum4+$SubNum5;
$averageMarks=$totalMarks/5;

 switch (true) {
   case ($averageMarks >= 80 && $averageMarks <= 100):
      printResult('A+', $totalMarks, $averageMarks);
      break;
   case ($averageMarks >= 70 && $averageMarks < 80):
      printResult('A', $totalMarks, $averageMarks);
      break;
   case ($averageMarks >= 60 && $averageMarks < 70):
      printResult('A-', $totalMarks, $averageMarks);
      break;
   case ($averageMarks >= 50 && $averageMarks < 60):
      printResult('B', $totalMarks, $averageMarks);
      break;
   case ($averageMarks >= 40 && $averageMarks < 50):
      printResult('C', $totalMarks, $averageMarks);
      break;
   case ($averageMarks >= 33 && $averageMarks < 40):
      printResult('D', $totalMarks, $averageMarks);
      break;
 }    
}

/* ==========
   Get result 
   ==========*/
function resultCalculation($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 ){
// Validate marks and check if failed
$isOutOfRangeOrFailResult=isOutOfRangeOrFail($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 );   

//Grade calculation if valid range and not failed
switch ($isOutOfRangeOrFailResult) {
    case false:
        gradeCalculation($SubNum1, $SubNum2, $SubNum3, $SubNum4, $SubNum5);
        break;
 }
}
resultCalculation($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 ) ;

