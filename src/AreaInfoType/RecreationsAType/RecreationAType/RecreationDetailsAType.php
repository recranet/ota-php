<?php

namespace Recranet\OTA\AreaInfoType\RecreationsAType\RecreationAType;

/**
 * Class representing RecreationDetailsAType
 */
class RecreationDetailsAType
{
    /**
     * RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
     *
     * @var \Recranet\OTA\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType[] $recreationDetail
     */
    private $recreationDetail = [
        
    ];

    /**
     * Adds as recreationDetail
     *
     * RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
     *
     * @return self
     * @param \Recranet\OTA\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType $recreationDetail
     */
    public function addToRecreationDetail(\Recranet\OTA\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType $recreationDetail)
    {
        $this->recreationDetail[] = $recreationDetail;
        return $this;
    }

    /**
     * isset recreationDetail
     *
     * RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetRecreationDetail($index)
    {
        return isset($this->recreationDetail[$index]);
    }

    /**
     * unset recreationDetail
     *
     * RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetRecreationDetail($index)
    {
        unset($this->recreationDetail[$index]);
    }

    /**
     * Gets as recreationDetail
     *
     * RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
     *
     * @return \Recranet\OTA\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType[]
     */
    public function getRecreationDetail()
    {
        return $this->recreationDetail;
    }

    /**
     * Sets a new recreationDetail
     *
     * RecreationDetail is used to give furher desciption regarding the recreation. These codes are passed in the code attribute and include details such as if a golf course has a driving range and what the total yardage for the course is.
     *
     * @param \Recranet\OTA\AreaInfoType\RecreationsAType\RecreationAType\RecreationDetailsAType\RecreationDetailAType[] $recreationDetail
     * @return self
     */
    public function setRecreationDetail(array $recreationDetail)
    {
        $this->recreationDetail = $recreationDetail;
        return $this;
    }
}

