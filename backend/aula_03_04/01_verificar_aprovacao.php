<!-- 1 . Verificar Aprovação do aluno -->
<?php
$turma = 403;
$turno = " Noite ";
$Nome  = " José Willian ";
$frequencia = 75 ;
$notaFinal = 90 ;

echo "\n Turma:  " . $turma; 
echo "\n Turno:  " . $turno;
echo "\n Nome:  " . $Nome;
echo "\n Frequencia:  " . $frequencia;
echo "\n Nota Final:  " . $notaFinal;

if($notaFinal >= 6) {
     echo "\n Aluno Aprovado!";
 } else if($notaFinal < 6) {
     echo "\n Aluno Reprovado!";
 } else {
     echo "\n Nota inválida!";
 }    



//  $nota = 7.5;
//  if($nota >= 6){
//      echo "A aluna fo reprovada.";
//  } else {
//     echo "A aluna foi reprovada.";
//  }
?>