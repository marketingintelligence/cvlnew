<?php
/**
 * User: strannik
 * Date: 13.09.2010
 * Time: 16:06:46
 */

class SHelper {

    static function authUser(){        
        if (Yii::app()->user->isGuest){
            if(Yii::app()->request->isAjaxRequest) exit;
            Yii::app()->request->redirect(CHtml::normalizeUrl(array('/site/login', 'returnUrl' => str_replace('/', '|', $_SERVER['REQUEST_URI']))));
        }
        else return Yii::app()->user->getId();

    }

    static function getModelHeaders($base) {
        $criteria = new CDbCriteria();
        $criteria->order = "weight_text + 0 ASC";
        $criteria->condition = "status_int = 1";
        $model = $base::model()->findAll($criteria);
        return $model;
    }

    static function deleteCacheHeaders() {
        if (file_exists('cache/static/headers/')) {
            foreach (glob('cache/static/headers/*') as $file) {
                unlink($file);
            }
        }
    }
    static function deleteCacheFooter() {
        if (file_exists('cache/static/footer/')) {
            foreach (glob('cache/static/footer/*') as $file) {
                unlink($file);
            }
        }
    }
    static function deleteCacheCategory() {
        if (file_exists('cache/static/category/')) {
            foreach (glob('cache/static/category/*') as $file) {
                unlink($file);
            }
        }
    }
}
