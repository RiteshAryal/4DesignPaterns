<?php
namespace strategy\CD;

class CdAsArray
{
    public function get(\strategy\CD\CdStrategy $cd)
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