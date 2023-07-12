<?php 

    class Comunicazione {
        public $mittente;
        public $destinatari;
        public $oggetto;
        public $messaggio;
        public $suonoAvviso;
        public static $coloreLed = 'blue';
      
        public function __construct($mittente, $destinatari, $oggetto, $messaggio, $suonoAvviso) {
            $this->mittente = $mittente;
            $this->destinatari = $destinatari;
            $this->oggetto = $oggetto;
            $this->messaggio = $messaggio;
            $this->suonoAvviso = $suonoAvviso;
        }

    }

?>