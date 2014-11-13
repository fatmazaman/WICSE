<?php
# Include the Autoloader (see "Libraries" for install instructions)
require 'vendor/autoload.php';
use Mailgun\Mailgun;

# Instantiate the client.
$mgClient = new Mailgun('*************************');
$domain = "www.codersfactory.in";
$subscriber_email = 'abhinay302@gmail.com';
# Make the call to the client.
$result = $mgClient->sendMessage($domain, array(
    'from'    => 'abhinay <abhinay@codersfactory.in>',
    'to'      => 'abhinay<abhinay302@gmail.com>',
    'subject' => 'Hello',
    'text'    => 'Testing some Mailgun awesomness!'
));
?>