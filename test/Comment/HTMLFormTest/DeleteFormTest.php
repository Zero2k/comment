<?php
namespace Vibe\Comment\HTMLForm;

/**
 * Unit test for CreateCommentForm Class
 */

class DeleteCommentFormTest extends \PHPUnit_Framework_TestCase
{
    protected $di;
    protected $form;

    protected function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("di.php");
        $userId = 1;
        $this->form = new DeleteForm($this->di, $userId);
    }

    public function testConstruct()
    {
        $this->assertTrue(is_string($this->form->getHTML()));
    }
}
