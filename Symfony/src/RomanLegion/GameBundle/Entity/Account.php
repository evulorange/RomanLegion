<?php

namespace RomanLegion\GameBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * An account which can log in.
 * 
 * An account can be either a Player or an Admin, but not both. It represents a
 *  real world person who can authenticate to the system, and is authorized as
 *  either a Player or an Admin, depending on which entity is associated with
 *  it.
 *
 * @ORM\Table()
 * @ORM\Entity(repositoryClass="RomanLegion\GameBundle\Entity\AccountRepository")
 */
class Account
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="username", type="string", length=30)
     */
    private $username;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=255)
     */
    private $password;

    /**
     * What is displayed to other players.
     * @var string
     *
     * @ORM\Column(name="displayName", type="string", length=40)
     */
    private $displayName;

    /**
     * If true, the user (Player or Admin) should be considered banned from the
     *  system and disallowed all normal actions.
     * @var boolean
     *
     * @ORM\Column(name="banned", type="boolean")
     */
    private $banned = false;

    /**
     * 
     * @param string $username
     * @param string $password
     * @param string $displayName
     */
    function __construct($username, $password, $displayName) 
    {
        $this->username = $username;
        $this->password = $password;
        $this->displayName = $displayName;
    }

        /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     * @return Account
     */
    public function setUsername($username)
    {
        $this->username = $username;
    
        return $this;
    }

    /**
     * Get username
     *
     * @return string 
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set password
     *
     * @param string $password
     * @return Account
     */
    public function setPassword($password)
    {
        $this->password = $password;
    
        return $this;
    }

    /**
     * Get password
     *
     * @return string 
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set displayName
     *
     * @param string $displayName
     * @return Account
     */
    public function setDisplayName($displayName)
    {
        $this->displayName = $displayName;
    
        return $this;
    }

    /**
     * Get displayName
     *
     * @return string 
     */
    public function getDisplayName()
    {
        return $this->displayName;
    }

    /**
     * Set banned
     *
     * @param boolean $banned
     * @return Account
     */
    public function setBanned($banned)
    {
        $this->banned = $banned;
    
        return $this;
    }

    /**
     * Get banned
     *
     * @return boolean 
     */
    public function getBanned()
    {
        return $this->banned;
    }
}
