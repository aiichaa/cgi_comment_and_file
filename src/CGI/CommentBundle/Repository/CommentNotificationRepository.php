<?php

namespace CGI\CommentBundle\Repository;

/**
 * CommentNotificationRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class CommentNotificationRepository extends \Doctrine\ORM\EntityRepository
{
    public function findAll()
    {
        return $this->findBy(array(), array('id' => 'desc'));
    }
}
