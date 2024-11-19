<?php

namespace Recranet\OTA;

/**
 * Class representing MembershipType
 *
 * A collection of Membership objects. Memberships provides a list of reward programs which may be credited with points accrued from the guest's activity. Which memberships are to be applied to which part is determined by each object's SelectedMembershipRPHs collection.
 * XSD Type: MembershipType
 */
class MembershipType
{
    /**
     * The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
     *
     * @var \Recranet\OTA\MembershipType\MembershipAType[] $membership
     */
    private $membership = [
        
    ];

    /**
     * Adds as membership
     *
     * The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
     *
     * @return self
     * @param \Recranet\OTA\MembershipType\MembershipAType $membership
     */
    public function addToMembership(\Recranet\OTA\MembershipType\MembershipAType $membership)
    {
        $this->membership[] = $membership;
        return $this;
    }

    /**
     * isset membership
     *
     * The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetMembership($index)
    {
        return isset($this->membership[$index]);
    }

    /**
     * unset membership
     *
     * The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetMembership($index)
    {
        unset($this->membership[$index]);
    }

    /**
     * Gets as membership
     *
     * The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
     *
     * @return \Recranet\OTA\MembershipType\MembershipAType[]
     */
    public function getMembership()
    {
        return $this->membership;
    }

    /**
     * Sets a new membership
     *
     * The SelectedMembership object identifies the frequent customer reward program and (optionally) indicates points awarded for stay activity.
     *
     * @param \Recranet\OTA\MembershipType\MembershipAType[] $membership
     * @return self
     */
    public function setMembership(array $membership)
    {
        $this->membership = $membership;
        return $this;
    }
}

