<?php

namespace Railken\LaraOre\CustomPage\Attributes\Url\Exceptions;

use Railken\LaraOre\CustomPage\Exceptions\CustomPageAttributeException;

class CustomPageUrlNotDefinedException extends CustomPageAttributeException
{
    /**
     * The reason (attribute) for which this exception is thrown.
     *
     * @var string
     */
    protected $attribute = 'url';

    /**
     * The code to identify the error.
     *
     * @var string
     */
    protected $code = 'CUSTOMPAGE_URL_NOT_DEFINED';

    /**
     * The message.
     *
     * @var string
     */
    protected $message = 'The %s is required';
}
