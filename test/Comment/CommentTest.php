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
        $this->di = new \Anax\DI\DIFactoryConfig("diTest.php");
        $this->comment = new Comment();
        $this->comment->setDb($this->di->get("database"));
    }

    public function testDi()
    {
        $this->assertTrue(is_object($this->di));
    }

    public function testDatabaseConnection()
    {
        $database = $this->di->get("database");
        $this->assertTrue(is_object($database));
    }

    public function testInstanceOfComment()
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
