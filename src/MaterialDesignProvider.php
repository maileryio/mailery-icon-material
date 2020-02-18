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
     * @var bool
     */
    private bool $assetsRegistered = false;

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
        return $this->render('users', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function dashboard(array $options = []): string
    {
        return $this->render('dashboard', $options);
    }
//
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function menu(array $options = []): string
//    {
//        return $this->render('menu', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function search(array $options = []): string
//    {
//        return $this->render('search', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function mailOutline(array $options = []): string
//    {
//        return $this->render('mail-outline', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function bellOutline(array $options = []): string
//    {
//        return $this->render('bell-outline', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function infoOutline(array $options = []): string
//    {
//        return $this->render('info-outline', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function settings(array $options = []): string
//    {
//        return $this->render('settings', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function accountBox(array $options = []): string
//    {
//        return $this->render('account-box', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function logout(array $options = []): string
//    {
//        return $this->render('logout', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function dotsHorizontal(array $options = []): string
//    {
//        return $this->render('dots-horizontal', $options);
//    }
//
//    /**
//     * @param array $options
//     * @return string
//     */
//    public function arrowRight(array $options = []): string
//    {
//        return $this->render('arrow-right', $options);
//    }

    /**
     * {@inheritdoc}
     */
    private function render(string $name, array $options = []): string
    {
        $this->registerAssets();

        $tag = ArrayHelper::remove($options, 'tag', 'i');
        Html::addCssClass($options, 'icon-' . $name);

        return Html::tag($tag, '', $options);
    }

    /**
     * @return void
     */
    private function registerAssets()
    {
        if ($this->assetsRegistered) {
            return;
        }

        $this->assetManager->register([
            MaterialDesignAsset::class,
        ]);
        $this->assetsRegistered = true;
    }

}
