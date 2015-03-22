<?php
/**
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author  Gregory Kornienko <gregbiv@gmail.com>
 * @license MIT
 */

use Bolt\Extension\Bolt\RevolutionSlider\Extension;

$app['extensions']->register(new Extension($app));
