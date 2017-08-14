<?php

namespace Joelsonm\Mailchimp\Resources;

use Joelsonm\Mailchimp\Resources\Lists;
/**
 *
 */
class Mailchimp
{
    public static $apikey;
    public static $dc;

    function __construct($apikey, $dc)
    {
        Mailchimp::$apikey = $apikey;
        Mailchimp::$dc = $dc;
    }

    public function members()
    {
        return new Lists\Members();
    }
}
