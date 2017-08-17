<?php
/**
 * Created by PhpStorm.
 * User: shox
 * Date: 09.04.17
 * Time: 10:06
 */

namespace shoxabbos\langselect;

use yii\base\BootstrapInterface;

class LanguageSelector implements BootstrapInterface
{
    public $supportedLanguages = ['en', 'ru'];

    public function bootstrap($app)
    {
        if ($app->request->get("lang") && in_array($app->request->get("lang"), $this->supportedLanguages)) {
            \Yii::$app->session->set("lang", $app->request->get("lang"));
        }

        $app->language = \Yii::$app->session->get("lang", $app->language);
    }

}