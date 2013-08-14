<?php
/************************************************************
*		Шаблон проектування  ОДИНАК (SINGLTON)
*************************************************************
*/
/*
Мета: 
	- Гарантує, що в класу є тільки один екземпляр та надає до нього глобальну точку доступу
	- Важливо те, що можна користуватися саме екземпляром класу (обєктом), оскільки при цьому в багатьох випадках стає доступною більш широка функціональність

Застосування:
	- Повинен бути тільки один екземпляр певного класу (обєкт), що є доступний для всіх клієнтів
	- Єдиний екземпляр класу повинен розширюватися  за рахунок породження підкласів. Клієнти повинні мати можливість працювати з розширеним екземпляром без модифікації свого коду
*/
class DbConn{
	const DB_NAME = 'mydb.db';
	private $_db;
	static private $_instance=null;
	private function __construct(){
		$this->_db= new SQLiteDatabase(self::DB_NAME);
	}
	private function __clone(){}
	static function getInstance(){
		if(self::$_instance==null)
			self::$_instance=new DbConn();
		return self:: $_instance;
	}
}
/*1*/
//$db= new DbConn();
/*2*/
$db = DbConn::getInstance();

/*3*/

DbConn::getInstance();






class logger{ 
	const LOG_NAME='log.txt';
	static private $_instance=null;
	private function __construct(){}
	private function __clone(){}
	static function getInstance(){
		if(self::$_instance==null)
			self::$_instance=new Logger();
		return self:: $_instance;
	}
	public function Log($str){
		file_put_contents(self::LOG_NAME, $str, FILE_APPEND);
	}
}
$a=Logger::getInstance();
$a->Log('Bla-Bla-Bla'.__LINE__);

?>