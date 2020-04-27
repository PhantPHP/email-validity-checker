# E-mail validity checker

## Requirments

PHP >= 7.4

## Use

```php
use LNY\EmailValidityChecker\EmailValidityChecker;
use LNY\EmailValidityChecker\Exception\{
	EmailFormatIsNotValid,
	EmailDomainFormatIsNotValid,
	EmailDomainFormatIsTrashMailBoxService,
	EmailDomainWithoutMxServer,
};

$email = 'john.doe@fake-box.com';

try {
	
	$EmailValidityChecker = new EmailValidityChecker($email);

} catch (EmailFormatIsNotValid | EmailDomainFormatIsNotValid | EmailDomainFormatIsTrashMailBoxService | EmailDomainWithoutMxServer $e) {
	
	// E-mail domain is not valid
	
}
```
