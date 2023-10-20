<?php
class Purchase {
    private $street, $streetNumber, $district, $zipCode, $state, $city, $paymentMethod, $cardBrand, $cardholderName, $cardNumber, $securityCode, $expirationDate, $installments, $subtotal, $total;

    public function __construct($street, $streetNumber, $district, $zipCode, $state, $city, $paymentMethod, $cardBrand, $cardholderName, $cardNumber, $securityCode, $expirationDate, $installments, $subtotal, $total) {
        $this->street = $street;
        $this->streetNumber = $streetNumber;
        $this->district = $district;
        $this->zipCode = $zipCode;
        $this->state = $state;
        $this->city = $city;
        $this->paymentMethod = $paymentMethod;
        $this->cardBrand = $cardBrand;
        $this->cardholderName = $cardholderName;
        $this->cardNumber = $cardNumber;
        $this->securityCode = $securityCode;
        $this->expirationDate = $expirationDate;
        $this->installments = $installments;
        $this->subtotal = $subtotal;
        $this->total = $total;
    }

	/**
	 * @return mixed
	 */
	public function getStreet() {
		return $this->street;
	}
	
	/**
	 * @param mixed $street 
	 * @return self
	 */
	public function setStreet($street): self {
		$this->street = $street;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getStreetNumber() {
		return $this->streetNumber;
	}
	
	/**
	 * @param mixed $streetNumber 
	 * @return self
	 */
	public function setStreetNumber($streetNumber): self {
		$this->streetNumber = $streetNumber;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getDistrict() {
		return $this->district;
	}
	
	/**
	 * @param mixed $district 
	 * @return self
	 */
	public function setDistrict($district): self {
		$this->district = $district;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getZipCode() {
		return $this->zipCode;
	}
	
	/**
	 * @param mixed $zipCode 
	 * @return self
	 */
	public function setZipCode($zipCode): self {
		$this->zipCode = $zipCode;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getState() {
		return $this->state;
	}
	
	/**
	 * @param mixed $state 
	 * @return self
	 */
	public function setState($state): self {
		$this->state = $state;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCity() {
		return $this->city;
	}
	
	/**
	 * @param mixed $city 
	 * @return self
	 */
	public function setCity($city): self {
		$this->city = $city;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getPaymentMethod() {
		return $this->paymentMethod;
	}
	
	/**
	 * @param mixed $paymentMethod 
	 * @return self
	 */
	public function setPaymentMethod($paymentMethod): self {
		$this->paymentMethod = $paymentMethod;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCardBrand() {
		return $this->cardBrand;
	}
	
	/**
	 * @param mixed $cardBrand 
	 * @return self
	 */
	public function setCardBrand($cardBrand): self {
		$this->cardBrand = $cardBrand;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCardholderName() {
		return $this->cardholderName;
	}
	
	/**
	 * @param mixed $cardholderName 
	 * @return self
	 */
	public function setCardholderName($cardholderName): self {
		$this->cardholderName = $cardholderName;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getCardNumber() {
		return $this->cardNumber;
	}
	
	/**
	 * @param mixed $cardNumber 
	 * @return self
	 */
	public function setCardNumber($cardNumber): self {
		$this->cardNumber = $cardNumber;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSecurityCode() {
		return $this->securityCode;
	}
	
	/**
	 * @param mixed $securityCode 
	 * @return self
	 */
	public function setSecurityCode($securityCode): self {
		$this->securityCode = $securityCode;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getExpirationDate() {
		return $this->expirationDate;
	}
	
	/**
	 * @param mixed $expirationDate 
	 * @return self
	 */
	public function setExpirationDate($expirationDate): self {
		$this->expirationDate = $expirationDate;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getInstallments() {
		return $this->installments;
	}
	
	/**
	 * @param mixed $installments 
	 * @return self
	 */
	public function setInstallments($installments): self {
		$this->installments = $installments;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getSubtotal() {
		return $this->subtotal;
	}
	
	/**
	 * @param mixed $subtotal 
	 * @return self
	 */
	public function setSubtotal($subtotal): self {
		$this->subtotal = $subtotal;
		return $this;
	}
	
	/**
	 * @return mixed
	 */
	public function getTotal() {
		return $this->total;
	}
	
	/**
	 * @param mixed $total 
	 * @return self
	 */
	public function setTotal($total): self {
		$this->total = $total;
		return $this;
	}
}
?>