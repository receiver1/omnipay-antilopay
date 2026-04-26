<?php

namespace Omnipay\Antilopay\Model;

class TransactionReference {
  private $orderId;
  private $amount;
  private $originalAmount;
  private $fee;
  private $currency;
  private $productName;
  private $description;
  private $payMethod;
  private $payData;
  private $customerIp;
  private $customerUserAgent;
  private $customer;

  public function __construct($orderId, $amount, $originalAmount, $fee, $currency, $productName, $description, $payMethod, $payData, $customerIp, $customerUserAgent, $customer) {
    $this->orderId = $orderId;
    $this->amount = $amount;
    $this->originalAmount = $originalAmount;
    $this->fee = $fee;
    $this->currency = $currency;
    $this->productName = $productName;
    $this->description = $description;
    $this->payMethod = $payMethod;
    $this->payData = $payData;
    $this->customerIp = $customerIp;
    $this->customerUserAgent = $customerUserAgent;
    $this->customer = $customer;
  }

  public function getOrderId(): string {
    return $this->orderId;
  }

  public function getAmount(): int {
    return $this->amount;
  }

  public function getOriginalAmount(): int {
    return $this->originalAmount;
  }

  public function getFee(): int {
    return $this->fee;
  }

  public function getCurrency(): string {
    return $this->currency;
  }

  public function getProductName(): string {
    return $this->productName;
  }

  public function getDescription(): string {
    return $this->description;
  }

  public function getPayMethod(): string {
    return $this->payMethod;
  }

  public function getPayData(): string {
    return $this->payData;
  }

  public function getCustomerIp(): string {
    return $this->customerIp;
  }

  public function getCustomerUserAgent(): string {
    return $this->customerUserAgent;
  }

  public function getCustomer(): CustomerReference {
    return new CustomerReference($this->customer['email'] ?? null, $this->customer['phone'] ?? null,
      $this->customer['address'] ?? null, $this->customer['ip'] ?? null, $this->customer['fullname'] ?? null);
  }
}