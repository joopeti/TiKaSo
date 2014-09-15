CREATE TABLE Asiakas
(
	AsiakasID integer SERIAL PRIMARY KEY,
	Nimimerkki VARCHAR(32) NOT NULL,
	Salasana VARCHAR(128) NOT NULL,
	Email VARCHAR(128) NOT NULL,
	Hakutarkoitus VARCHAR(64),
	Syntymapaiva DATE(),
	Paikkakunta VARCHAR(64),
	Teksti VARCHAR(512),
	Kuva BYTEA()
);
CREATE TABLE Viesti
(
	ViestiID integer SERIAL PRIMARY KEY,
	LahettajaID integer references Asiakas(AsiakasID) NOT NULL,
	VastaanottajaID integer references Asiakas(AsiakasID) NOT NULL,
	Sisalto varchar(256) NOT NULL,
	Lahetysaika timestamp() NOT NULL
);
CREATE TABLE Kiinnostus
(	
	KiinnostusID integer SERIAL PRIMARY KEY,
	Nimi varchar(64) NOT NULL,
	AsiakasID integer references Asiakas(AsiakasID)
);
CREATE TABLE Julkinensivu
(
	JulkinenID integer SERIAL PRIMARY KEY,
	OmistajaID integer references Asiakas(AsiakasID),
	Raportoitu boolean
);
CREATE TABLE Salainensivu
(
	SalainenID integer SERIAL PRIMARY KEY,
	OmistajaID integer references Asiakas(AsiakasID)
);
CREATE TABLE SalaisetSivutNakevat
(
	NakyvyysID integer SERIAL PRIMARY KEY,
	SalainenID integer references Salainensivu(SalainenID),
	AsiakasID integer references Asiakas(AsiakasID)
);
