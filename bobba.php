<?php

//Função para bloquear e transcrever palavrões em frases. 
function receiver(String $text) {
  //Insira abaixo a lista de palavras a serem bloqueadas nas frases
  $badword = ['porra','caralho','cuzão','bct','buceta','caraleo','vadia','desgraça','desgraca','noob','pinto','pau','xota','xoxota','maconha','fuder','puta','transar','tranzar','esfolar','arromba','arrombado','foda','foda-se','porr@','caralh@'];
  for($i = 0; $i < count($badword); $i++){
    $text = str_ireplace($badword[$i], 'bobba', $text);
  }
  return $text;
}

?>
