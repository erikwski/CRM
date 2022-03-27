CREATE TABLE `bwlyec5v1ma4ksdfwuci`.`utenti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `nome_utente` VARCHAR(20) NULL,
  `cognome` VARCHAR(64) NULL,
  `nome` VARCHAR(64) NULL,
  `tipo` VARCHAR(1) NULL,
  `codice_cliente` INT NULL,
  `mail` VARCHAR(255) NULL,
  `password` VARCHAR(100) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `bwlyec5v1ma4ksdfwuci`.`clienti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `rgs` VARCHAR(64) NULL,
  `mail` VARCHAR(255) NULL,
  `telefono` VARCHAR(32) NULL,
  `partita_iva` VARCHAR(64) NULL,
  `referente` VARCHAR(100) NULL,
  `telefono_referente` VARCHAR(32) NULL,
  `mail_referente` VARCHAR(255) NULL,
  `sitoweb` VARCHAR(100) NULL,
  `indirizzo` VARCHAR(255) NULL,
  `localita` VARCHAR(255) NULL,
  `cap` VARCHAR(10) NULL,
  `provincia` VARCHAR(2) NULL,
  `stato_cliente` VARCHAR(1) NULL,
  `pagamento_sviluppo` INT NULL,
  `pagamento_agenzia` INT NULL,
  `provenienza_cliente` VARCHAR(1) NULL,
  `note_vendita` VARCHAR(255) NULL,
  `utente_creazione` VARCHAR(20) NULL,
  `data_creazione` DATETIME NULL,
  `data_ultimo_lavoro` DATETIME NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `bwlyec5v1ma4ksdfwuci`.`pwd_clienti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_cliente` INT NULL,
  `descrizione` VARCHAR(64) NULL,
  `mail` VARCHAR(255) NULL,
  `password` VARCHAR(100) NULL,
  `rinnovo_servizio` DATETIME NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `bwlyec5v1ma4ksdfwuci`.`servizi` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `descrizione` VARCHAR(64) NULL,
  `costo` INT NULL,
  `flag_attivo` VARCHAR(1) NULL,
  PRIMARY KEY (`id`));

CREATE TABLE `bwlyec5v1ma4ksdfwuci`.`servizi_clienti` (
  `id` INT NOT NULL AUTO_INCREMENT,
  `id_cliente` INT NULL,
  `id_servizi` INT NULL,
  PRIMARY KEY (`id`));
