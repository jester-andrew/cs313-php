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

