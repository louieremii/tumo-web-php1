-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 01, 2021 at 11:33 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `product_info`
--

-- --------------------------------------------------------

--
-- Table structure for table `my_products`
--

CREATE TABLE `my_products` (
  `ID` int(11) NOT NULL,
  `imgsrc` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `my_products`
--

INSERT INTO `my_products` (`ID`, `imgsrc`, `name`, `description`, `link`) VALUES
(1, '../img/product/applepie.jpg', 'Apple pie', 'An apple pie is a pie in which the principal filling ingredient is apple, originated in England. It is often served with whipped cream, ice cream, or cheddar cheese. It is generally double-crusted, with pastry both above and below the filling; the upper crust may be solid or latticed.', '../Single/single.php'),
(2, '../img/product/bananabread.jpg', 'Banana bread', 'Banana bread is a type of bread made from mashed bananas. It is often a moist, sweet, cake-like quick bread; however there are some banana bread recipes that are traditional-style raised breads.', '../Single/single.php'),
(3, '../img/product/brownie.jpg', 'Brownie', 'A chocolate brownie or simply a brownie is a square or rectangular chocolate baked confection. Brownies come in a variety of forms and may be either fudgy or cakey, depending on their density. They may include nuts, frosting, cream cheese, chocolate chips, or other ingredients.', '../Single/single.php'),
(4, '../img/product/chocolatechipcookies.jpg', 'Chocolate chip cookies', 'A chocolate chip cookie is a drop cookie that features chocolate chips or chocolate morsels as its distinguishing ingredient. Chocolate chip cookies originated in the United States around 1938, when Ruth Graves Wakefield chopped up a Nestlé semi-sweet chocolate bar and added the chopped chocolate to a cookie recipe.', '../Single/single.php'),
(5, '../img/product/cinnamonrolls.jpg', 'Cinnamon rolls', 'Cinnamon roll is a sweet roll served commonly in Northern Europe and North America. In Sweden it is called kanelbulle, in Denmark it is known as kanelsnegl, in Norway it is known as Kanelbolle, Skillingsboller and Kanelsnurr, and in Finland it is known as korvapuusti.', '../Single/single.php'),
(6, '../img/product/cupcake.jpg', 'Cupcake', 'A cupcake is a small cake designed to serve one person, which may be baked in a small thin paper or aluminum cup. As with larger cakes, frosting and other cake decorations such as fruit and candy may be applied.', '../Single/single.php'),
(7, '../img/product/lemonbar.jpeg', 'Lemon bar', 'This is my family’s favorite. These are super fun to make and turn out really well. These are also in low sodium. They take 1 hour and 35 minutes to make. And can make 20 squares or 40 triangles, depending on how you cut them.', '../Single/single.php'),
(8, '../img/product/puffpastry.jpg', 'Puff pastry', 'Puff pastry, also known as pâte feuilletée, is a flaky light pastry made from a laminated dough composed of dough and butter or other solid fat. The butter is put inside the dough, making a paton which is repeatedly folded and rolled out before baking', '../Single/single.php'),
(9, '../img/product/scone.jpg', 'Scone', 'A scone is a baked good, usually made of wheat, or oatmeal with baking powder as a leavening agent and baked on sheet pans. A scone is often slightly sweetened and occasionally glazed with egg wash. The scone is a basic component of the cream tea.', '../Single/single.php');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `my_products`
--
ALTER TABLE `my_products`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `my_products`
--
ALTER TABLE `my_products`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
