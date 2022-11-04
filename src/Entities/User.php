<?php

namespace App\Entities;

use Carbon\Carbon;
use JsonSerializable;

class User implements JsonSerializable
{
    /**
     * User's id
     * PRIMARY KEY UNSIGNED NOT NULLABLE
     *
     * @var integer $id
     */
    private int $id;

    /**
     * The user's last name.
     * string 255 NOT NULLABLE
     * @var string $last_name
     */
    private string $last_name;

    /**
     * The user's first name.
     * string 255 NOT NULLABLE
     * @var string $first_name
     */
    private string $first_name;

    /**
     * The user's email address.
     * string 255 NOT NULLABLE
     * @var string $email
     */
    private string $email;

    /**
     * If the user's email is verified.
     * boolean default 0
     * @var boolean $email_verified
     */
    private bool $email_verified;

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
     * @var string $zip_code
     */
    private string $zip_code;

    /**
     * The user's city.
     * string 255 NOT NULLABLE
     * @var string $city
     */
    private string $city;

    /**
     * The user's phone number.
     * string 10 NULLABLE default NULL
     * @var string $phone_number
     */
    private string $phone_number;

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
     * @var string|null $date_creation
     */
    private ?string $date_creation;

    /**
     * The user's update date.
     * datetime NULLABLE default NULL
     * @var string|null $date_updated
     */
    private ?string $date_updated;


    /**
     * Get the value of id
     *
     * @return  integer
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Get the user's last name.
     *
     * @return string
     */
    public function getLastName(): string
    {
        return strtoupper($this->last_name);
    }

    /**
     * Set the user's last name.
     *
     * @param string $last_name
     * @return User
     */
    public function setLastName(string $last_name): self
    {
        $this->last_name = \strtolower($last_name);

        return $this;
    }

    /**
     * Get the user's first name.
     *
     * @return string
     */
    public function getFirstName(): string
    {
        return ucfirst($this->first_name);
    }

    /**
     * Set the user's first name.
     *
     * @param string $first_name
     * @return User
     */
    public function setFirstName(string $first_name): self
    {
        $this->first_name = \strtolower($first_name);

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
        return $this->email_verified;
    }

    /**
     * Set if the user's email is verified.
     *
     * @param bool $email_verified
     * @return User
     */
    public function setIsEmailVerified(bool $email_verified): self
    {
        $this->email_verified = $email_verified;

        return $this;
    }

    /**
     * Check user's password.
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
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
    public function setAddress(string $address): self
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
        return \strtoupper($this->zip_code);
    }

    /**
     * Set the user's ZIP code.
     *
     * @param string $zip_code
     * @return User
     */
    public function setZipCode(string $zip_code): self
    {
        $this->zip_code = \strtolower($zip_code);

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
        return wordwrap($this->phone_number, 2, ' ', true);
    }

    /**
     * Set the user's phone number.
     *
     * @param string $phone_number
     * @return User
     */
    public function setPhoneNumber(string $phone_number): self
    {
        $this->phone_number = $phone_number;

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
        $this->donation = $donation;

        return $this;
    }

    /**
     * Get the user's creation date.
     *
     * @return string|null
     */
    public function getDateCreation(): string|null
    {
        return $this->date_creation;
    }

    /**
     * Set the user's creation date.
     *
     * @param string|null $date_creation
     * @return User
     */
    public function setDateCreation(string|null $date_creation): self
    {
        $this->date_creation = $date_creation;

        return $this;
    }

    /**
     * Get the user's update date.
     *
     * @return string|null
     */
    public function getDateUpdated(): string|null
    {
        return $this->date_updated;
    }

    /**
     * Set the user's update date.
     *
     * @param string|null $date_updated
     * @return User
     */
    public function setDateUpdated(string|null $date_updated): self
    {
        $this->date_updated = $date_updated;

        return $this;
    }

    public function hydrate($data = [])
    {
        var_dump('pouet');
        var_dump('<br>');
        foreach ($data as $key => $value) {
            $method = 'set' . ucfirst($key);
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    public function __invoke(): array
    {

        $array = array();
        $methods = get_class_methods($this);

        foreach ($methods as $method) {
            if (str_contains($method, 'get')) {
                $key = strtolower(substr($method, 3));
                if (method_exists($this, $method) && $method !== 'getId') {
                    $array[$key] = $this->$method();
                }
            }
        }
        // foreach ($this as $key => $value) {
        //     if ($key !== 'id') {
        //         $array[$key] = $value;
        //     }
        // }
        return $array;
    }

    public function jsonSerialize(): array
    {
        return [
            'lastName' => $this->getLastName(),
            'firstName' => $this->getFirstName(),
            'email' => $this->getEmail(),
            'isEmailVerified' => $this->getIsEmailVerified(),
            'address' => $this->getAddress(),
            'zipCode' => $this->getZipCode(),
            'city' => $this->getCity(),
            'phoneNumber' => $this->getPhoneNumber(),
            'role' => $this->getRole(),
            'donation' => $this->getDonation(),
            'dateCreation' => $this->getDateCreation(),
            'dateUpdated' => $this->getDateUpdated(),
        ];
    }
}