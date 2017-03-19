<?php

/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/3/6
 * Time: ÉÏÎç2:54
 */
namespace AppBundle\Controller\Backend;

use AppBundle\Entity\TvSeries;
use AppBundle\Form\TvSeriesType;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Component\HttpFoundation\Request;
/**
 * Admin controller.
 *
 * @Route("/admin")
 */
class AdminController extends Controller
{
    /**
     * Lists all tvSeries entities.
     *
     * @Route("/", name="_adminIndex")
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
        return $this->render('backend/tvseries/index.html.twig', array(
            'tvSeries' => $pagination,
        ));
    }

    /**
     * Creates a new tvSeries entity.
     *
     * @Route("/new", name="_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $tvSeries = new Tvseries();
        $form = $this->createForm(TvSeriesType::class, $tvSeries);//'AppBundle\Form\TvSeriesType'
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($tvSeries);
            $em->flush($tvSeries);//$em->flush($tvSeries);

            return $this->redirectToRoute('_show', array('id' => $tvSeries->getId()));
        }

        return $this->render('backend/tvseries/new.html.twig', array(
            'tvSeries' => $tvSeries,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a tvSeries entity.
     *
     * @Route("/{id}", name="_show")
     * @Method("GET")
     */
    public function showAction(TvSeries $tvSeries)
    {
        $deleteForm = $this->createDeleteForm($tvSeries);

        return $this->render('backend/tvseries/show.html.twig', array(
            'tvSeries' => $tvSeries,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing tvSeries entity.
     *
     * @Route("/{id}/edit", name="_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, TvSeries $tvSeries)
    {
        $deleteForm = $this->createDeleteForm($tvSeries);
        $editForm = $this->createForm('AppBundle\Form\TvSeriesType', $tvSeries);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('_edit', array('id' => $tvSeries->getId()));
        }

        return $this->render('backend/tvseries/edit.html.twig', array(
            'tvSeries' => $tvSeries,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a tvSeries entity.
     *
     * @Route("/{id}", name="_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, TvSeries $tvSeries)
    {
        $form = $this->createDeleteForm($tvSeries);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($tvSeries);
            $em->flush($tvSeries);
        }

        return $this->redirectToRoute('_adminIndex');
    }

    /**
     * Creates a form to delete a tvSeries entity.
     *
     * @param TvSeries $tvSeries The tvSeries entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(TvSeries $tvSeries)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('_delete', array('id' => $tvSeries->getId())))
            ->setMethod('DELETE')
            ->getForm()
            ;
    }
}