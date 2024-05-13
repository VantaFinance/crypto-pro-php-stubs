<?php

declare(strict_types=1);

class CPRawSignature
{
	public function __construct(){}

	public function VerifyHash(){}


	/**
	 * @return non-empty-string
	 */
	public function SignHash(\CPHashedData $hd, \CPCertificate $cert): string {}
}
