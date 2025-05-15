-- interamente scritto da Sofia Lotti
-- crediti: Sofia Lotti
-- Data: 15-05-2025
-- Descrizione:
-- Questo file contiene la creazione del database Bullet Journal, che include le tabelle per le note, i progetti e le attività.

-- Eliminiamo il database se esiste già
DROP DATABASE IF EXISTS BulletJournalDatabase;

-- Creiamo il database Bullet Journal
CREATE DATABASE BulletJournalDatabase;

-- Selezioniamo il database appena creato
USE BulletJournalDatabase;

-- Creiamo le tabelle

CREATE TABLE NOTE (
    NoteID INT NOT NULL AUTO_INCREMENT,
    Titolo VARCHAR(150) NOT NULL DEFAULT 'Senza titolo',
    Contenuto TEXT,
    Archiviato CHAR(1) DEFAULT 'N',
    CreatoIl DATETIME DEFAULT CURRENT_TIMESTAMP,
    AggiornatoIl DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
    PRIMARY KEY (NoteID)) ENGINE=INNODB;

CREATE TABLE MOODS (
    MoodID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(50) NOT NULL,
    Immagine VARCHAR(200) NOT NULL
);

CREATE TABLE PROGETTI (
    ProgettoID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL DEFAULT 'Senza titolo',
    Descrizione TEXT,
    DataInizio DATE,
    DataFine DATE,
    Stato VARCHAR(50) DEFAULT 'In corso',
    CreatoIl DATETIME DEFAULT CURRENT_TIMESTAMP,
    AggiornatoIl DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE CALENDARIO (
    EventoID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL,
    Descrizione TEXT,
    DataInizio DATE,
    DataFine DATE,
    OrarioInizio TIME,
    OrarioFine TIME,
    Luogo VARCHAR(100),
    CreatoIl DATETIME DEFAULT CURRENT_TIMESTAMP,
    AggiornatoIl DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE CICLO (
    CicloID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Flusso VARCHAR(20) NOT NULL,
    DataInizio DATE DEFAULT CURRENT_DATE,
    DataFine DATE
);

CREATE TABLE TASKS (
    TaskID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL DEFAULT 'Senza titolo',
    Descrizione TEXT,
    DataInizio DATE,
    DataScadenza DATE,
    Stato VARCHAR(50) DEFAULT 'In corso',
    Priorita VARCHAR(20),
    Colore VARCHAR(20)
);

CREATE TABLE NOTIFICHE (
    NotificaID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Nome VARCHAR(150) NOT NULL,
    Descrizione TEXT,
    DataScadenza DATE,
    OrarioScadenza TIME,
    Stato VARCHAR(15) not null DEFAULT "daLeggere"
);

CREATE TABLE FILMLIBRO (
    FilmLibroID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Titolo VARCHAR(150) NOT NULL DEFAULT 'Senza titolo',
    Tipo varchar(50) NOT NULL, /* Film, Libro, Anime, Serie */
    Genere VARCHAR(50) NOT NULL DEFAULT 'Genere non specificato',
    Descrizione TEXT,
    Stato VARCHAR(50) DEFAULT 'In corso', /*da guardare, in corso, completato*/
    Valutazione INT CHECK (Valutazione >= 0 AND Valutazione <= 10)
);

CREATE TABLE moodNota (
    NoteID INT NOT NULL,
    MoodID INT NOT NULL,
    PRIMARY KEY (NoteID, MoodID),
    FOREIGN KEY (NoteID) REFERENCES NOTE(NoteID),
    FOREIGN KEY (MoodID) REFERENCES MOODS(MoodID)
);

CREATE TABLE moodProgetto (
    ProgettoID INT NOT NULL,
    MoodID INT NOT NULL,
    PRIMARY KEY (ProgettoID, MoodID),
    FOREIGN KEY (ProgettoID) REFERENCES PROGETTI(ProgettoID),
    FOREIGN KEY (MoodID) REFERENCES MOODS(MoodID)
);

CREATE TABLE moodFilm (
    FilmLibroID INT NOT NULL,
    MoodID INT NOT NULL,
    PRIMARY KEY (FilmLibroID, MoodID),
    FOREIGN KEY (FilmLibroID) REFERENCES FILMLIBRO(FilmLibroID),
    FOREIGN KEY (MoodID) REFERENCES MOODS(MoodID)
);

CREATE TABLE PASSWORD (
    ValorePassword INT NOT NULL PRIMARY KEY DEFAULT 12345
);

CREATE TABLE DIARIO (
    DiarioID INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    Titolo VARCHAR(150) NOT NULL DEFAULT 'Senza titolo',
    Descrizione TEXT,
    PasswordAttiva CHAR(1) DEFAULT 'N',
    CreatoIl DATE DEFAULT CURRENT_TIMESTAMP,
    AggiornatoIl DATETIME DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
);

CREATE TABLE moodDiario (
    DiarioID INT NOT NULL,
    MoodID INT NOT NULL,
    PRIMARY KEY (DiarioID, MoodID),
    FOREIGN KEY (DiarioID) REFERENCES DIARIO(DiarioID),
    FOREIGN KEY (MoodID) REFERENCES MOODS(MoodID)
);








