-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 03-Jun-2016 às 15:17
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

--
-- Database: `plaind`
--

-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS plaind CHARACTER SET utf8;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Estrutura da tabela `access_log`
--

CREATE TABLE IF NOT EXISTS `access_log` (
  `id_access_log` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `ip_usuario` varchar(20) NOT NULL,
  `data_acesso` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE IF NOT EXISTS `usuario` (
  `id_usuario` int(11) NOT NULL,
  `login_usu` varchar(50) NOT NULL,
  `senha_usu` varchar(50) NOT NULL,
  `ativo_usu` int(11) NOT NULL DEFAULT '1',
  `permissao_usu` int(11) NOT NULL DEFAULT '3',
  `first_access_usu` int(11) NOT NULL DEFAULT '1',
  `data_cadastro_usu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8;

CREATE TABLE IF NOT EXISTS users (
    user_id INT(11) NOT NULL AUTO_INCREMENT,
    user VARCHAR(255) COLLATE utf8_bin NOT NULL,
    user_password VARCHAR(255) COLLATE utf8_bin NOT NULL,
    user_name VARCHAR(255) COLLATE utf8_bin DEFAULT NULL,
    user_session_id VARCHAR(255) COLLATE utf8_bin DEFAULT NULL,
    user_permissions LONGTEXT COLLATE utf8_bin,
    PRIMARY KEY (user_id)
) ENGINE=MYISAM AUTO_INCREMENT=0 DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

-- --------------------------------------------------------

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