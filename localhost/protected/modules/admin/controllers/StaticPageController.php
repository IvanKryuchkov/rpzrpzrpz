<?php

class StaticPageController extends AdminController {

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

    /**
     * Updates a particular model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id the ID of the model to be updated
     */
    public function actionUpdate($id) {
        $model = $this->loadModel($id);

        // Uncomment the following line if AJAX validation is needed
         $this->performAjaxValidation($model);

        if (isset($_POST['StaticPage'])) {
            $model->attributes = $_POST['StaticPage'];
            if ($model->save())
                $this->redirect(array('index', 'id' => $model->id));
        }

        $this->render('update', array(
            'model' => $model,
        ));
    }

    /**
     * Lists all models.
     */
    public function actionIndex() {
        $model = new StaticPage('search');
        $model->unsetAttributes();  // clear any default values
        if (isset($_GET['StaticPage']))
            $model->attributes = $_GET['StaticPage'];

        $this->render('admin', array(
            'model' => $model,
        ));
    }

    /**
     * Returns the data model based on the primary key given in the GET variable.
     * If the data model is not found, an HTTP exception will be raised.
     * @param integer $id the ID of the model to be loaded
     * @return StaticPage the loaded model
     * @throws CHttpException
     */
    public function loadModel($id) {
        $model = StaticPage::model()->findByPk($id);
        if ($model === null)
            throw new CHttpException(404, 'The requested page does not exist.');
        return $model;
    }

    /**
     * Performs the AJAX validation.
     * @param StaticPage $model the model to be validated
     */
    protected function performAjaxValidation($model) {
        if (isset($_POST['ajax']) && $_POST['ajax'] === 'static-page-form') {
            echo CActiveForm::validate($model);
            Yii::app()->end();
        }
    }

}
