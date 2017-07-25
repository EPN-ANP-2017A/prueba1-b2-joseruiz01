<?php

namespace AppBundle\Controller;

use AppBundle\Entity\Pedidos;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;

/**
 * Pedido controller.
 *
 * @Route("pedidos")
 */
class PedidosController extends Controller
{
    /**
     * Lists all pedido entities.
     *
     * @Route("/", name="pedidos_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $pedidos = $em->getRepository('AppBundle:Pedidos')->findAll();

        return $this->render('pedidos/index.html.twig', array(
            'pedidos' => $pedidos,
        ));
    }

    /**
     * Finds and displays a pedido entity.
     *
     * @Route("/{id}", name="pedidos_show")
     * @Method("GET")
     */
    public function showAction(Pedidos $pedido)
    {

        return $this->render('pedidos/show.html.twig', array(
            'pedido' => $pedido,
        ));
    }
}
