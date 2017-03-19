<?php

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * Tv Series.
 *
 * Class TvSeries
 *
 *@ORM\Entity(repositoryClass="AppBundle\Repository\TvSeriesRepository")
 */
class TvSeries {
    /**
     * @var string
     *
     * @ORM\Id()
     *
     * @ORM\Column(type="guid", nullable=false)
     *
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @ORM\OneToMany(targetEntity="Episode", mappedBy="tvSeriesId")
     */
    private $id;
    /**
     * @var string
     *
     * @ORM\Column(type="string");
     *
     *
     */
    private $name;
    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    private $author;
    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $releasedAt;
    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $description;
    /**
     * @var string
     *
     * @ORM\Column(type="string", nullable=true)
     */
    private $image;

    /**
     * @param string $author
     */
    public function setAuthor($author)
    {
        $this->author = $author;
    }

    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param DateTimeInterface $releasedAt
     */
    public function setReleasedAt($releasedAt)
    {
        $this->releasedAt = $releasedAt;
    }

    /**
     * @return string
     */
    public function getAuthor()
    {
        return $this->author;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return DateTimeInterface
     */
    public function getReleasedAt()
    {
        return $this->releasedAt;
    }


}
