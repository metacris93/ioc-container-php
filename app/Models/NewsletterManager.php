<?php
namespace App\Models;

use App\Contracts\IMailer;

class NewsletterManager
{
  /**
   *
   * @var App\Contracts\IMailer $mailer
  */
  private $mailer;

  public function __construct(IMailer $mailer)
  {
      $this->mailer = $mailer;
  }
  public function DoWork($destination)
  {
    return $this->mailer->SendEmail($destination);
  }
}