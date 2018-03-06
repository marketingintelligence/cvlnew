<?php
class TableochController extends RController
{
    public $filterOption = array(
        'model'  => 'Tableoch',
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
        $model = new Tableoch('search');
        $model->unsetAttributes();

        if (isset($_GET['Tableoch'])) {
            $model->attributes = $_GET['Tableoch'];
            Yii::app()->user->setState('_filter_Tableoch', $_GET['Tableoch']);
        } else
            if (Yii::app()->user->hasState('_filter_Tableoch')) {
                $model->attributes = Yii::app()->user->getState('_filter_Tableoch');
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
        $model = new Tableoch;

        $this->performAjaxValidation($model);

        if (isset($_POST['Tableoch'])) {
            $model->attributes = $_POST['Tableoch'];
            $model->image=$this->saveFile($model,'image');
            if ($model->save()) {
                SHelper::deleteCacheHeaders();
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
        $page = (int)Yii::app()->request->getParam('Tableoch_page');

        if (isset($_POST['Tableoch'])) {
            $model->attributes = $_POST['Tableoch'];
            $model->image=$this->saveFile($model,'image');
            if ($model->save()) {
                SHelper::deleteCacheHeaders();
                Yii::app()->user->setFlash('success', 'Сохранено');               

                $this->redirect(
                    array(
                         'list',
                         'Tableoch_page' => $page));
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
			$model = Tableoch::model()->find("id = '".$id."'");
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
                    $model = Tableoch::model()->find("id = '".$id."'");

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
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'Tableoch-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

    public function beforeAction($action) {
        if ($_GET['ajax'] === 'state')
            if (count($_GET['TableochCheck']) > 0) {
                foreach ($_GET['TableochCheck'] as $column => $value) {
                    foreach ($value as $id => $val) {
                        Tableoch::model()->updateByPk((int)$id, array($column => (int)$val));
                    }
                }
                Yii::app()->end();
            }

        return parent::beforeAction($action);
    }
}


