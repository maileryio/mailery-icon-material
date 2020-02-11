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

use Mailery\Icon\ProviderInterface as IconsProviderInterface;
use Yiisoft\Arrays\ArrayHelper;
use Yiisoft\Assets\AssetManager;
use Yiisoft\Html\Html;

class MaterialDesignProvider implements IconsProviderInterface
{
    /**
     * @var array
     */
    private $mapNames = [];

    /**
     * @var array
     */
    private $validNames = ['menu', 'search', 'mail-outline', 'bell-outline',
        'dots-horizontal', 'account-box', 'settings', 'logout', 'info-outline',
        'arrow-down', 'arrow-right', 'dashboard', 'accessibility', 'add', 'view', 'edit', 'delete', ];

    /**
     * @param AssetManager $assetManager
     */
    public function __construct(AssetManager $assetManager)
    {
        $assetManager->register([
            MaterialDesignAsset::class,
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function show(string $name, array $options = []): string
    {
        if (($validName = $this->formatIconName($name)) === false) {
            throw new \InvalidArgumentException('Invalid icon name "' . $name . '"');
        }

        $space = ArrayHelper::remove($options, 'space', true);
        $tag = ArrayHelper::remove($options, 'tag', 'i');

        Html::addCssClass($options, 'icon-' . $validName);

        return Html::tag($tag, '', $options) . ($space ? ' ' : '');
    }

    /**
     * @param string $name
     * @return false|string
     */
    private function formatIconName(string $name)
    {
        if (!in_array($name, $this->validNames, true)) {
            return false;
        }

        return $this->mapNames[$name] ?? $name;
    }
}
