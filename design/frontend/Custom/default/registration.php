<?php
/**
 * Module registration.
 *
 * @author    Yurii Huriianov <yurii.hurianov@smile-ukraine.com>
 * @copyright 2020
 */

use Magento\Framework\Component\ComponentRegistrar;

ComponentRegistrar::register(ComponentRegistrar::THEME, 'frontend/Custom/default', __DIR__);
