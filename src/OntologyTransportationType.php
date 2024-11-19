<?php

namespace Recranet\OTA;

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
     * @var \Recranet\OTA\OntologyTransportationType\TripDirectionAType $tripDirection
     */
    private $tripDirection = null;

    /**
     * Flight and rail information.
     *
     * @var \Recranet\OTA\OntologyTransportationType\FlightAndRailAType $flightAndRail
     */
    private $flightAndRail = null;

    /**
     * Vehicle information.
     *
     * @var \Recranet\OTA\OntologyTransportationType\VehicleAType $vehicle
     */
    private $vehicle = null;

    /**
     * @var \Recranet\OTA\OntologyExtension $ontologyExtension
     */
    private $ontologyExtension = null;

    /**
     * Gets as tripDirection
     *
     * Trip direction.
     * Example: Outbound
     *
     * @return \Recranet\OTA\OntologyTransportationType\TripDirectionAType
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
     * @param \Recranet\OTA\OntologyTransportationType\TripDirectionAType $tripDirection
     * @return self
     */
    public function setTripDirection(?\Recranet\OTA\OntologyTransportationType\TripDirectionAType $tripDirection = null)
    {
        $this->tripDirection = $tripDirection;
        return $this;
    }

    /**
     * Gets as flightAndRail
     *
     * Flight and rail information.
     *
     * @return \Recranet\OTA\OntologyTransportationType\FlightAndRailAType
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
     * @param \Recranet\OTA\OntologyTransportationType\FlightAndRailAType $flightAndRail
     * @return self
     */
    public function setFlightAndRail(?\Recranet\OTA\OntologyTransportationType\FlightAndRailAType $flightAndRail = null)
    {
        $this->flightAndRail = $flightAndRail;
        return $this;
    }

    /**
     * Gets as vehicle
     *
     * Vehicle information.
     *
     * @return \Recranet\OTA\OntologyTransportationType\VehicleAType
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
     * @param \Recranet\OTA\OntologyTransportationType\VehicleAType $vehicle
     * @return self
     */
    public function setVehicle(?\Recranet\OTA\OntologyTransportationType\VehicleAType $vehicle = null)
    {
        $this->vehicle = $vehicle;
        return $this;
    }

    /**
     * Gets as ontologyExtension
     *
     * @return \Recranet\OTA\OntologyExtension
     */
    public function getOntologyExtension()
    {
        return $this->ontologyExtension;
    }

    /**
     * Sets a new ontologyExtension
     *
     * @param \Recranet\OTA\OntologyExtension $ontologyExtension
     * @return self
     */
    public function setOntologyExtension(?\Recranet\OTA\OntologyExtension $ontologyExtension = null)
    {
        $this->ontologyExtension = $ontologyExtension;
        return $this;
    }
}

