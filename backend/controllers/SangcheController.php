<?php

namespace backend\controllers;

use Yii;
use backend\models\Sangche;
use backend\models\SangcheSearch;
use backend\models\Files;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;
/**
 * SangcheController implements the CRUD actions for Sangche model.
 */
class SangcheController extends Controller
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
     * Lists all Sangche models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new SangcheSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Sangche model.
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
     * Creates a new Sangche model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Sangche();
        //$model_files = new Files();
      
         if ($model->load(Yii::$app->request->post())) {
             
            $image = UploadedFile::getInstance($model, 'image');
            $attachment = UploadedFile::getInstance($model, 'attachment');
             if($attachment && $image)
             {
               $ext = end((explode(".", $image->name)));
               $model->file = Yii::$app->security->generateRandomString().".{$ext}";
               Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
               $path = Yii::$app->params['uploadPath'] . $model->file;
               
               $ext_toanvan = end((explode(".", $attachment->name)));
               $model->file_toanvan = Yii::$app->security->generateRandomString().".{$ext_toanvan}";
               Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
               $path_toanvan =  Yii::$app->params['uploadPath'] . $model->file_toanvan;
               
               if($model->save())
               {
                $image->saveAs($path);
                $attachment->saveAs($path_toanvan);
                return $this->redirect(['view', 'id' => $model->id]);
               }
            }
            else
            if ($image)
            {    
             $ext = end((explode(".", $image->name)));
             $model->file = Yii::$app->security->generateRandomString().".{$ext}";
             Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
             $path = Yii::$app->params['uploadPath'] . $model->file;
             if($model->save())
             {
                $image->saveAs($path);
                //$attachment->saveAs($path_toanvan);
                return $this->redirect(['view', 'id' => $model->id]);
             }
            }
            if ($attachment)
            {
             $ext_toanvan = end((explode(".", $attachment->name)));
             $model->file_toanvan = Yii::$app->security->generateRandomString().".{$ext_toanvan}";
             Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
             $path_toanvan =  Yii::$app->params['uploadPath'] . $model->file_toanvan;
             if($model->save())
             {
                //$image->saveAs($path);
                $attachment->saveAs($path_toanvan);
                return $this->redirect(['view', 'id' => $model->id]);
             }
            }
           
              
        } else {
            return $this->render('create', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Updates an existing Sangche model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'image');
            $attachment = UploadedFile::getInstance($model, 'attachment');
             if($attachment && $image)
               {
                  $ext = end((explode(".", $image->name)));
               $model->file = Yii::$app->security->generateRandomString().".{$ext}";
               Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
               $path = Yii::$app->params['uploadPath'] . $model->file;
               
               $ext_toanvan = end((explode(".", $attachment->name)));
               $model->file_toanvan = Yii::$app->security->generateRandomString().".{$ext_toanvan}";
               Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
               $path_toanvan =  Yii::$app->params['uploadPath'] . $model->file_toanvan;
               
               if($model->save())
               {
                $image->saveAs($path);
                $attachment->saveAs($path_toanvan);
                return $this->redirect(['view', 'id' => $model->id]);
               }
              }
            else   
            if ($image)
            {    
             $ext = end((explode(".", $image->name)));
             $model->file = Yii::$app->security->generateRandomString().".{$ext}";
             Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
             $path = Yii::$app->params['uploadPath'] . $model->file;
             if($model->save())
             {
                $image->saveAs($path);
                //$attachment->saveAs($path_toanvan);
                return $this->redirect(['view', 'id' => $model->id]);
             }
            }
            if ($attachment)
            {
             $ext_toanvan = end((explode(".", $attachment->name)));
             $model->file_toanvan = Yii::$app->security->generateRandomString().".{$ext_toanvan}";
             Yii::$app->params['uploadPath'] = Yii::getAlias('@frontend') .'/web/uploads/';
             $path_toanvan =  Yii::$app->params['uploadPath'] . $model->file_toanvan;
             if($model->save())
             {
                //$image->saveAs($path);
                $attachment->saveAs($path_toanvan);
                return $this->redirect(['view', 'id' => $model->id]);
             }
            }
           
              
        } else {
            return $this->render('update', [
                'model' => $model,
            ]);
        }
    }

    /**
     * Deletes an existing Sangche model.
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
     * Finds the Sangche model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Sangche the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Sangche::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
