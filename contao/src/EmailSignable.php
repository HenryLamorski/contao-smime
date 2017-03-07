<?php
namespace HenrylamorskiSmimeMail;

class EmailSignable extends \Contao\Email
{
    public function attachSigner($objSMimeSigner)
    {
        $this->objMessage->attachSigner($objSMimeSigner);
    } 
}
