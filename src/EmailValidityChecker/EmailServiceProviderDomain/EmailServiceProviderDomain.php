<?php
declare(strict_types=1);

namespace LNY\EmailValidityChecker\EmailServiceProviderDomain;

final class EmailServiceProviderDomain
{
	const LIST_AOL = [
		'aol.com',
	];
	
	const LIST_APPLE = [
		'me.com',
		'icloud.com',
	];
	
	const LIST_BOUYGUES_TELECOM = [
		'bbox.fr',
	];
	
	const LIST_DARTYBOX = [
		'dbmail.com',
	];
	
	const LIST_ILIAD = [
		'free.fr',
		'aliceadsl.fr',
		'libertysurf.fr',
	];
	
	const LIST_LAPOSTE = [
		'laposte.net',
	];
	
	const LIST_GMX = [
		'gmx.fr',
	];
	
	const LIST_GOOGLE = [
		'gmail.com',
		'gmail.fr',
	];
	
	const LIST_MAILOO = [
		'mailoo.org',
	];
	
	const LIST_MICROSOFT = [
		'hotmail.fr',
		'hotmail.com',
		'hotmail.ca',
		'hotmail.cf',
		'hotmail.ch',
		'hotmail.de',
		'hotmail.mail',
		'hotmail.mail.fr',
		'live.fr',
		'outlook.fr',
		'msn.com',
	];
	
	const LIST_ORANGE = [
		'wanadoo.fr',
		'wanadoo.com',
		'orange.fr',
		'fr.oleane.com',
		'nordnet.fr',
		'voila.fr',
	];
	
	const LIST_SFR = [
		'sfr.fr',
		'neuf.fr',
		'club-internet.fr',
		'cegetel.net',
		'numericable.fr',
		'noos.fr',
		'9business.fr',
	];
	
	const LIST_YAHOO = [
		'yahoo.fr',
		'yahoo.com',
		'yahoo.co.in',
		'yahoo.com.cn',
		'yahoo.de',
		'ymail.com',
		'ymail.fr',
	];
		
	const LIST = [
		self::LIST_AOL,
		self::LIST_APPLE,
		self::LIST_BOUYGUES_TELECOM,
		self::LIST_DARTYBOX,
		self::LIST_ILIAD,
		self::LIST_LAPOSTE,
		self::LIST_GMX,
		self::LIST_GOOGLE,
		self::LIST_MAILOO,
		self::LIST_MICROSOFT,
		self::LIST_ORANGE,
		self::LIST_SFR,
		self::LIST_YAHOO,
	];
}
