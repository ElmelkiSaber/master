<?php

namespace MainBundle\Controller;

use MainBundle\Entity\StatutSocial;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Statutsocial controller.
 *
 * @Route("statut/social")
 */
class StatutSocialController extends Controller
{
    /**
     * Lists all statutSocial entities.
     *
     * @Route("/", name="statut_social_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $statutSocials = $em->getRepository('MainBundle:StatutSocial')->findAll();

        return $this->render('statutsocial/index.html.twig', array(
            'statutSocials' => $statutSocials,
        ));
    }

    /**
     * Creates a new statutSocial entity.
     *
     * @Route("/new", name="statut_social_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $statutSocial = new Statutsocial();
        $form = $this->createForm('MainBundle\Form\StatutSocialType', $statutSocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($statutSocial);
            $em->flush();

            return $this->redirectToRoute('statut_social_show', array('id' => $statutSocial->getId()));
        }

        return $this->render('statutsocial/new.html.twig', array(
            'statutSocial' => $statutSocial,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a statutSocial entity.
     *
     * @Route("/{id}", name="statut_social_show")
     * @Method("GET")
     */
    public function showAction(StatutSocial $statutSocial)
    {
        $deleteForm = $this->createDeleteForm($statutSocial);

        return $this->render('statutsocial/show.html.twig', array(
            'statutSocial' => $statutSocial,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing statutSocial entity.
     *
     * @Route("/{id}/edit", name="statut_social_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, StatutSocial $statutSocial)
    {
        $deleteForm = $this->createDeleteForm($statutSocial);
        $editForm = $this->createForm('MainBundle\Form\StatutSocialType', $statutSocial);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('statut_social_edit', array('id' => $statutSocial->getId()));
        }

        return $this->render('statutsocial/edit.html.twig', array(
            'statutSocial' => $statutSocial,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a statutSocial entity.
     *
     * @Route("/{id}", name="statut_social_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, StatutSocial $statutSocial)
    {
        $form = $this->createDeleteForm($statutSocial);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($statutSocial);
            $em->flush();
        }

        return $this->redirectToRoute('statut_social_index');
    }

    /**
     * Creates a form to delete a statutSocial entity.
     *
     * @param StatutSocial $statutSocial The statutSocial entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(StatutSocial $statutSocial)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('statut_social_delete', array('id' => $statutSocial->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
