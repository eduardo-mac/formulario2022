<?php

namespace app\controllers;

use yii\web\Controller;

class EstudoController extends Controller
{
    // ...código existente...

    public function actionFormulario()
    {
        $cadastroModel = new CadastroModel;

        return $this->render('formulario', [
            'model' => $cadastroModel
        ]);
    }
} 