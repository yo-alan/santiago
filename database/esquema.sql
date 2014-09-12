BEGIN; 

CREATE TABLE carrera (
	codigo text NOT NULL,
	nombre text NOT NULL,

	CONSTRAINT pk_carrera PRIMARY KEY (codigo)
);
CREATE TABLE materia (
	carrera text NOT NULL,
	codigo text NOT NULL,
	nombre text NOT NULL,
	anio int,
	cuatrimestre int,


	CONSTRAINT pk_materia PRIMARY KEY (carrera, codigo),
	CONSTRAINT fk_materia FOREIGN KEY (carrera)

	REFERENCES carrera (codigo)
);
CREATE TABLE cursada (
	carrera text NOT NULL,
	materia text NOT NULL,
	anio int,
	f_inicio date NOT NULL,
	f_fin date NOT NULL,
	cuatrimestre int,
	porc_asistencia real NOT NULL,
	
	CONSTRAINT pk_cursada PRIMARY KEY (carrera, materia, anio),
	CONSTRAINT fk_cursada FOREIGN KEY (carrera, materia)

	REFERENCES materia (carrera, codigo)
	
);
CREATE TABLE comision (
	id serial,
	carrera text  NOT NULL,
	materia text NOT NULL,
	anio int, 
	numero int,

	CONSTRAINT pk_comision PRIMARY KEY (id),
	CONSTRAINT fk_comison FOREIGN KEY (carrera, materia, anio)
	REFERENCES cursada (carrera, materia, anio),
	CONSTRAINT unq_comision UNIQUE (carrera, materia, anio, numero)

);
CREATE TABLE persona (
	nombre text NOT NULL,
	apellido text NOT NULL,
	f_nacimiento date,
	direccion text NOT NULL,
	documento int not null,
	CONSTRAINT pk_persona
		PRIMARY KEY (documento),
	CONSTRAINT chk_doc_valido
		CHECK (documento between 10000000 and 99999999 )
);
CREATE TABLE profesor (

	documento int NOT NULL,
	CONSTRAINT pk_profesor
		PRIMARY KEY (documento),
	CONSTRAINT fk_documento
		FOREIGN KEY (documento)
		REFERENCES persona (documento)


);
CREATE TABLE alumno (
	documento  int NOT NULL,
	legajo text,
	CONSTRAINT pk_alumno
		PRIMARY KEY (legajo),
	CONSTRAINT chk_legajo_valido
		CHECK (legajo ~ E'[A-Z]{3}\\d{3}'),
	CONSTRAINT fk_documento
		FOREIGN KEY (documento)
		REFERENCES persona (documento)	

);
CREATE TABLE prof_comision (
	profesor int NOt NULL,
	comision serial NOT NULL,
	f_desde date NOT NULL,
	f_hasta date NOT NULL,

	CONSTRAINT pk_prof_comision
		PRIMARY KEY (profesor, comision, f_desde),
	CONSTRAINT fk_profesor
		FOREIGN KEY (profesor)
		REFERENCES profesor (documento),
	CONSTRAINT fk_comision
		FOREIGN KEY (comision)
		REFERENCES comision (id)	

);
CREATE TABLE clase (
	id serial,
	obligatorio BOOLEAN,
	hora_inicio time NOT NULL,
	hora_fin time NOT NULL,
	aula text NOT NULL,
	dictada BOOLEAN,
	recuperatoria_de int,
	comision int,
	profesor int,
	hora_ingreso_profesor time,
	hora_salida_profesor time,
	
	CONSTRAINT pk_clase PRIMARY KEY(id),
	CONSTRAINT fk_comision FOREIGN KEY(comision)
	REFERENCES comision(id),
	CONSTRAINT fk_recuperatoria_de FOREIGN KEY(recuperatoria_de)
	REFERENCES clase(id)
);
CREATE TABLE asistencia (
	comision int,
	alumno	text,
	clase int,
	id serial,
	presente BOOLEAN,
	justificada BOOLEAN,

	CONSTRAINT pk_asistencia PRIMARY KEY(id),
	CONSTRAINT fk_comision FOREIGN KEY(comision)
	REFERENCES comision(id),
	CONSTRAINT fk_anio FOREIGN KEY(alumno)
	REFERENCES alumno(legajo),
	CONSTRAINT fk_clase FOREIGN KEY(clase)
	REFERENCES clase(id)
);










INSERT INTO carrera VALUES ('SFW', 'Tenicatura en Software');
INSERT INTO carrera VALUES ('ENF', 'Tenicatura en Enferemería');
INSERT INTO carrera VALUES ('RED', 'Tecnicatura en Redes');


INSERT INTO materia VALUES ('SFW', '10', 'Bases de Datos I', 2, 1);
INSERT INTO materia VALUES ('SFW', '11', 'Laboratorio Avanzado de Programación', 2, 1);
INSERT INTO materia VALUES ('ENF', '11', 'Nutrición', 1, 2);
INSERT INTO materia VALUES ('ENF', '3', 'Anatomia', 1, 1);
INSERT INTO materia VALUES ('RED', '3', 'Redes I', 1, 2);



INSERT INTO persona VALUES ('Iuliano', 'Gelvez', '1985-08-22', 'Florentino Ameghino 251', 31504948);
INSERT INTO persona VALUES ('Rupert', 'Huenchuquir', '1988-07-22', 'Florecio Raminnetti 851', 26568987);
INSERT INTO persona VALUES ('Fernando', 'Valdebenito', '1992-04-07', 'Cannito 425', 36650929);
INSERT INTO persona VALUES ('Javier', 'Yañez', '1984-06-15', 'Av. Lista 543', 23456789);
INSERT INTO persona VALUES ('Lexa', 'Gomez', '1960-12-30', 'Av. Camero 58', 98765436);
INSERT INTO persona VALUES ('Pablo', 'Carro', '1980-06-20', 'parque mitre 22', 20555664);
INSERT INTO persona VALUES ('Rupertinski', 'Galadrianno', '1988-01-05', 'Alavuelta Delaezquina 871', 48789654);
INSERT INTO persona VALUES ('Moises', 'Vilca', '2060-10-10', '25 de mayo 222', 20670089);
INSERT INTO persona VALUES ('Lahermenegilda', 'Delpueblo', '1988-01-09', 'Vivalaseñora 845', 32654987);
INSERT INTO persona VALUES ('Pancrasio', 'Garcia', '1945-05-01', 'Callecita 123', 12428953);
INSERT INTO persona VALUES ('Tito', 'Lopez', '2000-11-04', 'acapulco 244', 20693300);
INSERT INTO persona VALUES ('Ximena', 'Gutierres', '1987-01-17', 'Av. Coronel 1234', 45678900);
INSERT INTO persona VALUES ('Dario', 'Guzman', '1989-01-01', 'Av. Manuel 90', 35456789);
INSERT INTO persona VALUES ('Pedro', 'Sanchez', '1987-01-15', 'torraco 445', 20995500);
INSERT INTO persona VALUES ('Especulapio', 'Nuñez', '1985-06-17', '25 de mayo 658', 28456982);



INSERT INTO profesor VALUES (35456789);
INSERT INTO profesor VALUES (98765436);
INSERT INTO profesor VALUES (12428953);
INSERT INTO profesor VALUES (48789654);
INSERT INTO profesor VALUES (20693300);
INSERT INTO profesor VALUES (32654987);
INSERT INTO profesor VALUES (20995500);



INSERT INTO alumno VALUES (31504948, 'POO986');
INSERT INTO alumno VALUES (26568987, 'LOI569');
INSERT INTO alumno VALUES (36650929, 'PMR325');
INSERT INTO alumno VALUES (23456789, 'DFR456');
INSERT INTO alumno VALUES (45678900, 'ERT123');
INSERT INTO alumno VALUES (28456982, 'GOY589');
INSERT INTO alumno VALUES (20670089, 'HTP889');
INSERT INTO alumno VALUES (20555664, 'TTN188');






ROLLBACK;
