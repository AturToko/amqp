<?php

namespace AturToko\Amqp;

use PhpAmqpLib\Message\AMQPMessage;

interface Producible
{
    public function build(): AMQPMessage;
}
