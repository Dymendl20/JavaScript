<?php
try
{
    echo "Le Webservice donne l'heure ";
    $clientSOAP = new SoapClient( null,
        array (
            'uri' => 'http://localhost/',
            'location' => 'http://localhost/POO/horloge.class.php',
            'trace' => 1,
            'exceptions' => 1
        ));
    $ret = $clientSOAP->__soapCall('heure', array());
    echo $ret;
}
catch(SoapFault $f)
{
    echo $f;
}
?>