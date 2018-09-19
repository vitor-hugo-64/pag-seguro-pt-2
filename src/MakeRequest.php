<?php

namespace BrPayments;

use BrPayments\Requests\RequestInterface as Request;
use BrPayments\OrderInterface as Order;
use GuzzleHttp\Client;

class MakeRequest
{
    private $client;
    private $request;

    public function __construct( Request $request)
    {
        $this->client = new Client;
        $this->request = $request;
    }

    public function post(Order $order, bool $sandbox = null)
    {
        $response = $this->client->request(
            $this->request->getMethod(),
            $this->request->getUrl($order, $sandbox),
            [
                'form_params'=>[]
            ]
        );

        return $response->getBody();
    }
}
