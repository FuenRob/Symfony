CREATE TABLE apartado (id BIGINT AUTO_INCREMENT, titulo VARCHAR(255) NOT NULL, id_autor BIGINT NOT NULL, tipo_id BIGINT NOT NULL, introduccion TEXT NOT NULL, materiales TEXT NOT NULL, metodologia TEXT NOT NULL, procedimiento TEXT NOT NULL, resultados TEXT NOT NULL, conclusion TEXT NOT NULL, bibliografia TEXT NOT NULL, tesis_id BIGINT NOT NULL, INDEX tipo_id_idx (tipo_id), INDEX tesis_id_idx (tesis_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE autor_noticia (tesis_id BIGINT, autor_id BIGINT, PRIMARY KEY(tesis_id, autor_id)) ENGINE = INNODB;
CREATE TABLE autor_tesis (tesis_id BIGINT, autor_id BIGINT, PRIMARY KEY(tesis_id, autor_id)) ENGINE = INNODB;
CREATE TABLE comentario (id BIGINT AUTO_INCREMENT, texto VARCHAR(140) NOT NULL, fecha DATE NOT NULL, usuario_id BIGINT NOT NULL, noticia_id BIGINT NOT NULL, INDEX noticia_id_idx (noticia_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_privado (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, titulo VARCHAR(255) NOT NULL, id_destinatario BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_destinatario_idx (id_destinatario), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE mensaje_respuesta (contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, id_tema BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), PRIMARY KEY(id_tema)) ENGINE = INNODB;
CREATE TABLE mensaje_tema (id BIGINT AUTO_INCREMENT, contenido LONGTEXT NOT NULL, id_autor BIGINT NOT NULL, titulo VARCHAR(255) NOT NULL, id_seccion BIGINT NOT NULL, fijo TINYINT(1) NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX id_autor_idx (id_autor), INDEX id_seccion_idx (id_seccion), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE noticia (id BIGINT AUTO_INCREMENT, titulo VARCHAR(150) NOT NULL, subtitulo VARCHAR(250) NOT NULL, texto TEXT NOT NULL, fecha DATE NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE rol (id BIGINT AUTO_INCREMENT, nombre VARCHAR(20) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE seccion (id BIGINT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, descripcion VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE seccion_noticia (seccion_id BIGINT, importancia BIGINT, noticia_id BIGINT, PRIMARY KEY(seccion_id, noticia_id)) ENGINE = INNODB;
CREATE TABLE seccion_tesis (seccion_id BIGINT, tesis_id BIGINT, PRIMARY KEY(seccion_id, tesis_id)) ENGINE = INNODB;
CREATE TABLE tesis (id BIGINT AUTO_INCREMENT, titulo VARCHAR(255) NOT NULL, id_autor BIGINT NOT NULL, tipo_id BIGINT NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE tesis_tema (id BIGINT AUTO_INCREMENT, titulo VARCHAR(255) NOT NULL, id_autor BIGINT NOT NULL, tipo_id BIGINT NOT NULL, id_tipo BIGINT NOT NULL, id_tesis BIGINT NOT NULL, texto TEXT NOT NULL, INDEX id_tipo_idx (id_tipo), INDEX id_tesis_idx (id_tesis), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE tipo (id BIGINT AUTO_INCREMENT, nombre VARCHAR(255) NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE tipo_tesis (tipo_id BIGINT, tesis_id BIGINT, PRIMARY KEY(tipo_id, tesis_id)) ENGINE = INNODB;
CREATE TABLE usuario (id BIGINT AUTO_INCREMENT, nombre_completo VARCHAR(255) NOT NULL, username VARCHAR(20) NOT NULL, password VARCHAR(60) NOT NULL, id_rol BIGINT NOT NULL, INDEX id_rol_idx (id_rol), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
ALTER TABLE apartado ADD CONSTRAINT apartado_tipo_id_tipo_id FOREIGN KEY (tipo_id) REFERENCES tipo(id);
ALTER TABLE apartado ADD CONSTRAINT apartado_tesis_id_tesis_id FOREIGN KEY (tesis_id) REFERENCES tesis(id);
ALTER TABLE autor_noticia ADD CONSTRAINT autor_noticia_tesis_id_tesis_id FOREIGN KEY (tesis_id) REFERENCES tesis(id);
ALTER TABLE autor_tesis ADD CONSTRAINT autor_tesis_tesis_id_tesis_id FOREIGN KEY (tesis_id) REFERENCES tesis(id);
ALTER TABLE comentario ADD CONSTRAINT comentario_noticia_id_noticia_id FOREIGN KEY (noticia_id) REFERENCES noticia(id);
ALTER TABLE mensaje ADD CONSTRAINT mensaje_id_autor_usuario_id FOREIGN KEY (id_autor) REFERENCES usuario(id);
ALTER TABLE mensaje_privado ADD CONSTRAINT mensaje_privado_id_destinatario_usuario_id FOREIGN KEY (id_destinatario) REFERENCES usuario(id);
ALTER TABLE mensaje_respuesta ADD CONSTRAINT mensaje_respuesta_id_autor_usuario_id FOREIGN KEY (id_autor) REFERENCES usuario(id);
ALTER TABLE mensaje_tema ADD CONSTRAINT mensaje_tema_id_seccion_seccion_id FOREIGN KEY (id_seccion) REFERENCES seccion(id);
ALTER TABLE mensaje_tema ADD CONSTRAINT mensaje_tema_id_autor_usuario_id FOREIGN KEY (id_autor) REFERENCES usuario(id);
ALTER TABLE seccion_noticia ADD CONSTRAINT seccion_noticia_seccion_id_seccion_id FOREIGN KEY (seccion_id) REFERENCES seccion(id);
ALTER TABLE seccion_noticia ADD CONSTRAINT seccion_noticia_noticia_id_noticia_id FOREIGN KEY (noticia_id) REFERENCES noticia(id);
ALTER TABLE seccion_tesis ADD CONSTRAINT seccion_tesis_tesis_id_tesis_id FOREIGN KEY (tesis_id) REFERENCES tesis(id);
ALTER TABLE seccion_tesis ADD CONSTRAINT seccion_tesis_seccion_id_seccion_id FOREIGN KEY (seccion_id) REFERENCES seccion(id);
ALTER TABLE tesis_tema ADD CONSTRAINT tesis_tema_id_tipo_tipo_id FOREIGN KEY (id_tipo) REFERENCES tipo(id);
ALTER TABLE tesis_tema ADD CONSTRAINT tesis_tema_id_tesis_tesis_id FOREIGN KEY (id_tesis) REFERENCES tesis(id);
ALTER TABLE tipo_tesis ADD CONSTRAINT tipo_tesis_tipo_id_tipo_id FOREIGN KEY (tipo_id) REFERENCES tipo(id);
ALTER TABLE tipo_tesis ADD CONSTRAINT tipo_tesis_tesis_id_tesis_id FOREIGN KEY (tesis_id) REFERENCES tesis(id);
ALTER TABLE usuario ADD CONSTRAINT usuario_id_rol_rol_id FOREIGN KEY (id_rol) REFERENCES rol(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
