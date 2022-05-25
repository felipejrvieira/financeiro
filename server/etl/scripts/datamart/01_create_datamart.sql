CREATE DATABASE IF NOT EXISTS dm_financeiro;

USE dm_financeiro;

CREATE TABLE IF NOT EXISTS dimensao_tempo (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(50) NOT NULL,
    data DATE NOT NULL,
    numero_dia_semana VARCHAR(50) NOT NULL,
    numero_mes VARCHAR(50) NOT NULL,
    numero_ano VARCHAR(50) NOT NULL,
    nome_mes VARCHAR(250) NOT NULL,
    numero_trimestre VARCHAR(50) NOT NULL,
    nome_trimestre VARCHAR(250) NOT NULL,
    numero_semestre VARCHAR(50) NOT NULL,
    nome_semestre VARCHAR(250) NOT NULL
);

CREATE TABLE IF NOT EXISTS dimensao_usuario (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo VARCHAR(50) NOT NULL,
    nome VARCHAR(50) NOT NULL
);

CREATE TABLE IF NOT EXISTS dimensao_conta (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo_conta VARCHAR(50) NOT NULL,
    nome_conta VARCHAR(50) NOT NULL,
    tipo_conta VARCHAR(10)
);

CREATE TABLE IF NOT EXISTS dimensao_categoria(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo_categoria VARCHAR(50) NOT NULL,
    nome_categoria VARCHAR(250) NOT NULL,
    codigo_categoria_pai VARCHAR(50)
);

CREATE TABLE IF NOT EXISTS fato_movimentacoes(
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    codigo_movimentacao VARCHAR(50) NOT NULL,
    data_id INTEGER NOT NULL,
    usuario_id INTEGER NOT NULL,
    conta_id INTEGER NOT NULL,
    categoria_id INTEGER NOT NULL,
    valor REAL
);

GRANT USAGE ON *.* TO `usr_financeiro`@`%`;
GRANT ALL PRIVILEGES ON `dm_financeiro`.* TO `usr_financeiro`@`%`;