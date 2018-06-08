<?php
namespace FastFood\Database;

use Doctrine\ORM\EntityManager;
use Doctrine\ORM\Tools\Setup;

class Database
{
  /** @var EntityManager */
  protected $entityManager;

  public function createEm(array $config)
  {
    $isDevMode = $config['isDevMode'];

    $setup = Setup::createAnnotationMetadataConfiguration($config['path'], $isDevMode);
    $this->entityManager = EntityManager::create($config, $setup);

    return $this;
  }
  /**
   * @return EntityManager
   */
  public function getEntityManager(): EntityManager
  {
    return $this->entityManager;
  }

  /**
   * @param EntityManager $entityManager
   * @return Database
   */
  public function setEntityManager(EntityManager $entityManager): self
  {
    $this->entityManager = $entityManager;

    return $this;
  }
}