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
     * @var AssetManager
     */
    private AssetManager $assetManager;

    /**
     * @param AssetManager $assetManager
     */
    public function __construct(AssetManager $assetManager)
    {
        $this->assetManager = $assetManager;
    }

    /**
     * @param array $options
     * @return string
     */
    public function users(array $options = []): string
    {
        return $this->render('account-multiple', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function dashboard(array $options = []): string
    {
        return $this->render('view-dashboard', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function plus(array $options = array()): string
    {
        return $this->render('plus', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function search(array $options = []): string
    {
        return $this->render('magnify', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function settings(array $options = []): string
    {
        return $this->render('settings', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function eye(array $options = []): string
    {
        return $this->render('eye', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function pencil(array $options = []): string
    {
        return $this->render('pencil', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function delete(array $options = []): string
    {
        return $this->render('delete', $options);
    }

    /**
     * {@inheritdoc}
     */
    private function render(string $name, array $options = []): string
    {
        $this->registerAssets();

        $tag = ArrayHelper::remove($options, 'tag', 'i');
        Html::addCssClass($options, 'mdi mdi-' . $name);

        return Html::tag($tag, '', $options);
    }

    /**
     * @return void
     */
    private function registerAssets()
    {
        $this->assetManager->register([
            MaterialDesignAssetBundle::class,
        ]);
    }

}
