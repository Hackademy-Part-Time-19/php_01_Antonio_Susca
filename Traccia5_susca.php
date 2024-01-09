<?php
$corsoHackademy = [ "docenti" => ["Mattia", "emanuele"], "studenti" => ["antonio",
"federica", "simone"], "argomenti" =>["html", "css", "bootstrap", "javascript", "php"], ];
print_r ($corsoHackademy);

$results = $corsoHackademy["docenti"][0]." "."ha"." "." "."spiegato".$corsoHackademy["argomenti"][1]." "." ad"." ".$corsoHackademy["studenti"][0] ;
echo $results ;
