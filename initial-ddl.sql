-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Aug 02, 2019 at 02:02 AM
-- Server version: 10.3.12-MariaDB-1:10.3.12+maria~bionic
-- PHP Version: 7.2.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `trabalho`
--

-- --------------------------------------------------------

--
-- Table structure for table `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `senha` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `email`, `senha`) VALUES
(2, 'Bruno', 'muchsousa@hotmail.com', '$1$Y/MFVR8S$GQSrST.z3Xg03vPnxvfbX/'),
(3, 'Teste', 'teste@teste.com', '$1$FzixkSAn$Fdq5XHnRZy4JBEk8CdEVQ0');

-- --------------------------------------------------------

--
-- Table structure for table `produto`
--

CREATE TABLE `produto` (
  `id` int(11) NOT NULL,
  `titulo` varchar(250) NOT NULL,
  `imagem` varchar(300) NOT NULL,
  `detalhes` text NOT NULL,
  `valor` float(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `produto`
--

INSERT INTO `produto` (`id`, `titulo`, `imagem`, `detalhes`, `valor`) VALUES
(1, 'Kit Escalada', 'https://cdn.simplo7.net/static/2405/sku/kits-montados-escalada-espeleo-rapel-tirolesa-5895E03338A3D-1533501521760.png', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', 435.26),
(2, 'Parapente Cyclus', 'https://cdn1.toplojas.com.br/loja/WAssets/98/Produtos/941258/Fotos/G_bef9d0-1043-cyclus1.jpg', 'Mussum Ipsum, cacilds vidis litro abertis. Paisis, filhis, espiritis santis. Praesent vel viverra nisi. Mauris aliquet nunc non turpis scelerisque, eget. Mais vale um bebadis conhecidiss, que um alcoolatra anonimis. Suco de cevadiss deixa as pessoas mais interessantis', 10980.00),
(3, 'Caiaque com 1 Remo Caiaker Lambari', 'https://imgcentauro-a.akamaihd.net/900x900/72249186/caiaque-com-1-remo-caiaker-lambari-img.jpg', 'Desenvolvido em polietileno de alta performance e resistente a impactos, esse Caiaque Caiaker Lambari é a opção perfeita para curtir momentos de lazer no mar, lagos e rios sem corredeiras fortes. Com boa estabilidade, o Caiaque Lambari é leve e comporta até 85 Kg para maior segurança. Autodrenável e fácil de manobrar, o Caiaque com 1 Remo possui alças que facilitam o transporte. Além disso, um remo em alumínio e polipropileno acompanha seu caiaque para garantir a diversão completa. Não perca a chance e adquira o Caiaker Lambari para proporcionar momentos únicos junto à natureza. Confira o preço e aproveite! ', 899.99),
(4, 'SPOT X - Comunicador Satelital Bidirecional', 'https://www.bianch.com.br/media/catalog/product/cache/1/image/800x/9df78eab33525d08d6e5fb8d27136e95/s/p/spotx.png', 'LEVE SUA COMUNICAÇÃO EXTREMA PARA O PRÓXIMO NÍVEL. TROQUE MENSAGENS DE QUALQUER LUGAR, ALÉM DE CONTAR COM A SEGURANÇA DA FUNÇÃO S.O.S.\r\n\r\nTeclado iluminado QWERTY\r\nTela retroiluminada de 2,7”\r\nNúmero de telefone móvel (EUA) para recebimento de SMS\r\nResistente à água, poeira e impactos (IP67)\r\nBateria de lítio recarregável\r\n\r\nO SPOT X envia e recebe mensagens 100% via satélite, para que você esteja sempre conectado com seus familiares, amigos e equipes de trabalho quando estiver fora da rede celular, incluindo comunicação direta com serviços de Busca e Resgate em casos de emergência com risco de vida. Com o SPOT X você terá um número de telefone único (EUA) para que outras pessoas enviem mensagens de SMS diretamente de seus celulares, além da comunicação por e-mail.\r\n\r\n\r\nFUNÇÕES\r\n\r\nMENSAGENS\r\nTroque mensagens de SMS ou e-mail em praticamente qualquer lugar do mundo. \r\n\r\nS.O.S. \r\nEnvie um chamado S.O.S para a Central de Busca e Resgate GEOS, troque mensagens explicando a natureza e gravidade de sua emergência e receba confirmação quando a ajuda estiver a caminho. \r\n\r\nRASTREIO\r\nMonitore seu movimento em intervalos de 2 ½, 5, 10, 30 ou 60 minutos e permita que seus familiares, amigos e outros aventureiros acompanhem seu deslocamento através da Página Compartilhada SPOT, integrada ao Google Maps™. \r\n\r\nCHECK-IN\r\nInforme a todos de forma rápida e fácil que você está bem. \r\n\r\nREDES SOCIAIS\r\nConecte seus perfis nas redes sociais para enviar atualizações diretamente do seu SPOT X e manter seus amigos sempre atualizados. \r\n\r\nBÚSSOLA\r\nBússola integrada e pontos de referência programáveis para te ajudarem na navegação durante suas aventuras. ', 990.90),
(5, 'Skate Longboard Swingboard Simulador Surf Mormaii Promocao', 'https://img1.madeiramadeira.com.br/product/images/74710433-skate-swingboard-salgue-se-quem-puder-mormaiiprdvqcirwl76eznk-179-1-800x800.jpg', 'sem detalhes', 301.70),
(6, 'Patins Oxer Darkness Gold - In Line - Freestyle - ABEC 7 - Base de Aluminio - Adulto', 'https://imgcentauro-a.akamaihd.net/900x900/8884773L/patins-oxer-darkness-gold-in-line-freestyle-abec-7-base-de-aluminio-adulto-img.jpg', 'Confira os Patins Oxer Darkness Gold - In Line - Freestyle - ABEC 7 - Base de Alumínio – Adulto!\r\n\r\n\r\nLiberdade e diversão você encontra com esses Patins Oxer Darkness Gold!\r\n\r\n\r\nSua bota apresenta material têxtil acolchoado na parte interna para comodidade em todos os momentos com estrutura externa rígida que proporciona maior apoio e estabilidade durante os giros e saltos. As rodas em PU oferecem um deslize suave e confortável nas superfícies lisas e cimentadas. Com travas de segurança para reforçar o ajuste, os Patins Oxer apresentam base em alumínio e rolamentos ABEC7. De estilo Freestyle, sem freios, são indicados para você, que busca direcionamentos rápidos nas manobras com pequenos obstáculos. Não perca a oportunidade e garanta ótimos momentos de alegria e entretimento com os Patins Oxer Freestyle. Aproveite o preço!', 287.99);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produto`
--
ALTER TABLE `produto`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `produto`
--
ALTER TABLE `produto`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;