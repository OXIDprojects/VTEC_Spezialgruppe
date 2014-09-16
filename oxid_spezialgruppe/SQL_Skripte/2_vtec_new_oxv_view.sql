DROP VIEW IF EXISTS `oxv_oxarticles_de_vsg0`;

CREATE VIEW `oxv_oxarticles_de_vsg` AS SELECT * FROM `oxv_oxarticles_de` WHERE (`oxv_oxarticles_de`.`vtecspezialgruppe` = 0);

