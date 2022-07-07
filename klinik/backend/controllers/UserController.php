<?php

namespace backend\controllers;

use Yii;
use backend\models\User;
use backend\models\UserSearch;
use common\models\User as CommonUser;
use backend\models\Apoteker;
use backend\models\Dokter;
use backend\models\Pegawai;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * UserController implements the CRUD actions for User model.
 */
class UserController extends Controller
{
    /**
     * @inheritDoc
     */
    public function behaviors()
    {
        return array_merge(
            parent::behaviors(),
            [
                'verbs' => [
                    'class' => VerbFilter::className(),
                    'actions' => [
                    ],
                ],
            ]
        );
    }

    /**
     * Lists all User models.
     *
     * @return string
     */
    public function actionIndex()
    {
        $searchModel = new UserSearch();
        $dataProvider = $searchModel->search($this->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single User model.
     * @param int $id ID
     * @return string
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new User model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return string|\yii\web\Response
     */
    public function actionCreate()
    {
        $model = new User();

        if ($model->load(Yii::$app->request->post())) {
            $user = new \common\models\SignupForm();
            $user->name = $model->name;
            $user->username = $model->username;
            $user->password = $model->password;
            $user->email = $model->email;
            $user->role = $model->role;
            if ($user = $user->signup()) {
                if ($model->role=='Dokter'){
                    $Dokter = new Dokter();
                    $Dokter->id = $model->username;
                    $Dokter->id_user = $user->id;
                    $Dokter->nama = $model->name;
                    $Dokter->spesialis = null;
                    $Dokter->alamat = null;
                    $Dokter->no_hp = null;
                    $Dokter->email = $model->email;
                    $Dokter->save();
                }
                else if ($model->role=='Apoteker'){
                    $Apoteker  = new Apoteker();
                    $Apoteker->id = $model->username;
                    $Apoteker->id_user = $user->id;
                    $Apoteker->nama = $model->name;
                    $Apoteker->jabatan = null;
                    $Apoteker->alamat = null;
                    $Apoteker->no_hp = null;
                    $Apoteker->email = $model->email;
                    $Apoteker->save();
                }
                else if ($model->role=='Pegawai'){
                    $Pegawai  = new Pegawai();
                    $Pegawai->id = $model->username;
                    $Pegawai->id_user = $user->id;
                    $Pegawai->nama = $model->name;
                    $Pegawai->jabatan = null;
                    $Pegawai->alamat = null;
                    $Pegawai->no_hp = null;
                    $Pegawai->email = $model->email;
                    $Pegawai->save();
                }
                
                return $this->redirect(['view', 'id' => $user->id]);
            }
            
        }
        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing User model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param int $id ID
     * @return string|\yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($this->request->isPost && $model->load($this->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing User model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param int $id ID
     * @return \yii\web\Response
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the User model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param int $id ID
     * @return User the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = User::findOne(['id' => $id])) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
