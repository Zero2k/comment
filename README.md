Anax comment
==================================

[![Latest Stable Version](https://poser.pugx.org/anax/comment/v/stable)](https://packagist.org/packages/anax/comment)
[![Join the chat at https://gitter.im/mosbth/anax](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/canax?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)
[![Build Status](https://travis-ci.org/canax/comment.svg?branch=master)](https://travis-ci.org/canax/comment)
[![CircleCI](https://circleci.com/gh/canax/comment.svg?style=svg)](https://circleci.com/gh/canax/comment)
[![Build Status](https://scrutinizer-ci.com/g/canax/comment/badges/build.png?b=master)](https://scrutinizer-ci.com/g/canax/comment/build-status/master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/canax/comment/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/canax/comment/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/canax/comment/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/canax/comment/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/d831fd4c-b7c6-4ff0-9a83-102440af8929/mini.png)](https://insight.sensiolabs.com/projects/d831fd4c-b7c6-4ff0-9a83-102440af8929)

Anax comment module.



## Usage


#### Install with composer
    composer require zero2k/comment

#### Configure and Integrate the module

    cp vendor/zero2k/comment/config/route2/* config/route2
    cp vendor/zero2k/comment/config/database.php config/ (optional if you already have a database connection)
    cp vendor/zero2k/comment/view/* view/

##### Integrate the following code into you own installation (don't just copy the files with cp)

    vendor/zero2k/comment/config/di.php to config/di.php
    vendor/zero2k/comment/config/route2.php to config/route2.php
    vendor/zero2k/comment/config/route2/comment.php config/route2/*

## License

This software carries a MIT license.

```
 .  
..:  Copyright (c) 2018 Viktor Bengtsson (vibe16@student.bth.se)
```
