<?php
namespace MV\BookingBundle\Stripe;

use Symfony\Component\HttpFoundation\Request;

class MVStripe
{
    private $mail;
    private $locale;
    private $currency;

    public function __construct($mail, $locale, $currency)
  {
    $this->mail     = $mail;
    $this->locale   = $locale;
    $this->currency = $currency;
  }

    public function chargeStripe($amount, $request)
    {
        \Stripe\Stripe::setApiKey("sk_test_WFwsGVYMQgKdVdfI6ths0Gom");

        // Get the credit card details submitted by the form
        $token = $_POST['stripeToken'];
        $email = $_POST['stripeEmail'];
    
        // Create a charge: this will charge the user's card
        try {
            $charge = \Stripe\Charge::create(array(
                "amount" => $amount, // Amount in cents
                "currency" => $this->currency,
                "source" => $token,
                'receipt_email' => $email,
            ));
            $this->mail->sendConfirmationEmail($email);
            $messageStripe = "Paiement Réussi !";
            return $messageStripe;
        }
            
        catch(\Stripe\Error\Card $e) {
            $body = $e->getJsonBody();
            $err  = $body['error'];
            // The card has been declined
            $messageError = "Il y a eu une erreur, merci de réessayer !";
            return $messageError;
        }
        
    }
}