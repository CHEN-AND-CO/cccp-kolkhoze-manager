<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * DeplacementJour
 *
 * @ORM\Table(name="deplacement_jour", indexes={@ORM\Index(name="deplacement", columns={"deplacement"}), @ORM\Index(name="type_deplacement", columns={"type_deplacement"})})
 * @ORM\Entity
 */
class DeplacementJour
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var float
     *
     * @ORM\Column(name="nb_km", type="float", precision=10, scale=0, nullable=false)
     */
    private $nbKm;

    /**
     * @var float
     *
     * @ORM\Column(name="montant", type="float", precision=10, scale=0, nullable=false)
     */
    private $montant;

    /**
     * @var integer
     *
     * @ORM\Column(name="jour", type="integer", nullable=false)
     */
    private $jour;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="date", type="date", nullable=false)
     */
    private $date;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="created", type="datetime", nullable=false)
     */
    private $created;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="updated", type="datetime", nullable=false)
     */
    private $updated;

    /**
     * @var \Deplacement
     *
     * @ORM\ManyToOne(targetEntity="Deplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="deplacement", referencedColumnName="id")
     * })
     */
    private $deplacement;

    /**
     * @var \TypeDeplacement
     *
     * @ORM\ManyToOne(targetEntity="TypeDeplacement")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="type_deplacement", referencedColumnName="id")
     * })
     */
    private $typeDeplacement;


}

