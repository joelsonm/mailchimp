<?php

namespace Joelsonm\Mailchimp\Resources;

use Joelsonm\Mailchimp\Resources\Lists;
/**
 *
 */
class Mailchimp
{
    public function members()
    {
        return new Lists\Members();
    }
}
