<?php

namespace app\controllers;

class MainController extends AppController {

    public function indexAction() {

        // формируем метатеги для страницы
        $this->setMeta('Главная страница', 'Содержит оперативную информацию', 'Ключевые слова');
        // Передаем полученные данные в вид
        //$this->set(compact('receipts'));
    }

}
