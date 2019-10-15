CREATE TABLE student (
id              SERIAL NOT NULL PRIMARY KEY,
name            varchar(30) NOT NULL,
age             int NOT NULL,
instrument      varchar(30) NOT NULL,
lesson_before   text NOT NULL,
lesson_day      varchar(20) NOT NULL,
lesson_time     varchar(10) NOT NULL
);

CREATE TABLE parent (
id                 SERIAL NOT NULL PRIMARY KEY,
name               varchar(30) NOT NULL,
email              varchar(50) NOT NULL,
phone_number       int NOT NULL,
best_form_contact  varchar(20) NOT NULL
);

CREATE TABLE account (
username            varchar(30) NOT NULL,
password            varchar(30) NOT NULL,
student_id_1        int NOT NULL REFERENCES student(id),
student_id_2        int REFERENCES student(id),
student_id_3        int REFERENCES student(id),
student_id_4        int REFERENCES student(id),
parent_id_1         int NOT NULL REFERENCES parent(id),
parent_id_2         int REFERENCES parent(id),
PRIMARY KEY(username)
);
INSERT INTO account (username, password, student_id_1, parent_id_1) 
VALUES ('lightclan', 'welovelight', 1, 1);

INSERT INTO student (name, age, instrument, lesson_before, lesson_day, lesson_time) 
VALUES ('Leah Light', 14, 'violin', 'Yes, 4 years', 'Monday', '3:30 PM');

INSERT INTO parent (name, email, phone_number, best_form_contact) 
VALUES ('Marie Light', 'fakeemail@gmail.com', 333-333-9333, 'texting, please');

UPDATE account
SET student_id_2=3; 
