<?php
//Invalid marks range
// $SubNum1=200;
// $SubNum2 = 43;
// $SubNum3 = 33;
// $SubNum4 = 73;
// $SubNum5 = 83;
// Failed
// $SubNum1=20;
// $SubNum2 = 43;
// $SubNum3 = 33;
// $SubNum4 = 73;
// $SubNum5 = 83;
// Get a grade
$SubNum1=70;
$SubNum2 = 43;
$SubNum3 = 83;
$SubNum4 = 73;
$SubNum5 = 83;

function printResult($grade , $totalMarks=0,$averageMarks=0){
   if($grade=="F"){
      echo "Grade: {$grade} <br/>";
      echo "Failed!!";
      return;
   }
     echo "Total Marks: {$totalMarks} <br/>";
      echo "Average Marks: {$averageMarks} <br/>";
      echo "Grade: {$grade} <br/>";
}
function gradeCalculation($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 ){

      if($SubNum1>100 || $SubNum1<0 || $SubNum2>100 || $SubNum2<0 ||$SubNum3>100 || $SubNum3<0 || $SubNum4>100 && $SubNum4<0 ||$SubNum5>100 && $SubNum5<0){
      echo "Mark range is invalid!!";
     return;
   }elseif ($SubNum1<33||  $SubNum2<33||  $SubNum3<33|| $SubNum4<33 ||$SubNum5<33) {
      printResult('F');
    return;
      }
$totalMarks=$SubNum1+ $SubNum2+$SubNum3+$SubNum4+$SubNum5;
$averageMarks=$totalMarks/5;
      if($averageMarks>=80 || $averageMarks <=100){
         printResult('A+',$totalMarks,$averageMarks);
      }else if($averageMarks>=70 || $averageMarks <=79){
         printResult('A',$totalMarks,$averageMarks);
      }else if($averageMarks>=60 || $averageMarks <=69){
         printResult('A-',$totalMarks,$averageMarks);
      }else if($averageMarks>=50 || $averageMarks <=59){
         printResult('A-',$totalMarks,$averageMarks);
      }else if($averageMarks>=40 || $averageMarks <=49){
         printResult('C',$totalMarks,$averageMarks,);
      }else if($averageMarks>=33 || $averageMarks <=39){
         printResult('D',$totalMarks,$averageMarks);
      }
}

gradeCalculation($SubNum1,  $SubNum2,  $SubNum3, $SubNum4,$SubNum5 ) ;