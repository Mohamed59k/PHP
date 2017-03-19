<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/28
 * Time: ÏÂÎç4:01
 */

namespace AppBundle\Controller\Backend;

use AppBundle\Entity\Episode;
use AppBundle\Form\EpisodeType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;

/**
 * Episode controller.
 *
 * @Route("/admin/episode")
 */
class EpisodeController extends Controller
{
    /**
     * Lists all Episode entities who has assigned tv-series-id.
     *
     * @Route("/{id}", name="_AEIndex")
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
        return $this->render('backend/episode/index.html.twig', array(
            'episodes' => $pagination,
            'tv' => $tv,
        ));
    }

    /**
     * Creates a new Episode entity.
     *
     * @Route("/{id}/new", name="_AENew")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request,$id)
    {
        $episode = new Episode();
        $form = $this->createForm(EpisodeType::class, $episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $episode->setTvSeriesId($id);
            $em->persist($episode);
            $em->flush($episode);

            return $this->redirectToRoute('_AEShow', array('id' => $episode->getId()));
        }

        return $this->render('backend/episode/new.html.twig', array(
            'episode' => $episode,
            'form' => $form->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing episode entity.
     *
     * @Route("/{id}/edit", name="_AEEdit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);
        $editForm = $this->createForm('AppBundle\Form\EpisodeType', $episode);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('_AEEdit', array('id' => $episode->getId()));
        }

        return $this->render('backend/episode/edit.html.twig', array(
            'tvSeries' => $episode,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }



    /**
     * Finds and displays a Episode entity.
     *
     * @Route("/{id}/show", name="_AEShow")
     * @Method("GET")
     */
    public function showAction(Episode $episode)
    {
        $deleteForm = $this->createDeleteForm($episode);

        return $this->render('backend/episode/show.html.twig', array(
            'tvSeries' => $episode,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a episode entity.
     *
     * @Route("/{id}", name="_AEDelete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Episode $episode)
    {
        $id = $episode->getTvSeriesId();
        $form = $this->createDeleteForm($episode);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($episode);
            $em->flush($episode);
        }

        return $this->redirectToRoute('_AEIndex',array('id' => $id));
    }

    /**
     * Creates a form to delete a episode entity.
     *
     * @param Episode $episode The episode entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Episode $episode)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_AEDelete', array('id' => $episode->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }

}