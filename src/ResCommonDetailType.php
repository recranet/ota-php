<?php

namespace Recranet\OTA;

/**
 * Class representing ResCommonDetailType
 *
 * A grouping of elements including Guest Counts, Time Span, pointers to Res Guests, guest Memberships, Comments and Special Requests and finally finacial information including Guarantee, Deposit and Payyment and Cancellation Penalties.
 * XSD Type: ResCommonDetailType
 */
class ResCommonDetailType
{
    /**
     * A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     *
     * @var \Recranet\OTA\GuestCountType $guestCounts
     */
    private $guestCounts = null;

    /**
     * The Time Span which covers the Reservation, Room Stay or Service.
     *
     * @var \Recranet\OTA\ResCommonDetailType\TimeSpanAType $timeSpan
     */
    private $timeSpan = null;

    /**
     * A collection of ResGuestRPH objects.
     *
     * @var string[] $resGuestRPHs
     */
    private $resGuestRPHs = null;

    /**
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @var \Recranet\OTA\MembershipType\MembershipAType[] $memberships
     */
    private $memberships = null;

    /**
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @var \Recranet\OTA\CommentType\CommentAType[] $comments
     */
    private $comments = null;

    /**
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @var \Recranet\OTA\SpecialRequestType\SpecialRequestAType[] $specialRequests
     */
    private $specialRequests = null;

    /**
     * The guarantee information associated to the Reservation or a particular Room Stay or Service.
     *
     * @var \Recranet\OTA\GuaranteeType $guarantee
     */
    private $guarantee = null;

    /**
     * A collection of deposit and/or payments.
     *
     * @var \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayments
     */
    private $depositPayments = null;

    /**
     * A collection of Cancellation Penalties objects.
     *
     * @var \Recranet\OTA\CancelPenaltiesType $cancelPenalties
     */
    private $cancelPenalties = null;

    /**
     * A collection of fees that applies to the reservation.
     *
     * @var \Recranet\OTA\FeeType[] $fees
     */
    private $fees = null;

    /**
     * The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @var \Recranet\OTA\TotalType $total
     */
    private $total = null;

    /**
     * Gets as guestCounts
     *
     * A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     *
     * @return \Recranet\OTA\GuestCountType
     */
    public function getGuestCounts()
    {
        return $this->guestCounts;
    }

    /**
     * Sets a new guestCounts
     *
     * A collection of Guest Counts associated to the whole Reservation or a particular Room Stay or Service. A child Guest Count element is required for each distict age group.
     *
     * @param \Recranet\OTA\GuestCountType $guestCounts
     * @return self
     */
    public function setGuestCounts(?\Recranet\OTA\GuestCountType $guestCounts = null)
    {
        $this->guestCounts = $guestCounts;
        return $this;
    }

    /**
     * Gets as timeSpan
     *
     * The Time Span which covers the Reservation, Room Stay or Service.
     *
     * @return \Recranet\OTA\ResCommonDetailType\TimeSpanAType
     */
    public function getTimeSpan()
    {
        return $this->timeSpan;
    }

    /**
     * Sets a new timeSpan
     *
     * The Time Span which covers the Reservation, Room Stay or Service.
     *
     * @param \Recranet\OTA\ResCommonDetailType\TimeSpanAType $timeSpan
     * @return self
     */
    public function setTimeSpan(?\Recranet\OTA\ResCommonDetailType\TimeSpanAType $timeSpan = null)
    {
        $this->timeSpan = $timeSpan;
        return $this;
    }

    /**
     * Adds as resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @return self
     * @param string $resGuestRPHs
     */
    public function addToResGuestRPHs($resGuestRPHs)
    {
        $this->resGuestRPHs[] = $resGuestRPHs;
        return $this;
    }

    /**
     * isset resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetResGuestRPHs($index)
    {
        return isset($this->resGuestRPHs[$index]);
    }

    /**
     * unset resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetResGuestRPHs($index)
    {
        unset($this->resGuestRPHs[$index]);
    }

    /**
     * Gets as resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @return string[]
     */
    public function getResGuestRPHs()
    {
        return $this->resGuestRPHs;
    }

    /**
     * Sets a new resGuestRPHs
     *
     * A collection of ResGuestRPH objects.
     *
     * @param string $resGuestRPHs
     * @return self
     */
    public function setResGuestRPHs(array $resGuestRPHs = null)
    {
        $this->resGuestRPHs = $resGuestRPHs;
        return $this;
    }

    /**
     * Adds as membership
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @return self
     * @param \Recranet\OTA\MembershipType\MembershipAType $membership
     */
    public function addToMemberships(\Recranet\OTA\MembershipType\MembershipAType $membership)
    {
        $this->memberships[] = $membership;
        return $this;
    }

    /**
     * isset memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMemberships($index)
    {
        return isset($this->memberships[$index]);
    }

    /**
     * unset memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMemberships($index)
    {
        unset($this->memberships[$index]);
    }

    /**
     * Gets as memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @return \Recranet\OTA\MembershipType\MembershipAType[]
     */
    public function getMemberships()
    {
        return $this->memberships;
    }

    /**
     * Sets a new memberships
     *
     * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
     *
     * @param \Recranet\OTA\MembershipType\MembershipAType[] $memberships
     * @return self
     */
    public function setMemberships(array $memberships = null)
    {
        $this->memberships = $memberships;
        return $this;
    }

    /**
     * Adds as comment
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @return self
     * @param \Recranet\OTA\CommentType\CommentAType $comment
     */
    public function addToComments(\Recranet\OTA\CommentType\CommentAType $comment)
    {
        $this->comments[] = $comment;
        return $this;
    }

    /**
     * isset comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetComments($index)
    {
        return isset($this->comments[$index]);
    }

    /**
     * unset comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetComments($index)
    {
        unset($this->comments[$index]);
    }

    /**
     * Gets as comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @return \Recranet\OTA\CommentType\CommentAType[]
     */
    public function getComments()
    {
        return $this->comments;
    }

    /**
     * Sets a new comments
     *
     * A collection of Comment objects. Comments which apply to the whole Reservation or a particular Room Stay or Service.
     *
     * @param \Recranet\OTA\CommentType\CommentAType[] $comments
     * @return self
     */
    public function setComments(array $comments = null)
    {
        $this->comments = $comments;
        return $this;
    }

    /**
     * Adds as specialRequest
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @return self
     * @param \Recranet\OTA\SpecialRequestType\SpecialRequestAType $specialRequest
     */
    public function addToSpecialRequests(\Recranet\OTA\SpecialRequestType\SpecialRequestAType $specialRequest)
    {
        $this->specialRequests[] = $specialRequest;
        return $this;
    }

    /**
     * isset specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetSpecialRequests($index)
    {
        return isset($this->specialRequests[$index]);
    }

    /**
     * unset specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetSpecialRequests($index)
    {
        unset($this->specialRequests[$index]);
    }

    /**
     * Gets as specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @return \Recranet\OTA\SpecialRequestType\SpecialRequestAType[]
     */
    public function getSpecialRequests()
    {
        return $this->specialRequests;
    }

    /**
     * Sets a new specialRequests
     *
     * The SpecialRequest object indicates special requests for the whole Reservation, or a particular Room Stay or Service.
     *
     * @param \Recranet\OTA\SpecialRequestType\SpecialRequestAType[] $specialRequests
     * @return self
     */
    public function setSpecialRequests(array $specialRequests = null)
    {
        $this->specialRequests = $specialRequests;
        return $this;
    }

    /**
     * Gets as guarantee
     *
     * The guarantee information associated to the Reservation or a particular Room Stay or Service.
     *
     * @return \Recranet\OTA\GuaranteeType
     */
    public function getGuarantee()
    {
        return $this->guarantee;
    }

    /**
     * Sets a new guarantee
     *
     * The guarantee information associated to the Reservation or a particular Room Stay or Service.
     *
     * @param \Recranet\OTA\GuaranteeType $guarantee
     * @return self
     */
    public function setGuarantee(?\Recranet\OTA\GuaranteeType $guarantee = null)
    {
        $this->guarantee = $guarantee;
        return $this;
    }

    /**
     * Adds as guaranteePayment
     *
     * A collection of deposit and/or payments.
     *
     * @return self
     * @param \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment
     */
    public function addToDepositPayments(\Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType $guaranteePayment)
    {
        $this->depositPayments[] = $guaranteePayment;
        return $this;
    }

    /**
     * isset depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetDepositPayments($index)
    {
        return isset($this->depositPayments[$index]);
    }

    /**
     * unset depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetDepositPayments($index)
    {
        unset($this->depositPayments[$index]);
    }

    /**
     * Gets as depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @return \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[]
     */
    public function getDepositPayments()
    {
        return $this->depositPayments;
    }

    /**
     * Sets a new depositPayments
     *
     * A collection of deposit and/or payments.
     *
     * @param \Recranet\OTA\RequiredPaymentsType\GuaranteePaymentAType[] $depositPayments
     * @return self
     */
    public function setDepositPayments(array $depositPayments = null)
    {
        $this->depositPayments = $depositPayments;
        return $this;
    }

    /**
     * Gets as cancelPenalties
     *
     * A collection of Cancellation Penalties objects.
     *
     * @return \Recranet\OTA\CancelPenaltiesType
     */
    public function getCancelPenalties()
    {
        return $this->cancelPenalties;
    }

    /**
     * Sets a new cancelPenalties
     *
     * A collection of Cancellation Penalties objects.
     *
     * @param \Recranet\OTA\CancelPenaltiesType $cancelPenalties
     * @return self
     */
    public function setCancelPenalties(?\Recranet\OTA\CancelPenaltiesType $cancelPenalties = null)
    {
        $this->cancelPenalties = $cancelPenalties;
        return $this;
    }

    /**
     * Adds as fee
     *
     * A collection of fees that applies to the reservation.
     *
     * @return self
     * @param \Recranet\OTA\FeeType $fee
     */
    public function addToFees(\Recranet\OTA\FeeType $fee)
    {
        $this->fees[] = $fee;
        return $this;
    }

    /**
     * isset fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetFees($index)
    {
        return isset($this->fees[$index]);
    }

    /**
     * unset fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetFees($index)
    {
        unset($this->fees[$index]);
    }

    /**
     * Gets as fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @return \Recranet\OTA\FeeType[]
     */
    public function getFees()
    {
        return $this->fees;
    }

    /**
     * Sets a new fees
     *
     * A collection of fees that applies to the reservation.
     *
     * @param \Recranet\OTA\FeeType[] $fees
     * @return self
     */
    public function setFees(array $fees = null)
    {
        $this->fees = $fees;
        return $this;
    }

    /**
     * Gets as total
     *
     * The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @return \Recranet\OTA\TotalType
     */
    public function getTotal()
    {
        return $this->total;
    }

    /**
     * Sets a new total
     *
     * The total amount charged for the accommodation including additional occupant amounts and fees. If TaxInclusive is set to True, then taxes are included in the total amount.
     *
     * @param \Recranet\OTA\TotalType $total
     * @return self
     */
    public function setTotal(?\Recranet\OTA\TotalType $total = null)
    {
        $this->total = $total;
        return $this;
    }
}

