<?php
$sql='DROP TABLE IF EXISTS  `'._DB_PREFIX_.'ps_1767_otp_verification`';

if(Db::getInstance()->execute($sql))

return true;