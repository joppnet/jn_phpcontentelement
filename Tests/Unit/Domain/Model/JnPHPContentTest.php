<?php
namespace Joppnet\JnPhpcontentelement\Tests\Unit\Domain\Model;

/**
 * Test case.
 *
 * @author Oliver Schlöbe <oli@joppnet.de>
 */
class JnPHPContentTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Joppnet\JnPhpcontentelement\Domain\Model\JnPHPContent
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = new \Joppnet\JnPhpcontentelement\Domain\Model\JnPHPContent();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getNameReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getName()
        );
    }

    /**
     * @test
     */
    public function setNameForStringSetsName()
    {
        $this->subject->setName('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'name',
            $this->subject
        );
    }

    /**
     * @test
     */
    public function getPhpcontentReturnsInitialValueForString()
    {
        self::assertSame(
            '',
            $this->subject->getPhpcontent()
        );
    }

    /**
     * @test
     */
    public function setPhpcontentForStringSetsPhpcontent()
    {
        $this->subject->setPhpcontent('Conceived at T3CON10');

        self::assertAttributeEquals(
            'Conceived at T3CON10',
            'phpcontent',
            $this->subject
        );
    }
}
