<?php

namespace App\Models;

class User
{
    /**
     * The user's last name.
     *
     * @var string $lastName
     */
    private string $lastName;

    /**
     * The user's first name.
     *
     * @var string $firstName
     */
    private string $firstName;

    /**
     * The user's email address.
     *
     * @var string $email
     */
    private string $email;

    /**
     * If the user' email is verified.
     *
     * @var boolean $isEmailVerified
     */
    private bool $isEmailVerified;

    /**
     * The user's password.
     *
     * @var string $password
     */
    private string $password;

    /**
     * The user's address.
     *
     * @var string $address
     */
    private string $address;

    /**
     * The user's ZIP code.
     *
     * @var string $postCode
     */
    private string $postCode;

    /**
     * The user's city.
     *
     * @var string $city
     */
    private string $city;

    /**
     * The user's phone number.
     *
     * @var string $phoneNumber
     */
    private string $phoneNumber;

    /**
     * The user's role.
     *
     * @var integer $role
     */
    private int $role;

    /**
     * The user's donation.
     *
     * @var float $donation
     */
    private float $donation;

    /**
     * User's builder
     *
     * @param string $lastName
     * @param string $firstName
     * @param string $email
     * @param string $password
     * @param string $address
     * @param string $postCode
     * @param string $city
     * @param string $phoneNumber
     * @param integer $role
     * @param float $donation
     */
    public function __construct(string $lastName, string $firstName, string $email, string $password, string $address, string $postCode, string $city, string $phoneNumber, int $role, float $donation)
    {
        $this->lastName = $lastName;
        $this->firstName = $firstName;
        $this->email = $email;
        $this->password = $password;
        $this->address = $address;
        $this->postCode = $postCode;
        $this->city = $city;
        $this->phoneNumber = $phoneNumber;
        $this->role = $role ?? 0;
        $this->donation = $donation ?? 0;
    }

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
     * @return void
     */
    public function setLastName(string $lastName): void
    {
        $this->lastName = \strtolower($lastName);
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
     * @return void
     */
    public function setFirstName(string $firstName): void
    {
        $this->firstName = \strtolower($firstName);
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
     * @return void
     */
    public function setEmail(string $email): void
    {
        $this->email = \strtolower($email);
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
     * @return void
     */
    public function setIsEmailVerified(bool $isEmailVerified): void
    {
        $this->isEmailVerified = $isEmailVerified;
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
     * @return void
     */
    public function setPassword(string $password): void
    {
        $this->password = \password_hash($password, PASSWORD_ARGON2I);
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
     * @return void
     */
    public function address(string $address): void
    {
        $this->address = \strtolower($address);
    }

    /**
     * Get the user's ZIP code.
     *
     * @return string
     */
    public function getPostCode(): string
    {
        return \strtoupper($this->postCode);
    }

    /**
     * Set the user's ZIP code.
     *
     * @param string $postCode
     * @return void
     */
    public function setPostCode(string $postCode): void
    {
        $this->postCode = \strtolower($postCode);
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
     * @return void
     */
    public function setCity(string $city): void
    {
        $this->city = \strtolower($city);
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
     * @return void
     */
    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
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
     * @return void
     */
    public function setRole(int $role): void
    {
        $this->role = $role;
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
     * @return void
     */
    public function setDonation(float $donation): void
    {
        $this->donation = $this->donation + $donation;
    }
}