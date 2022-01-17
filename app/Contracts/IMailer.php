<?php
namespace App\Contracts;

interface IMailer
{
  public function SendEmail($to);
}