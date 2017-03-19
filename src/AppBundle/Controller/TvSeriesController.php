<?php

namespace AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Tvseries controller.
 *
 * @Route("/")
 */
class TvSeriesController extends Controller
{
    /**
     * Lists all tvSeries entities.
     *
     * @Route("/", name="_index")
     * @Method("GET")
     */
    public function indexAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $dql   = "SELECT tv FROM AppBundle:TvSeries tv";
        $query = $em->createQuery($dql);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1)/*page number*/,
            5/*limit per page*/
        );
        return $this->render('tvseries/index.html.twig', array(
            'tvSeries' => $pagination,
        ));
    }
}
