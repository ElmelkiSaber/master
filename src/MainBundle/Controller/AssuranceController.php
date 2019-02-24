<?php

namespace MainBundle\Controller;

use MainBundle\Entity\Assurance;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Assurance controller.
 *
 * @Route("assurance")
 */
class AssuranceController extends Controller
{
    /**
     * Lists all assurance entities.
     *
     * @Route("/", name="assurance_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $assurances = $em->getRepository('MainBundle:Assurance')->findAll();

        return $this->render('assurance/index.html.twig', array(
            'assurances' => $assurances,
        ));
    }

    /**
     * Creates a new assurance entity.
     *
     * @Route("/new", name="assurance_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $assurance = new Assurance();
        $form = $this->createForm('MainBundle\Form\AssuranceType', $assurance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($assurance);
            $em->flush();

            return $this->redirectToRoute('assurance_show', array('id' => $assurance->getId()));
        }

        return $this->render('assurance/new.html.twig', array(
            'assurance' => $assurance,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a assurance entity.
     *
     * @Route("/{id}", name="assurance_show")
     * @Method("GET")
     */
    public function showAction(Assurance $assurance)
    {
        $deleteForm = $this->createDeleteForm($assurance);

        return $this->render('assurance/show.html.twig', array(
            'assurance' => $assurance,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing assurance entity.
     *
     * @Route("/{id}/edit", name="assurance_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Assurance $assurance)
    {
        $deleteForm = $this->createDeleteForm($assurance);
        $editForm = $this->createForm('MainBundle\Form\AssuranceType', $assurance);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('assurance_edit', array('id' => $assurance->getId()));
        }

        return $this->render('assurance/edit.html.twig', array(
            'assurance' => $assurance,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a assurance entity.
     *
     * @Route("/{id}", name="assurance_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Assurance $assurance)
    {
        $form = $this->createDeleteForm($assurance);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($assurance);
            $em->flush();
        }

        return $this->redirectToRoute('assurance_index');
    }

    /**
     * Creates a form to delete a assurance entity.
     *
     * @param Assurance $assurance The assurance entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Assurance $assurance)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('assurance_delete', array('id' => $assurance->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
