<?php

namespace MV\BookingBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table(name="user")
 * @ORM\Entity(repositoryClass="MV\BookingBundle\Repository\UserRepository")
 */
class User
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="firstName", type="string", length=255)
     */
    private $firstName;

    /**
     * @var string
     *
     * @ORM\Column(name="country", type="string", length=255)
     */
    private $country;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="birthDate", type="date")
     */
    private $birthDate;

    /**
     * @var string
     *
     * @ORM\Column(name="sessionKey", type="string", length=255)
     */
    private $sessionKey;

    /**
     * @ORM\ManyToOne(targetEntity="MV\BookingBundle\Entity\Ticket", inversedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $ticket;

     /**
     * @ORM\ManyToOne(targetEntity="MV\BookingBundle\Entity\Form", inversedBy="user", cascade={"persist"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $form;

    /**
     * @ORM\ManyToOne(targetEntity="MV\BookingBundle\Entity\Form", inversedBy="user")
     * @ORM\JoinColumn(nullable=true)
     */
    private $command;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="date", type="date")
     */
    private $date;

    /**
     * @var \Datetime
     *
     * @ORM\Column(name="creationDate", type="date")
     * @ORM\JoinColumn(nullable=false)
     */
    private $creationDate;

    public function __construct()
    {
        $this->creationDate = new \DateTime();
    }

    /**
     * Get id.
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name.
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name.
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set firstName.
     *
     * @param string $firstName
     *
     * @return User
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;

        return $this;
    }

    /**
     * Get firstName.
     *
     * @return string
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * Set country.
     *
     * @param string $country
     *
     * @return User
     */
    public function setCountry($country)
    {
        $this->country = $country;

        return $this;
    }

    /**
     * Get country.
     *
     * @return string
     */
    public function getCountry()
    {
        return $this->country;
    }

    /**
     * Set birthDate.
     *
     * @param \DateTime $birthDate
     *
     * @return User
     */
    public function setBirthDate($birthDate)
    {
        $this->birthDate = $birthDate;

        return $this;
    }

    /**
     * Get birthDate.
     *
     * @return \DateTime
     */
    public function getBirthDate()
    {
        return $this->birthDate;
    }


    /**
     * Set sessionKey.
     *
     * @param string $sessionKey
     *
     * @return User
     */
    public function setSessionKey($sessionKey)
    {
        $this->sessionKey = $sessionKey;

        return $this;
    }

    /**
     * Get sessionKey.
     *
     * @return string
     */
    public function getSessionKey()
    {
        return $this->sessionKey;
    }

    /**
     * Set ticket.
     *
     * @param \OC\MVBookingBundle\Entity\Ticket|null $ticket
     *
     * @return User
     */
    public function setTicket(\MV\BookingBundle\Entity\Ticket $ticket = null)
    {
        $this->ticket = $ticket;

        return $this;
    }

    /**
     * Get ticket.
     *
     * @return \OC\MVBookingBundle\Entity\Ticket|null
     */
    public function getTicket()
    {
        return $this->ticket;
    }

    /**
     * Set form.
     *
     * @param \MV\BookingBundle\Entity\Form $form
     *
     * @return User
     */
    public function setForm(\MV\BookingBundle\Entity\Form $form)
    {
        $this->form = $form;

        return $this;
    }

    /**
     * Get form.
     *
     * @return \MV\BookingBundle\Entity\Form
     */
    public function getForm()
    {
        return $this->form;
    }

    /**
     * Set date.
     *
     * @param \DateTime $date
     *
     * @return User
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date.
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set creationDate.
     *
     * @param \DateTime $creationDate
     *
     * @return User
     */
    public function setCreationDate($creationDate)
    {
        $this->creationDate = $creationDate;

        return $this;
    }

    /**
     * Get creationDate.
     *
     * @return \DateTime
     */
    public function getCreationDate()
    {
        return $this->creationDate;
    }

    /**
     * Set command.
     *
     * @param \MV\BookingBundle\Entity\Form|null $command
     *
     * @return User
     */
    public function setCommand(\MV\BookingBundle\Entity\Form $command = null)
    {
        $this->command = $command;

        return $this;
    }

    /**
     * Get command.
     *
     * @return \MV\BookingBundle\Entity\Form|null
     */
    public function getCommand()
    {
        return $this->command;
    }
}
