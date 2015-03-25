<?php
/*============================= Tabletime v1.0 =========================\
|	author - Sunout, http://e107.compolys.ru, sunout@compolys.ru	\
|	coder - Sunout, Geo, license GNU GPL				\
====================================== 2011 ============================*/
/*---------------info plugin--------------------*/
define('TT_INFO',"Расписание");
define('TT_INFO_1',"Расписание автобусов");
define('TT_EDIT_01',"Настройки расписания");
define('TT_ABOUT',"Tabletime. Плагин расписания движения транспорта.");
define('TT_INSTALL',"Инсталляция расписания");
define('TT_UNINSTALL',"Деинсталляция расписания");
/*---------------menu---------------------------*/
define('TT_ADMIN_MENU',"Меню администратора");
/*---------------category-----------------------*/
define('TT_CAT_MENU',"Категории");
define('TT_CAT_00',"Управление категориями доски объявлений");
define('TT_CAT_01',"Категории");
define('TT_CAT_02',"Категория");
define('TT_CAT_03',"Имя категории");
define('TT_CAT_04',"Описание категории");
define('TT_CAT_05',"Выберите категорию");
/*--------------banner--------------------------*/
define('TT_BAN_MENU',"Баннеры");
define('TT_BAN_00',"Управление баннерами доски объявлений");
define('TT_BAN_01',"Категория");
define('TT_BAN_02',"Выберите категорию");
define('TT_BAN_03',"Организация");
define('TT_BAN_04',"Ссылка на сайт");
define('TT_BAN_05',"Дата включения / выключения баннера");
define('TT_BAN_06',"Баннер");
define('TT_BAN_07',"Выбрать баннер");
define('TT_BAN_08',"Показать баннеры");
define('TT_BAN_09',"Управление");
define('TT_BAN_10',"Главная страница");
define('TT_BAN_11',"На всех страницах");
/*--------------about---------------------------*/
define('TT_ABO_MENU',"О плагине");
define('TT_ABO_CAP',"Информация о плагине");
define('TT_ABO_INFO',"Как и прежде, вы можете оставить ваши пожелания и предложения по работе плагина на <a href='http://e107.compolys.ru'>сайте разработки и технической поддержки плагинов для любимой системы Е107</a>. <br><br>Так же Вы можете присоедениться к команде разработчиков. Мы всегда открыты для сотрудничества в области дизайна и программирования. Философия нашей команды - GNU GPL. Свободный софт - для свободных людей! 
<br><br>Если Вы используете наш плагин и хотели бы его почаще обновлять - Вы можете помочь проекту любым способом:<br>1) Разместите на своем ресурсе эту кнопку <img src='".e_PLUGIN."nboard/theme/e107_compolys.png' alt='".TT_INFO."'> с ссылкой на наш сайт<br>
Вот код: <font color=red>&#60a href='http://e107.compolys.ru'&#62&#60img src='&#34.e_PLUGIN.&#34nboard/theme/e107_compolys.png' alt='&#34.TT_INFO.&#34'&#62&#60/a&#62</font><br>
2) Разместить баннер на доске объявлений с сылкой на наш сайт(баннер можно включить из админской части)<br>
3) Или сделайте пожертвования любым из перечиселнных способов на нашем сайте, все полученные средсва помогают развивать проект быстрее.<br>");
define('TT_ABO_00',"Возможности этой версии плагина Notice-Board:");
define('TT_ABO_01',"1) НОВОЕ! Комментарии к объявлениям!");
define('TT_ABO_02',"2) НОВОЕ! Счетчик, который следит за количеством просмотров объявлений!");
define('TT_ABO_03',"3) НОВОЕ! Доработана админская часть плагина: управление баннерами!");
define('TT_ABO_04',"4) НОВОЕ! Улушена работа баннерной системы на сайте. Теперь баннеры могут транслироваться на всех страницах доски!");
define('TT_ABO_05',"5) НОВОЕ! Заголовок доски объявлений оснащен системой ссылок для удобного перехода!");
define('TT_ABO_06',"6) Пересмотрена и реструктурирована база данных, таблицы nb_conf более не существует.");
define('TT_ABO_07',"7) Пересмотрены и структурированы языковые константы");
define('TT_ABO_08',"8) Вопросы безопасности вводимых данных полностью возложены на ядро системы");
define('TT_ABO_9',"9) Работа плагина с датой осуществлена на Unix эпохе.");
define('TT_ABO_10',"10) Защита от спама реализована на уровне вопроса из базы, который можно менять в настройках.");
define('TT_ABO_11',"11) Возможность выбора формата даты для вывода");
define('TT_ABO_12',"12) Плагин Notice-Board встраивается в плагин 'Новое на сайте', можно выводить такие данные, как: Иконка, Автор, Дата, Заголовок объявлений");
define('TT_ABO_13',"13) Панель навигации по доске объявлений (есть некоторые недоработки)");
define('TT_ABO_14',"14) Улучшен дизайн плагина.");
define('TT_ABO_15',"15) Адреса почтовых ящиков пользователей теперь выводятся в скрытой форме");
define('TT_ABO_16',"16) Оформление плагина соответсвует оформлению сайта.");
define('TT_ABO_19',"К сожалению обновление установкой поверх первой версии без изменения структуры данных не представляется возможным в силу множественных изменений на уровне бызы данных, но вы можете сделать бекап Вашей бызы в формате CVS, затем открыть ее в редакторе таблиц и отформатировать поля в соответсвии со структурой базы данных. Так же уделите особое внимание старым полям gnl_date, gnl_datе_kikoz, теперь это поля gnl_date_start, gnl_date_end, так же изменен их тип. Придется перевести даты в Unix эпоху. В дальнейшем кординальных перестроек в базе уже не будет, могут добавляться некоторые поля, но таблицы остануться неизменными");
define('TT_ABO_20',"Планы на разработку Notice-Board");
define('TT_ABO_21',"1) Возможность незарегестрированным пользователям управлять подаными объявлениями");
define('TT_ABO_22',"2) Разделение объявлений на частные и объявления коммерческого храктера");
define('TT_ABO_23',"3) Улучшить загрузку и обработку изображений при подаче объявлений");
define('TT_ABO_24',"4) Доработать редактирование объявлений в админской части");
define('TT_ABO_25',"5) Доработка админской части по объявлениям, пока можно только просматривать и удалять объявления.");
define('TT_ABO_26',"6) Добавить рассылку по окончанию срока объявлений");
define('TT_ABO_27',"7) Создание механизма отслеживания новой версии и механизм автоматического обновления");
define('TT_ABO_28',"8) Перевод всех диалогов и сообщений на js или ajax");
/*--------------navigation---------------------*/
define('TT_NAVI_MAP',"Схема");
define('TT_NAVI_TABLE',"Расписание");
define('TT_NAVI_PRINT',"Версия для печати");
/*--------------images----------------------------*/
define('TT_IMG_00',"Изображение");
define('TT_IMG_01',"Загрузить картинку");
define('TT_IMG_02',"Выбрать иконку");
define('TT_IMG_03',"Показать иконки");
define('TT_IMG_04',"Поменять картинку");
/*--------------button----------------------------*/
define('TT_BUT_PROLONG',"Продлить");
define('TT_BUT_ADD',"Добавить");
define('TT_BUT_DEL',"Удалить");
define('TT_BUT_EDIT',"Редактировать");
define('TT_BUT_UPD',"Обновить");
define('TT_BUT_RES',"Очистить");
define('TT_BUT_CANS',"Отменить");
define('TT_BUT_AGR',"Принять");
define('TT_BUT_SEA',"Найти");
?>