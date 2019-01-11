<?php

namespace BackOfficeBundle\Repository;

/**
 * SocieteRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SocieteRepository extends \Doctrine\ORM\EntityRepository
{
	public function getKmPerSociety() {
		return $this->getEntityManager()
					->createQueryBuilder()
					->select('s.societe, SUM(dj.nbKm) AS somme')
					->from('BackOfficeBundle:User', 'u')
					->from('BackOfficeBundle:Societe', 's')
					->from('BackOfficeBundle:Deplacement', 'd')
					->from('BackOfficeBundle:DeplacementJour', 'dj')
					->where('IDENTITY(dj.deplacement) = d.id AND IDENTITY(d.user) = u.id AND IDENTITY(u.societe) = s.id')
					->groupBy("s.societe")

					->getQuery()
					->getResult();
	}

	public function getNbUsersPerSociety() {
		return $this->getEntityManager()
					->createQueryBuilder()
					->select('s.societe, COUNT(u.id) AS nb')
					->from('BackOfficeBundle:User', 'u')
					->from('BackOfficeBundle:Societe', 's')
					->where('IDENTITY(u.societe) = s.id')
					->groupBy("s.societe")

					->getQuery()
					->getResult();
	}
}
