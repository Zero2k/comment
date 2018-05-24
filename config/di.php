<?php
/**
 * Configuration file for DI container.
 */
return [

    // Services to add to the container.
    "services" => [
        "commentController" => [
            "shared" => true,
            "callback" => function () {
                $obj = new \Vibe\Comment\CommentController();
                $obj->setDI($this);
                return $obj;
            }
        ],
    ],
];
