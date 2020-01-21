<?php

function receiver(String $text) {
$badword = ['porra','caralho','cuzão','bct','buceta','caraleo','vadia','desgraça','desgraca','noob','pinto','pau','xota','xoxota','maconha','fuder','puta','transar','tranzar','esfolar','arromba','arrombado','foda','foda-se','porr@','caralh@'];
for($i = 0; $i < count($badword); $i++){
$text = str_ireplace($badword[$i], 'bobba', $text);
}
return $text;
}


echo receiver('Seu filho da puta do caralho');
?>