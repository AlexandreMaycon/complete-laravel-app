-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Out-2022 às 16:53
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prova`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `neighborhood`
--

CREATE TABLE `neighborhood` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_city` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `neighborhood`
--

INSERT INTO `neighborhood` (`id`, `name`, `id_city`, `created_at`, `updated_at`) VALUES
(1, 'Lagoa', 1, '2022-10-09 09:47:17', '2022-10-09 09:47:17'),
(2, 'Barra da Tijuca', 2, '2022-10-09 09:47:26', '2022-10-09 09:47:26'),
(3, 'Alphaville', 3, '2022-10-09 09:47:46', '2022-10-09 09:47:46'),
(4, 'Centro', 1, '2022-10-09 09:49:10', '2022-10-09 09:49:10'),
(5, 'Savassi', 1, '2022-10-09 09:49:24', '2022-10-09 09:49:24'),
(6, 'Jaqueline', 1, '2022-10-09 09:49:35', '2022-10-09 17:42:02'),
(7, 'Cajazeiras', 4, '2022-10-09 09:49:56', '2022-10-09 09:49:56'),
(8, 'Pedra Branca', 5, '2022-10-09 17:43:17', '2022-10-09 17:43:17');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD PRIMARY KEY (`id`),
  ADD KEY `neighborhood_id_city_foreign` (`id_city`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `neighborhood`
--
ALTER TABLE `neighborhood`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `neighborhood`
--
ALTER TABLE `neighborhood`
  ADD CONSTRAINT `neighborhood_id_city_foreign` FOREIGN KEY (`id_city`) REFERENCES `city` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
