<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Events
 *
 * @ORM\Table(name="events")
 * @ORM\Entity(repositoryClass="AppBundle\Repository\EventsRepository")
 */
class Events
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
     * @ORM\Column(name="event_name", type="string", length=55)
     */
    private $eventName;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="event_date", type="datetime")
     */
    private $eventDate;

    /**
     * @var string
     *
     * @ORM\Column(name="event_description", type="string", length=255)
     */
    private $eventDescription;

    /**
     * @var string
     *
     * @ORM\Column(name="event_image", type="string", length=333)
     */
    private $eventImage;

    /**
     * @var string
     *
     * @ORM\Column(name="event_contact", type="string", length=255)
     */
    private $eventContact;

    /**
     * @var string
     *
     * @ORM\Column(name="event_phone", type="string", length=15)
     */
    private $eventPhone;

    /**
     * @var string
     *
     * @ORM\Column(name="event_address", type="string", length=255)
     */
    private $eventAddress;

    /**
     * @var string
     *
     * @ORM\Column(name="event_web", type="string", length=255)
     */
    private $eventWeb;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set eventName
     *
     * @param string $eventName
     *
     * @return Events
     */
    public function setEventName($eventName)
    {
        $this->eventName = $eventName;

        return $this;
    }

    /**
     * Get eventName
     *
     * @return string
     */
    public function getEventName()
    {
        return $this->eventName;
    }

    /**
     * Set eventDate
     *
     * @param \DateTime $eventDate
     *
     * @return Events
     */
    public function setEventDate($eventDate)
    {
        $this->eventDate = $eventDate;

        return $this;
    }

    /**
     * Get eventDate
     *
     * @return \DateTime
     */
    public function getEventDate()
    {
        return $this->eventDate;
    }

    /**
     * Set eventDescription
     *
     * @param string $eventDescription
     *
     * @return Events
     */
    public function setEventDescription($eventDescription)
    {
        $this->eventDescription = $eventDescription;

        return $this;
    }

    /**
     * Get eventDescription
     *
     * @return string
     */
    public function getEventDescription()
    {
        return $this->eventDescription;
    }

    /**
     * Set eventImage
     *
     * @param string $eventImage
     *
     * @return Events
     */
    public function setEventImage($eventImage)
    {
        $this->eventImage = $eventImage;

        return $this;
    }

    /**
     * Get eventImage
     *
     * @return string
     */
    public function getEventImage()
    {
        return $this->eventImage;
    }

    /**
     * Set eventContact
     *
     * @param string $eventContact
     *
     * @return Events
     */
    public function setEventContact($eventContact)
    {
        $this->eventContact = $eventContact;

        return $this;
    }

    /**
     * Get eventContact
     *
     * @return string
     */
    public function getEventContact()
    {
        return $this->eventContact;
    }

    /**
     * Set eventPhone
     *
     * @param string $eventPhone
     *
     * @return Events
     */
    public function setEventPhone($eventPhone)
    {
        $this->eventPhone = $eventPhone;

        return $this;
    }

    /**
     * Get eventPhone
     *
     * @return string
     */
    public function getEventPhone()
    {
        return $this->eventPhone;
    }

    /**
     * Set eventAddress
     *
     * @param string $eventAddress
     *
     * @return Events
     */
    public function setEventAddress($eventAddress)
    {
        $this->eventAddress = $eventAddress;

        return $this;
    }

    /**
     * Get eventAddress
     *
     * @return string
     */
    public function getEventAddress()
    {
        return $this->eventAddress;
    }

    /**
     * Set eventWeb
     *
     * @param string $eventWeb
     *
     * @return Events
     */
    public function setEventWeb($eventWeb)
    {
        $this->eventWeb = $eventWeb;

        return $this;
    }

    /**
     * Get eventWeb
     *
     * @return string
     */
    public function getEventWeb()
    {
        return $this->eventWeb;
    }
}

