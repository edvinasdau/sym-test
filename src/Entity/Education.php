<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EducationRepository")
 */
class Education
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */

    private $title;

    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string...
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title...
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}
