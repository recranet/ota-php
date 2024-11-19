<?php

namespace Recranet\OTA;

/**
 * Class representing TrainQueryType
 *
 * Defines information to do a query by train operator or specific train information.
 * XSD Type: TrainQueryType
 */
class TrainQueryType
{
    /**
     * A specific train and network code.
     *
     * @var \Recranet\OTA\TrainIdentificationType $train
     */
    private $train = null;

    /**
     * The network code of a rail operator defined by International Union of Railways (UIC.)
     *
     * @var \Recranet\OTA\NetworkCodeType $networkCode
     */
    private $networkCode = null;

    /**
     * Gets as train
     *
     * A specific train and network code.
     *
     * @return \Recranet\OTA\TrainIdentificationType
     */
    public function getTrain()
    {
        return $this->train;
    }

    /**
     * Sets a new train
     *
     * A specific train and network code.
     *
     * @param \Recranet\OTA\TrainIdentificationType $train
     * @return self
     */
    public function setTrain(?\Recranet\OTA\TrainIdentificationType $train = null)
    {
        $this->train = $train;
        return $this;
    }

    /**
     * Gets as networkCode
     *
     * The network code of a rail operator defined by International Union of Railways (UIC.)
     *
     * @return \Recranet\OTA\NetworkCodeType
     */
    public function getNetworkCode()
    {
        return $this->networkCode;
    }

    /**
     * Sets a new networkCode
     *
     * The network code of a rail operator defined by International Union of Railways (UIC.)
     *
     * @param \Recranet\OTA\NetworkCodeType $networkCode
     * @return self
     */
    public function setNetworkCode(?\Recranet\OTA\NetworkCodeType $networkCode = null)
    {
        $this->networkCode = $networkCode;
        return $this;
    }
}

