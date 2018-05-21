<?php
/**
 * Configuration file for DI container.
 */
return [
    "commentController" => [
        "shared" => true,
        "callback" => function () {
            $obj = new \Vibe\Comment\CommentController();
            $obj->setDI($this);
            return $obj;
        }
    ],
];
