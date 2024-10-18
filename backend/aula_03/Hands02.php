<!-- Classificação de Notas -->
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

if($notaFinal >= 9) {
     echo "\n Aprovado com distinção!";
 } else if($notaFinal <= 6 || $notaFinal <= 8.9 ) {
     echo "\n Aprovado!";
 } else if ($notaFinal > 6) {
     echo "\n Reprovado!";
 }    

?>