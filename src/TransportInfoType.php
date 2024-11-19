<?php

namespace Recranet\OTA;

/**
 * Class representing TransportInfoType
 *
 * A TransportInfo object is used to indicate transportation information for a guest.
 * XSD Type: TransportInfoType
 */
class TransportInfoType
{
    /**
     * @var \Recranet\OTA\TransportInfoType\TransportInfoAType[] $transportInfo
     */
    private $transportInfo = [
        
    ];

    /**
     * Adds as transportInfo
     *
     * @return self
     * @param \Recranet\OTA\TransportInfoType\TransportInfoAType $transportInfo
     */
    public function addToTransportInfo(\Recranet\OTA\TransportInfoType\TransportInfoAType $transportInfo)
    {
        $this->transportInfo[] = $transportInfo;
        return $this;
    }

    /**
     * isset transportInfo
     *
     * @param int|string $index
     * @return bool
     */
    public function issetTransportInfo($index)
    {
        return isset($this->transportInfo[$index]);
    }

    /**
     * unset transportInfo
     *
     * @param int|string $index
     * @return void
     */
    public function unsetTransportInfo($index)
    {
        unset($this->transportInfo[$index]);
    }

    /**
     * Gets as transportInfo
     *
     * @return \Recranet\OTA\TransportInfoType\TransportInfoAType[]
     */
    public function getTransportInfo()
    {
        return $this->transportInfo;
    }

    /**
     * Sets a new transportInfo
     *
     * @param \Recranet\OTA\TransportInfoType\TransportInfoAType[] $transportInfo
     * @return self
     */
    public function setTransportInfo(array $transportInfo)
    {
        $this->transportInfo = $transportInfo;
        return $this;
    }
}

