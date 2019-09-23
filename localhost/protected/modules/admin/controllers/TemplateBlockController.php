<?php

class TemplateBlockController extends AdminController {

    public function filters() {
        return array(
            'accessControl',
        );
    }

    public function accessRules() {
        return array(
            array('allow', // allow authenticated user to perform 'create' and 'update' actions
                'actions' => array('*'),
                'users' => array('@'),
            ),
            array('deny', // deny all users
                'users' => array('?'),
            ),
        );
    }

    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
        // $this->performAjaxValidation($model);

        if (isset($_POST['TemplateBlock'])) {
            $model->attributes = $_POST['TemplateBlock'];
            if ($model->save())
                $this->redirect(array('index'));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    public function actionIndex() {
        $model = new TemplateBlock('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['TemplateBlock']))
            $model->attributes = $_GET['TemplateBlock'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return TemplateBlock the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = TemplateBlock::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param TemplateBlock $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'template-block-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
