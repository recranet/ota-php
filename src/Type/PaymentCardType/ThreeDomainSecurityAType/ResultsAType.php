<?php

namespace Recranet\OTA\Type\PaymentCardType\ThreeDomainSecurityAType;

/**
 * Class representing ResultsAType
 */
class ResultsAType
{
    /**
     * Authentication certificate.
     * Example: AAABAFaQRwAAAAAAEZBHAAAAAAA=ECI05
     *
     * @var string $cAVV
     */
    private $cAVV = null;

    /**
     * Transaction status.
     * Example: Y
     *
     * @var string $pAResStatus
     */
    private $pAResStatus = null;

    /**
     * Card or issuer participation.
     * Example: Y
     *
     * @var string $signatureVerfication
     */
    private $signatureVerfication = null;

    /**
     * Authentication transaction ID.
     * Example: 9D920E9-6FCF-4A74-A4E0-D6A591D1108F
     *
     * @var string $transactionID
     */
    private $transactionID = null;

    /**
     * Unique transaction reference
     * Example: 2bxUs1emK0SCevbivcApzAcAAQk=
     *
     * @var string $xID
     */
    private $xID = null;

    /**
     * @var \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     */
    private $tPAExtensions = null;

    /**
     * Gets as cAVV
     *
     * Authentication certificate.
     * Example: AAABAFaQRwAAAAAAEZBHAAAAAAA=ECI05
     *
     * @return string
     */
    public function getCAVV()
    {
        return $this->cAVV;
    }

    /**
     * Sets a new cAVV
     *
     * Authentication certificate.
     * Example: AAABAFaQRwAAAAAAEZBHAAAAAAA=ECI05
     *
     * @param string $cAVV
     * @return self
     */
    public function setCAVV($cAVV)
    {
        $this->cAVV = $cAVV;
        return $this;
    }

    /**
     * Gets as pAResStatus
     *
     * Transaction status.
     * Example: Y
     *
     * @return string
     */
    public function getPAResStatus()
    {
        return $this->pAResStatus;
    }

    /**
     * Sets a new pAResStatus
     *
     * Transaction status.
     * Example: Y
     *
     * @param string $pAResStatus
     * @return self
     */
    public function setPAResStatus($pAResStatus)
    {
        $this->pAResStatus = $pAResStatus;
        return $this;
    }

    /**
     * Gets as signatureVerfication
     *
     * Card or issuer participation.
     * Example: Y
     *
     * @return string
     */
    public function getSignatureVerfication()
    {
        return $this->signatureVerfication;
    }

    /**
     * Sets a new signatureVerfication
     *
     * Card or issuer participation.
     * Example: Y
     *
     * @param string $signatureVerfication
     * @return self
     */
    public function setSignatureVerfication($signatureVerfication)
    {
        $this->signatureVerfication = $signatureVerfication;
        return $this;
    }

    /**
     * Gets as transactionID
     *
     * Authentication transaction ID.
     * Example: 9D920E9-6FCF-4A74-A4E0-D6A591D1108F
     *
     * @return string
     */
    public function getTransactionID()
    {
        return $this->transactionID;
    }

    /**
     * Sets a new transactionID
     *
     * Authentication transaction ID.
     * Example: 9D920E9-6FCF-4A74-A4E0-D6A591D1108F
     *
     * @param string $transactionID
     * @return self
     */
    public function setTransactionID($transactionID)
    {
        $this->transactionID = $transactionID;
        return $this;
    }

    /**
     * Gets as xID
     *
     * Unique transaction reference
     * Example: 2bxUs1emK0SCevbivcApzAcAAQk=
     *
     * @return string
     */
    public function getXID()
    {
        return $this->xID;
    }

    /**
     * Sets a new xID
     *
     * Unique transaction reference
     * Example: 2bxUs1emK0SCevbivcApzAcAAQk=
     *
     * @param string $xID
     * @return self
     */
    public function setXID($xID)
    {
        $this->xID = $xID;
        return $this;
    }

    /**
     * Gets as tPAExtensions
     *
     * @return \Recranet\OTA\Type\TPAExtensions
     */
    public function getTPAExtensions()
    {
        return $this->tPAExtensions;
    }

    /**
     * Sets a new tPAExtensions
     *
     * @param \Recranet\OTA\Type\TPAExtensions $tPAExtensions
     * @return self
     */
    public function setTPAExtensions(?\Recranet\OTA\Type\TPAExtensions $tPAExtensions = null)
    {
        $this->tPAExtensions = $tPAExtensions;
        return $this;
    }
}

