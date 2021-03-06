<?php

namespace backend\controllers;

use Yii;
use backend\models\Chuyengia;
use backend\models\ChuyengiaSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\UploadedFile;

/**
 * ChuyengiaController implements the CRUD actions for Chuyengia model.
 */
class ChuyengiaController extends Controller
{
    public function behaviors()
    {
        return [
            'access' => [
            'class' => AccessControl::className(),
            'only' => ['create','update','index','view','delete'],    
            'rules' => [
             [
              'allow' => true,
              'roles' => ['@'],   
             ],
             
           ],
        ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['post'],
                ],
            ],
        ];
    }

    /**
     * Lists all Chuyengia models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ChuyengiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
    
     public function actionSearch()
    {
        $searchModel = new ChuyengiaSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('search', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Chuyengia model.
     * @param integer $id
     * @return mixed
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Chuyengia model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Chuyengia();

       if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            if ($image)
            {
              $ext = end((explode(".", $image->name)));
              $model->hinhanh = Yii::$app->security->generateRandomString().".{$ext}";
              Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
              $path = Yii::$app->params['uploadPath'] . $model->hinhanh;
              if($model->save())
              {
                $image->saveAs($path);
                return $this->redirect(['view', 'id' => $model->id]);
              }
            }
            else
            {
              $model->save(); 
              return $this->redirect(['view', 'id' => $model->id]);
            }
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Chuyengia model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            if ($image)
            {
            $ext = end((explode(".", $image->name)));
            $model->hinhanh = Yii::$app->security->generateRandomString().".{$ext}";
            Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
            $path = Yii::$app->params['uploadPath'] . $model->hinhanh;
            if($model->save())
            {
                $image->saveAs($path);
                return $this->redirect(['view', 'id' => $model->id]);
            }
           }
          
           else
           {
              $model->save(); 
              return $this->redirect(['view', 'id' => $model->id]);
           }
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Chuyengia model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Chuyengia model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Chuyengia the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Chuyengia::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
