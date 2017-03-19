<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/28
 * Time: ÏÂÎç4:01
 */

namespace AppBundle\Controller;

use AppBundle\Entity\Episode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Episode controller.
 *
 * @Route("/episode")
 */
class EpisodeController extends Controller
{
    /**
     * Lists all Episode entities who has assigned tv-series-id.
     *
     * @Route("/{id}", name="_episodeIndex")
     * @Method("GET")
     */
    public function listAction(Request $request,$id)
    {
        $em = $this->getDoctrine()->getManager();
        $tv = $em->getRepository('AppBundle:TvSeries')->find($id);
        $dql   = "SELECT e FROM AppBundle:Episode e WHERE e.tvSeriesId = :id ORDER BY e.episodeNumber ASC";
        $query = $em->createQuery($dql)->setParameter('id', $id);
        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $query,
            $request->query->getInt('page', 1)/*page number*/,
            10/*limit per page*/
        );
        return $this->render('episode/index.html.twig', array(
            'episodes' => $pagination,
            'tv' => $tv,
        ));
    }
}