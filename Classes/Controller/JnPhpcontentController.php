<?php
namespace Joppnet\JnPhpcontentelement\Controller;

use Psr\Http\Message\ResponseInterface;
use Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository;

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
 * JnPhpcontentController
 */
class JnPhpcontentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * @var JnPhpcontentRepository
	 */
	protected $jnPhpcontentRepository;

	/**
	 * Inject the PHP content repository
	 *
	 * @param JnPhpcontentRepository $jnPhpcontentRepository
	 */
	public function injectJnPhpcontentRepository(JnPhpcontentRepository $jnPhpcontentRepository)
	{
		$this->jnPhpcontentRepository = $jnPhpcontentRepository;
	}

	/**
	 * action list
	 *
	 * @return ResponseInterface
	 */
	public function listAction(): ResponseInterface
	{
		$jnPhpContents = $this->jnPhpcontentRepository->findAll();
		$this->view->assign('jnPhpContents', $jnPhpContents);

		return $this->htmlResponse();
	}
}
