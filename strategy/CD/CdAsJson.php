<?php
namespace strategy\CD;

class CdAsJson
{
    public function get(CDusesStrategy $cd) {
        $json = array();
        $json['CD']['title'] = $cd->getTitle();
        $json['CD']['band'] = $cd->getBand();
        
        return json_encode($json);
    }
}
