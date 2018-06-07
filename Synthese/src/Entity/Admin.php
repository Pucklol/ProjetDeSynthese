<?php
/**
 * Created by PhpStorm.
 * User: Ducky
 * Date: 15/04/2018
 * Time: 08:29
 */

namespace FastFood\Entity;


/**
 * @Entity
 * @Table(name="Admin")
 **/
class Admin extends User
{
    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $login;

    /**
     * @Column(type="string", length=100)
     * @var string
     **/
    protected $password;

    /**
     * Get Login
     *
     * @return mixed
     */
    public function getLogin():? string
    {
        return $this->login;
    }


    /**
     * Set Password
     *
     * @param mixed $password
     *
     * @return self
     */
    public function setPassword(string $password):self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Set Login
     *
     * @param mixed $login
     *
     * @return self
     */
    public function setLogin(string $login):self
    {
        $this->login = $login;

        return $this;
    }

}