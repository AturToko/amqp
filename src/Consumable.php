<?php

namespace AturToko\Amqp;

use PhpAmqpLib\Message\AMQPMessage;

interface Consumable
{
    public function setMessage(AMQPMessage $message): Consumable;

    public function handle(): void;
}
