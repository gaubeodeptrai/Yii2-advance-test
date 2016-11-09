<?php

namespace backend\controllers;

use Yii;
use backend\models\Congnghe;
use backend\models\CongngheSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\filters\AccessControl;

/**
 * CongngheController implements the CRUD actions for Congnghe model.
 */
class CongngheController extends Controller
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
     * Lists all Congnghe models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new CongngheSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Congnghe model.
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
     * Creates a new Congnghe model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Congnghe();

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
            else 
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
            else 
               if(!$attachment && !$image)
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
     * Updates an existing Congnghe model.
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
            else
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
             
             
            else
               if(!$attachment && !$image)
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
     * Deletes an existing Congnghe model.
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
     * Finds the Congnghe model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Congnghe the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Congnghe::findOne($id)) !== null) {
            return $model;
        } else {
            throw new NotFoundHttpException('The requested page does not exist.');
        }
    }
}
