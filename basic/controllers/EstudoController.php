<?php

namespace app\controllers;
use Yii;
use app\models\CadastroModel;
use yii\base\Controller;

class EstudoController extends Controller
{
    // ...código existente...

    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;
        $post = Yii::$app->request->post();

        if($cadastroModel->load($post) && $cadastroModel->validate()){
            return $this->render('formulario-confirmacao', [
                'model' => $cadastroModel
            ]);
            }else {
                return $this->render('formulario', [
                    'model' => $cadastroModel
            
         ]);
        }
    }
} 