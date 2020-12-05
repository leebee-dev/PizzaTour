<?php
//****************
// DB 정보 입력
//****************
define('_DBHOST','localhost');
define('_DBUSER','root'); // DB 사용자
define('_DBPASS','990307'); // DB 패스워드
define('_DBNAME','pizza'); // DB 명
define('_DBTYPE','mysql'); // 데이터베이스 종류
define('_DSN',_DBTYPE.':host='._DBHOST.';dbname='._DBNAME.';charset=utf8mb4');

//*****************************
// 파일 디렉토리
//*****************************
define('_CONFIG_DIR',__DIR__);
//echo _CONFIG_DIR;
define('_CLASS_DIR',_CONFIG_DIR.'/Class/');
//echo _CLASS_DIR.'<br/>';
//***************************
//클래스 파일 불러오기
//***************************
require_once _CLASS_DIR.'DBConClass.php'; // DB 연결 클래스
require_once _CLASS_DIR.'MemberClass.php';
require_once _CLASS_DIR.'AdminClass.php';
?>
