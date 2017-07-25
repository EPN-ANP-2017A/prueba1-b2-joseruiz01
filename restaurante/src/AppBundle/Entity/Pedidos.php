<?php

namespace AppBundle\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Pedidos
 *
 * @ORM\Table(name="pedidos")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\PedidosRepository")
 */
class Pedidos
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=30, unique=true)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="plato", type="string", length=30, unique=true)
     */
    private $plato;

    /**
     * @var int
     *
     * @ORM\Column(name="cantidad", type="integer")
     */
    private $cantidad;

    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Pedidos
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set plato
     *
     * @param string $plato
     *
     * @return Pedidos
     */
    public function setPlato($plato)
    {
        $this->plato = $plato;

        return $this;
    }

    /**
     * Get plato
     *
     * @return string
     */
    public function getPlato()
    {
        return $this->plato;
    }

    /**
     * Set cantidad
     *
     * @param integer $cantidad
     *
     * @return Pedidos
     */
    public function setCantidad($cantidad)
    {
        $this->cantidad = $cantidad;

        return $this;
    }

    /**
     * Get cantidad
     *
     * @return int
     */
    public function getCantidad()
    {
        return $this->cantidad;
    }

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Cliente", inversedBy="pedidos")
     * @ORM\JoinColumn(name="cliente_id", referencedColumnName="id")
     */
    private $clientep;

    /**
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Platos", inversedBy="pedidos")
     * @ORM\JoinColumn(name="plato_id", referencedColumnName="id")
     */
    private $platop;

    /**
     * Set clientep
     *
     * @param \AppBundle\Entity\Cliente $clientep
     *
     * @return Pedidos
     */
    public function setClientep(\AppBundle\Entity\Cliente $clientep = null)
    {
        $this->clientep = $clientep;

        return $this;
    }

    /**
     * Get clientep
     *
     * @return \AppBundle\Entity\Cliente
     */
    public function getClientep()
    {
        return $this->clientep;
    }

    /**
     * Set platop
     *
     * @param \AppBundle\Entity\Platos $platop
     *
     * @return Pedidos
     */
    public function setPlatop(\AppBundle\Entity\Platos $platop = null)
    {
        $this->platop = $platop;

        return $this;
    }

    /**
     * Get platop
     *
     * @return \AppBundle\Entity\Platos
     */
    public function getPlatop()
    {
        return $this->platop;
    }
}
