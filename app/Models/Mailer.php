<?php
namespace App\Models;

use App\Contracts\IMailer;

class Mailer implements IMailer
{
  /**
   *
   * @var string $transport
  */
  private $transport;

  public function __construct(string $transport)
  {
      $this->transport = $transport;
  }
  public function getTransport()
  {
    return $this->transport;
  }
  public function SendEmail($to)
  {
    return "Enviando correo a $to";
  }
}