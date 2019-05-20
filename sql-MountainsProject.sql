/*******************************************
* Tables
*******************************************/
CREATE TABLE public."Users"
(
    "ID" serial NOT NULL,
    "UserName" text NOT NULL,
    "Password" text NOT NULL,
    "UserLevel" bigint NOT NULL,
    PRIMARY KEY ("ID")
);

CREATE TABLE public."MountainRanges"
(
    "ID" integer NOT NULL,
    "RangeName" text NOT NULL,
    "History" text NOT NULL,
    PRIMARY KEY ("ID")
);

CREATE TABLE public."Mountains"
(
    "ID" serial NOT NULL,
    "RangeID" bigint NOT NULL,
    "PeakName" text NOT NULL,
    "Elevation" bigint,
    "Dificulty" bigint,
    "Info" text,
    "Link" text,
    PRIMARY KEY ("ID")
);

CREATE TABLE public."Comments"
(
    "ID" serial NOT NULL,
    "UserID" bigint NOT NULL,
    "PeakID" bigint NOT NULL,
    "Comment" text NOT NULL,
    PRIMARY KEY ("ID")
);

/*******************************************
* Adding Foreign Keys
*******************************************/
ALTER TABLE public."Mountains" 
ADD CONSTRAINT range_fk FOREIGN KEY ("RangeID") REFERENCES "MountainRanges" ("ID");

ALTER TABLE public."Comments" 
ADD CONSTRAINT user_fk FOREIGN KEY ("UserID") REFERENCES "Users" ("ID");

ALTER TABLE public."Comments" 
ADD CONSTRAINT peak_fk FOREIGN KEY ("PeakID") REFERENCES "Mountains" ("ID");

ALTER TABLE public."Users" ADD CONSTRAINT unique_un UNIQUE ("UserName");

insert into public."Mountains" ("RangeID", "PeakName", "Elevation", "Dificulty", "Info", "Link")
values (3, 'Mount Elbert', '14440', 2, 'Mount Elbert is the highest summit of the Rocky Mountains of North America and the highest point in the U.S. state of Colorado, The mountain was named in honor of a Colorado statesman, Samuel Hitt Elbert, who was active in the formative period of the state and Governor of the Territory of Colorado from 1873 to 1874.', 'https://www.14ers.com/photos/peakmain.php?peak=Mt.+Elbert'),
(3, 'Mount Massive', '14428', 2, 'Mount Massive is the second-highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/photos/peakmain.php?peak=Mt.+Massive'),
(3, 'Mount Harvard', '14421', 2, 'Mount Harvard is the third highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/photos/peakmain.php?peak=Mt.+Harvard'),
(4, 'Blanca Peak', '14351', 2, 'Blanca Peak is the fourth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/photos/peakmain.php?peak=Blanca+Peak'),
(3, 'La Plata Peak', '14343', 3, 'La Plata Peak is the fifth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=La+Plata+Peak'),
(1, 'Uncompahgre Peak', '14321', 2, 'Uncompahgre Peak is the sixth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Uncompahgre+Peak'),
(4, 'Crestone Peak', '14300', 3, 'Crestone Peak is the seventh highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Crestone+Peak'),
(5, 'Mount Lincoln', '14293', 2, 'Mount Lincoln is the Eighth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Mt.+Lincoln'),
(6, 'Castle Peak', '14279', 2, 'Castle Peak is the nineth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Castle+Peak'),
(2, 'Grays Peak', '14278', 3, 'Grays Peak is the tenth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Grays+Peak'),
(3, 'Mount Antero', '14276', 2, 'Mount Antero is the eleventh highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Mt.+Antero'),
(2, 'Torreys Peak', '14275', 3, 'Torreys Peak is the twelfth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Torreys+Peak'),
(5, 'Quandary Peak', '14271', 3, 'Quandary Peak is the thirteenth highest summit of the Rocky Mountains of North America and the U.S. state of Colorado.', 'https://www.14ers.com/routelist.php?peak=Quandary+Peak'),