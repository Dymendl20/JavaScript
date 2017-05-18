<?php
    class horloge{
        public function heure(){
            return date("e H:i:s");
        }
}

try{
        $server = new SoapServer(null, array('uri' => 'http://localhost/POO/horloge_class.php'));
        $server->setClass("horloge");
        $server->handle();
}
catch(Exception $e){
        echo "Exception: ". $e;
}

?>