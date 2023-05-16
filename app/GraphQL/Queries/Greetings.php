<?php

namespace App\GraphQL\Queries;

final class Greetings
{
    /**
     * @param  null  $_
     * @param  array{}  $args
     */
    public function __invoke($_, array $args)
    {
        // TODO implement the resolver

        /*  user added code */
        return "Hello World!";
    }
}
