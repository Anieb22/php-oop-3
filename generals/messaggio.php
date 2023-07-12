<?php 

    class Messaggio extends Comunicazione {
        public $notificheLettura = false;
        public $risposta;
        
        public function __construct($mittente, $destinatari, $oggetto, $messaggio, $suonoAvviso, $notificheLettura, $risposta) {
            parent::__construct($mittente, $destinatari, $oggetto, $messaggio, $suonoAvviso);
            $this->notificheLettura = $notificheLettura;
            $this->risposta = $risposta;
        }
        
        
    }

?>