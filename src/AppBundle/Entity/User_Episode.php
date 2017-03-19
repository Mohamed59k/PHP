<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/2/21
 * Time: ÏÂÎç7:14
 */

namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;

/**
 * User Episode.
 *
 * Class User_Episode
 *
 * @ORM\Entity(repositoryClass="AppBundle\Repository\User_EpisodeRepository")
 */
class User_Episode
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
     * @ORM\Column(type="guid", nullable=false)
     *
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @ORM\ManyToOne(targetEntity="User", inversedBy="id")
     * @ORM\JoinColumn(name="user_id", referencedColumnName="id")
     */
    private $user_id;
    /**
     * @var string
     *
     * @ORM\Column(type="guid", nullable=false)
     *
     * @ORM\GeneratedValue(strategy="UUID")
     *
     * @ORM\ManyToOne(targetEntity="Episode", inversedBy="id")
     * @ORM\JoinColumn(name="episode_id", referencedColumnName="id")
     */
    private $episode_id;

    /**
     * @var boolean
     *
     * @ORM\Column(type="boolean");
     */
    private $current;

    /**
     * @var DateTimeInterface
     *
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $watchedAt;

    /**
     * @param string $user_id
     */
    public function setUser_id($user_id)
    {
        $this->user_id = $user_id;
    }

    /**
     * @param string $episode_id
     */
    public function setEpisode_id($episode_id)
    {
        $this->episode_id = $episode_id;
    }

    /**
     * @param boolean $current
     */
    public function setCurrent($current){
        $this->current = $current;
    }

    /**
     * @return string
     */
    public function getUser_id()
    {
        return $this->user_id;
    }

    /**
     * @return string
     */
    public function getEpisode_id()
    {
        return $this->episode_id;
    }

    /**
     * Get userId
     *
     * @return guid
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * Get episodeId
     *
     * @return guid
     */
    public function getEpisodeId()
    {
        return $this->episode_id;
    }

    /**
     * Get current
     *
     * @return boolean
     */
    public function getCurrent()
    {
        return $this->current;
    }

    /**
     * Set watchedAt
     *
     * @param \DateTime $watchedAt
     *
     * @return User_Episode
     */
    public function setWatchedAt($watchedAt)
    {
        $this->watchedAt = $watchedAt;
    }

    /**
     * Get watchedAt
     *
     * @return \DateTime
     */
    public function getWatchedAt()
    {
        return $this->watchedAt;
    }

    /**
     * Set userId
     *
     * @param guid $userId
     *
     * @return User_Episode
     */
    public function setUserId($userId)
    {
        $this->user_id = $userId;

        return $this;
    }

    /**
     * Set episodeId
     *
     * @param guid $episodeId
     *
     * @return User_Episode
     */
    public function setEpisodeId($episodeId)
    {
        $this->episode_id = $episodeId;

        return $this;
    }

    /**
     * Get id
     *
     * @return guid
     */
    public function getId()
    {
        return $this->id;
    }
}
