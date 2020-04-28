# E-mail validity checker

## Requirments

PHP >= 7.4


## Install

`composer require lennyrouanet/email-validity-checker`

## Use

```php
use LNY\EmailValidityChecker\EmailValidityChecker;
use LNY\EmailValidityChecker\Exception\{
	EmailFormatIsNotValid,
	EmailDomainFormatIsNotValid,
	EmailDomainIsTrashMailBoxService,
	EmailDomainWithoutMxServer,
};

$email = 'john.doe@fake-box.com';

try {
	
	$EmailValidityChecker = new EmailValidityChecker($email);

} catch (EmailFormatIsNotValid | EmailDomainFormatIsNotValid | EmailDomainIsTrashMailBoxService | EmailDomainWithoutMxServer $e) {
	
	// E-mail domain is not valid
	
}
```
