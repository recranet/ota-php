<?php

namespace Recranet\OTA;

/**
 * Class representing SpecialReqDetailsType
 *
 * Remarks, OSIs, Seat Requests etc.
 * XSD Type: SpecialReqDetailsType
 */
class SpecialReqDetailsType
{
    /**
     * A collection of Seat Request
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[] $seatRequests
     */
    private $seatRequests = null;

    /**
     * A collection of Special Service Request.
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[] $specialServiceRequests
     */
    private $specialServiceRequests = null;

    /**
     * A collection of Other Service Information.
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[] $otherServiceInformations
     */
    private $otherServiceInformations = null;

    /**
     * A collection of Remark.
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\RemarksAType\RemarkAType[] $remarks
     */
    private $remarks = null;

    /**
     * A collection of Special Remark.
     *
     * @var \Recranet\OTA\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[] $specialRemarks
     */
    private $specialRemarks = null;

    /**
     * Adds as seatRequest
     *
     * A collection of Seat Request
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType $seatRequest
     */
    public function addToSeatRequests(\Recranet\OTA\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType $seatRequest)
    {
        $this->seatRequests[] = $seatRequest;
        return $this;
    }

    /**
     * isset seatRequests
     *
     * A collection of Seat Request
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSeatRequests($index)
    {
        return isset($this->seatRequests[$index]);
    }

    /**
     * unset seatRequests
     *
     * A collection of Seat Request
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSeatRequests($index)
    {
        unset($this->seatRequests[$index]);
    }

    /**
     * Gets as seatRequests
     *
     * A collection of Seat Request
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[]
     */
    public function getSeatRequests()
    {
        return $this->seatRequests;
    }

    /**
     * Sets a new seatRequests
     *
     * A collection of Seat Request
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\SeatRequestsAType\SeatRequestAType[] $seatRequests
     * @return self
     */
    public function setSeatRequests(array $seatRequests = null)
    {
        $this->seatRequests = $seatRequests;
        return $this;
    }

    /**
     * Adds as specialServiceRequest
     *
     * A collection of Special Service Request.
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType $specialServiceRequest
     */
    public function addToSpecialServiceRequests(\Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType $specialServiceRequest)
    {
        $this->specialServiceRequests[] = $specialServiceRequest;
        return $this;
    }

    /**
     * isset specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialServiceRequests($index)
    {
        return isset($this->specialServiceRequests[$index]);
    }

    /**
     * unset specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialServiceRequests($index)
    {
        unset($this->specialServiceRequests[$index]);
    }

    /**
     * Gets as specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[]
     */
    public function getSpecialServiceRequests()
    {
        return $this->specialServiceRequests;
    }

    /**
     * Sets a new specialServiceRequests
     *
     * A collection of Special Service Request.
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\SpecialServiceRequestsAType\SpecialServiceRequestAType[] $specialServiceRequests
     * @return self
     */
    public function setSpecialServiceRequests(array $specialServiceRequests = null)
    {
        $this->specialServiceRequests = $specialServiceRequests;
        return $this;
    }

    /**
     * Adds as otherServiceInformation
     *
     * A collection of Other Service Information.
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType $otherServiceInformation
     */
    public function addToOtherServiceInformations(\Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType $otherServiceInformation)
    {
        $this->otherServiceInformations[] = $otherServiceInformation;
        return $this;
    }

    /**
     * isset otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetOtherServiceInformations($index)
    {
        return isset($this->otherServiceInformations[$index]);
    }

    /**
     * unset otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetOtherServiceInformations($index)
    {
        unset($this->otherServiceInformations[$index]);
    }

    /**
     * Gets as otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[]
     */
    public function getOtherServiceInformations()
    {
        return $this->otherServiceInformations;
    }

    /**
     * Sets a new otherServiceInformations
     *
     * A collection of Other Service Information.
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\OtherServiceInformationsAType\OtherServiceInformationAType[] $otherServiceInformations
     * @return self
     */
    public function setOtherServiceInformations(array $otherServiceInformations = null)
    {
        $this->otherServiceInformations = $otherServiceInformations;
        return $this;
    }

    /**
     * Adds as remark
     *
     * A collection of Remark.
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\RemarksAType\RemarkAType $remark
     */
    public function addToRemarks(\Recranet\OTA\SpecialReqDetailsType\RemarksAType\RemarkAType $remark)
    {
        $this->remarks[] = $remark;
        return $this;
    }

    /**
     * isset remarks
     *
     * A collection of Remark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRemarks($index)
    {
        return isset($this->remarks[$index]);
    }

    /**
     * unset remarks
     *
     * A collection of Remark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRemarks($index)
    {
        unset($this->remarks[$index]);
    }

    /**
     * Gets as remarks
     *
     * A collection of Remark.
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\RemarksAType\RemarkAType[]
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Sets a new remarks
     *
     * A collection of Remark.
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\RemarksAType\RemarkAType[] $remarks
     * @return self
     */
    public function setRemarks(array $remarks = null)
    {
        $this->remarks = $remarks;
        return $this;
    }

    /**
     * Adds as specialRemark
     *
     * A collection of Special Remark.
     *
     * @return self
     * @param \Recranet\OTA\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark
     */
    public function addToSpecialRemarks(\Recranet\OTA\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType $specialRemark)
    {
        $this->specialRemarks[] = $specialRemark;
        return $this;
    }

    /**
     * isset specialRemarks
     *
     * A collection of Special Remark.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRemarks($index)
    {
        return isset($this->specialRemarks[$index]);
    }

    /**
     * unset specialRemarks
     *
     * A collection of Special Remark.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRemarks($index)
    {
        unset($this->specialRemarks[$index]);
    }

    /**
     * Gets as specialRemarks
     *
     * A collection of Special Remark.
     *
     * @return \Recranet\OTA\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[]
     */
    public function getSpecialRemarks()
    {
        return $this->specialRemarks;
    }

    /**
     * Sets a new specialRemarks
     *
     * A collection of Special Remark.
     *
     * @param \Recranet\OTA\SpecialReqDetailsType\SpecialRemarksAType\SpecialRemarkAType[] $specialRemarks
     * @return self
     */
    public function setSpecialRemarks(array $specialRemarks = null)
    {
        $this->specialRemarks = $specialRemarks;
        return $this;
    }
}

