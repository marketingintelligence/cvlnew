<?php
class ClubmenuController extends RController
{
    public $filterOption = array(
        'model'  => 'Clubmenu',
        'fields' => array(            
            'name_text'=>array('type'=>'text'),
			'created_at'=>array('type'=>'date'),
			'status_int'=>array('type'=>'checkbox'),
        )
    );

    public $defaultAction = 'list';


    public function actionIndex() {
        $this->redirect('list');
    }

    public function actionList() {
        $model = new Clubmenu('search');
        $model->unsetAttributes();

        if (isset($_GET['Clubmenu'])) {
            $model->attributes = $_GET['Clubmenu'];
            Yii::app()->user->setState('_filter_Clubmenu', $_GET['Clubmenu']);
        } else
            if (Yii::app()->user->hasState('_filter_Clubmenu')) {
                $model->attributes = Yii::app()->user->getState('_filter_Clubmenu');
            }
        $this->filter = $model->attributes;
        if (isset($_GET['ajax'])) {
            $this->renderPartial(
                '_list', array(
                              'model' => $model,
                         ));
        } else
            $this->render(
                'list', array(
                             'model' => $model,
                        ));
    }

    public function actionCreate() {
        $model = new Clubmenu;

        $this->performAjaxValidation($model);

        if (isset($_POST['Clubmenu'])) {
            $model->attributes = $_POST['Clubmenu'];
            $model->image=$this->saveFile($model,'image');
            $model->title = $_POST['Clubmenu']['name_text'];
            if ($model->save()) {
                SHelper::deleteCacheCategory();
                Yii::app()->user->setFlash('success', 'Сохранено');               
                $this->redirect(array('list'));
            } else {
                Yii::app()->user->setFlash('error', 'Ошибка при сохранении');

            }            
        } else {
			$model->created_at = time();            
        }
        $this->render(
        'create', array(
            'model' => $model,
        ));
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);
        $this->performAjaxValidation($model);
        $page = (int)Yii::app()->request->getParam('Clubmenu_page');

        if (isset($_POST['Clubmenu'])) {
            $model->attributes = $_POST['Clubmenu'];
            $model->image=$this->saveFile($model,'image');
            $model->title = $_POST['Clubmenu']['name_text'];
            if ($model->save()) {
                SHelper::deleteCacheCategory();
                Yii::app()->user->setFlash('success', 'Сохранено');               

                $this->redirect(
                    array(
                         'list',
                         'Clubmenu_page' => $page));
            } else {
                Yii::app()->user->setFlash('error', 'Ошибка при сохранении');
            }
        }        
        $this->render(
            'update', array(
                           'model' => $model,
                           'page'  => $page
                      ));
    }

    /**
     * Удаление модели
     */
    public function actionDelete($id) {
       //$id = Yii::app()->request->getParam('id');
            //$this->loadModel(1)->delete();
			$model = Clubmenu::model()->find("id = '".$id."'");
			$model->delete();
            if (!isset($_GET['ajax'])) {
               // $this->redirect(isset($_POST['returnUrl']) ? $_POST['returnUrl'] : array('list'));
            }
        
    }
    /**
     * Загрузка модели по ID
     *
     * @param integer the ID of the model to be loaded
     */
    public function loadModel($id) {
                    $model = Clubmenu::model()->find("id = '".$id."'");

        if ($model === null) {
            throw new CHttpException(404, 'Страница не существует.');
        }
        return $model;
    }

    /**
     * AJAX валидация
     *
     * @param CModel the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'Clubmenu-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function beforeAction($action) {
        if ($_GET['ajax'] === 'state')
            if (count($_GET['ClubmenuCheck']) > 0) {
                foreach ($_GET['ClubmenuCheck'] as $column => $value) {
                    foreach ($value as $id => $val) {
                        Clubmenu::model()->updateByPk((int)$id, array($column => (int)$val));
                    }
                }
                Yii::app()->end();
            }

        return parent::beforeAction($action);
    }
}


