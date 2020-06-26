<?php

namespace App\Exception;

use RuntimeException;
use Throwable;

final class ValidationExcetion{
    private $errors;

    public function __construct(
        string $message,
        array $errors=[],
        int $code,
        Throwable $previus
    ){
        parent::__construct($message,$errors,$code,$previus);

        $this->errors;

    }

    public function getErrors(): array{
        return $this->errors;
    }
}