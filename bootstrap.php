<?php namespace Flextype;

/**
 *
 * Reading Time Plugin for Flextype
 *
 * @author Romanenko Sergey / Awilum <awilum@yandex.ru>
 * @link http://flextype.org
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

include_once 'app/Controllers/ReadingTimeController.php';
include_once 'twig/ReadingTimeTwigExtension.php';

$flextype['ReadingTimeController'] = function ($container) {
    return new ReadingTimeController($container);
};

// Add Twig Extension
$flextype->view->addExtension(new ReadingTimeTwigExtension($flextype));
