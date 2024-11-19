<?php

namespace Recranet\OTA;

/**
 * Class representing ViewershipsType
 *
 * Viewerships determine the distribution channel(s) for a rate plan. As an optional element, the absence of Viewerships implies a generally available rate, while the presence of a Viewerships collection implies qualifications on the rate. This may also be used to define a system that is able to view the hotel content.
 * XSD Type: ViewershipsType
 */
class ViewershipsType
{
    /**
     * Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
     *
     * @var \Recranet\OTA\ViewershipsType\ViewershipAType[] $viewership
     */
    private $viewership = [
        
    ];

    /**
     * Adds as viewership
     *
     * Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
     *
     * @return self
     * @param \Recranet\OTA\ViewershipsType\ViewershipAType $viewership
     */
    public function addToViewership(\Recranet\OTA\ViewershipsType\ViewershipAType $viewership)
    {
        $this->viewership[] = $viewership;
        return $this;
    }

    /**
     * isset viewership
     *
     * Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetViewership($index)
    {
        return isset($this->viewership[$index]);
    }

    /**
     * unset viewership
     *
     * Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetViewership($index)
    {
        unset($this->viewership[$index]);
    }

    /**
     * Gets as viewership
     *
     * Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
     *
     * @return \Recranet\OTA\ViewershipsType\ViewershipAType[]
     */
    public function getViewership()
    {
        return $this->viewership;
    }

    /**
     * Sets a new viewership
     *
     * Viewership defines a system that is allowed to view the rateplan identified in a Hotel Rate Plan Notification message. This may also be used to define a system that is able to view the hotel content.
     *
     * @param \Recranet\OTA\ViewershipsType\ViewershipAType[] $viewership
     * @return self
     */
    public function setViewership(array $viewership)
    {
        $this->viewership = $viewership;
        return $this;
    }
}

