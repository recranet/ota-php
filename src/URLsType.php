<?php

namespace Recranet\OTA;

/**
 * Class representing URLsType
 *
 * The URLs class identifies URI information.
 * XSD Type: URLsType
 */
class URLsType
{
    /**
     * Provides a Website address.
     *
     * @var \Recranet\OTA\URLsType\URLAType[] $uRL
     */
    private $uRL = [
        
    ];

    /**
     * Adds as uRL
     *
     * Provides a Website address.
     *
     * @return self
     * @param \Recranet\OTA\URLsType\URLAType $uRL
     */
    public function addToURL(\Recranet\OTA\URLsType\URLAType $uRL)
    {
        $this->uRL[] = $uRL;
        return $this;
    }

    /**
     * isset uRL
     *
     * Provides a Website address.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetURL($index)
    {
        return isset($this->uRL[$index]);
    }

    /**
     * unset uRL
     *
     * Provides a Website address.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetURL($index)
    {
        unset($this->uRL[$index]);
    }

    /**
     * Gets as uRL
     *
     * Provides a Website address.
     *
     * @return \Recranet\OTA\URLsType\URLAType[]
     */
    public function getURL()
    {
        return $this->uRL;
    }

    /**
     * Sets a new uRL
     *
     * Provides a Website address.
     *
     * @param \Recranet\OTA\URLsType\URLAType[] $uRL
     * @return self
     */
    public function setURL(array $uRL)
    {
        $this->uRL = $uRL;
        return $this;
    }
}

