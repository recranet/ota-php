<?php

namespace Recranet\OTA\Type;

/**
 * Class representing PaymentFormType
 *
 * Ways of providing funds and guarantees for travel by the individual.
 * XSD Type: PaymentFormType
 */
class PaymentFormType
{
    /**
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @var string $shareSynchInd
     */
    private $shareSynchInd = null;

    /**
     * Permission for sharing data for marketing purposes.
     *
     * @var string $shareMarketInd
     */
    private $shareMarketInd = null;

    /**
     * A reference to identify the billing department for allocating cost of travel to company account.
     *
     * @var string $costCenterID
     */
    private $costCenterID = null;

    /**
     * Provides a reference to a specific form of payment.
     *
     * @var string $rPH
     */
    private $rPH = null;

    /**
     * This is used to indicate either a charge, reserve (deposit) or refund.
     *
     * @var string $paymentTransactionTypeCode
     */
    private $paymentTransactionTypeCode = null;

    /**
     * When true, indicates this represents a guarantee rather than a payment form.
     *
     * @var bool $guaranteeIndicator
     */
    private $guaranteeIndicator = null;

    /**
     * Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @var string $guaranteeTypeCode
     */
    private $guaranteeTypeCode = null;

    /**
     * Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     *
     * @var string $guaranteeID
     */
    private $guaranteeID = null;

    /**
     * A remark associated with the payment form.
     *
     * @var string $remark
     */
    private $remark = null;

    /**
     * Details of a debit or credit card.
     *
     * @var \Recranet\OTA\Type\PaymentCardType $paymentCard
     */
    private $paymentCard = null;

    /**
     * Details of a bank account.
     *
     * @var \Recranet\OTA\Type\BankAcctType $bankAcct
     */
    private $bankAcct = null;

    /**
     * Details of a direct billing arrangement.
     *
     * @var \Recranet\OTA\Type\DirectBillType $directBill
     */
    private $directBill = null;

    /**
     * Details of a paper or electronic document indicating prepayment.
     *
     * @var \Recranet\OTA\Type\PaymentFormType\VoucherAType $voucher
     */
    private $voucher = null;

    /**
     * Details of a loyalty redemption arrangement. This is normally miles or points.
     *
     * @var \Recranet\OTA\Type\PaymentFormType\LoyaltyRedemptionAType $loyaltyRedemption
     */
    private $loyaltyRedemption = null;

    /**
     * Details of a miscellaneous charge order (MCO).
     *
     * @var \Recranet\OTA\Type\PaymentFormType\MiscChargeOrderAType $miscChargeOrder
     */
    private $miscChargeOrder = null;

    /**
     * Details of a ticket to be exchanged.
     *
     * @var \Recranet\OTA\Type\PaymentFormType\TicketAType $ticket
     */
    private $ticket = null;

    /**
     * Used to indicate payment in cash.
     *
     * @var \Recranet\OTA\Type\PaymentFormType\CashAType $cash
     */
    private $cash = null;

    /**
     * Gets as shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @return string
     */
    public function getShareSynchInd()
    {
        return $this->shareSynchInd;
    }

    /**
     * Sets a new shareSynchInd
     *
     * Permission for sharing data for synchronization of information held by other travel service providers.
     *
     * @param string $shareSynchInd
     * @return self
     */
    public function setShareSynchInd($shareSynchInd)
    {
        $this->shareSynchInd = $shareSynchInd;
        return $this;
    }

    /**
     * Gets as shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @return string
     */
    public function getShareMarketInd()
    {
        return $this->shareMarketInd;
    }

    /**
     * Sets a new shareMarketInd
     *
     * Permission for sharing data for marketing purposes.
     *
     * @param string $shareMarketInd
     * @return self
     */
    public function setShareMarketInd($shareMarketInd)
    {
        $this->shareMarketInd = $shareMarketInd;
        return $this;
    }

    /**
     * Gets as costCenterID
     *
     * A reference to identify the billing department for allocating cost of travel to company account.
     *
     * @return string
     */
    public function getCostCenterID()
    {
        return $this->costCenterID;
    }

    /**
     * Sets a new costCenterID
     *
     * A reference to identify the billing department for allocating cost of travel to company account.
     *
     * @param string $costCenterID
     * @return self
     */
    public function setCostCenterID($costCenterID)
    {
        $this->costCenterID = $costCenterID;
        return $this;
    }

    /**
     * Gets as rPH
     *
     * Provides a reference to a specific form of payment.
     *
     * @return string
     */
    public function getRPH()
    {
        return $this->rPH;
    }

    /**
     * Sets a new rPH
     *
     * Provides a reference to a specific form of payment.
     *
     * @param string $rPH
     * @return self
     */
    public function setRPH($rPH)
    {
        $this->rPH = $rPH;
        return $this;
    }

    /**
     * Gets as paymentTransactionTypeCode
     *
     * This is used to indicate either a charge, reserve (deposit) or refund.
     *
     * @return string
     */
    public function getPaymentTransactionTypeCode()
    {
        return $this->paymentTransactionTypeCode;
    }

    /**
     * Sets a new paymentTransactionTypeCode
     *
     * This is used to indicate either a charge, reserve (deposit) or refund.
     *
     * @param string $paymentTransactionTypeCode
     * @return self
     */
    public function setPaymentTransactionTypeCode($paymentTransactionTypeCode)
    {
        $this->paymentTransactionTypeCode = $paymentTransactionTypeCode;
        return $this;
    }

    /**
     * Gets as guaranteeIndicator
     *
     * When true, indicates this represents a guarantee rather than a payment form.
     *
     * @return bool
     */
    public function getGuaranteeIndicator()
    {
        return $this->guaranteeIndicator;
    }

    /**
     * Sets a new guaranteeIndicator
     *
     * When true, indicates this represents a guarantee rather than a payment form.
     *
     * @param bool $guaranteeIndicator
     * @return self
     */
    public function setGuaranteeIndicator($guaranteeIndicator)
    {
        $this->guaranteeIndicator = $guaranteeIndicator;
        return $this;
    }

    /**
     * Gets as guaranteeTypeCode
     *
     * Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @return string
     */
    public function getGuaranteeTypeCode()
    {
        return $this->guaranteeTypeCode;
    }

    /**
     * Sets a new guaranteeTypeCode
     *
     * Used to specify the method of guarantee. Refer to OpenTravel Code List Payment Type (PMT).
     *
     * @param string $guaranteeTypeCode
     * @return self
     */
    public function setGuaranteeTypeCode($guaranteeTypeCode)
    {
        $this->guaranteeTypeCode = $guaranteeTypeCode;
        return $this;
    }

    /**
     * Gets as guaranteeID
     *
     * Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     *
     * @return string
     */
    public function getGuaranteeID()
    {
        return $this->guaranteeID;
    }

    /**
     * Sets a new guaranteeID
     *
     * Provides the identifier as specified by the GuaranteeTypeCode (e.g., Corporate ID or IATA number).
     *
     * @param string $guaranteeID
     * @return self
     */
    public function setGuaranteeID($guaranteeID)
    {
        $this->guaranteeID = $guaranteeID;
        return $this;
    }

    /**
     * Gets as remark
     *
     * A remark associated with the payment form.
     *
     * @return string
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * Sets a new remark
     *
     * A remark associated with the payment form.
     *
     * @param string $remark
     * @return self
     */
    public function setRemark($remark)
    {
        $this->remark = $remark;
        return $this;
    }

    /**
     * Gets as paymentCard
     *
     * Details of a debit or credit card.
     *
     * @return \Recranet\OTA\Type\PaymentCardType
     */
    public function getPaymentCard()
    {
        return $this->paymentCard;
    }

    /**
     * Sets a new paymentCard
     *
     * Details of a debit or credit card.
     *
     * @param \Recranet\OTA\Type\PaymentCardType $paymentCard
     * @return self
     */
    public function setPaymentCard(?\Recranet\OTA\Type\PaymentCardType $paymentCard = null)
    {
        $this->paymentCard = $paymentCard;
        return $this;
    }

    /**
     * Gets as bankAcct
     *
     * Details of a bank account.
     *
     * @return \Recranet\OTA\Type\BankAcctType
     */
    public function getBankAcct()
    {
        return $this->bankAcct;
    }

    /**
     * Sets a new bankAcct
     *
     * Details of a bank account.
     *
     * @param \Recranet\OTA\Type\BankAcctType $bankAcct
     * @return self
     */
    public function setBankAcct(?\Recranet\OTA\Type\BankAcctType $bankAcct = null)
    {
        $this->bankAcct = $bankAcct;
        return $this;
    }

    /**
     * Gets as directBill
     *
     * Details of a direct billing arrangement.
     *
     * @return \Recranet\OTA\Type\DirectBillType
     */
    public function getDirectBill()
    {
        return $this->directBill;
    }

    /**
     * Sets a new directBill
     *
     * Details of a direct billing arrangement.
     *
     * @param \Recranet\OTA\Type\DirectBillType $directBill
     * @return self
     */
    public function setDirectBill(?\Recranet\OTA\Type\DirectBillType $directBill = null)
    {
        $this->directBill = $directBill;
        return $this;
    }

    /**
     * Gets as voucher
     *
     * Details of a paper or electronic document indicating prepayment.
     *
     * @return \Recranet\OTA\Type\PaymentFormType\VoucherAType
     */
    public function getVoucher()
    {
        return $this->voucher;
    }

    /**
     * Sets a new voucher
     *
     * Details of a paper or electronic document indicating prepayment.
     *
     * @param \Recranet\OTA\Type\PaymentFormType\VoucherAType $voucher
     * @return self
     */
    public function setVoucher(?\Recranet\OTA\Type\PaymentFormType\VoucherAType $voucher = null)
    {
        $this->voucher = $voucher;
        return $this;
    }

    /**
     * Gets as loyaltyRedemption
     *
     * Details of a loyalty redemption arrangement. This is normally miles or points.
     *
     * @return \Recranet\OTA\Type\PaymentFormType\LoyaltyRedemptionAType
     */
    public function getLoyaltyRedemption()
    {
        return $this->loyaltyRedemption;
    }

    /**
     * Sets a new loyaltyRedemption
     *
     * Details of a loyalty redemption arrangement. This is normally miles or points.
     *
     * @param \Recranet\OTA\Type\PaymentFormType\LoyaltyRedemptionAType $loyaltyRedemption
     * @return self
     */
    public function setLoyaltyRedemption(?\Recranet\OTA\Type\PaymentFormType\LoyaltyRedemptionAType $loyaltyRedemption = null)
    {
        $this->loyaltyRedemption = $loyaltyRedemption;
        return $this;
    }

    /**
     * Gets as miscChargeOrder
     *
     * Details of a miscellaneous charge order (MCO).
     *
     * @return \Recranet\OTA\Type\PaymentFormType\MiscChargeOrderAType
     */
    public function getMiscChargeOrder()
    {
        return $this->miscChargeOrder;
    }

    /**
     * Sets a new miscChargeOrder
     *
     * Details of a miscellaneous charge order (MCO).
     *
     * @param \Recranet\OTA\Type\PaymentFormType\MiscChargeOrderAType $miscChargeOrder
     * @return self
     */
    public function setMiscChargeOrder(?\Recranet\OTA\Type\PaymentFormType\MiscChargeOrderAType $miscChargeOrder = null)
    {
        $this->miscChargeOrder = $miscChargeOrder;
        return $this;
    }

    /**
     * Gets as ticket
     *
     * Details of a ticket to be exchanged.
     *
     * @return \Recranet\OTA\Type\PaymentFormType\TicketAType
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Sets a new ticket
     *
     * Details of a ticket to be exchanged.
     *
     * @param \Recranet\OTA\Type\PaymentFormType\TicketAType $ticket
     * @return self
     */
    public function setTicket(?\Recranet\OTA\Type\PaymentFormType\TicketAType $ticket = null)
    {
        $this->ticket = $ticket;
        return $this;
    }

    /**
     * Gets as cash
     *
     * Used to indicate payment in cash.
     *
     * @return \Recranet\OTA\Type\PaymentFormType\CashAType
     */
    public function getCash()
    {
        return $this->cash;
    }

    /**
     * Sets a new cash
     *
     * Used to indicate payment in cash.
     *
     * @param \Recranet\OTA\Type\PaymentFormType\CashAType $cash
     * @return self
     */
    public function setCash(?\Recranet\OTA\Type\PaymentFormType\CashAType $cash = null)
    {
        $this->cash = $cash;
        return $this;
    }
}

