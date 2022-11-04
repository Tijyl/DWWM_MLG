<?php
namespace App\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Request;
use Doctrine\Persistence\ManagerRegistry;
use App\Entity\User;
use App\Service\calculateAge;
/**
 * @Route("/api", name="api_")
 */
class UserController extends AbstractController
{
    /**
     * @Route("/user", name="app_user", methods={"GET"})
     */
    public function index(ManagerRegistry $doctrine): Response
    {
        $users = $doctrine
            ->getRepository(User::class)
            ->findAll();
        $data = [];
        foreach ($users as $user) {
            $data[] = [
                'id'         => $user->getId(),
                'nom'        => $user->getNom(),
                'prenom'     => $user->getPrenom(),
                'anniv'      => $user->getAnniv(),
                'adresse'    => $user->getAdresse(),
                'email'      => $user->getEmail(),
                'telephone'  => $user->getTelephone(),
                'possession' => $user->getPossession(),
                'valeur'     => $user->getValeur(),
                'type'       => $user->getType(),
                'age'        =>$user->getAge(),
            ];
        }
        return $this->json($data);
    }
    /**
     * @Route("/user", name="add_user", methods={"POST"})
     */
    public function AddUser(ManagerRegistry $doctrine, Request $request): Response
    {
        $entityManager = $doctrine->getManager();
        $user    = new User();
        $user    ->setNom($request->request->get('nom'));
        $user    ->setPrenom($request->request->get('prenom'));
        $user    ->setAnniv(new \DateTime($request->request->get('anniv')));
        $user    ->setAdresse($request->request->get('adresse'));
        $user    ->setEmail($request->request->get('email'));
        $user    ->setTelephone($request->request->get('telephone'));
        $user    ->setPossession($request->request->get('possession'));
        $user    ->setValeur($request->request->get('valeur'));
        $user    ->setType($request->request->get('type'));
        $user    ->setAge($request->request->get('age'));
        $entityManager->persist($user);
        $entityManager->flush();
        return $this->json('Nouveaux Dresseurs ajoutés ' . $user->getId());
    }
    /**
     * @Route("/user/{id}", name="user_show", methods={"GET"})
     */
    public function ViewUser(ManagerRegistry $doctrine, int $id): Response
    {
        $user = $doctrine->getRepository(User::class)->find($id);
        if (!$user) {
            return $this->json('Pas d utilisateur trouvés' . $id, 404);
        }
        $data =  [
            'id'         => $user->getId(),
            'nom'        => $user->getNom(),
            'prenom'     => $user->getPrenom(),
            'anniv'      => $user->getAnniv(),
            'adresse'    => $user->getAdresse(),
            'email'      => $user->getEmail(),
            'telephone'  => $user->getTelephone(),
            'possession' => $user->getPossession(),
            'valeur'     => $user->getValeur(),
            'type'       => $user->getType(),
            'age'        => $user->getAge(),
        ];
        return $this->json($data);
    }
    /**
     * @Route("/user/{id}", name="user_edit", methods={"PUT", "PATCH"})
     */
    public function EditUser(ManagerRegistry $doctrine, Request $request, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $user = $entityManager->getRepository(User::class)->find($id);
        if(!$user){
            return $this->json('Pas d utilisateur trouvés' . $id, 404);
        }
        $content = json_decode($request->getContent());
        $user->setNom($content->nom);
        $user->setPrenom($content->prenom);
        $user->setAnniv(new \DateTime($content->anniv));
        $user->setAdresse($content->adresse);
        $user->setEmail($content->email);
        $user->setTelephone($content->telephone);
        $user->setPossession($content->possession);
        $user->setValeur($content->valeur);
        $user->setType($content->type);
        $user->setAge($content->type);
        $entityManager->flush();
        $data = [
            'id'         => $user->getId(),
            'nom'        => $user->getNom(),
            'prenom'     => $user->getPrenom(),
            'anniv'      => $user->getAnniv(),
            'adresse'    => $user->getAdresse(),
            'email'      => $user->getEmail(),
            'telephone'  => $user->getTelephone(),
            'possession' => $user->getPossession(),
            'valeur'     => $user->getValeur(),
            'type'       => $user->getType(),
            'age'        =>$user->getAge(),
        ];
        return $this->json($data);
    }
    /**
     * @Route("/user/{id}", name="user_delete", methods={"DELETE"})
     */
    public function delete(ManagerRegistry $doctrine, int $id): Response
    {
        $entityManager = $doctrine->getManager();
        $user          = $entityManager->getRepository(User::class)->find($id);

        if (!$user) {
            return $this->json('Pas d utilisateur trouvés' . $id, 404);
        }
        $entityManager->remove($user);
        $entityManager->flush();
        return $this->json('Utilisateur supprimé ' . $id);
    }


}
