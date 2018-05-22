<?php
namespace Vibe\Comment\HTMLForm;

/**
 * Unit test for CreateCommentForm Class
 */

class CreateCommentFormTest extends \PHPUnit_Framework_TestCase
{
    protected $di;
    protected $form;

    protected function setUp()
    {
        $this->di = new \Anax\DI\DIFactoryConfig("di.php");
        $this->form = new CreateForm($this->di);
    }

    public function testConstruct()
    {
        $this->assertTrue(is_string($this->form->getHTML()));
    }
}
