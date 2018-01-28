-- phpMyAdmin SQL Dump
-- version 4.4.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: 03-Jun-2016 às 15:17
-- Versão do servidor: 5.6.24
-- PHP Version: 5.6.8

--
-- Database: 'plaind'
--

-- O que ainda falta fazer
-- tabelas:
---- messagem (id, remetente, destinatário, mensagem, data e hora)
---- processo (numero, titulo, resumo, iventores...)
---- tipo de processo (desenho industrial, marca, patente, software)
---- intituições e setores (id, nome)
---- pagament GRU
---- revista INPI


-- --------------------------------------------------------

CREATE DATABASE IF NOT EXISTS plaind CHARACTER SET utf8;

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

-- --------------------------------------------------------

--
-- Estrutura da tabela 'access_log'
--

CREATE TABLE IF NOT EXISTS 'access_log' (
    'id_access_log' int(11) NOT NULL,
    'id_usuario' int(11) NOT NULL,
    'ip_usuario' varchar(20) NOT NULL,
    'data_acesso' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'access_log'
--
ALTER TABLE 'access_log'
    ADD PRIMARY KEY ('id_access_log');
    MODIFY 'id_access_log' int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------

--
-- Estrutura da tabela 'recuperar_senha'
--

CREATE TABLE IF NOT EXISTS 'recuperar_senha' (
    'id_recuperar_senha' int(11) NOT NULL,
    'email' varchar(100) NOT NULL,
    'token' varchar(255) NOT NULL,
    'validate' tinyint(1) NOT NULL,
    'falso' tinyint(1) NOT NULL,
    'data_registro' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    'data_uso' varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'recuperar_senha'
--
ALTER TABLE 'recuperar_senha'
    ADD PRIMARY KEY ('id_recuperar_senha');
    MODIFY 'id_recuperar_senha' int(11) NOT NULL AUTO_INCREMENT;

-- --------------------------------------------------------
--
-- Estrutura da tabela 'departamento'
--

CREATE TABLE IF NOT EXISTS 'departamento' (
    'id_departamento' int(11) NOT NULL,
    'nome_dpt' varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'departamento'
--
ALTER TABLE 'departamento'
    ADD PRIMARY KEY ('id_departamento'),
    ADD UNIQUE KEY 'nome_UNIQUE' ('nome_dpt');
    MODIFY 'id_departamento' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;

--
-- Inserindo dados da tabela 'departamento'
--

INSERT INTO 'departamento' ('id_departamento', 'nome_dpt') VALUES
    (1, 'DCOMP - Departamento de Computação'), (2, 'OUTRO');

-- inserir restantes dos departamentos

-- --------------------------------------------------------
--
-- Estrutura da tabela 'areas'
--

CREATE TABLE IF NOT EXISTS 'area' (
    'id_area' int(11) NOT NULL,
    'nome_area' varchar(70) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'area'
--
ALTER TABLE 'area'
    ADD PRIMARY KEY ('id_area'),
    ADD UNIQUE KEY 'nome_UNIQUE' ('nome_area');
    MODIFY 'id_area' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;

--
-- Inserindo dados na tabela 'area'
--

INSERT INTO 'area' ('id_area', 'nome_area') VALUES
    (1, 'CIÊNCIAS AGRÁRIAS'), 
    (2, 'CIÊNCIAS DA SAÚDE'), 
    (3, 'CIÊNCIAS BIOLÓGICAS') 
    (4, 'CIÊNCIAS EXATAS E DA TERRA'), 
    (5, 'CIÊNCIAS HUMANAS E SOCIAIS, LETRAS E ARTES'), 
    (6, 'ENGENHARIAS'),
    (7, 'OUTRA');

-- inserir restantes das áreas

-- --------------------------------------------------------

--
-- Estrutura da tabela 'users'
--

CREATE TABLE IF NOT EXISTS 'usuario' (
    'id_usuario' int(11) NOT NULL,
    'login_usu' varchar(50) NOT NULL,
    'senha_usu' varchar(50) NOT NULL,
    'ativo_usu' int(11) NOT NULL DEFAULT '1',
    'permissao_usu' int(11) NOT NULL DEFAULT '3',
    'first_access_usu' int(11) NOT NULL DEFAULT '1',
    'data_cadastro_usu' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=155 DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'usuario'
--
ALTER TABLE 'usuario'
    ADD PRIMARY KEY ('id_usuario'),
    ADD UNIQUE KEY 'login_UNIQUE' ('login_usu');
    MODIFY 'id_tipo_pessoa' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

--
-- inserindo dados na tabela 'usuario'
--

INSERT INTO 'usuario' ('id_usuario', 'login_usu', 'senha_usu', 'ativo_usu', 'permissao_usu', 'first_access_usu', 'data_cadastro_usu') VALUES 
    (1, 'plaind@plaind.pc', '792cb6752e0ffb1b80413655eaa3b63e9d9b0a74', 1, 1, 1, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'permissao'
--

CREATE TABLE IF NOT EXISTS 'permissao' (
    'id_permissao' int(11) NOT NULL,
    'descricao_per' varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'permissao'
--
ALTER TABLE 'permissao'
    ADD PRIMARY KEY ('id_permissao');
    MODIFY 'id_permissao' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;

--
-- Inserindo dados da tabela 'permissao'
--

INSERT INTO 'permissao' ('id_permissao', 'descricao_per') VALUES
    (1, 'Administrador'), 
    (2, 'Atendente'), 
    (3, 'Usuário');

-- --------------------------------------------------------
--
-- Estrutura da tabela 'usuario_has_permissao'
--

CREATE TABLE IF NOT EXISTS 'usuario_has_permissao' (
    'id_usuario_has_permissao' int(11) NOT NULL,
    'fk_id_usuario' int(11) NOT NULL,
    'fk_id_permissao' int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'usuario_has_permissao'
--
ALTER TABLE 'usuario_has_permissao'
    ADD PRIMARY KEY ('id_usuario_has_permissao'),
    ADD KEY 'fk_usuario' ('fk_id_usuario'),
    ADD KEY 'fk_permissao' ('fk_id_permissao');
    MODIFY 'id_usuario_has_permissao' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=137;

--
-- Inserindo dados na tabela 'usuario_has_permissao'
--

INSERT INTO 'usuario_has_permissao' ('id_usuario_has_permissao', 'fk_id_usuario', 'fk_id_permissao') VALUES
    (1, 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela 'pessoa'
--

CREATE TABLE IF NOT EXISTS 'pessoa' (
    'id_pessoa' int(11) NOT NULL,
    'nome_pes' varchar(50) NOT NULL,
    'email_pes' varchar(45) NOT NULL,
    'cpf_pes' varchar(14) NOT NULL,
    'ramal_pes' varchar(15) DEFAULT NULL,
    'lattes_pes' varchar(70) DEFAULT NULL,
    'website_pes' varchar(50) DEFAULT NULL,
    'fk_id_tipo_pessoa' int(11) NOT NULL,
    'fk_id_cargo_pessoa' int(11) NOT NULL,
    'fk_id_departamento' int(11) NOT NULL,
    'fk_id_area' int(11) NOT NULL,
    'fk_id_usuario' int(11) DEFAULT NULL,
    'birthday_pes' date NOT NULL,
    'sexo_pes' char(1) NOT NULL,
    'ativo_pes' int(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB AUTO_INCREMENT=176 DEFAULT CHARSET=utf8;

----
-- Indexação tabela da 'pessoa'
--
ALTER TABLE 'pessoa'
    ADD PRIMARY KEY ('id_pessoa'),
    ADD KEY 'fk_id_usuario_idx' ('fk_id_usuario'),
    ADD KEY 'fk_id_tipo_pessoa_idx' ('fk_id_tipo_pessoa'),
    ADD KEY 'fk_id_cargo_pessoa_idx' ('fk_id_cargo_pessoa'),
    ADD KEY 'fk_id_departamento_idx' ('fk_id_departamento');
    ADD KEY 'fk_id_area_idx' ('fk_id_area');
    MODIFY 'id_pessoa' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=176;

--
-- Inserindo dados na tabela 'pessoa'
--

INSERT INTO 'pessoa' ('id_pessoa', 'nome_pes', 'email_pes', 'cpf_pes', 'ramal_pes', 'lattes_pes', 'website_pes', 'fk_id_tipo_pessoa', 'fk_id_departamento', 'fk_id_usuario', 'birthday_pes', 'sexo_pes', 'ativo_pes') VALUES
    (1, 'Admin', 'plaind@plaind.pc', '', '(00) 0000-0000', '', 'http://www.plaind.pc', 5, 6, 1, '1989-12-14', 'M', 1);

-- --------------------------------------------------------

-- Estrutura da tabela 'tipo_pessoa'
--

CREATE TABLE IF NOT EXISTS 'tipo_pessoa' (
  'id_tipo_pessoa' int(11) NOT NULL,
  'tipo_tip' varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Indexação da tabela 'tipo_pessoa'
--
ALTER TABLE 'tipo_pessoa'
    ADD PRIMARY KEY ('id_tipo_pessoa'),
    ADD UNIQUE KEY 'tipo_UNIQUE' ('tipo_tip');
    MODIFY 'id_tipo_pessoa' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;

--
-- Inserindo dados na tabela 'tipo_pessoa'
--

INSERT INTO 'tipo_pessoa' ('id_tipo_pessoa', 'tipo_tip') VALUES
    (1, 'FÍSICA'), (2, 'JURÍDICA');

-- --------------------------------------------------------

-- Estrutura da tabela 'cargo_pessoa'
--

CREATE TABLE IF NOT EXISTS 'cargo_pessoa' (
  'id_cargo_pessoa' int(11) NOT NULL,
  'cargo_tipo' varchar(20) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Indexação da tabela 'cargo_pessoa'
--
ALTER TABLE 'cargo_pessoa'
    ADD PRIMARY KEY ('id_cargo_pessoa'),
    ADD UNIQUE KEY 'tipo_UNIQUE' ('tipo_tipo');
    MODIFY 'id_cargo_pessoa' int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
x
--
-- Inserindo dados na tabela 'cargo_pessoa'
--

INSERT INTO 'cargo_pessoa' ('id_cargo_pessoa', 'cargo_tipo') VALUES
    (1, 'ALUNO'),
    (2, 'COORDENADOR'),
    (3, 'PROFESSOR'),
    (4, 'TÉCNICO');

-- --------------------------------------------------------

--
-- Estrutura da tabela 'mensagem'
--

CREATE TABLE IF NOT EXISTS 'mensagem' (
    'id_msg' int(11) NOT NULL,
    'remetente' varchar(11) NOT NULL,
    'destinatario' varchar(11) NOT NULL,
    'destinatario' int(255) NOT NULL,
    'data_envio' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexação tabela 'mesagem'
--
ALTER TABLE 'mesagem'
    ADD PRIMARY KEY ('id_msg');
    MODIFY 'id_msg' int(11) NOT NULL AUTO_INCREMENT;



-- --------------------------------------------------------

--
--
-- Limitadores para a tabela 'pessoa'
--
ALTER TABLE 'pessoa'
    ADD CONSTRAINT 'fk_pes_id_departamento' FOREIGN KEY (`fk_id_departamento`) REFERENCES 'departamento' (`id_departamento`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT 'fk_pes_id_area' FOREIGN KEY (`fk_id_area`) REFERENCES 'area' (`id_area`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT 'fk_pes_id_tipo_pessoa' FOREIGN KEY (`fk_id_tipo_pessoa`) REFERENCES 'tipo_pessoa' (`id_tipo_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT 'fk_pes_id_cargo_pessoa' FOREIGN KEY (`fk_id_cargo_pessoa`) REFERENCES 'cargo_pessoa' (`id_cargo_pessoa`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT 'fk_pes_id_usuario' FOREIGN KEY (`fk_id_usuario`) REFERENCES 'usuario' (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela 'usuario_has_permissao'
--
ALTER TABLE 'usuario_has_permissao'
    ADD CONSTRAINT 'fk_permissao_uhp' FOREIGN KEY (`fk_id_permissao`) REFERENCES 'permissao' (`id_permissao`) ON DELETE CASCADE ON UPDATE CASCADE,
    ADD CONSTRAINT 'fk_usuario_uhp' FOREIGN KEY (`fk_id_usuario`) REFERENCES 'usuario' (`id_usuario`) ON DELETE CASCADE ON UPDATE CASCADE;




















/*CREATE TABLE IF NOT EXISTS users (
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
) ;*/