<?php

namespace Recranet\OTA\PoliciesType\PolicyAType;

use Recranet\OTA\FeeType;

/**
 * Class representing CommissionPolicyAType
 */
class CommissionPolicyAType extends FeeType
{
    /**
     * Specifies whether commissions apply to all, none, or some rates.
     *
     * @var string $commissionApplicability
     */
    private $commissionApplicability = null;

    /**
     * Company processing the commission payment for the property.
     *
     * @var \Recranet\OTA\PoliciesType\PolicyAType\CommissionPolicyAType\PaymentCompanyAType[] $paymentCompany
     */
    private $paymentCompany = [
        
    ];

    /**
     * Gets as commissionApplicability
     *
     * Specifies whether commissions apply to all, none, or some rates.
     *
     * @return string
     */
    public function getCommissionApplicability()
    {
        return $this->commissionApplicability;
    }

    /**
     * Sets a new commissionApplicability
     *
     * Specifies whether commissions apply to all, none, or some rates.
     *
     * @param string $commissionApplicability
     * @return self
     */
    public function setCommissionApplicability($commissionApplicability)
    {
        $this->commissionApplicability = $commissionApplicability;
        return $this;
    }

    /**
     * Adds as paymentCompany
     *
     * Company processing the commission payment for the property.
     *
     * @return self
     * @param \Recranet\OTA\PoliciesType\PolicyAType\CommissionPolicyAType\PaymentCompanyAType $paymentCompany
     */
    public function addToPaymentCompany(\Recranet\OTA\PoliciesType\PolicyAType\CommissionPolicyAType\PaymentCompanyAType $paymentCompany)
    {
        $this->paymentCompany[] = $paymentCompany;
        return $this;
    }

    /**
     * isset paymentCompany
     *
     * Company processing the commission payment for the property.
     *
     * @param int|string $index
     * @return bool
     */
    public function issetPaymentCompany($index)
    {
        return isset($this->paymentCompany[$index]);
    }

    /**
     * unset paymentCompany
     *
     * Company processing the commission payment for the property.
     *
     * @param int|string $index
     * @return void
     */
    public function unsetPaymentCompany($index)
    {
        unset($this->paymentCompany[$index]);
    }

    /**
     * Gets as paymentCompany
     *
     * Company processing the commission payment for the property.
     *
     * @return \Recranet\OTA\PoliciesType\PolicyAType\CommissionPolicyAType\PaymentCompanyAType[]
     */
    public function getPaymentCompany()
    {
        return $this->paymentCompany;
    }

    /**
     * Sets a new paymentCompany
     *
     * Company processing the commission payment for the property.
     *
     * @param \Recranet\OTA\PoliciesType\PolicyAType\CommissionPolicyAType\PaymentCompanyAType[] $paymentCompany
     * @return self
     */
    public function setPaymentCompany(array $paymentCompany = null)
    {
        $this->paymentCompany = $paymentCompany;
        return $this;
    }
}

