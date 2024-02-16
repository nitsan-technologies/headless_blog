<?php
declare(strict_types=1);

defined('TYPO3') or die();

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][T3G\AgencyPack\Blog\Controller\PostController::class] = [
    'className' => Friendsoftypo3\HeadlessBlog\Controller\BlogController::class
];

$GLOBALS['TYPO3_CONF_VARS']['SYS']['Objects'][T3G\AgencyPack\Blog\Pagination\BlogPagination::class] = [
    'className' => Friendsoftypo3\HeadlessBlog\Pagination\BlogPager::class
];