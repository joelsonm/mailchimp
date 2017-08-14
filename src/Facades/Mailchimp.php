<?php

namespace Joelsonm\Mailchimp\Facades;

use Illuminate\Support\Facades\Facade;
/**
 *
 */
 class Mailchimp extends Facade
 {
     /**
      * Get the registered name of the component.
      *
      * @return string
      */
     protected static function getFacadeAccessor() { return 'Joelsonm\Mailchimp\Mailchimp'; }
 }
