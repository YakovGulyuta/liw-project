<?php
/**
 * Фаил конфигурации для сайта
 * @return  array Массив настроек
 *
 * ключи ассоциативного массива:
 * 1. Только нижний регистр
 * 2. Разделение слов: символом нижнего подчеркивания "_"
 * пример: def_path - верно; defPath,defpath,def-path - неверно
 */

return $config = [

    'site_name' => 'LIW',    //Название сайта
    'def_route' => 'main',   //Контроллер по умолчанию (в нижнем регистре)
    'def_layout'=> 'layout', //Вид по умолчанию
    'def_lang'  => 'ru',     //Язык
    'domain'    => '',       //полный адрес домена
    
    // Подключение к базе данных
    'db' => [
        'host' => 'localhost',
        'user' => 'root',
        'pass' => '',
        'name' => '',
    ],
];
