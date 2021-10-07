USE id17725093_streamhouse;

CREATE TABLE gamehouse (
	id_gh INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	raz_gh VARCHAR(125) NOT NULL,
	end_gh VARCHAR(150) NOT NULL,
	cep_gh VARCHAR(45) NOT NULL,
	cnpj_gh VARCHAR(45) NOT NULL,
	contato_gh VARCHAR(45) NOT NULL,
	email_gh VARCHAR(75) NOT NULL
);

CREATE TABLE sala (
	id_sala INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome_sala VARCHAR(50) NOT NULL,
    cap_sala INT NOT NULL,
	cat_sala VARCHAR(50) NOT NULL,
	desc_sala VARCHAR(500) NOT NULL,
	gamehouse_id_gh INT NOT NULL,
	CONSTRAINT fk_gamehouse_id_gh
    FOREIGN KEY (gamehouse_id_gh) REFERENCES gamehouse (id_gh)
    ON DELETE CASCADE ON UPDATE CASCADE
);

CREATE TABLE streamer (
	id_streamer INT PRIMARY KEY NOT NULL AUTO_INCREMENT,
	nome_streamer VARCHAR(75) NOT NULL,
	sexo_streamer VARCHAR(45) NOT NULL,
	nasc_streamer DATE NOT NULL,
	cpf_streamer VARCHAR(45) NOT NULL,
	end_streamer VARCHAR(150) NOT NULL,
	email_streamer VARCHAR(75) NOT NULL,
	contato_streamer VARCHAR(45) NOT NULL,
	gamehouse_id_gh INT NOT NULL,
	CONSTRAINT fk_gamehouse_id_gh1
    FOREIGN KEY (gamehouse_id_gh) REFERENCES gamehouse (id_gh)
    ON DELETE CASCADE ON UPDATE CASCADE
);