<?php
namespace strategy\CD;

class CdAsXML
{
    public function get(\strategy\CD\CdStrategy $cd)
    {
        $doc = new \DOMDocument();
        $root = $doc->createElement('CD');
        $root = $doc->appendChild($root);
        $title = $doc->createElement('Title', $cd->getTitle());
        $title = $root->appendChild($title);
        $band = $doc->createElement('Band', $cd->getBand());
        $band = $root->appendChild($band);
        
        return $doc->saveXML();
    }
}