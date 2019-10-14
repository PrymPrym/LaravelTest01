-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               5.7.27-0ubuntu0.18.04.1 - (Ubuntu)
-- Server OS:                    Linux
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping data for table Laravel.failed_jobs: ~0 rows (approximately)
/*!40000 ALTER TABLE `failed_jobs` DISABLE KEYS */;
/*!40000 ALTER TABLE `failed_jobs` ENABLE KEYS */;

-- Dumping data for table Laravel.films: ~7 rows (approximately)
/*!40000 ALTER TABLE `films` DISABLE KEYS */;
INSERT INTO `films` (`id`, `starts`, `filmname`, `category`, `price`, `created_at`, `updated_at`) VALUES
	(85, '10:20', 'Гемини 2D', '12+', 100, '2019-10-14 07:18:06', '2019-10-14 07:18:06'),
	(86, '12:40', 'Девушки бывают разные 2D', '16+', 150, '2019-10-14 07:18:06', '2019-10-14 07:18:06'),
	(87, '14:30', 'Гемини 2D', '12+', 150, '2019-10-14 07:18:06', '2019-10-14 07:18:06'),
	(88, '16:50', 'Девушки бывают разные 2D', '16+', 150, '2019-10-14 07:18:06', '2019-10-14 07:18:06'),
	(89, '18:40', 'Джокер 2D', '18+', 180, '2019-10-14 07:18:06', '2019-10-14 07:18:06'),
	(90, '21:05', 'Гемини 2D', '12+', 180, '2019-10-14 07:18:06', '2019-10-14 07:18:06'),
	(91, '23:25', 'Гемини 2D', '12+', 180, '2019-10-14 07:18:06', '2019-10-14 07:18:06');
/*!40000 ALTER TABLE `films` ENABLE KEYS */;

-- Dumping data for table Laravel.migrations: ~4 rows (approximately)
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '2014_10_12_000000_create_users_table', 1),
	(2, '2014_10_12_100000_create_password_resets_table', 1),
	(3, '2019_08_19_000000_create_failed_jobs_table', 1),
	(7, '2019_10_10_151849_create_films_table', 2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;

-- Dumping data for table Laravel.password_resets: ~0 rows (approximately)
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;

-- Dumping data for table Laravel.users: ~0 rows (approximately)
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
/*!40000 ALTER TABLE `users` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
