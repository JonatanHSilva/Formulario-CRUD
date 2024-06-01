CREATE DATABASE IF NOT EXISTS miniprojeto;

CREATE TABLE evento (
	id_evento INTEGER NOT NULL AUTO_INCREMENT,
    nome_evento VARCHAR (50),
    descricao_evento VARCHAR (300),
    data_inicio DATETIME,
    data_fim DATETIME,
    tipo_evento VARCHAR (20),
    banner_evento VARCHAR (30),
    possui_wifi VARCHAR (3),
    possui_estacionamento VARCHAR(3),
    possui_bebida VARCHAR (3),
    PRIMARY KEY(id_evento)
);