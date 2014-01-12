<?php

namespace abstrafactory\animal\animals;
include_once 'Ianimal.php';

class Fish implements Ianimal
{
    public function speak() {
        return 'cannot speak xcept Dolphine';
    }
}