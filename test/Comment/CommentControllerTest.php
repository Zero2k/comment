<?php
namespace Vibe\Comment;

/**
 * Unit test for Comment class
 */
class CommentControllerTest extends \PHPUnit_Framework_TestCase
{
    protected $commentController;

    public function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("diTest.php");
        $this->commentController = new CommentController();
        $this->commentController->setDI($this->di);
    }

    public function testInstanceOfCommentController()
    {
        $this->assertInstanceOf("\Vibe\Comment\CommentController", $this->commentController);
    }

    /* public function testGetIndex()
    {
        $this->assertTrue(method_exists($this->commentController, $this->commentController->getIndex()));
    }

    public function testGetPostCreateItem()
    {
        $this->assertTrue(method_exists($this->commentController, $this->commentController->getPostCreateItem()));
    } */
}
