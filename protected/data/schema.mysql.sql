CREATE TABLE usuario (
    ced_usu VARCHAR(10) NOT NULL PRIMARY KEY,
    nom_usu VARCHAR(50) NOT NULL,
    ape_usu VARCHAR(50) NOT NULL,
    pass_usu VARCHAR(60) NOT NULL
);

INSERT INTO usuario (ced_usu, nom_usu, ape_usu, pass_usu) VALUES ('1803087558', 'Marcelo', 'Espinosa', '0aa75ab97c26a79526cee8ae49ab4b4e');

CREATE TABLE medidas (
    id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
    fecha_med VARCHAR(10) NOT NULL,
    edad_med VARCHAR(50) NOT NULL,
    peso_med VARCHAR(50) NOT NULL,
    talla_med VARCHAR(50) NOT NULL,
    imc_med VARCHAR(50) NOT NULL,
    mtb_med VARCHAR(50) NOT NULL,
    sex_med VARCHAR(50) NOT NULL,
    ced_usu_med VARCHAR(10) NOT NULL,
    FOREIGN KEY (ced_usu_med) REFERENCES usuario (ced_usu)
);

INSERT INTO medidas (fecha_med, edad_med, peso_med, talla_med,imc_med, mtb_med, sex_med, ced_usu_med) VALUES ('25/07/2020', '34', '100', '180', '180','170','masculino','1803087558');

CREATE TABLE desayuno (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre varchar(128) NOT NULL,
energia float NOT NULL,
proteinas float NOT NULL,
carbohidratos float NOT NULL,
grasas float NOT NULL,
costo float NOT NULL,
pdesayuno int NOT NULL
);
INSERT INTO desayuno (nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno) VALUES
('Arroz Integral', 124, 2, 25, 1, 0.15, 1),
('Pollo', 230, 27, 0, 13, 0.5, 3),
('Huevos', 160, 24, 4, 10, 0.35, 2),
('Leche Descremada', 351, 35, 48, 15, 0.45, 2),
('Tostada con Mermelada', 402, 12, 75, 3, 0.55, 2),
('Frejol', 142, 13, 19, 1, 0.4, 2),
('Porcion de Fruta', 54, 0, 11, 0, 1, 2),
('Carne de Cerdo', 194, 16, 0, 14, 1.5, 1);

CREATE TABLE almuerzo (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre varchar(128) NOT NULL,
energia float NOT NULL,
proteinas float NOT NULL,
carbohidratos float NOT NULL,
grasas float NOT NULL,
costo float NOT NULL,
pdesayuno int NOT NULL
);
INSERT INTO almuerzo (nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno) VALUES
('Arroz Integral', 124, 2, 25, 1, 0.15, 1),
('Pollo', 230, 27, 0, 13, 0.5, 3),
('Huevos', 160, 24, 4, 10, 0.35, 2),
('Leche Descremada', 351, 35, 48, 15, 0.45, 2),
('Tostada con Mermelada', 402, 12, 75, 3, 0.55, 2),
('Frejol', 142, 13, 19, 1, 0.4, 2),
('Porcion de Fruta', 54, 0, 11, 0, 1, 2),
('Carne de Cerdo', 194, 16, 0, 14, 1.5, 1);

CREATE TABLE merienda (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre varchar(128) NOT NULL,
energia float NOT NULL,
proteinas float NOT NULL,
carbohidratos float NOT NULL,
grasas float NOT NULL,
costo float NOT NULL,
pdesayuno int NOT NULL
);
INSERT INTO merienda (nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno) VALUES
('Arroz Integral', 124, 2, 25, 1, 0.15, 1),
('Pollo', 230, 27, 0, 13, 0.5, 3),
('Huevos', 160, 24, 4, 10, 0.35, 2),
('Leche Descremada', 351, 35, 48, 15, 0.45, 2),
('Tostada con Mermelada', 402, 12, 75, 3, 0.55, 2),
('Frejol', 142, 13, 19, 1, 0.4, 2),
('Porcion de Fruta', 54, 0, 11, 0, 1, 2),
('Carne de Cerdo', 194, 16, 0, 14, 1.5, 1);

CREATE TABLE breakmanana (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre varchar(128) NOT NULL,
energia float NOT NULL,
proteinas float NOT NULL,
carbohidratos float NOT NULL,
grasas float NOT NULL,
costo float NOT NULL,
pdesayuno int NOT NULL
);
INSERT INTO breakmanana (nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno) VALUES
('Arroz Integral', 124, 2, 25, 1, 0.15, 1),
('Pollo', 230, 27, 0, 13, 0.5, 3),
('Huevos', 160, 24, 4, 10, 0.35, 2),
('Leche Descremada', 351, 35, 48, 15, 0.45, 2),
('Tostada con Mermelada', 402, 12, 75, 3, 0.55, 2),
('Frejol', 142, 13, 19, 1, 0.4, 2),
('Porcion de Fruta', 54, 0, 11, 0, 1, 2),
('Carne de Cerdo', 194, 16, 0, 14, 1.5, 1);

CREATE TABLE breaktarde (
id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
nombre varchar(128) NOT NULL,
energia float NOT NULL,
proteinas float NOT NULL,
carbohidratos float NOT NULL,
grasas float NOT NULL,
costo float NOT NULL,
pdesayuno int NOT NULL
);
INSERT INTO breaktarde (nombre, energia, proteinas, carbohidratos, grasas, costo, pdesayuno) VALUES
('Arroz Integral', 124, 2, 25, 1, 0.15, 1),
('Pollo', 230, 27, 0, 13, 0.5, 3),
('Huevos', 160, 24, 4, 10, 0.35, 2),
('Leche Descremada', 351, 35, 48, 15, 0.45, 2),
('Tostada con Mermelada', 402, 12, 75, 3, 0.55, 2),
('Frejol', 142, 13, 19, 1, 0.4, 2),
('Porcion de Fruta', 54, 0, 11, 0, 1, 2),
('Carne de Cerdo', 194, 16, 0, 14, 1.5, 1);

CREATE TABLE porcentajecomidas (
                         id INTEGER NOT NULL PRIMARY KEY AUTO_INCREMENT,
                         desayuno INTEGER NOT NULL,
                         brakemanana INTEGER NOT NULL,
                         almuerzo INTEGER NOT NULL,
                         braketarde INTEGER NOT NULL,
                         merienda INTEGER NOT NULL
);

INSERT INTO porcentajecomidas (desayuno, brakemanana, almuerzo, braketarde, merienda) VALUES (30,10,30,10,20);

CREATE TABLE `restricciones` (
                                 `idrestricciones` int NOT NULL,
                                 `maximoenergia` float NOT NULL,
                                 `minimoenergia` float NOT NULL,
                                 `fijoenergia` float NOT NULL,
                                 `maximoproteinas` float NOT NULL,
                                 `minimoproteinas` float NOT NULL,
                                 `fijoproteinas` float NOT NULL,
                                 `maximocarbohidratos` float NOT NULL,
                                 `minimocarbohidratos` float NOT NULL,
                                 `fijocarbohidratos` float NOT NULL,
                                 `maximograsas` float NOT NULL,
                                 `minimograsas` float NOT NULL,
                                 `fijograsas` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Volcado de datos para la tabla `restricciones`
--

INSERT INTO `restricciones` (`idrestricciones`, `maximoenergia`, `minimoenergia`, `fijoenergia`, `maximoproteinas`, `minimoproteinas`, `fijoproteinas`, `maximocarbohidratos`, `minimocarbohidratos`, `fijocarbohidratos`, `maximograsas`, `minimograsas`, `fijograsas`) VALUES
(1, 0, 601.1, 0, 0, 38.7, 0, 0, 71, 0, 0, 18.1, 0);