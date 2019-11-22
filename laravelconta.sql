INSERT INTO `bancos` (`id`, `descricao`, `created_at`, `updated_at`) VALUES
(1, 'Itaú', '2019-11-21 02:36:58', '2019-11-21 04:16:43'),
(2, 'Banco do Brasil', '2019-11-21 02:37:39', '2019-11-21 02:37:39'),
(3, 'Caixa', '2019-11-21 03:02:27', '2019-11-21 03:02:27'),
(4, 'Bradesco', '2019-11-01 03:00:00', '2019-11-02 03:00:00'),
(5, 'Santander', '2019-11-01 03:00:00', NULL),
(6, 'Banrisul', '2019-11-01 03:00:00', NULL),
(7, 'Real', '2019-11-01 03:00:00', NULL),
(8, 'Banco do S', '2019-11-01 03:00:00', NULL),
(9, 'Sitibank', '2019-11-01 03:00:00', NULL),
(10, 'HSBC', '2019-11-01 03:00:00', NULL),
(11, 'Caixa Economica Federal', '2019-11-01 03:00:00', NULL),
(12, 'Banco Mercantil do Brasil', '2019-11-01 03:00:00', NULL),
(13, 'Banco Rural', '2019-11-01 03:00:00', NULL),
(14, 'Banco Safra', '2019-11-01 03:00:00', NULL),
(15, 'Banco Rendimento', '2019-11-07 03:00:00', NULL);

INSERT INTO `clientes` (`id`, `nome`, `data_cadastro`, `created_at`, `updated_at`) VALUES
(1, 'José Leocadio', '2019-11-04', NULL, '2019-11-21 05:07:46'),
(2, 'Ana Paula', '2019-10-29', '2019-11-21 04:52:32', '2019-11-21 04:52:32');

INSERT INTO `contas` (`id`, `codcliente`, `codbanco`, `saldo`, `created_at`, `updated_at`) VALUES
(1, 1, 3, 35000.00, '2019-11-21 02:48:39', '2019-11-21 07:03:43'),
(2, 1, 1, 12000.00, '2019-11-21 02:50:03', '2019-11-21 02:50:03'),
(3, 1, 2, 12.00, '2019-11-21 05:44:16', '2019-11-21 05:44:16');



