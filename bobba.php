<?php

/**
  |A ideia é simples, fazer uma transcrição por meio de um 'str_ireplace' 
  |palavras consideradad ofensivas.
  
  |Este script é livre para qualquer tipo de uso. 
  •Meu twitter é @zBanXD_
*/

//Função para bloquear e transcrever palavrões em frases. 
function receiver(String $text) {
  //Insira abaixo a lista de palavras a serem bloqueadas nas frases
  $badword = ['porra','caralho','cuzão','bct','buceta','caraleo','vadia','desgraça',
  'desgraca','pinto','pau','xota','xoxota','maconha','fuder','puta','transar',
  'tranzar','esfolar','arromba','arrombado','foda','foda-se','porr@','caralh@','krl',
  'fdp','gay','viado','viadinho','cu','penis','tmnc','rapariga','consolo','bucet@','bucyta','desgraça'];
  for($i = 0; $i < count($badword); $i++){
    $text = str_ireplace($badword[$i], 'bobba', $text);
  }
  //Frase retorna pronta para uso. 
  return $text;
}


/**
  Instruções:
    Frase enviada: Vai para a casa do caralh*! 
    
    você vai repassar essa frase em forma de String para a função. 
    $frase = 'Vai para a casa do caralh*!';
    bobbaScript->receiver($frase);
    
    Frase a ser retornada: Vai para a casa do bobba! 
*/
?>
