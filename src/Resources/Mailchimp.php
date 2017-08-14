<?php

namespace Joelsonm\Mailchimp;

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
        MailchimpList::$apikey = $apikey;
        MailchimpList::$dc = $dc;
    }

    public function members()
    {
        return new Lists\Members();
    }
}
