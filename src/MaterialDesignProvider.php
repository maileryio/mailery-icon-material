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
    public function close(array $options = []): string
    {
        return $this->render('close', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function magnify(array $options = []): string
    {
        return $this->render('magnify', $options);
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
    public function dashboardOutline(array $options = []): string
    {
        return $this->render('view-dashboard-outline', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function plus(array $options = []): string
    {
        return $this->render('plus', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function plusCircle(array $options = []): string
    {
        return $this->render('plus-circle', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function plusCircleOutline(array $options = []): string
    {
        return $this->render('plus-circle-outline', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function heartOutline(array $options = []): string
    {
        return $this->render('heart-outline', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function checkCircle(array $options = []): string
    {
        return $this->render('check-circle', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function checkCircleOutline(array $options = []): string
    {
        return $this->render('check-circle-outline', $options);
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
     * @param array $options
     * @return string
     */
    public function brand(array $options = []): string
    {
        return $this->render('watermark', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function chevronDown(array $options = []): string
    {
        return $this->render('chevron-down', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function chevronRight(array $options = []): string
    {
        return $this->render('chevron-right', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function chevronLeft(array $options = []): string
    {
        return $this->render('chevron-left', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function accountMultiple(array $options = []): string
    {
        return $this->render('account-multiple', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function accountMultipleOutline(array $options = []): string
    {
        return $this->render('account-multiple-outline', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function clock(array $options = []): string
    {
        return $this->render('clock', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function clockOutline(array $options = []): string
    {
        return $this->render('clock-outline', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function campaign(array $options = []): string
    {
        return $this->render('arrange-send-backward', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function emailMultiple(array $options = array()): string
    {
        return $this->render('email-multiple', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function emailMultipleOutline(array $options = array()): string
    {
        return $this->render('email-multiple-outline', $options);
    }

    /**
     * @param array $options
     * @return string
     */
    public function at(array $options = array()): string
    {
        return $this->render('at', $options);
    }

    /**
     * {@inheritdoc}
     */
    private function render(string $name, array $options = []): string
    {
        $this->registerAssets();

        $tag = ArrayHelper::remove($options, 'tag', 'i');
        Html::addCssClass($options, 'mdi mdi-' . $name);

        return (string) Html::tag($tag, '', $options);
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
