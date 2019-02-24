<?php

namespace MainBundle\Controller;

use MainBundle\Entity\CategoryPrestation;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;use Symfony\Component\HttpFoundation\Request;

/**
 * Categoryprestation controller.
 *
 * @Route("category_prestation")
 */
class CategoryPrestationController extends Controller
{
    /**
     * Lists all categoryPrestation entities.
     *
     * @Route("/", name="category_prestation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $categoryPrestations = $em->getRepository('MainBundle:CategoryPrestation')->findAll();

        return $this->render('categoryprestation/index.html.twig', array(
            'categoryPrestations' => $categoryPrestations,
        ));
    }

    /**
     * Creates a new categoryPrestation entity.
     *
     * @Route("/new", name="category_prestation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $categoryPrestation = new Categoryprestation();
        $form = $this->createForm('MainBundle\Form\CategoryPrestationType', $categoryPrestation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($categoryPrestation);
            $em->flush();

            return $this->redirectToRoute('category_prestation_show', array('id' => $categoryPrestation->getId()));
        }

        return $this->render('categoryprestation/new.html.twig', array(
            'categoryPrestation' => $categoryPrestation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a categoryPrestation entity.
     *
     * @Route("/{id}", name="category_prestation_show")
     * @Method("GET")
     */
    public function showAction(CategoryPrestation $categoryPrestation)
    {
        $deleteForm = $this->createDeleteForm($categoryPrestation);

        return $this->render('categoryprestation/show.html.twig', array(
            'categoryPrestation' => $categoryPrestation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing categoryPrestation entity.
     *
     * @Route("/{id}/edit", name="category_prestation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, CategoryPrestation $categoryPrestation)
    {
        $deleteForm = $this->createDeleteForm($categoryPrestation);
        $editForm = $this->createForm('MainBundle\Form\categoryPrestationType', $categoryPrestation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('category_prestation_edit', array('id' => $categoryPrestation->getId()));
        }

        return $this->render('categoryprestation/edit.html.twig', array(
            'categoryPrestation' => $categoryPrestation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a categoryPrestation entity.
     *
     * @Route("/{id}", name="category_prestation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, CategoryPrestation $categoryPrestation)
    {
        $form = $this->createDeleteForm($categoryPrestation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($categoryPrestation);
            $em->flush();
        }

        return $this->redirectToRoute('category_prestation_index');
    }

    /**
     * Creates a form to delete a categoryPrestation entity.
     *
     * @param categoryPrestation $categoryPrestation The categoryPrestation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(CategoryPrestation $categoryPrestation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('category_prestation_delete', array('id' => $categoryPrestation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
