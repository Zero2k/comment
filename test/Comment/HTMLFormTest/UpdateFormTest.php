<?php
namespace Vibe\Comment\HTMLForm;

/**
 * Unit test for UpdateCommentForm Class
 */

class UpdateCommentFormTest extends \PHPUnit_Framework_TestCase
{
    protected $di;
    protected $form;

    protected function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("diTest.php");
        $commentId = 1;
        $userId = 1;
        $this->form = new UpdateForm($this->di, $commentId, $userId);
    }

    public function testConstruct()
    {
        $this->assertTrue(is_string($this->form->getHTML()));
    }
}
