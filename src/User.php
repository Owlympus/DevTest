<?php
/**
 * Created by PhpStorm.
 * User: Owlympus
 * Date: 04/06/2018
 * Time: 16:17
 */

class User
{
    protected

        /**
         * @var int $id Identifiant
         */
        $id,

        /**
         * @var string $first_name Prénom
         */
        $first_name,

        /**
         * @var string $last_name Nom
         */
        $last_name,

        /**
         * @var string $username Nom d'utilisateur
         */
        $username,

        /**
         * @var string $email Adresse email
         */
        $email,

        /**
         * @var DateTime $birth_date Date d'anniversaire
         */
        $birth_date,

        /**
         * @var DateTime $subscription Date d'inscription
         */
        $subscription
    ;

    /**
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param integer $id
     * @return User
     */
    public function setId($id)
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * @param string $first_name
     * @return User
     */
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * @param string $last_name
     * @return User
     */
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;
        return $this;
    }

    /**
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param string $email
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getSubscription()
    {
        return $this->subscription;
    }

    /**
     * @param DateTime $subscription
     * @return User
     */
    public function setSubscription( DateTime $subscription)
    {
        $this->subscription = $subscription;
        return $this;
    }

    /**
     * @return DateTime
     */
    public function getBirthDate()
    {
        return $this->birth_date;
    }

    /**
     * @param DateTime $birth_date
     * @return User
     */
    public function setBirthDate( DateTime $birth_date)
    {
        $this->birth_date = $birth_date;
        return $this;
    }

}