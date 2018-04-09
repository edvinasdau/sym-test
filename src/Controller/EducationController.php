<?php

namespace App\Controller;

use App\Entity\Education;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use App\Repository\EducationRepository;

class EducationController extends Controller
{
    /**
     * @var EducationRepository
     */
    private $educationRepository;
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    public function __construct(
        EducationRepository $educationRepository,
        EntityManagerInterface $entityManager
    )
    {
        $this->educationRepository = $educationRepository;
        $this->entityManager = $entityManager;
    }

    /**
     * @Route("/educations", name="educations")
     */
    public function index()
    {
        $education = new Education();
        $education->setTitle('Bakis');
        $this->entityManager->persist($education);
        $this->entityManager->flush();
        $education = $this->educationRepository->findAll();
        var_dump($education);
        exit;
    }

    /**
     * @Route("/educations/delete")
     */
    public function delete()
    {
        $educations = $this->educationRepository->findBy([
            'title' => 'Bakis'
        ]);

        foreach($educations as $education) {
            $this->entityManager->remove($education);
        }
        $this->entityManager->flush();
        exit;
    }

    /**
     * @Route("/educations/update")
     */
    public function update()
    {
        $id = 12;
        $education = $this->educationRepository->find($id);
        $education->setTitle('titlas');
        $this->entityManager->persist($education);
        $this->entityManager->flush();

        var_dump($education);
        exit;
    }

}
