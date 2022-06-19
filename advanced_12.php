<?php

interface ContactBuilder
{
    public function setName(string $value): ContactBuilder;
    public function setSurname(string $value): ContactBuilder;
    public function setEmail(string $value): ContactBuilder;
    public function setPhone(string $value): ContactBuilder;
    public function setAddress(string $value): ContactBuilder;
    public function build(): Contact;

}

class Contact implements ContactBuilder {
    private $name;
    private $surname;
    private $email;
    private $phone;
    private $address;
    private $contact;

    public function __construct()
    {
        $this->reset();
    }

    public function reset()
    {
        $this->contact = $this;
    }

    public function setName(string $value): ContactBuilder
    {
        $this->contact->name = $value;

        return $this;
    }

    public function setSurname(string $value): ContactBuilder
    {
        $this->contact->surname = $value;

        return $this;
    }

    public function setEmail(string $value): ContactBuilder
    {
        $this->contact->email = $value;

        return $this;
    }

    public function setPhone(string $value): ContactBuilder
    {
        $this->contact->phone = $value;

        return $this;
    }

    public function setAddress(string $value): ContactBuilder
    {
        $this->contact->address = $value;

        return $this;
    }

    public function build(): Contact
    {
        return $this->contact;
    }
}

$contact = new Contact();
$newContact = $contact->setPhone('000-555-000')
    ->setName("John")
    ->setSurname("Surname")
    ->setEmail("john@email.com")
    ->setAddress("Some address")
    ->build();
dd($newContact);
