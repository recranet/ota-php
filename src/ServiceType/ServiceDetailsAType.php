<?php

namespace Recranet\OTA\ServiceType;

use Recranet\OTA\ResCommonDetailType;

/**
 * Class representing ServiceDetailsAType
 */
class ServiceDetailsAType extends ResCommonDetailType
{
    /**
     * Description of the service.
     *
     * @var \Recranet\OTA\ParagraphType $serviceDescription
     */
    private $serviceDescription = null;

    /**
     * Gets as serviceDescription
     *
     * Description of the service.
     *
     * @return \Recranet\OTA\ParagraphType
     */
    public function getServiceDescription()
    {
        return $this->serviceDescription;
    }

    /**
     * Sets a new serviceDescription
     *
     * Description of the service.
     *
     * @param \Recranet\OTA\ParagraphType $serviceDescription
     * @return self
     */
    public function setServiceDescription(?\Recranet\OTA\ParagraphType $serviceDescription = null)
    {
        $this->serviceDescription = $serviceDescription;
        return $this;
    }
}
