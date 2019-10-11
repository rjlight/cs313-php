CREATE TABLE student (
id              SERIAL NOT NULL PRIMARY KEY,
name            varchar(30) NOT NULL,
age             int NOT NULL,
instrument      varchar(30) NOT NULL,
lesson_before   text NOT NULL,
lesson_day      varchar(20) NOT NULL,
lesson_time     int NOT NULL,
PRIMARY KEY(id)
);

CREATE TABLE parent (
id                 SERIAL NOT NULL PRIMARY KEY,
name               varchar(30) NOT NULL,
email              varchar(50) NOT NULL,
phone_number       int NOT NULL,
best_form_contact  varchar(20) NOT NULL,
PRIMARY KEY(id)
);

CREATE TABLE account (
username            varchar(30) NOT NULL,
password            varchar(30) NOT NULL,
student_id_1        int NOT NULL REFERENCES student(id),
student_id_2        int NOT NULL REFERENCES student(id),
student_id_3        int NOT NULL REFERENCES student(id),
student_id_4        int NOT NULL REFERENCES student(id),
parent_id_1         int NOT NULL REFERENCES parent(id),
parent_id_2         int NOT NULL REFERENCES parent(id),
PRIMARY KEY(username)
);