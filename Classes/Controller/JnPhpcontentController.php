<?php
namespace Joppnet\JnPhpcontentelement\Controller;

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
 * JnPhpcontentController
 */
class JnPhpcontentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository
	 */
	protected $jnPhpcontentRepository;

	/**
	 * Inject the PHP content repository
	 *
	 * @param \Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository $jnPhpcontentRepository
	 */
	public function injectJnPhpcontentRepository(\Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository $jnPhpcontentRepository)
	{
		$this->jnPhpcontentRepository = $jnPhpcontentRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction()
	{
		$jnPhpContents = $this->jnPhpcontentRepository->findAll();
		$this->view->assign('jnPhpContents', $jnPhpContents);
	}
}
