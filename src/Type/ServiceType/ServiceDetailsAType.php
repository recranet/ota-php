<?php

namespace Recranet\OTA\Type\ServiceType;

use Recranet\OTA\Type\ResCommonDetailType;

/**
 * Class representing ServiceDetailsAType
 */
class ServiceDetailsAType extends ResCommonDetailType
{
    /**
     * Description of the service.
     *
     * @var \Recranet\OTA\Type\ParagraphType $serviceDescription
     */
    private $serviceDescription = null;

    /**
     * Gets as serviceDescription
     *
     * Description of the service.
     *
     * @return \Recranet\OTA\Type\ParagraphType
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
     * @param \Recranet\OTA\Type\ParagraphType $serviceDescription
     * @return self
     */
    public function setServiceDescription(?\Recranet\OTA\Type\ParagraphType $serviceDescription = null)
    {
        $this->serviceDescription = $serviceDescription;
        return $this;
    }
}

