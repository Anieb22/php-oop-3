<?php 
  
    class Notifiche extends Comunicazione {
        public $icona;
        
        public function __construct($mittente, $destinatari, $oggetto, $messaggio, $suonoAvviso, $icona) {
            parent::__construct($mittente, $destinatari, $oggetto, $messaggio, $suonoAvviso);
            $this->icona = $icona;
        }
    }

?>