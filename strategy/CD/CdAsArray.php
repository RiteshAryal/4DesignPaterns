<?php

namespace strategy\CD;

class CdAsArray
{
    public function get(CDusesStrategy $cd)
    {
        $cd = array(
            'CD' => array(
                'Title' => $cd->getTitle(),
                'Band' => $cd->getBand()
            )
        );
        
        return $cd;
    }
}