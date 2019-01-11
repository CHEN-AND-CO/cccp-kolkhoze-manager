<?php

namespace BackOfficeBundle\Repository;

/**
 * UserRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class UserRepository extends \Doctrine\ORM\EntityRepository
{
	public function findAllThatMatchWith($reg) {
		return $this->getEntityManager()
					->getRepository("BackOfficeBundle:User")
					->createQueryBuilder("u")

					->where("u.nom LIKE :nom")
					->setParameter("nom", "%" . $reg . "%")
					->orderBy("u.nom", "ASC")
					->orderBy("u.prenom", "ASC")

					->getQuery()
					->getResult();
	}

	public function getKmPerMonth($year, $user) {
		return $this->getEntityManager()
					->createQueryBuilder()

					->select('u.nom, u.prenom, d.mois, SUM(dj.nbKm) AS somme')
					->from('BackOfficeBundle:User', 'u')
					->from('BackOfficeBundle:Deplacement', 'd')
					->from('BackOfficeBundle:DeplacementJour', 'dj')
					->where('IDENTITY(dj.deplacement) = d.id AND IDENTITY(d.user) = u.id AND d.annee = :annee AND u.id = :user')
					->setParameter("annee", $year)
					->setParameter("user", $user)
					->groupBy("d.mois")

					->getQuery()
					->getResult();
	}

/************************************************* API *************************************************/

	public function findByIdApi($id){
		return $this->getEntityManager()
					->createQueryBuilder()
					->select("u.id AS uid, u.nom AS firstname, u.prenom AS lastname, u.adresse AS address, u.distanceInit AS distance, se.service AS service, so.societe AS company")

					->from("BackOfficeBundle:User", "u")
					->from("BackOfficeBundle:Societe", "so")
					->from("BackOfficeBundle:Service", "se")

					->where("u.id = :user AND IDENTITY(u.service) = se.id AND IDENTITY(u.societe) = so.id")
					->setParameter("user", $id)

					->getQuery()
					->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
	}
}
