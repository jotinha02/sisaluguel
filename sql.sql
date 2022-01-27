-- cria novo banco de dados
create database aluguel;

-- criando tabelas no bd {
CREATE TABLE `aluguel`.`inquilinos` (
  `id` INT NOT NULL,
  `nome` VARCHAR(65) NULL,
  `cpf` VARCHAR(45) NOT NULL,
  `telefone` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `casa` INT(11) NULL,
  PRIMARY KEY (`id`));

  CREATE TABLE `aluguel`.`imoveis` (
  `id` INT NOT NULL,
  `nome` VARCHAR(45) NULL,
  `estado` VARCHAR(45) NULL,
  `cidade` VARCHAR(45) NULL,
  `rua` VARCHAR(65) NULL,
  `numero` VARCHAR(45) NULL,
  `bairro` VARCHAR(45) NULL,
  `valor_mensal` DECIMAL(10,2) NULL DEFAULT 0,
  `referencia` VARCHAR(45) NULL,
  PRIMARY KEY (`id`));

--  }