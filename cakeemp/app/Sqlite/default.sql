

CREATE TABLE documents(
id INTEGER PRIMARY KEY ASC,
titre TEXT,
employe_id INTEGER,
user_id INTEGER
);

INSERT INTO `documents` (`id`, `titre`, `employe_id`, `user_id`) VALUES
(1, 'Le premier Document', 2, 1),
(3, 'Neu Dokuments', 2, 1),
(4, 'Le premier a gerad', 4, 0);

CREATE TABLE employes(
id INTEGER PRIMARY KEY ASC,
nom TEXT
);

INSERT INTO `employes` (`id`, `nom`) VALUES
(1, 'Denise'),
(2, 'Martin'),
(3, 'Bernard'),
(4, 'Gerad');

CREATE TABLE employes_postes(
id INTEGER PRIMARY KEY ASC,
employe_id INTEGER,
poste_id INTEGER
);

INSERT INTO `employes_postes` (`id`, `employe_id`, `poste_id`) VALUES
(3, 2, 1),
(2, 2, 2),
(4, 1, 3),
(5, 4, 1);

CREATE TABLE postes(
id INTEGER PRIMARY KEY ASC,
poste TEXT
);

INSERT INTO `postes` (`id`, `poste`) VALUES
(1, 'Secretaire'),
(2, 'Directeur'),
(3, 'Prof');

CREATE TABLE users(
id INTEGER PRIMARY KEY ASC,
  username TEXT,
  password TEXT,
  email TEXT,
  name TEXT,
  role TEXT,
  hash_change_password TEXT,
  created TEXT,
  modified TEXT
);

INSERT INTO `users` (`id`, `username`, `password`, `email`, `name`, `role`, `hash_change_password`, `created`, `modified`) VALUES
(1, 'Admin', '511e5c8ba35f3ac7e4e518044b233137d1ee43bb', 'admin@admin.com', NULL, 'admin', NULL, '2014-11-02 16:32:31', '2014-11-02 16:32:31'),
(2, 'MaximeGregoire', '511e5c8ba35f3ac7e4e518044b233137d1ee43bb', 'MaximeGregoire@php.com', NULL, 'author', NULL, '2014-11-03 03:44:00', '2014-11-03 03:44:00');

