<?php

namespace Recranet\OTA\Type;

/**
 * Class representing ErrorsType
 *
 * A collection of errors that occurred during the processing of a message.
 * XSD Type: ErrorsType
 */
class ErrorsType
{
    /**
     * An error that occurred during the processing of a message.
     *
     * @var \Recranet\OTA\Type\ErrorType[] $error
     */
    private $error = [
        
    ];

    /**
     * Adds as error
     *
     * An error that occurred during the processing of a message.
     *
     * @return self
     * @param \Recranet\OTA\Type\ErrorType $error
     */
    public function addToError(\Recranet\OTA\Type\ErrorType $error)
    {
        $this->error[] = $error;
        return $this;
    }

    /**
     * isset error
     *
     * An error that occurred during the processing of a message.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetError($index)
    {
        return isset($this->error[$index]);
    }

    /**
     * unset error
     *
     * An error that occurred during the processing of a message.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetError($index)
    {
        unset($this->error[$index]);
    }

    /**
     * Gets as error
     *
     * An error that occurred during the processing of a message.
     *
     * @return \Recranet\OTA\Type\ErrorType[]
     */
    public function getError()
    {
        return $this->error;
    }

    /**
     * Sets a new error
     *
     * An error that occurred during the processing of a message.
     *
     * @param \Recranet\OTA\Type\ErrorType[] $error
     * @return self
     */
    public function setError(array $error)
    {
        $this->error = $error;
        return $this;
    }
}

