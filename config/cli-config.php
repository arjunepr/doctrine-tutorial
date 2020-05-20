<?php

require(__DIR__ .'/../bootstrap.php');

$entityManager = getEntityManager();
return \Doctrine\ORM\Tools\Console\ConsoleRunner::createHelperSet($entityManager);

