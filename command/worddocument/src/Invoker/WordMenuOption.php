<?php
namespace Invoker;

use \Command\CloseWordDocument;
use \Command\OpenWordDocument;
use \Command\SaveWordDocument;

class WordMenuOption
{
    protected $closeWord;
    protected $openWord;
    protected $saveWord;

    public function __construct(CloseWordDocument $closeWord, OpenWordDocument $openWord, SaveWordDocument $savWord)
    {
        $this->closeWord = $closeWord;
        $this->openWord = $openWord;
        $this->saveWord = $savWord;
    }

    public function clickOpen()
    {
        $this->openWord->execute();
    }

    public function clickClose()
    {
        $this->closeWord->execute();
    }

    public function clickSave()
    {
        $this->saveWord->execute();
    }
}
