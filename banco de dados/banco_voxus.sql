CREATE DATABASE `db_voxus` /*!40100 DEFAULT CHARACTER SET utf8 */;
USE db_voxus;
CREATE TABLE `tbl_tasks` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` varchar(255) NOT NULL,
  `arquivo_anexo` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;
CREATE TABLE `tbl_users` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`codigo`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;
INSERT INTO `db_voxus`.`tbl_users`
(`email`,
`senha`)
VALUES
('root@voxus.com',
'root');


