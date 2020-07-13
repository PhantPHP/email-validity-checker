<?php
declare(strict_types=1);

namespace Phant\EmailValidityChecker;

use Phant\EmailValidityChecker\TrashMailBoxServiceDomain\{
	TrashMailBoxServiceDomain,
};
use Phant\EmailValidityChecker\Exception\{
	EmailFormatIsNotValid,
	EmailDomainFormatIsNotValid,
	EmailDomainIsTrashMailBoxService,
	EmailDomainWithoutMxServer,
};

class EmailValidityChecker
{
	const EMAIL_PATTERN = '/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/';
	const DOMAIN_PATTERN = '/^([a-z0-9\-]+\.)*[a-z0-9\-]+\.[a-z]+$/i';
	
	protected string $email;
	protected string $domain;
	
	public function __construct($email)
	{
		$this->email = strtolower($email);
		$this->getDomain();
		
		$this->checkList();
	}

	protected function checkList()
	{
		$this->checkEmailFormat();
		$this->checkDomainFormat();
		$this->checkTrashMailBoxService();
		$this->checkMxServer();
	}

	protected function getDomain()
	{
		$this->domain = substr(strrchr($this->email, '@'), 1);
	}

	protected function checkEmailFormat()
	{
		if (preg_match(self::EMAIL_PATTERN, $this->email) == false) {
			throw new EmailFormatIsNotValid;
		}
	}

	protected function checkDomainFormat()
	{
		if (preg_match(self::DOMAIN_PATTERN, $this->domain) == false) {
			throw new EmailDomainFormatIsNotValid;
		}
	}
	
	protected function checkTrashMailBoxService()
	{
		if (in_array($this->domain, TrashMailBoxServiceDomain::LIST) != false) {
			throw new EmailDomainIsTrashMailBoxService;
		}
	}
	
	protected function checkMxServer()
	{
		if (checkdnsrr($this->domain, 'MX') == false) {
			throw new EmailDomainWithoutMxServer;
		}
	}
}
