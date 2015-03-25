<?php
/*============================= Notice-Board ===========================|
|	author - Sunout, MagicDreamWebStudio, http://e107.compolys.ru	|
|	coder - Sunout, Geo, Sander and other 				|
|	sunout@compolys.ru						|
|	license GNU GPL							|
=======================the project beginning in 2011 ===================*/
/*---------------info plugin--------------------*/
define('LAN_PLUG_NAME',"Доска объявлений");
define('LAN_PLUG_EDIT',"Настройки доски объявлений");
define('LAN_PLUG_ABOUT',"Плагин 'Доска объявлений' позволяет организовать на сайте прием и публикацию объявлений. На данный момент ведутся разработки по отчистке от старых объявлений, ожидайте в следующей версии.");
define('LAN_PLUG_INSTALL',"Доска объявлений успешно установлена!");
define('LAN_PLUG_UNINSTALL',"Доска объявлений удалена.");
define('LAN_PLUG_UPGRADE',"Обновление плагина успешно завершено");
/*---------------menu---------------------------*/
define('LAN_ADMIN_MENU_CAP',"Опции доски объявлений");
define('LAN_GNL_MENU',"Главная страница");
define('LAN_CON_MENU',"Опции");
define('LAN_CAT_MENU',"Категории");
define('LAN_NOT_MENU',"Редактор");
define('LAN_DEL_MENU',"Удаление");
define('LAN_BAN_MENU',"Баннеры");
define('LAN_ABO_MENU',"О плагине");
/*--------------gnl-----------------------------*/
define('LAN_GNL_CAP',"Существующие объявления");
define('LAN_GNL_ID',"ID");
define('LAN_GNL_IMG',"Значек");
define('LAN_GNL_NAME',"Заголовок");
define('LAN_GNL_USER',"Пользователь");
define('LAN_GNL_DATE',"Дата");
define('LAN_GNL_OPT',"Опции");
/*--------------config--------------------------*/
define('LAN_CONF_CAP',"Настройки доски объявлений");
define('LAN_CONF_MAIL',"E-mail Доски объявлений");
define('LAN_CONF_DAY',"Обявление действительно (дней)");
define('LAN_CONF_FORM',"Формат представления даты");
define('LAN_CONF_IMBIG',"Уменьшить загружаемое изображение до");
define('LAN_CONF_IMSMALL',"Уменьшить иконку загружаемого изображения до");
define('LAN_CONF_COL1',"Во сколько столбцов выводить категори?");
define('LAN_CONF_ROW1',"Cколько строк объявлений выводить на странице?");
define('LAN_CONF_ROW2',"Cколько строк объявлений выводить в меню?");
define('LAN_CONF_QUE',"Контрольный вопрос, защита от спама");
define('LAN_CONF_ANS',"Ответ на контрольный вопрос");
define('LAN_CONF_PROLONG',"На сколько дней разрешить продление?");
define('LAN_CONF_COMMENT',"Разрешить комментарии на доске объявлений?");
/*---------------category-----------------------*/
define('LAN_CAT_00',"Управление категориями доски объявлений");
define('LAN_CAT_01',"Категории");
define('LAN_CAT_02',"Категория");
define('LAN_CAT_03',"Имя категории");
define('LAN_CAT_04',"Описание категории");
define('LAN_CAT_05',"Выберите категорию");
define('LAN_CAT_COUNT',"объявлений в категории");
define('LAN_SCAT_MENU',"Под-категории");
define('LAN_SCAT_00',"Управление под-категориями доски объявлений");
define('LAN_SCAT_01',"Под-категории");
define('LAN_SCAT_02',"Под-категория");
define('LAN_SCAT_03',"Имя под-категории");
define('LAN_SCAT_04',"Под-категории объявлений");
define('LAN_SCAT_05',"Выберите подкатегорию");
define('LAN_SCAT_06',"Переместить категорию в :");
define('LAN_SCAT_07',"Выберите родительскую категорию");
/*--------------notice--------------------------*/
define('LAN_NOT_CAP',"Управление объявлениями");
define('LAN_NOT_ID',"ID");
define('LAN_NOT_NAME',"Заголовок объявления");
define('LAN_NOT_CAT',"Категория объявления");
define('LAN_NOT_SCAT',"Под-категория объявления");
define('LAN_NOT_DET',"Полный текст объявления");
define('LAN_NOT_PRICE',"Цена");
define('LAN_NOT_USER',"Пользователь");
define('LAN_NOT_CITY',"Город");
define('LAN_NOT_PHONE',"Номер телефона");
define('LAN_NOT_EMAIL',"E-mail для связи");
define('LAN_NOT_LONG',"Продлить объявление на");
define('LAN_NOT_DAYS',"Дней");
define('LAN_NOT_DATESTART',"Дата публикации");
define('LAN_NOT_DATESTOP',"Дата окончания публикации");
/*--------------notice--------------------------*/
define('LAN_PO_CAP',"Личный кабинет");
define('LAN_PO_FROM',"от");
define('LAN_PO_TO',"до");
/*--------------banner--------------------------*/
define('LAN_BAN_00',"Управление баннерами доски объявлений");
define('LAN_BAN_01',"Категория");
define('LAN_BAN_02',"Выберите категорию");
define('LAN_BAN_03',"Организация");
define('LAN_BAN_04',"Ссылка на сайт");
define('LAN_BAN_05',"Дата включения / выключения баннера");
define('LAN_BAN_06',"Баннер");
define('LAN_BAN_07',"Выбрать баннер");
define('LAN_BAN_08',"Показать баннеры");
define('LAN_BAN_09',"Управление");
define('LAN_BAN_10',"Главная страница");
define('LAN_BAN_11',"На всех страницах");
/*--------------about---------------------------*/
define('LAN_ABO_CAP',"Информация о плагине");
define('LAN_ABO_INFO',"Как и прежде, вы можете оставить ваши пожелания и предложения по работе плагина на <a href='http://e107.compolys.ru'>сайте разработки и технической поддержки плагинов для любимой системы Е107</a>. <br><br>Так же Вы можете присоедениться к команде разработчиков. Мы всегда открыты для сотрудничества в области дизайна и программирования. Философия нашей команды - GNU GPL. Свободный софт - для свободных людей! 
<br><br>Если Вы используете наш плагин и хотели бы его почаще обновлять - Вы можете помочь проекту любым способом:<br>
1) Разместите на своем ресурсе кнопку с ссылкой на наш сайт<br>
Вот код: <font color=red>&#60a href='http://e107.compolys.ru'&#62&#60img src='http://compolys.ru/promoute/mdws_button.png' alt='Magic Dream Web Studio'&#62&#60/a&#62</font><br>
2) Разместить баннер на доске объявлений с сылкой на наш сайт(баннер можно включить из админской части)<br>
3) Или сделайте пожертвования любым из перечиселнных способов на нашем сайте, все полученные средсва помогут развивать проект быстрее.<br>");
define('LAN_ABO_DOC',"Возможности этой версии плагина ".LAN_INFO." описаны в документации (здесь).");
/*--------------add-----------------------------*/
define('LAN_ADD_CAP',"Управление объявлениями");
define('LAN_ADD_01',"Заголовок объявления");
define('LAN_ADD_02',"Категория");
define('LAN_ADD_03',"Пожалуйста, выберите категорию");
define('LAN_ADD_04',"Под-категория");
define('LAN_ADD_05',"Пожалуйста, выберите под-категорию");
define('LAN_ADD_06',"Загрузить картинку");
define('LAN_ADD_07',"Полный текст объявления");
define('LAN_ADD_08',"Цена");
define('LAN_ADD_09',"Ваше имя (ник)");
define('LAN_ADD_10',"Населенный пункт");
define('LAN_ADD_11',"Номер телефона");
define('LAN_ADD_12',"E-mail для связи");
define('LAN_ADD_13',"Решите пример");
define('LAN_ADD_14',"Объявления");
define('LAN_ADD_15',"Дата");
define('LAN_ADD_16',"Цена");
define('LAN_ADD_17',"Ваши предыдущие объявления");
/*--------------nboard---------------------------*/
define('LAN_NAME_DATE',"Дата");
define('LAN_NAME_NAME',"Объявление");
define('LAN_NAME_PRICE',"Цена");
define('LAN_NAME_CITY',"Место");
define('LAN_NAME_PHOTO',"");
/*--------------detailed---------------------------*/
define('LAN_DETAIL_CAP',"Объявление");
define('LAN_DETAIL_01',"Заголовок");
define('LAN_DETAIL_02',"Текст объявления");
define('LAN_DETAIL_03',"Цена");
define('LAN_DETAIL_04',"Изображение");
define('LAN_DETAIL_05',"Отсутствует");
define('LAN_DETAIL_06',"Предыдущий");
define('LAN_DETAIL_07',"Следующий");
define('LAN_DETAIL_08',"Автор");
define('LAN_DETAIL_09',"Город (населенный пункт)");
define('LAN_DETAIL_10',"Номер телефона");
define('LAN_DETAIL_11',"E-mail для связи");
define('LAN_DETAIL_12',"Написать автору");
define('LAN_DETAIL_13',"Дата публикации / окончания");
define('LAN_DETAIL_14',"Количество просмотров объявления");
define('LAN_DETAIL_COMMENT',"Комментарии к объявлению");
define('LAN_DETAIL_ALLNOTICE',"Всего объявлений в категории: ");
define('LAN_AUTH_1',"Автор");
/*--------------serch----------------------------*/
define('LAN_SARCH_CAP',"Поиск объявлений");
define('LAN_SARCH_01',"Введите текст для поиска");
define('LAN_SARCH_02',"по заголовку объявления");
define('LAN_SARCH_03',"по тексту объявления");
define('LAN_SARCH_04',"объявления");
define('LAN_SARCH_05',"текст объявления");
define('LAN_SARCH_06',"К сожалению, по вашему запросу ничего не найдено. Попробуйте изменить критерий поиска.");
/*--------------navigation------------------------*/
define('LAN_NAVI_PANEL',"Панель навигации");
define('LAN_NAVI_SEARCH',"Найти объявления");
define('LAN_NAVI_ADD',"Добавить объявление");
define('LAN_NAVI_ALL',"Все объявления");
define('LAN_NAVI_PRE',"Предыдущее");
define('LAN_NAVI_FOL',"Следущее");
define('LAN_NAVI_PO',"Личный кабинет");
/*--------------images----------------------------*/
define('LAN_IMG_00',"Изображение");
define('LAN_IMG_01',"Загрузить картинку");
define('LAN_IMG_02',"Выбрать иконку");
define('LAN_IMG_03',"Показать иконки");
define('LAN_IMG_04',"Поменять картинку");
/*--------------action---------------------------*/
define('LAN_COL_00', "Выбирите количество деней публикации объявления");
define('LAN_COL_01', "7 Дней");
define('LAN_COL_02', "15 Дней");
define('LAN_COL_03', "30 Дней");
/*--------------date formate---------------------*/
define('LAN_RDATE_01', "00.00.0000");
define('LAN_FDATE_01', "%d.%m.%Y");
define('LAN_RDATE_02', "00-00-0000");
define('LAN_FDATE_02', "%d-%m-%Y");
/*--------------button----------------------------*/
define('LAN_BUT_PROLONG',"Продлить");
define('LAN_BUT_ADD',"Добавить");
define('LAN_BUT_DEL',"Удалить");
define('LAN_BUT_EDIT',"Редактировать");
define('LAN_BUT_UPD',"Обновить");
define('LAN_BUT_RES',"Очистить");
define('LAN_BUT_CANS',"Отменить");
define('LAN_BUT_AGR',"Принять");
define('LAN_BUT_SEA',"Найти");
/*--------------yes no----------------------------*/
define('LAN_SEL_YES',"Да");
define('LAN_SEL_NO',"Нет");
/*--------------message & question----------------*/
define('LAN_MES_NULL',"Не сконфигурирована ни одна категория объявлений, пожалуйста, обратитесь к администратору сайта.");
define('LAN_MES_00',"Сообщение");
define('LAN_MES_01',"Не выбрана запись для редактирования");
define('LAN_MES_02',"Не выбрана запись для удаления");
define('LAN_MES_03',"Вы действительно хотите удалить категорию");
define('LAN_MES_04',"Вы пытаетесь добавить пустую категорию!");
define('LAN_MES_05',"Категория успешно добавлена");
define('LAN_MES_06',"Категория обновлена");
define('LAN_MES_07',"Категория");
define('LAN_MES_08',"удалена");
define('LAN_MES_09',"Неправильный формат номера страницы!");
define('LAN_MES_10',"Неправильный запрос к базе.");
define('LAN_MES_11',"Вы пытаетесь добавить пустую подкатегорию!");
define('LAN_MES_12',"Подкатегория успешно добавлена");
define('LAN_MES_13',"Под-категория обновлена");
define('LAN_MES_14',"Настройки обновлены");
define('LAN_MES_15',"Без картинки");
define('LAN_MES_16',"Введите ваше имя, не более 20 символов!");
define('LAN_MES_17',"Установки обновлены");
define('LAN_MES_18',"Установки добавлены");
define('LAN_MES_19',"Ваше объявление успешно добавлено!");
define('LAN_MES_20',"Ваше объявление добавлено сроком до ");
define('LAN_MES_21',"Заполните пожалуйста все поля отмеченные знаком *");
define('LAN_MES_22',"Объявление обновлено");
define('LAN_MES_23',"Информация о баннере обновлена!");
define('LAN_MES_24',"Объявление удалено");
define('LAN_MES_30',"Ваше объявление продлено, и будет действительно еще ");
define('LAN_MES_31',"дней!");
define('LAN_QUE_DEL_NOT',"Вы действительно хотите удалить объявление?");
define('LAN_QUE_DEL_NOTOLD',"Вы действительно хотите удалить старые объявления?");
/*--------------example----------------------------*/
define('LAN_EX_CONF_01',"Сколько будет 4+4");
define('LAN_EX_CONF_02',"8");
define('LAN_EX_CAT_01',"Авто");
define('LAN_EX_CATDESC_01',"Автомобили, мотоциклы, запчасти");
define('LAN_EX_CAT_02',"Недвижимость");
define('LAN_EX_CATDESC_02',"Квартиры, дома, дачи, офисы");
define('LAN_EX_CAT_03',"Цифра");
define('LAN_EX_CATDESC_03',"Компьютеры, телефоны, спутниквое оборудование");
define('LAN_EX_CAT_04',"Люди");
define('LAN_EX_CATDESC_04',"Знакомства, объявления о работе, вакансии");
define('LAN_EX_CAT_05',"продажа");
define('LAN_EX_CAT_06',"покупка");
define('LAN_EX_CAT_07',"обмен");
define('LAN_EX_CAT_08',"аренда");
define('LAN_EX_CAT_09',"ищу, познакомлюсь");
define('LAN_EX_CAT_10',"вакансии");
define('LAN_EX_CAT_11',"предлагаю работу");
?>