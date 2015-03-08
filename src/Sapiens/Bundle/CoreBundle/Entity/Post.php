<?php

namespace Sapiens\Bundle\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="post")
 */
class Post
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @ORM\Title
     * @ORM\Column(type="text")
     */
    protected $title;

    /**
     * @ORM\Description
     * @ORM\Column(type="text")
     */
    protected $description;
    
    
    public function __construct()
    {
        parent::__construct();
    }
}