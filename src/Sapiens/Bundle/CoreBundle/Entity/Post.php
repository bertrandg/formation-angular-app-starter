<?php

namespace Sapiens\Bundle\CoreBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

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
     * @ORM\Column(name="title", type="string", nullable=false)
     * 
     * @Assert\Type(type="string")
     * @Assert\Length(max=100)
     */
    protected $title = '';

    /**
     * @ORM\Column(name="description", type="text", nullable=false)
     * 
     * @Assert\Type(type="string")
     * @Assert\Length(max=5000)
     */
    protected $description = '';
    
    
    public function __construct()
    {
        parent::__construct();
    }
}