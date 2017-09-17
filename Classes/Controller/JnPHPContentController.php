<?php
namespace Joppnet\JnPhpcontentelement\Controller;

/***
 *
 * This file is part of the "[joppnet] Page PHP Content Element" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2017 Oliver Schlöbe <oli@joppnet.de>, joppnet
 *
 ***/

/**
 * JnPHPContentController
 */
class JnPHPContentController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{
    /**
     * jnPHPContentRepository
     *
     * @var \Joppnet\JnPhpcontentelement\Domain\Repository\JnPHPContentRepository
     * @inject
     */
    protected $jnPHPContentRepository = null;

    /**
     * action list
     *
     * @return void
     */
    public function listAction() {
    	$jnPHPContents = $this->jnPHPContentRepository->findAll();
        $this->view->assign('jnPHPContents', $jnPHPContents);
    }
}
