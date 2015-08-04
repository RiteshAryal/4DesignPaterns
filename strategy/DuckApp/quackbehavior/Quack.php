<?php
namespace strategy\DuckApp\quackbehavior;

class Quack implements QuackBehaviorInterface
{
    public function quack()
    {
        echo ' ---perform duck quacking--- ';
    }
}