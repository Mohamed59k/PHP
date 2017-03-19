<?php
/**
 * Created by PhpStorm.
 * User: fan
 * Date: 17/3/2
 * Time: ÏÂÎç5:57
 */

namespace AppBundle\Controller;

use AppBundle\Entity\User_Episode;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use \DateTime;

/**
 * User_Episode controller.
 *
 * @Route("/user_episode")
 */
class User_EpisodeController extends Controller
{
    /**
     * Lists all User_Episode entities.
     *
     * @Route("/index", name="_userEpisodeIndex")
     * @Method("GET")
     */
    public function indexAction()
    {
        $user = $this->getUser();
        $userId = $user->getId();
        $em = $this->getDoctrine();

        $userEpisodes = $em->getRepository('AppBundle:User_Episode')->findByUser($userId);
        $infos = array();
        foreach ($userEpisodes as $usrep){
            $eid = $usrep->getEpisodeId();
            $episode = $em->getRepository('AppBundle:Episode')->find($eid);
            if($episode!=null ) {
                $usrep->watched = date_format($usrep->getWatchedAt(), 'Y-m-d H:i:s');
                $usrep->name = $episode->getName();
                $usrep->image = $episode->getImage();
                $usrep->description = $episode->getDescription();
                $usrep->episodeNumber = $episode->getEpisodeNumber();
                if(!in_array($usrep,$infos))
                    array_push($infos, $usrep);
            }
        }
        return $this->render('userEpisode/index.html.twig', array(
            'userEpisodes' => $infos,
        ));
    }

    /**
     * Creates a new userEpisode entity.
     *
     * @Route("/new/{id}", name="_userEpisodeNew")
     * @Method({"GET", "POST"})
     */
    public function newAction($id)
    {
        $user = $this->getUser();
        $em = $this->getDoctrine();

        if ($user!= null) {
            $userId = $user->getId();
            //if user has watched this episode before, update
            $userEpisode = $em->getRepository('AppBundle:User_Episode')->findByUserEpisode($userId,$id);
            if($userEpisode == null) {
                $userEpisode = new User_Episode();
                $userEpisode->setCurrent(true);
                $userEpisode->setEpisodeId($id);
                $userEpisode->setUserId($userId);
            }
            else
                $userEpisode = $userEpisode[0];
            $dt = new DateTime('now');
            $dt->format('Y-m-d H:i:s');
            $userEpisode->setWatchedAt($dt);
            $em = $this->getDoctrine()->getManager();
            $em->persist($userEpisode);
            $em->flush($userEpisode);
        }
        $image = $em->getRepository('AppBundle:Episode')->find($id)->getImage();//$userEpisode->getEpisode_id()
        return $this->redirect($image);
        //return $this->render('userEpisode/show.html.twig');
    }

    /**
     * Finds and displays a userEpisode entity.
     *
     * @Route("/{id}", name="_userEpisodeShow")
     * @Method("GET")
     */
    public function showAction($id)
    {
        return $this->render('userEpisode/show.html.twig');
    }

    /**
     * Deletes a User_Episode entity.
     *
     * @Route("/{id}/delete", name="_userEpisodeDelete")
     * @Method({"GET","DELETE"})
     */
    public function deleteAction($id)
    {
        $em = $this->getDoctrine()->getManager();
        $userEpisode = $em->getRepository('AppBundle:User_Episode')->find($id);
        if($userEpisode != null) {
            $em->remove($userEpisode);
            $em->flush($userEpisode);
        }
        return $this->redirectToRoute('_userEpisodeIndex');
    }

}