<?php

 DB::getInstance()->Execute('
 CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'ps_1767_otp_verification` (
 `id` int(10) unsigned NOT NULL auto_increment,
 `mobile` varchar(12) NOT NULL,
 `otp` varchar(10) NOT NULL,
 `datetime` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  PRIMARY KEY (`id`))
 ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8 ;');

       