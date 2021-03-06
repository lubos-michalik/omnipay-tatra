<?php

namespace Omnipay\CardPay\Message;

use Omnipay\Common\Message\AbstractResponse;
use Omnipay\Common\Message\RequestInterface;

class CompletePurchaseResponse extends AbstractResponse
{
    const SUCCESS = 'OK';

    public function isSuccessful()
    {
        return static::SUCCESS === $this->getRes();
    }

    public function getRes()
    {
        if (isset($this->data['RES'])) {
            return $this->data['RES'];
        }
        return null;
    }

    public function getVs()
    {
        if (isset($this->data['VS'])) {
            return $this->data['VS'];
        }
        return null;
    }

    public function getRc()
    {
        if (isset($this->data['RC'])) {
            return $this->data['RC'];
        }
        return null;
    }
}
