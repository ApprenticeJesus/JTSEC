CREATE DATABASE IF NOT EXISTS php_test;

USE php_test;

CREATE TABLE IF NOT EXISTS projects(
    id int(255) auto_increment not null,
    name varchar(50) NOT NULL,
    lang varchar(20),
    
    CONSTRAINT pk_projects PRIMARY KEY(id)
) ENGINE = InnoDb;

CREATE TABLE IF NOT EXISTS activities(
    id int(255) auto_increment not null,
    name varchar(100),
    project_id varchar(255),
    created_at datetime DEFAULT NULL,
    updated_at datetime DEFAULT NULL,

    CONSTRAINT pk_activities PRIMARY KEY(id)
) ENGINE = InnoDb;

CREATE TABLE IF NOT EXISTS users(
    id int(255) auto_increment not null,
    email varchar (128),
    password varchar (250),
    proj_rol varchar(50),
    act_rol varchar(50),

    CONSTRAINT pk_users PRIMARY KEY(id)
)ENGINE = InnoDb;

CREATE TABLE IF NOT EXISTS incidences(
    id int(255) auto_increment not null,
    act_id int(255) NOT NULL,
    user_id int(255) NOT NULL,
    title varchar(255),
    content text not null,
    created_at datetime DEFAULT NULL,
    updated_at datetime DEFAULT NULL,
    CONSTRAINT pk_incidences PRIMARY KEY(id),
    CONSTRAINT fk_incidence_user FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_incidence_activity FOREIGN KEY (act_id) REFERENCES activities(id)
) ENGINE = InnoDb;

