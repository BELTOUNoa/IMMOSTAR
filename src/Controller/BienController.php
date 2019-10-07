<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Bien;
use App\Form\BienFormType;

class BienController extends AbstractController
{
    /**
     * @Route("/newBien", name="bien")
     */
    public function creerBien(Request $query)
    {
        $cat = new Bien();
        
        $form = $this->createForm(BienFormType::class,$cat);
        
        $form->handleRequest($query);
      
        if ($query->isMethod('POST')){
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cat);
                $em->flush();
                $query->getSession()->getFlashBag()->add('notice', 'Catégorie enregistré.');
                return $this->redirectToRoute('bienAjout');
            }
        }
        
        return $this->render('bien/FormBien.html.twig',array('form'=>$form->createView(),));
    }
    
    /**
     * @Route("/bienAjout", name="bienAjout")
     */
    public function bienAjouter() {
        return $this->render('bien/BienAjouter.html.twig');
    }
    
    
    
        /**
     * @Route("/bienModif", name="bienModif")
     */
    public function bienModif() {
        return $this->render('bien/BienModifr.html.twig');
    }
    
    
    
    /**
    *
    *@Route("/bien/update/{id}",name="updateBien")
    *
    */
    public function updateArticle(Request $request, $id){
        //$bien = new Bien() ;
        $bien = $this->getDoctrine()->getManager()->getRepository(Bien::class)->getUnBien($id);
        //$id = $session->get('login');
        $request->getSession()->getFlashBag()->add('notice', '');
        $form = $this->createForm(BienFormType::class, $bien);
        if($request->isMethod('POST')){
            $form->handleRequest($request);
            if($form->isValid()){
                $em = $this->getDoctrine()->getManager();
                $em->flush();
                $request->getSession()->getFlashBag()->add('success', 'Article modifié avec succès.');
                return $this->redirectToRoute('bienModif');
            }
        }
        return $this->render( 'bien/FormBien.html.twig', array(
        'form' =>$form->createView(), 'bien'=>$bien));
    }
}
