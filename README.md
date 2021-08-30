# E-mail validity checker

## Requirments

PHP >= 8.0


## Install

`composer require phant/email-validity-checker`

## Use

```php
use Phant\EmailValidityChecker\EmailValidityChecker;
use Phant\EmailValidityChecker\Exception\{
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
