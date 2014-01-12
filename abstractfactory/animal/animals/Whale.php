<?php

namespace abstrafactory\animal\animals;
include_once 'Ianimal.php';

class Whale implements Ianimal
{
    public function speak() {
        return 'silent speaker';
    }
}
