<?php
/**
 * Created by PhpStorm.
 * User: zvinger
 * Date: 23.12.17
 * Time: 23:36
 */

namespace Zvinger\BaseClasses\app\components\user\exceptions;

use Throwable;
use yii\base\Exception;

class WrongActivationCodeException extends Exception
{
    public function __construct(string $message = "", int $code = 0, Throwable $previous = NULL)
    {
        $message = 'Wrong confirm code';
        parent::__construct($message, $code, $previous);
    }
}