<?php
namespace Joppnet\JnPhpcontentelement\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Oliver Schlöbe <oli@joppnet.de>
 */
class JnPHPContentControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joppnet\JnPhpcontentelement\Controller\JnPHPContentController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Joppnet\JnPhpcontentelement\Controller\JnPHPContentController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllJnPHPContentsFromRepositoryAndAssignsThemToView()
    {

        $allJnPHPContents = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $jnPHPContentRepository = $this->getMockBuilder(\Joppnet\JnPhpcontentelement\Domain\Repository\JnPHPContentRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $jnPHPContentRepository->expects(self::once())->method('findAll')->will(self::returnValue($allJnPHPContents));
        $this->inject($this->subject, 'jnPHPContentRepository', $jnPHPContentRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('jnPHPContents', $allJnPHPContents);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }
}
