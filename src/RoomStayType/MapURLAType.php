<?php

namespace Recranet\OTA\RoomStayType;

/**
 * Class representing MapURLAType
 */
class MapURLAType
{
    /**
     * @var string $__value
     */
    private $__value = null;

    /**
     * The bottom right latitude coordinate.
     *
     * @var float $bottomRightLatitude
     */
    private $bottomRightLatitude = null;

    /**
     * The bottom right longitude coordinate.
     *
     * @var float $bottomRightLongitude
     */
    private $bottomRightLongitude = null;

    /**
     * The top left latitude coordinate.
     *
     * @var float $topLeftLatitude
     */
    private $topLeftLatitude = null;

    /**
     * The top left longitude coordinate.
     *
     * @var float $topLeftLongitude
     */
    private $topLeftLongitude = null;

    /**
     * The height of the map in pixels (maximum 480).
     *
     * @var int $height
     */
    private $height = null;

    /**
     * The width of the map in pixels (maximum 640).
     *
     * @var int $width
     */
    private $width = null;

    /**
     * The zoom factor of the map (from 0 to 12.)
     *
     * @var int $zoomFactor
     */
    private $zoomFactor = null;

    /**
     * Construct
     *
     * @param string $value
     */
    public function __construct($value)
    {
        $this->value($value);
    }

    /**
     * Gets or sets the inner value
     *
     * @param string $value
     * @return string
     */
    public function value()
    {
        if ($args = func_get_args()) {
            $this->__value = $args[0];
        }
        return $this->__value;
    }

    /**
     * Gets a string value
     *
     * @return string
     */
    public function __toString()
    {
        return strval($this->__value);
    }

    /**
     * Gets as bottomRightLatitude
     *
     * The bottom right latitude coordinate.
     *
     * @return float
     */
    public function getBottomRightLatitude()
    {
        return $this->bottomRightLatitude;
    }

    /**
     * Sets a new bottomRightLatitude
     *
     * The bottom right latitude coordinate.
     *
     * @param float $bottomRightLatitude
     * @return self
     */
    public function setBottomRightLatitude($bottomRightLatitude)
    {
        $this->bottomRightLatitude = $bottomRightLatitude;
        return $this;
    }

    /**
     * Gets as bottomRightLongitude
     *
     * The bottom right longitude coordinate.
     *
     * @return float
     */
    public function getBottomRightLongitude()
    {
        return $this->bottomRightLongitude;
    }

    /**
     * Sets a new bottomRightLongitude
     *
     * The bottom right longitude coordinate.
     *
     * @param float $bottomRightLongitude
     * @return self
     */
    public function setBottomRightLongitude($bottomRightLongitude)
    {
        $this->bottomRightLongitude = $bottomRightLongitude;
        return $this;
    }

    /**
     * Gets as topLeftLatitude
     *
     * The top left latitude coordinate.
     *
     * @return float
     */
    public function getTopLeftLatitude()
    {
        return $this->topLeftLatitude;
    }

    /**
     * Sets a new topLeftLatitude
     *
     * The top left latitude coordinate.
     *
     * @param float $topLeftLatitude
     * @return self
     */
    public function setTopLeftLatitude($topLeftLatitude)
    {
        $this->topLeftLatitude = $topLeftLatitude;
        return $this;
    }

    /**
     * Gets as topLeftLongitude
     *
     * The top left longitude coordinate.
     *
     * @return float
     */
    public function getTopLeftLongitude()
    {
        return $this->topLeftLongitude;
    }

    /**
     * Sets a new topLeftLongitude
     *
     * The top left longitude coordinate.
     *
     * @param float $topLeftLongitude
     * @return self
     */
    public function setTopLeftLongitude($topLeftLongitude)
    {
        $this->topLeftLongitude = $topLeftLongitude;
        return $this;
    }

    /**
     * Gets as height
     *
     * The height of the map in pixels (maximum 480).
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * Sets a new height
     *
     * The height of the map in pixels (maximum 480).
     *
     * @param int $height
     * @return self
     */
    public function setHeight($height)
    {
        $this->height = $height;
        return $this;
    }

    /**
     * Gets as width
     *
     * The width of the map in pixels (maximum 640).
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * Sets a new width
     *
     * The width of the map in pixels (maximum 640).
     *
     * @param int $width
     * @return self
     */
    public function setWidth($width)
    {
        $this->width = $width;
        return $this;
    }

    /**
     * Gets as zoomFactor
     *
     * The zoom factor of the map (from 0 to 12.)
     *
     * @return int
     */
    public function getZoomFactor()
    {
        return $this->zoomFactor;
    }

    /**
     * Sets a new zoomFactor
     *
     * The zoom factor of the map (from 0 to 12.)
     *
     * @param int $zoomFactor
     * @return self
     */
    public function setZoomFactor($zoomFactor)
    {
        $this->zoomFactor = $zoomFactor;
        return $this;
    }
}

