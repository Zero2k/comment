<?php
namespace Vibe\Comment;
/**
 * Unit test for Comment class
 */
class CommentTest extends \PHPUnit_Framework_TestCase
{
    protected $di;
    protected $comment;

    public function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("di.php");
        $this->comment = new Comment();
        $this->comment->setDb($this->di->get("database"));

    }

    public function testDi()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("di.php");
        $this->assertTrue(is_object($this->di));
    }

    public function testDatabaseConnection()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("di.php");
        $database = $this->di->get("database");
        $this->assertTrue(is_object($database));

    }

    public function testCreateObject()
    {
        $this->assertInstanceOf("\Vibe\Comment\Comment", $this->comment);
    }

    public function testAttributes()
    {
        $this->assertClassHasAttribute("id", "\Vibe\Comment\Comment");
        $this->assertClassHasAttribute("email", "\Vibe\Comment\Comment");
        $this->assertClassHasAttribute("text", "\Vibe\Comment\Comment");
        $this->assertClassHasAttribute("userId", "\Vibe\Comment\Comment");
    }
}
