CREATE TABLE `usuarios` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `name` varchar(255),
  `email` varchar(255),
  `senha` varchar(255),
  `create_at` varchar(255)
);

CREATE TABLE `post` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `content` text,
  `create_at` varchar(255),
  `update_at` varchar(255)
);

CREATE TABLE `quiz` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `resposta_certa` text,
  `fonte` text,
  `questao` int
);

CREATE TABLE `questoes4respostas` (
  `id` int,
  `pergunta1` varchar(255),
  `pergunta2` varchar(255),
  `pergunta3` varchar(255),
  `pergunta4` varchar(255)
);

CREATE TABLE `trueOrFalse` (
  `id` int,
  `pergunta1` varchar(255),
  `pergunta2` varchar(255)
);

CREATE TABLE `usuarioRespondeQuiz` (
  `id` int PRIMARY KEY AUTO_INCREMENT,
  `id_quiz` int,
  `id_usuario` int,
  `resposta_usuario` text
);

ALTER TABLE `usuarioRespondeQuiz` ADD FOREIGN KEY (`id_quiz`) REFERENCES `quiz` (`id`);

ALTER TABLE `usuarioRespondeQuiz` ADD FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id`);

ALTER TABLE `post` ADD FOREIGN KEY (`id`) REFERENCES `questoes4respostas` (`id`);
