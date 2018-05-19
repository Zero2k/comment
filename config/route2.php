<?php
/**
 * Configuration file for routes.
 */
return [
    // Load these routefiles in order specified and optionally mount them
    // onto a base route.
    "routeFiles" => [
        [
            // Add routes from commentController and mount on comment/
            "mount" => "comment",
            "file" => __DIR__ . "/route2/comment.php",
        ],
    ],
];
