<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Visite;
use App\Form\VisiteType;

class VisiteController extends AbstractController
{
    /**
     * @Route("/newVisite", name="visite")
     */
    public function creerVisite(Request $query)
    {
        $cat = new Visite();
        
        $form = $this->createForm(VisiteType::class,$cat);
        
        $form->handleRequest($query);
      
        if ($query->isMethod('POST')){
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cat);
                $em->flush();
                $query->getSession()->getFlashBag()->add('notice', 'Catégorie enregistré.');
                return $this->redirectToRoute('visiteAjout');
            }
        }
        
        return $this->render('visite/VisiteForm.html.twig',array('form'=>$form->createView(),));
    }
    
     /**
     * @Route("/visiteAjout", name="visiteAjout")
     */
    public function visiteAjouter() {
        return $this->render('visite/VisiteAjouter.html.twig');
    }
}
