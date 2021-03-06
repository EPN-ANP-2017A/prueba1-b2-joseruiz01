<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\ClienteRepository")
 */
class Cliente
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
     * @ORM\Column(name="cedula", type="string", length=10)
     */
    private $cedula;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fnacimiento", type="date")
     */
    private $fnacimiento;


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
     * @return Cliente
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
        return strval($this->nombre);
    }


    /**
     * Set cedula
     *
     * @param string $cedula
     *
     * @return Cliente
     */
    public function setCedula($cedula)
    {
        $this->cedula = $cedula;

        return $this;
    }

    /**
     * Get cedula
     *
     * @return string
     */
    public function getCedula()
    {
        return $this->cedula;
    }

    /**
     * Set fnacimiento
     *
     * @param \DateTime $fnacimiento
     *
     * @return Cliente
     */
    public function setFnacimiento($fnacimiento)
    {
        $this->fnacimiento = $fnacimiento;

        return $this;
    }

    /**
     * Get fnacimiento
     *
     * @return \DateTime
     */
    public function getFnacimiento()
    {
        return $this->fnacimiento;
    }

//    /**
//     * @ORM\OneToMany(targetEntity="AppBundle\Entity\Pedidos", mappedBy="cliente")
//     */
//    private $pedidos;
//
//    public function __construct()
//    {
//        $this->pedidos = new ArrayCollection();
//    }


    /**
     * Add pedido
     *
     * @param \AppBundle\Entity\Pedidos $pedido
     *
     * @return Cliente
     */
    public function addPedido(\AppBundle\Entity\Pedidos $pedido)
    {
        $this->pedidos[] = $pedido;

        return $this;
    }

    /**
     * Remove pedido
     *
     * @param \AppBundle\Entity\Pedidos $pedido
     */
    public function removePedido(\AppBundle\Entity\Pedidos $pedido)
    {
        $this->pedidos->removeElement($pedido);
    }

    /**
     * Get pedidos
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getPedidos()
    {
        return $this->pedidos;
    }
}
