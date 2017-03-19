<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/21
 * Time: ÏÂÎç2:21
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * Episode.
 *
 * Class Episode
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EpisodeRepository")
 */
class Episode
{
    /**
     * @var string
     *
     * @ORM\Id()
     *
     * @ORM\Column(type="guid", nullable=false)
     *
     * @ORM\GeneratedValue(strategy="UUID")
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
     * @ORM\Column(type="integer")
     */
    private $episodeNumber;
    /**
     * @var string
     *
     * @ORM\Column(type="guid", nullable=false)
     *
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @ORM\ManyToOne(targetEntity="TvSeries", inversedBy="id")
     * @ORM\JoinColumn(name="tvseries_id", referencedColumnName="id")
     */
    private $tvSeriesId;

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
     * @param string $episodeNumber
     */
    public function setEpisodeNumber($episodeNumber)
    {
        $this->episodeNumber = $episodeNumber;
    }

    /**
     * @return int
     */
    public function getEpisodeNumber()
    {
        return $this->episodeNumber;
    }


    /**
     * @param string $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param string $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @param string $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set tvSeriesId
     *
     * @param guid $tvSeriesId
     *
     * @return Episode
     */
    public function setTvSeriesId($tvSeriesId)
    {
        $this->tvSeriesId = $tvSeriesId;

        return $this;
    }

    /**
     * Get tvSeriesId
     *
     * @return guid
     */
    public function getTvSeriesId()
    {
        return $this->tvSeriesId;
    }
}
