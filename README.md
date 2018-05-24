Anax comment
==================================

[![Latest Stable Version](https://poser.pugx.org/zero2k/comment/v/stable)](https://packagist.org/packages/zero2k/comment)
[![Build Status](https://travis-ci.org/Zero2k/comment.svg?branch=master)](https://travis-ci.org/Zero2k/comment)
[![Build Status](https://scrutinizer-ci.com/g/canax/comment/badges/build.png?b=master)](https://scrutinizer-ci.com/g/canax/comment/build-status/master)
[![Code Coverage](https://scrutinizer-ci.com/g/Zero2k/comment/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/Zero2k/comment/?branch=master)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/Zero2k/comment/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/Zero2k/comment/?branch=master)

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
