<?php

namespace Recranet\OTA\Type;

/**
 * Class representing POSType
 *
 * Point of Sale (POS) identifies the party or connection channel making the request.
 * XSD Type: POS_Type
 */
class POSType
{
    /**
     * This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     *
     * @var \Recranet\OTA\Type\SourceType[] $source
     */
    private $source = [
        
    ];

    /**
     * Adds as source
     *
     * This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     *
     * @return self
     * @param \Recranet\OTA\Type\SourceType $source
     */
    public function addToSource(\Recranet\OTA\Type\SourceType $source)
    {
        $this->source[] = $source;
        return $this;
    }

    /**
     * isset source
     *
     * This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSource($index)
    {
        return isset($this->source[$index]);
    }

    /**
     * unset source
     *
     * This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSource($index)
    {
        unset($this->source[$index]);
    }

    /**
     * Gets as source
     *
     * This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     *
     * @return \Recranet\OTA\Type\SourceType[]
     */
    public function getSource()
    {
        return $this->source;
    }

    /**
     * Sets a new source
     *
     * This holds the details about the requestor. It may be repeated to also accommodate the delivery systems.
     *
     * @param \Recranet\OTA\Type\SourceType[] $source
     * @return self
     */
    public function setSource(array $source)
    {
        $this->source = $source;
        return $this;
    }
}

