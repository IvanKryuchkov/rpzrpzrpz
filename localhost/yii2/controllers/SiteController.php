<?php

namespace app\controllers;
use \yii\base\HttpException;
use \yii\db\Expression;
use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\Post;



class SiteController extends Controller
{
	
		public function actionRead($id=NULL)
		{

	 
			$post = Post::findOne($id);
			echo $this->render('read', array(
				'post' => $post
			));
		}
		
		public function actionDelete($id=NULL)
		{
				if ($id === NULL)
			{
				Yii::$app->session->setFlash('PostDeletedError');
				Yii::$app->getResponse()->redirect(array('site/index'));
			}
		 
			$post = Post::findOne($id);
		 
		 
			if ($post === NULL)
			{
				Yii::$app->session->setFlash('PostDeletedError');
				Yii::$app->getResponse()->redirect(array('site/index'));
			}
		 
			$post->delete();
		 
			Yii::$app->session->setFlash('PostDeleted');
			Yii::$app->getResponse()->redirect(array('site/index'));
		}
		
		public function actionCreate()
		{
			$model = new Post;
			if (isset($_POST['Post']))
			{
				$model->title = $_POST['Post']['title'];
				$model->content = $_POST['Post']['content'];
		 
				if ($model->save())
					Yii::$app->response->redirect(array('site/read', 'id' => $model->id));
			}
		 
			echo $this->render('create', array(
				'model' => $model
			));
		}
		
		public function actionUpdate($id=NULL)
			{
				if ($id === NULL)
					throw new HttpException(404, 'Not Found');
			 
				$model = Post::findOne($id);
			 
				if ($model === NULL)
					throw new HttpException(404, 'Document Does Not Exist');
			 
				if (isset($_POST['Post']))
				{
					$model->title = $_POST['Post']['title'];
					$model->content = $_POST['Post']['content'];
			 
					if ($model->save())
						Yii::$app->response->redirect(array('site/read', 'id' => $model->id));
				}
			 
				echo $this->render('create', array(
					'model' => $model
				));
			}
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
 //   public function actionIndex()
  //  {
 //       return $this->render('index');
  //  }
	public function actionIndex()
	{
		$post = new Post;
		$data = $post->find()->all();
		echo $this->render('index', array(
			'data' => $data
		));
	}
    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
	
	public function beforeSave($insert)
		{
			if ($this->isNewRecord)
			{
				$command = static::getDb()->createCommand("select max(id) as id from posts")->queryAll();
				$this->id = $command[0]['id'] + 1;
			}
		 
			return parent::beforeSave($insert);
		}

}
