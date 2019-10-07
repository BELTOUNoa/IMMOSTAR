<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Visiteur;
use App\Form\VisiteurType;

class VisiteurController extends AbstractController
{
    /**
     * @Route("/newVisiteur", name="visiteur")
     */
    public function creerVisiteur(Request $query)
    {
        $cat = new Visiteur();
        
        $form = $this->createForm(VisiteurType::class,$cat);
        
        $form->handleRequest($query);
      
        if ($query->isMethod('POST')){
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cat);
                $em->flush();
                $query->getSession()->getFlashBag()->add('notice', 'Catégorie enregistré.');
                return $this->redirectToRoute('visiteurAjout');
            }
        }
        
        return $this->render('visiteur/VisiteurForm.html.twig',array('form'=>$form->createView(),));
    }
    
    /**
     * @Route("/visiteurAjout", name="visiteurAjout")
     */
    public function visiteurAjouter() {
        return $this->render('visiteur/VisiteurAjouter.html.twig');
    }
    
    /**
     * @Route("/visiteurModif", name="visiteurModif")
     */
    public function visiteurModif() {
        return $this->render('visiteur/VisiteurModif.html.twig');
    }
    
    
    
    
        /**
    *
    *@Route("/visiteur/update/{id}",name="updateVisiteur")
    *
    */
    public function updateVisiteur(Request $request, $id){
        //$visiteur = new Visiteur() ;
        $visiteur = $this->getDoctrine()->getManager()->getRepository(Visiteur::class)->getUnVisiteur($id);
        //$id = $session->get('login');
        $request->getSession()->getFlashBag()->add('notice', '');
        $form = $this->createForm(VisiteurType::class, $visiteur);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', 'Article modifié avec succès.');
                return $this->redirectToRoute('visiteurModif');
            }
        }
        return $this->render( 'visiteur/VisiteurForm.html.twig', array(
        'form' =>$form->createView(), 'visiteur'=>$visiteur));
    }
}
