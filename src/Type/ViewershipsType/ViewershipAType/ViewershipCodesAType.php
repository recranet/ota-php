<?php

namespace Recranet\OTA\Type\ViewershipsType\ViewershipAType;

/**
 * Class representing ViewershipCodesAType
 */
class ViewershipCodesAType
{
    /**
     * The viewership code (e.g. pseudo-city code).
     *
     * @var string $viewershipCode
     */
    private $viewershipCode = null;

    /**
     * Gets as viewershipCode
     *
     * The viewership code (e.g. pseudo-city code).
     *
     * @return string
     */
    public function getViewershipCode()
    {
        return $this->viewershipCode;
    }

    /**
     * Sets a new viewershipCode
     *
     * The viewership code (e.g. pseudo-city code).
     *
     * @param string $viewershipCode
     * @return self
     */
    public function setViewershipCode($viewershipCode)
    {
        $this->viewershipCode = $viewershipCode;
        return $this;
    }
}

