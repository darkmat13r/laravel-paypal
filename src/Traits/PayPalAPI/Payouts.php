<?php


namespace Srmklive\PayPal\Traits\PayPalAPI;


use Carbon\Carbon;

trait Payouts
{

    function sendPayouts(array $data){
        $this->apiEndPoint = 'v2/payments/payouts ';
        $this->apiUrl = collect([$this->config['api_url'], $this->apiEndPoint])->implode('/');
        $this->options['json'] = (object) $data;
        $this->verb = 'post';
        return $this->doPayPalRequest();
    }
}
