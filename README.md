# API REST MAILCHIMP

:: PRIMEIRO PASSO - Instalar Pacote
    
    composer require joelsonm/mailchimp

:: SEGUNDO PASSO - Registrar Provider e Facades 
 
    Joelsonm\Mailchimp\Providers\MailchimpServiceProvider::class

    'MailchimpEcommerce' => Joelsonm\Mailchimp\Facades\EcommerceFacade::class

