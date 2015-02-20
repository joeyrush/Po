<?php
namespace Geekwright\Po;

/**
 * Generated by PHPUnit_SkeletonGenerator on 2015-02-18 at 00:37:40.
 */
class PoInitPHPTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var PoInitPHP
     */
    protected $object;

    /**
     * Sets up the fixture, for example, opens a network connection.
     * This method is called before a test is executed.
     */
    protected function setUp()
    {
        $this->object = new PoInitPHP;
    }

    /**
     * Tears down the fixture, for example, closes a network connection.
     * This method is called after a test is executed.
     */
    protected function tearDown()
    {
    }

    /**
     * @covers Geekwright\Po\PoInitPHP::getPoFile
     * @covers Geekwright\Po\PoInitPHP::setPoFile
     */
    public function testGetSetPoFile()
    {
        $pofile = new PoFile();
        $this->object->setPoFile($pofile);
        $actual = $this->object->getPoFile();
        $this->assertSame($pofile, $actual);
    }

    /**
     * @covers Geekwright\Po\PoInitPHP::addGettextTags
     * @covers Geekwright\Po\PoInitPHP::getGettextTags
     * @covers Geekwright\Po\PoInitPHP::setGettextTags
     */
    public function testAddGetSetGettextTags()
    {
        $value = array();
        $this->object->setGettextTags($value);
        $actual = $this->object->getGettextTags();
        $this->assertEquals($value, $actual);

        $tag1 = 'tag1';
        $tag2 = 'tag2';
        $value = array($tag1, $tag2);
        $this->object->addGettextTags($tag1);
        $this->object->addGettextTags($tag2);
        $actual = $this->object->getGettextTags();
        $this->assertEquals($value, $actual);
    }

    /**
     * @covers Geekwright\Po\PoInitPHP::addNgettextTags
     * @covers Geekwright\Po\PoInitPHP::getNgettextTags
     * @covers Geekwright\Po\PoInitPHP::setNgettextTags
     */
    public function testAddGetSetNgettextTags()
    {
        $value = array();
        $this->object->setNgettextTags($value);
        $actual = $this->object->getNgettextTags();
        $this->assertEquals($value, $actual);

        $tag1 = 'tag1';
        $tag2 = 'tag2';
        $value = array($tag1, $tag2);
        $this->object->addNgettextTags($tag1);
        $this->object->addNgettextTags($tag2);
        $actual = $this->object->getNgettextTags();
        $this->assertEquals($value, $actual);
    }

    /**
     * @covers Geekwright\Po\PoInitPHP::addPgettextTags
     * @covers Geekwright\Po\PoInitPHP::getPgettextTags
     * @covers Geekwright\Po\PoInitPHP::setPgettextTags
     */
    public function testAddGetSetPgettextTags()
    {
        $value = array();
        $this->object->setPgettextTags($value);
        $actual = $this->object->getPgettextTags();
        $this->assertEquals($value, $actual);

        $tag1 = 'tag1';
        $tag2 = 'tag2';
        $value = array($tag1, $tag2);
        $this->object->addPgettextTags($tag1);
        $this->object->addPgettextTags($tag2);
        $actual = $this->object->getPgettextTags();
        $this->assertEquals($value, $actual);
    }

    /**
     * @covers Geekwright\Po\PoInitPHP::msginitFile
     * @todo   Implement testMsginitFile().
     */
    public function testMsginitFile()
    {
        $result = $this->object->msginitFile(__FILE__);
        $this->assertInstanceOf('Geekwright\Po\PoFile', $result);
    }

    /**
     * @covers Geekwright\Po\PoInitPHP::msginitString
     * @todo   Implement testMsginitString().
     */
    public function testMsginitString()
    {
        // Remove the following lines when you implement this test.
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
