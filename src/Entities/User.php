<?php

namespace App\Entities;

use Carbon\Carbon;

class User
{
    /**
     * User's id
     * PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @var integer
     */
    private int $id;
    /**
     * The user's last name.
     * string 255 NOT NULLABLE
     * @var string $lastName
     */
    private string $lastName;

    /**
     * The user's first name.
     * string 255 NOT NULLABLE
     * @var string $firstName
     */
    private string $firstName;

    /**
     * The user's email address.
     * string 255 NOT NULLABLE
     * @var string $email
     */
    private string $email;

    /**
     * If the user's email is verified.
     * boolean default 0
     * @var boolean $isEmailVerified
     */
    private bool $isEmailVerified;

    /**
     * The user's password.
     * string 255 NOT NULLABLE
     * @var string $password
     */
    private string $password;

    /**
     * The user's address.
     * string 255 NOT NULLABLE
     * @var string $address
     */
    private string $address;

    /**
     * The user's ZIP code.
     * string 6 NOT NULLABLE
     * @var string $zipCode
     */
    private string $postCode;

    /**
     * The user's city.
     * string 255 NOT NULLABLE
     * @var string $city
     */
    private string $city;

    /**
     * The user's phone number.
     * string 10 NULLABLE default NULL
     * @var string $phoneNumber
     */
    private string $phoneNumber;

    /**
     * The user's role.
     * integer default 0
     * @var integer $role
     */
    private int $role;

    /**
     * The user's donation.
     * float default 0
     * @var float $donation
     */
    private float $donation;

    /**
     * The user's creation date.
     * datetime NULLABLE default NULL
     * @var Carbon $created_at
     */
    private Carbon $created_at;

    /**
     * The user's update date.
     * datetime NULLABLE default NULL
     * @var Carbon $updated_at
     */
    private Carbon $updated_at;

    /**
     * Get the user's last name.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return strtoupper($this->lastName);
    }

    /**
     * Set the user's last name.
     *
     * @param string $lastName
     * @return User
     */
    public function setLastName(string $lastName): self
    {
        $this->lastName = \strtolower($lastName);

        return $this;
    }

    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return ucfirst($this->firstName);
    }

    /**
     * Set the user's first name.
     *
     * @param string $firstName
     * @return User
     */
    public function setFirstName(string $firstName): self
    {
        $this->firstName = \strtolower($firstName);

        return $this;
    }

    /**
     * Get the user's email address.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * Set the user's email address.
     *
     * @param string $email
     * @return User
     */
    public function setEmail(string $email): self
    {
        $this->email = \strtolower($email);

        return $this;
    }

    /**
     * Get if the user's email is verified.
     *
     * @return boolean
     */
    public function getIsEmailVerified(): bool
    {
        return $this->isEmailVerified;
    }

    /**
     * Set if the user's email is verified.
     *
     * @param boolean $isEmailVerified
     * @return User
     */
    public function setIsEmailVerified(bool $isEmailVerified): self
    {
        $this->isEmailVerified = $isEmailVerified;

        return $this;
    }

    /**
     * Check user's password.
     *
     * @param $password
     * @return string
     */
    public function checkPassword($password): string
    {
        return \password_verify($password, $this->password);
    }

    /**
     * Set the user's password.
     *
     * @param string $password
     * @return User
     */
    public function setPassword(string $password): self
    {
        $this->password = \password_hash($password, PASSWORD_ARGON2I);

        return $this;
    }

    /**
     * Get the user's address.
     *
     * @return string
     */
    public function getAddress(): string
    {
        return \ucwords($this->address);
    }

    /**
     * Set the user's address.
     *
     * @param string $address
     * @return User
     */
    public function address(string $address): self
    {
        $this->address = \strtolower($address);

        return $this;
    }

    /**
     * Get the user's ZIP code.
     *
     * @return string
     */
    public function getZipCode(): string
    {
        return \strtoupper($this->zipCode);
    }

    /**
     * Set the user's ZIP code.
     *
     * @param string $zipCode
     * @return User
     */
    public function setZipCode(string $zipCode): self
    {
        $this->zipCode = \strtolower($zipCode);

        return $this;
    }

    /**
     * Get the user's city.
     *
     * @return string
     */
    public function getCity(): string
    {
        return \ucwords($this->city);
    }

    /**
     * Set the user's city.
     *
     * @param string $city
     * @return User
     */
    public function setCity(string $city): self
    {
        $this->city = \strtolower($city);

        return $this;
    }

    /**
     * Get the user's phone number.
     *
     * @return string
     */
    public function getPhoneNumber(): string
    {
        return wordwrap($this->phoneNumber, 2, ' ', true);
    }

    /**
     * Set the user's phone number.
     *
     * @param string $phoneNumber
     * @return User
     */
    public function setPhoneNumber(string $phoneNumber): self
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    /**
     * Get the user's role.
     *
     * @return integer
     */
    public function getRole(): int
    {
        return $this->role;
    }

    /**
     * Set the user's role.
     *
     * @param integer $role
     * @return User
     */
    public function setRole(int $role): self
    {
        $this->role = $role;

            return $this;
    }

    /**
     * Get the user's donation.
     *
     * @return float
     */
    public function getDonation(): float
    {
        return $this->donation;
    }

    /**
     * Set the user's donation.
     *
     * @param float $donation
     * @return User
     */
    public function setDonation(float $donation): self
    {
        $this->donation = $this->donation + $donation;

        return $this;
    }

    /**
     * Get the user's creation date.
     *
     * @return Carbon
     */
    public function getCreated_at(): Carbon
    {
        return $this->created_at;
    }

    /**
     * Set the user's creation date.
     *
     * @param Carbon $created_at
     * @return User
     */
    public function setCreated_at(Carbon $created_at): self
    {
        $this->created_at = $created_at;

        return $this;
    }

    /**
     * Get the user's update date.
     *
     * @return Carbon
     */
    public function getUpdated_at(): Carbon
    {
        return $this->updated_at;
    }

    /**
     * Set the user's update date.
     *
     * @param Carbon $updated_at
     * @return User
     */
    public function setUpdated_at(Carbon $updated_at): self
    {
        $this->updated_at = $updated_at;

        return $this;
    }
}