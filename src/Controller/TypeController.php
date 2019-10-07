<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;

use App\Entity\Type;
use App\Form\TypeFormType;

class TypeController extends AbstractController
{
    /**
     * @Route("/newType", name="type")
     */
    public function creerType(Request $query)
    {
        $cat = new Type();
        
        $form = $this->createForm(TypeFormType::class,$cat);
        
        $form->handleRequest($query);
      
        if ($query->isMethod('POST')){
            if ($form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->persist($cat);
                $em->flush();
                $query->getSession()->getFlashBag()->add('notice', 'Catégorie enregistré.');
                return $this->redirectToRoute('typeAjout');
            }
        }
        
        return $this->render('type/FormType.html.twig',array('form'=>$form->createView(),));
    }
    
    /**
     * @Route("/typeAjout", name="typeAjout")
     */
    public function typeAjouter() {
        return $this->render('type/TypeAjouter.html.twig');
    }
    
}
