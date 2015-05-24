<?php

namespace DC\Bundler\JShrink;

class JShrinkTransformer implements \DC\Bundler\ITransformer {

    /**
     * @inheritdoc
     */
    function getName()
    {
        return "jshrink";
    }

    /**
     * @inheritdoc
     */
    function transform(\DC\Bundler\Content $content, $file = null)
    {
        return new \DC\Bundler\Content($this->getOutputContentType(), \JShrink\Minifier::minify($content->getContent()));
    }

    /**
     * @inheritdoc
     */
    function getOutputContentType()
    {
        return "application/javascript";
    }

    /**
     * @inheritdoc
     */
    function runInDebugMode()
    {
        return false;
    }

    public static function registerWithContainer(\DC\IoC\Container $container) {
        $container
            ->register('\DC\Bundler\JShrink\JShrinkTransformer')
            ->to('\DC\Bundler\ITransformer');
    }
}