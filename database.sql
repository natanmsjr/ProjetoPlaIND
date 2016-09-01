CREATE DATABASE IF NOT EXISTS plaind CHARACTER SET utf8;

CREATE TABLE IF NOT EXISTS users (
    user_id INT(11) NOT NULL AUTO_INCREMENT,
    user VARCHAR(255) COLLATE utf8_bin NOT NULL,
    user_password VARCHAR(255) COLLATE utf8_bin NOT NULL,
    user_name VARCHAR(255) COLLATE utf8_bin DEFAULT NULL,
    user_session_id VARCHAR(255) COLLATE utf8_bin DEFAULT NULL,
    user_permissions LONGTEXT COLLATE utf8_bin,
    PRIMARY KEY (user_id)
) ENGINE=MYISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

INSERT INTO users (
    user_id,
    user,
    user_password,
    user_name,
    user_session_id,
    user_permissions
) 
VALUES
(
    NULL,
    'Administrador',
    md5('admin'),
    'Admin',
    'ljfp99gvqm2hg2bj6jjpu4ol64',
    'a:2:{i:0;s:13:"user-register";i:1;s:18:"gerenciar-noticias";}'
) ;