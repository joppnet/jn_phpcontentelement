<?php
namespace Joppnet\JnPhpcontentelement\Domain\Model;

/***
 *
 * This file is part of the "[joppnet] Page PHP Content Element" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2022-2024 Oliver Schlöbe <oli@joppnet.de>, joppnet
 *
 ***/

/**
 * JnPhpcontent
 */
class JnPhpcontent extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{
	/**
	 * name
	 *
	 * @var string
	 */
	protected string $name = '';

	/**
	 * phpcontent
	 *
	 * @var string
	 */
	protected string $phpcontent = '';

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name): void
	{
		$this->name = $name;
	}

	/**
	 * Returns the eval'd phpcontent
	 *
	 * @return string $outputString
	 */
	public function getPhpcontentParsed(): string
	{
		ob_start();
		eval('?' . chr(62) . $this->phpcontent . chr(60) . '?php ');
		$phpString = PHP_EOL . ob_get_contents() . PHP_EOL;
		ob_end_clean();
		return $phpString;
	}

	/**
	 * Returns the phpcontent
	 *
	 * @return string $phpcontent
	 */
	public function getPhpcontent(): string
	{
		return $this->getPhpcontentParsed();
		#return $this->phpcontent;
	}

	/**
	 * Sets the phpcontent
	 *
	 * @param string $phpcontent
	 * @return void
	 */
	public function setPhpcontent($phpcontent): void
	{
		$this->phpcontent = $phpcontent;
	}
}
