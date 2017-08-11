<?php

namespace chantqube\MessageTram\Validators;

use chantqube\MessageTram\Exceptions\MessageTramException;
use chantqube\MessageTram\Contracts\Validator as ValidatorContract;

abstract class Validator implements ValidatorContract {
    public function isValid ($value) {
        try {
            $this->check($value);
        } catch (MessageTramException $exception) {
            return false;
        }
        return true;
    }

    abstract public function check ($value);
}
