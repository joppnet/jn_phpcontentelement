<?php
namespace Joppnet\JnPhpcontentelement\Domain\Repository;

/***
 *
 * This file is part of the "[joppnet] Page PHP Content Element" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2022 Oliver Schlöbe <oli@joppnet.de>, joppnet
 *
 ***/

/**
 * The repository for JnPhpcontents
 */
class JnPhpcontentRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
	public function findAll()
	{
		$query = $this->createQuery();
		$storagePageIds = $query->getQuerySettings()->getStoragePageIds();
		if (is_array($storagePageIds) && array_search(0, $storagePageIds) !== false) {
			$query->getQuerySettings()->setStoragePageIds([$GLOBALS['TSFE']->id]);
		}
		return $query->execute();
	}
}
