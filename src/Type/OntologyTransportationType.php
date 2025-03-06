<?php

namespace Recranet\OTA\Type;

/**
 * Class representing OntologyTransportationType
 *
 * Transportation information with ontology reference.
 * XSD Type: OntologyTransportationType
 */
class OntologyTransportationType
{
    /**
     * Trip direction.
     * Example: Outbound
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\TripDirectionAType $tripDirection
     */
    private $tripDirection = null;

    /**
     * Flight and rail information.
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType $flightAndRail
     */
    private $flightAndRail = null;

    /**
     * Vehicle information.
     *
     * @var \Recranet\OTA\Type\OntologyTransportationType\VehicleAType $vehicle
     */
    private $vehicle = null;

    /**
     * @var \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as tripDirection
     *
     * Trip direction.
     * Example: Outbound
     *
     * @return \Recranet\OTA\Type\OntologyTransportationType\TripDirectionAType
     */
    public function getTripDirection()
    {
        return $this->tripDirection;
    }

    /**
     * Sets a new tripDirection
     *
     * Trip direction.
     * Example: Outbound
     *
     * @param \Recranet\OTA\Type\OntologyTransportationType\TripDirectionAType $tripDirection
     * @return self
     */
    public function setTripDirection(?\Recranet\OTA\Type\OntologyTransportationType\TripDirectionAType $tripDirection = null)
    {
        $this->tripDirection = $tripDirection;
        return $this;
    }

    /**
     * Gets as flightAndRail
     *
     * Flight and rail information.
     *
     * @return \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType
     */
    public function getFlightAndRail()
    {
        return $this->flightAndRail;
    }

    /**
     * Sets a new flightAndRail
     *
     * Flight and rail information.
     *
     * @param \Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType $flightAndRail
     * @return self
     */
    public function setFlightAndRail(?\Recranet\OTA\Type\OntologyTransportationType\FlightAndRailAType $flightAndRail = null)
    {
        $this->flightAndRail = $flightAndRail;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle information.
     *
     * @return \Recranet\OTA\Type\OntologyTransportationType\VehicleAType
     */
    public function getVehicle()
    {
        return $this->vehicle;
    }

    /**
     * Sets a new vehicle
     *
     * Vehicle information.
     *
     * @param \Recranet\OTA\Type\OntologyTransportationType\VehicleAType $vehicle
     * @return self
     */
    public function setVehicle(?\Recranet\OTA\Type\OntologyTransportationType\VehicleAType $vehicle = null)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\Type\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\Type\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\Type\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

