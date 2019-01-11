<?php

namespace BackOfficeBundle\Repository;

/**
 * DeplacementRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class DeplacementRepository extends \Doctrine\ORM\EntityRepository
{
/************************************************* API *************************************************/

	public function findAllApi(){
		return $this->getEntityManager()
					->createQueryBuilder()
					->select("dj.id AS tid, u.id AS uid, dj.date AS date, d.dateValidation AS valid_date, d.validation AS validated, td.typeDeplacement AS type, dj.nbKm AS distance, dj.montant AS amount")

					->from("BackOfficeBundle:User", "u")
					->from("BackOfficeBundle:Deplacement", "d")
					->from("BackOfficeBundle:TypeDeplacement", "td")
					->from("BackOfficeBundle:DeplacementJour", "dj")

					->where("IDENTITY(dj.deplacement) = d.id AND IDENTITY(dj.typeDeplacement) = td.id AND IDENTITY(d.user) = u.id")

					->getQuery()
					->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
	}

	public function findByUserApi($user){
		return $this->getEntityManager()
					->createQueryBuilder()
					->select("dj.id AS tid, u.id AS uid, dj.date AS date, d.dateValidation AS valid_date, d.validation AS validated, td.typeDeplacement AS type, dj.nbKm AS distance, dj.montant AS amount")

					->from("BackOfficeBundle:User", "u")
					->from("BackOfficeBundle:Deplacement", "d")
					->from("BackOfficeBundle:TypeDeplacement", "td")
					->from("BackOfficeBundle:DeplacementJour", "dj")

					->where("IDENTITY(dj.deplacement) = d.id AND IDENTITY(dj.typeDeplacement) = td.id AND IDENTITY(d.user) = u.id AND u.id = :user")
					->setParameter("user", $user)

					->getQuery()
					->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
	}

	public function findByUserYearMonthApi($user, $year, $month){
		return $this->getEntityManager()
					->createQueryBuilder()
					->select("dj.id AS tid, u.id AS uid, dj.date AS date, d.dateValidation AS valid_date, d.validation AS validated, td.typeDeplacement AS type, dj.nbKm AS distance, dj.montant AS amount")

					->from("BackOfficeBundle:User", "u")
					->from("BackOfficeBundle:Deplacement", "d")
					->from("BackOfficeBundle:TypeDeplacement", "td")
					->from("BackOfficeBundle:DeplacementJour", "dj")

					->where("IDENTITY(dj.deplacement) = d.id AND IDENTITY(dj.typeDeplacement) = td.id AND IDENTITY(d.user) = u.id AND u.id = :user AND d.annee = :year AND d.mois = :month")
					->setParameter("user", $user)
					->setParameter("year", $year)
					->setParameter("month", $month)

					->getQuery()
					->getResult(\Doctrine\ORM\Query::HYDRATE_ARRAY);
	}
}
