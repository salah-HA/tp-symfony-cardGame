<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
// Entities
use App\Entity\Card; use App\Form\CardType;
use App\Repository\CardRepository;
use Symfony\Component\Security\Core\User\UserInterface;
use App\Entity\Category;
use App\Form\CategoryType;
class CardController extends AbstractController

{
    /**
     * @Route("/new_card", name="card")
     *
     */
    public function card(Request $request)
    {
        $em =$this->getDoctrine()->getManager();

        $card =  new Card();
        $formCard = $this-> createForm(CardType::class, $card);
        $cards = $em ->getRepository(Card::class)->findAll();


        $formCard->handleRequest($request);
        if($formCard->isSubmitted()&& $formCard->isValid() ) {
            $card->setCreator($this->getUser());
            $image = $formCard->get('image')->getData();
            $imageName = 'card-'.uniqid().'.'.$image->guessExtension();
            $image->move(
                $this->getParameter('cards_folder'),
                $imageName
            );
            $card->setImage($imageName);
            $em->persist($card); //envoyer vers la base
            $em->flush();

        }
        return $this->render('card/form.html.twig', [
            'entities' => $cards,
            'form' => $formCard ->createView() ,
        ]);
    }
    /**
     * @Route("/category", name="category")
     */
    public function category(Request $request)
    {
        $em =$this->getDoctrine()->getManager();

        $category =  new Category();
        $formCategory = $this-> createForm(CategoryType::class, $category);

        $categories = $em ->getRepository(Category::class)->findAll();

        $formCategory->handleRequest($request);
        if($formCategory->isSubmitted() && $formCategory->isValid()) {

            $em->persist($category);
            $em->flush();

            return new Response($category->getName().' created');
        }
        return $this->render('card/form.html.twig', [
            'entities' => $categories,
            'form' => $formCategory ->createView() 
        ]);
    }
    public function cardList(){
        $cards = $this->getDoctrine()->getRepository(Card::class)->findAll();
    }
    /**
     * @Route("/carte", name="carte")
     *
     */
    public function index()
    {
        return $this->render('card/index.html.twig', [
            'cards' => $this->getDoctrine()->getRepository(Card::class)->findAll()
        ]);
    }
    /**
     * @Route("/faction", name="faction")
     *
     */
    public function faction()
    {
        return $this->render('card/faction.html.twig', [
            'factions' => $this->getDoctrine()->getRepository(Category::class)->findAll()
        ]);
    }
}
