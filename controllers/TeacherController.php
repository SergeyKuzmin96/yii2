<?php

namespace app\controllers;

class TeacherController extends \yii\web\Controller
{
    public function actionStudents(){
        $name_student = 'Artem';
        return $this->render('student', ['name' => $name_student ]);
    }
}