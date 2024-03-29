<?php

declare(strict_types=1);

/**
 * Material Design Icons Pack
 * @link      https://github.com/maileryio/mailery-icon-material
 * @package   Mailery\Icon\Material
 * @license   BSD-3-Clause
 * @copyright Copyright (c) 2020, Mailery (https://mailery.io/)
 */

namespace Mailery\Icon\Material;

use Yiisoft\Assets\AssetBundle;

class MaterialDesignAssetBundle extends AssetBundle
{
    /**
     * {@inheritdoc}
     */
    public ?string $basePath = '@public/assets';

    /**
     * {@inheritdoc}
     */
    public ?string $baseUrl = '@assetsUrl';

    /**
     * {@inheritdoc}
     */
    public array $css = [
        '//cdn.materialdesignicons.com/4.9.95/css/materialdesignicons.min.css',
    ];
}
