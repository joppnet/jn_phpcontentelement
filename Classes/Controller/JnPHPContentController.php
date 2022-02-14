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
 * JnPhpContentController
 */
class JnPhpContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
	/**
	 * @TYPO3\CMS\Extbase\Annotation\Inject
	 * @var \Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository
	 */
	protected $jnPhpContentRepository;

	/**
	 * Inject the PHP content repository
	 *
	 * @param \Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository $jnPhpContentRepository
	 */
	public function injectJnPhpContentRepository(\Joppnet\JnPhpcontentelement\Domain\Repository\JnPhpcontentRepository $jnPhpContentRepository)
	{
		$this->jnPhpContentRepository = $jnPhpContentRepository;
	}

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction()
	{
		$jnPhpContents = $this->jnPhpContentRepository->findAll();
		$this->view->assign('jnPhpContents', $jnPhpContents);
	}
}
