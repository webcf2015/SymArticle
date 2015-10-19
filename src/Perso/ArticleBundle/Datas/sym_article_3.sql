-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Client :  127.0.0.1
-- Généré le :  Lun 19 Octobre 2015 à 11:54
-- Version du serveur :  5.6.17
-- Version de PHP :  5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Base de données :  `sym_article`
--



INSERT INTO `article` (`id`, `letitre`, `letexte`, `ladate`, `lauteur`) VALUES
(1, 'Contenu asynchrone avec hinclude.js', 'Les contrôleurs peuvent être imbriqués de façon asynchrone avec la bibliothèque javascript hinclude.js. Comme le contenu imbriqué vient d''une autre page (un d''un autre contrôleur), Symfony2 utilise le helper standard render pour configurer les tags hinclude:\r\n\r\nNote\r\n\r\nhinclude.js doit être inclus dans votre page pour fonctionner.\r\n\r\nLe contenu par défaut (pendant le chargement ou si javascript n''est pas activé) peut être défini de manière globale dans la configuration de votre application :', '2015-10-19 11:50:54', 'Admin'),
(2, 'Liens vers des Pages', 'La création de liens vers d''autres pages de votre projet est l''opération la plus commune qui soit dans un template. Au lieu de coder en dur les URLs dans les templates, utilisez la fonction path de Twig (ou le helper router en PHP) pour générer les URLs basées sur la configuration des routes. Plus tard, si vous désirez modifier l''URL d''une page particulière, tout ce que vous avez besoin de faire c''est changer la configuration des routes; les templates génèreront automatiquement la nouvelle URL.\r\n\r\nDans un premier temps, configurons le lien vers la page « _welcome » qui est accessible via la configuration de route suivante :\r\n\r\nPour faire un lien vers cette page, utilisons simplement la fonction path de Twig en faisant référence à cette route :\r\n\r\nComme prévu, ceci génèrera l''URL /. Voyons comment cela fonctionne avec des routes plus compliquées :\r\n\r\nDans ce cas, vous devrez spécifier le nom de route (article_show) et une valeur pour le paramètre {slug}. En utilisant cette route, revoyons le template recentList de la section précédente, et faisons les liens vers les articles correctement ', '2015-10-19 11:53:23', 'Admin'),
(3, 'Liens vers des Fichiers', 'Les templates font aussi très souvent référence à des images, du Javascript, des feuilles de style et d''autres fichiers. Bien sûr vous pouvez coder en dur le chemin vers ces fichiers (/images/logo.png par exemple), mais Symfony2 fournit une façon de faire plus souple via la fonction asset de Twig :\r\n\r\nLe principal objectif de la fonction asset est de rendre votre application plus portable. Si votre application se trouve à la racine de votre hôte (http://example.com par exemple), alors les chemins se retourné sera /images/logo.png. Mais si votre application se trouve dans un sous répertoire (http://example.com/my_app par exemple), chaque chemin vers les fichiers sera alors généré avec le sous répertoire (/my_app/images/logo.png par exemple). La fonction asset fait attention à cela en déterminant comment votre application est utilisée et en générant les chemins corrects.\r\n\r\nDe plus, si vous utilisez la fonction asset, Symfony peut automatiquement ajouter une chaîne de caractères afin de garantir que la ressource statique mise à jour ne sera pas mise en cache lors de son déploiement. Par exemple, /images/logo.png pourrait ressembler à /images/logo.png?v2. Pour plus d''informations, lisez la documentation de l''option de configuration :ref:`ref-framework-assets-version`.', '2015-10-19 11:54:10', 'Jo');

