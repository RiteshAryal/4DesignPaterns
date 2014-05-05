<?php
namespace Receiver;

class WordDocument
{
    public function open()
    {
        echo "\n---Open Word Document---\n";
    }

    public function close()
    {
        echo "\n---Close Word Document---\n";
    }

    public function save()
    {
        echo "\n---Save Word Document---\n";
    }
}
