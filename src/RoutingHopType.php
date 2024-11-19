<?php

namespace Recranet\OTA;

/**
 * Class representing RoutingHopType
 *
 * A collection of RoutingHop objects. This details the path that the original request or notification traveled.
 * XSD Type: RoutingHopType
 */
class RoutingHopType
{
    /**
     * A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
     *
     * @var \Recranet\OTA\RoutingHopType\RoutingHopAType[] $routingHop
     */
    private $routingHop = [
        
    ];

    /**
     * Adds as routingHop
     *
     * A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
     *
     * @return self
     * @param \Recranet\OTA\RoutingHopType\RoutingHopAType $routingHop
     */
    public function addToRoutingHop(\Recranet\OTA\RoutingHopType\RoutingHopAType $routingHop)
    {
        $this->routingHop[] = $routingHop;
        return $this;
    }

    /**
     * isset routingHop
     *
     * A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRoutingHop($index)
    {
        return isset($this->routingHop[$index]);
    }

    /**
     * unset routingHop
     *
     * A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRoutingHop($index)
    {
        unset($this->routingHop[$index]);
    }

    /**
     * Gets as routingHop
     *
     * A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
     *
     * @return \Recranet\OTA\RoutingHopType\RoutingHopAType[]
     */
    public function getRoutingHop()
    {
        return $this->routingHop;
    }

    /**
     * Sets a new routingHop
     *
     * A RoutingHop object conveys information about the path that this notification update took (e.g. how many and which systems it passed through).
     *
     * @param \Recranet\OTA\RoutingHopType\RoutingHopAType[] $routingHop
     * @return self
     */
    public function setRoutingHop(array $routingHop)
    {
        $this->routingHop = $routingHop;
        return $this;
    }
}

