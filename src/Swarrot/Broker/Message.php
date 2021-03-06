<?php

namespace Swarrot\Broker;

class Message
{
    protected $id;

    protected $body;

    /**
     * @var array
     */
    protected $headers;

    public function __construct($id, $body, array $headers = array())
    {
        $this->id      = $id;
        $this->body    = $body;
        $this->headers = $headers;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getBody()
    {
        return $this->body;
    }

    public function getHeaders()
    {
        return $this->headers;
    }
}
