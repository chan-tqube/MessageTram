<?php

namespace chantqube\MessageTram\Contracts;

interface Validator
{
    public function check ($value);
    public function isValid ($value);
}
