<?php

namespace gg\WhiteListApiBundle\DTO;

class SingleResultDTO
{
    /**
     * @var string|null
     */
    private $regon;

    /**
     * @var string|null
     */
    private $nip;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $statusVat;

    /**
     * @var string|null
     */
    private $pesel;

    /**
     * @var string|null
     */
    private $krs;

    /**
     * @var string|null
     */
    private $address;

    /**
     * @var \DateTime|null
     */
    private $registrationDate;

    /**
     * @var array
     */
    private $accountNumbers;

    /**
     * @var bool|null
     */
    private $virtualAccount;

    public function __construct(
        array $data
    ) {
        $subject = $data['subject']??[];
        $this->name = $subject['name']??null;
        $this->nip = $subject['nip']??null;
        $this->statusVat = $subject['statusVat']??null;
        $this->regon = $subject['regon']??null;
        $this->pesel = $subject['pesel']??null;
        $this->krs = $subject['krs']??null;
        $this->address = $subject['residenceAddress']??null;
        $date = $subject['registrationLegalDate']??null;
        $this->registrationDate = ($date !== null) ? new \DateTime($date) : null;
        $this->accountNumbers = $subject['accountNumbers'] ?? [];
        $this->virtualAccount = $subject['hasVirtualAccounts'] ?? null;
    }

    public function getRegon(): ?string
    {
        return $this->regon;
    }

    public function setRegon(?string $regon): SingleResultDTO
    {
        $this->regon = $regon;
        return $this;
    }

    public function getNip(): ?string
    {
        return $this->nip;
    }

    public function setNip(?string $nip): SingleResultDTO
    {
        $this->nip = $nip;
        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): SingleResultDTO
    {
        $this->name = $name;
        return $this;
    }

    public function getStatusVat(): ?string
    {
        return $this->statusVat;
    }

    public function setStatusVat(?string $statusVat): SingleResultDTO
    {
        $this->statusVat = $statusVat;
        return $this;
    }

    public function getPesel(): ?string
    {
        return $this->pesel;
    }

    public function setPesel(?string $pesel): SingleResultDTO
    {
        $this->pesel = $pesel;
        return $this;
    }

    public function getKrs(): ?string
    {
        return $this->krs;
    }

    public function setKrs(?string $krs): SingleResultDTO
    {
        $this->krs = $krs;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(?string $address): SingleResultDTO
    {
        $this->address = $address;
        return $this;
    }

    public function getRegistrationDate(): ?\DateTime
    {
        return $this->registrationDate;
    }

    public function setRegistrationLegalDate(?\DateTime $registrationDate): SingleResultDTO
    {
        $this->registrationDate = $registrationDate;
        return $this;
    }

    public function getAccountNumbers(): array
    {
        return $this->accountNumbers;
    }

    public function setAccountNumbers(array $accountNumbers): SingleResultDTO
    {
        $this->accountNumbers = $accountNumbers;
        return $this;
    }

    public function getVirtualAccount(): ?bool
    {
        return $this->virtualAccount;
    }

    public function setVirtualAccount(?bool $virtualAccount): SingleResultDTO
    {
        $this->virtualAccount = $virtualAccount;
        return $this;
    }

    public function getFistAccountNumber(): ?string
    {
        return array_values($this->accountNumbers)[0]??null;
    }
}
