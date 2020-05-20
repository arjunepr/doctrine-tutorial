<?php

require_once(__DIR__ . '/vendor/autoload.php');

$classDirs = array(
	__DIR__,
	__DIR__ . '/entities',
);

new \iRAP\Autoloader\Autoloader($classDirs);

function getEntityManager(): \Doctrine\ORM\EntityManager
{
	$entityManager = null;
	if ($entityManager == null)
	{
		$paths = array(__DIR__ . '/entities');
		$config = \Doctrine\ORM\Tools\Setup::createAnnotationMetadataConfiguration($paths);
		$connectionParams = array(
			'driver' => 'pdo_sqlite',
			'path' => __DIR__ . '/data/my-database.db',
		);

		$entityManager = \Doctrine\ORM\EntityManager::create($connectionParams, $config);
	}
	return $entityManager;
}

