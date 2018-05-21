<?php

namespace Vibe\Comment;

use \Anax\Configure\ConfigureInterface;
use \Anax\Configure\ConfigureTrait;
use \Anax\DI\InjectionAwareInterface;
use \Anax\DI\InjectionAwareTrait;
use \Vibe\Comment\HTMLForm\CreateForm;
use \Vibe\Comment\HTMLForm\EditForm;
use \Vibe\Comment\HTMLForm\DeleteForm;
use \Vibe\Comment\HTMLForm\UpdateForm;
use \Vibe\Gravatar\Gravatar;

/**
 * A controller class.
 */
class CommentController implements
    ConfigureInterface,
    InjectionAwareInterface
{
    use ConfigureTrait,
        InjectionAwareTrait;



    /**
     * @var $data description
     */
    //private $data;



    /**
     * Show all items.
     *
     * @return void
     */
    public function getIndex()
    {
        $title      = "A collection of items";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $comment = new Comment();
        $gravatar = new Gravatar();
        $comment->setDb($this->di->get("database"));

        $data = [
            "allComments" => $comment->findAll(),
            "gravatar" => $gravatar,
            "username" => $this->di->get("session")->get("username"),
        ];

        $view->add("comment/view", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to create a new item.
     *
     * @return void
     */
    public function getPostCreateItem()
    {
        $title      = "Create a item";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $form       = new CreateForm($this->di);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("comment/create", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to delete an item.
     *
     * @return void
     */
    public function getPostDeleteItem()
    {
        $title      = "Delete an item";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $userId    = $this->di->get("session")->get("userId");
        $form       = new DeleteForm($this->di, $userId);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("comment/delete", $data);

        $pageRender->renderPage(["title" => $title]);
    }



    /**
     * Handler with form to update an item.
     *
     * @return void
     */
    public function getPostUpdateItem($id)
    {
        $title      = "Update an item";
        $view       = $this->di->get("view");
        $pageRender = $this->di->get("pageRender");
        $userId    = $this->di->get("session")->get("userId");
        $form       = new UpdateForm($this->di, $id, $userId);

        $form->check();

        $data = [
            "form" => $form->getHTML(),
        ];

        $view->add("comment/update", $data);

        $pageRender->renderPage(["title" => $title]);
    }
}
