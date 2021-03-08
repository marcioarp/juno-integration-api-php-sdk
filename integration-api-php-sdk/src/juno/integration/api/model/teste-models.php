<?php
namespace src\juno\integration\api\model;

require "BaseModel.php";
require "Address.php";
require "Balance.php";
require "Bank.php";
require "BankAccount.php";
require "BankAccountHolder.php";
require "BankAccountType.php";
require "BillPayment.php";
require "BusinessArea.php";
require "Charge.php";
require "CompanyType.php";
require "DigitalAccount.php";
require "Document.php";
require "EventType.php";
require "LegalRepresentative.php";
require "PIXRandomKeys.php";
require "PIXStaticQRCode.php";
require "Payment.php";
require "PaymentRefund.php";
require "PaymentRefundTransaction.php";
require "PaymentTransaction.php";
require "Plan.php";
require "Subscription.php";
require "TokenizedCreditCard.php";
require "Transfer.php";

echo "Teste Address.php <br/><br/>";
$endereco = new Address;
$endereco->street = "Rua do Testenildo Jose";
$endereco->number = 987;
$endereco->complement = "AP 890";
$endereco->neighborhood = "Centro";
$endereco->city = "Curitiba";
$endereco->state = "PR";
$endereco->postCode = "80020010";
var_dump($endereco);

echo "<br/><br/><br/>";

// Teste Balance

echo "Teste Balance.php <br/><br/>";
$saldo = new Balance;
$saldo->balance = 700;
$saldo->withheldBalance = 900;
$saldo->transferableBalance = 2000;
var_dump($saldo);

echo "<br/><br/><br/>";

// Teste Bank

echo "Teste Bank.php <br/><br/>";
$banco = new Bank;
$banco->number = 383;
$banco->name = "Juno";
var_dump($banco);

echo "<br/><br/><br/>";

// Teste BankAccount.php

echo "BankAccount.php <br/><br/>";
$bancoAccount = new BankAccount;
$bancoAccount->bankNumber = 383;
$bancoAccount->agencyNumber = 00001;
$bancoAccount->accountNumber = 123456789;
$bancoAccount->accountType = "CHECKING";
$bancoAccount->accountHolder = "Testenildo Jose Silvano Silva";
var_dump($bancoAccount);

echo "<br/><br/><br/>";

// Teste BankAccountHolder.php

echo "BankAccountHolder.php <br/><br/>";
$bancoAccountHolder = new BankAccountHolder;
$bancoAccountHolder->name = "Josefo Fernandes de Sá";
$bancoAccountHolder->document = "00002900034";
var_dump($bancoAccountHolder);

echo "<br/><br/><br/>";

// Teste BankAccountType.php

echo "BankAccountType.php<br/><br/>";
$bancoAccountType = new BankAccountType;
$bancoAccountType->CHECKING = "CHECKING";
$bancoAccountType->SAVINGS = "SAVINGS";
var_dump($bancoAccountType);

echo "<br/><br/><br/>";

// Teste BillPayment.php

echo "BillPayment.php<br/><br/>";
$bill = new BillPayment;
$bill->beneficiaryDocument = "00000070900";
$bill->billAmount = 99;
$bill->billType = "Boleto";
$bill->createdOn = "2021-03-03";
$bill->dueDate = "2021-03-03";
$bill->numericalBarCode = 34191090088623916153181175060003685250000087075;
$bill->paidAmount = 99;
$bill->payeeId = "bill_1234567890";
$bill->paymentDate = "2021-03-02";
$bill->paymentDescription = "Agua";
$bill->status = "REQUESTED";
var_dump($bill);

echo "<br/><br/><br/>";

// Teste BusinessArea.php

echo "BusinessArea.php<br/><br/>";
$Business = new BusinessArea;
$Business->code = 2033;
$Business->activity = "Serviços";
$Business->category = "Outros";
var_dump($Business);

echo "<br/><br/><br/>";

// Teste Charge.php

echo "Charge.php<br/><br/>";
$charge = new Charge;
$charge->code = 123843;
$charge->reference = "Teste-01";
$charge->duedate = "2021-04-02";
$charge->link = "https://sandbox.boletobancario.com/api-integration/charges/chr_658DFD0069B97AB544106ECEC096416A";
$charge->checkoutUrl = "https://pay-sandbox.juno.com.br/checkout/C021799F0F9CD8C4AF3EFD770A6982F882AE1CCD63BC5011";
$charge->installmentLink = "https://sandbox.boletobancario.com/api-integration/charges/chr_658DFD0069B97AB544106ECEC096416A";
$charge->payNumber = "pay_1287522323123";
$charge->amount = 465;
$charge->billetDetails = "TESTE";
$charge->payments = "BOLETO TESTE";
var_dump($charge);

echo "<br/><br/><br/>";

$billetDetails = new BilletDetails;
$billetDetails->bankAccount = 383;
$billPayment->$ourNumber = "00000136375248-8";
$billetDetails->barcodeNumber = "38394857300001900000000099090000001363752481";
$billetDetails->portfolio = "0001";
var_dump($billetDetails);

echo "<br/><br/><br/>";

// Teste CompanyType.php

echo "CompanyType.php<br/><br/>";
$company = new CompanyType;
$company->type = "LTDA";
var_dump($company);

echo "<br/><br/><br/>";

// Teste DigitalAccount.php

echo "DigitalAccount.php<br/><br/>";
$digital = new DigitalAccount;
$digital->resourceToken = "098TSJH987SGDTDHD99736523IUS876SGGD87";
$digital->type = "PAYMENT";
$digital->status = "ACTIVE";
$digital->personType = "PF";
$digital->document = "09600000000";
$digital->createdOn = "2021-03-03";
var_dump($digital);

echo "<br/><br/><br/>";

// Teste Document.php

echo "Document.php<br/><br/>";
$document = new Document;
$document->type = "CNH";
$document->description = "Documento Oficial";
$document->approvalStatus = "VERIFYED";
$document->rejectionReason = "SEM FOCO";
$document->details = "Motivo X, Y Z";
var_dump($document);

echo "<br/><br/><br/>";

// Teste EventType.php

echo "EventType.php<br/><br/>";
$event = new EventType;
$event->name = "PAYMENT_NOTIFICATION";
$event->label = "teste";
$event->status = "Meu Status";
var_dump($event);

echo "<br/><br/><br/>";

// Teste LegalRepresentative.php

echo "LegalRepresentative.php<br/><br/>";
$legal = new LegalRepresentative;
$legal->name = "Maria Lucia Luciana";
$legal->document = "00099000000";
$legal->birthDate = "1996-08-07";
var_dump($legal);

echo "<br/><br/><br/>";

// Teste PIXRandomKeys.php

echo "PIXRandomKeys.php<br/><br/>";
$pixrandom = new PIXRandomKeys;
$pixrandom->key = "f8820116-b41a-4ee0-8d17-92bba3ce1403";
$pixrandom->creationDateTime = "2021-03-03 08:23:00";
$pixrandom->ownershipDateTime = "2021-03-03 08:23:00";
$pixrandom->claimRequestDateTime = "2021-03-03 08:23:00";
var_dump($pixrandom);

echo "<br/><br/><br/>";

// Teste PIXStaticQRCode.php

echo "PIXStaticQRCode.php<br/><br/>";
$pixstatic = new PIXStaticQRCode;
$pixstatic->qrcodeInBase64 = "TESTE QR CODE IN BASE 64";
$pixstatic->imageInBase64 = "TESTE IMAGE IN BASE 64";
var_dump($pixstatic);

echo "<br/><br/><br/>";

// Teste Payment.php

echo "Payment.php<br/><br/>";
$payment = new Payment;
$payment->date = "2021-03-03";
$payment->releaseDate = "2021-03-03";
$payment->amount = 34.00;
$payment->fee = 0.60;
$payment->type = "CREDIT_CARD";
$payment->status = "PAID";
$payment->chargeId = "chr_7E898A385F67E6FFAF6BB908428A37E0";
$payment->transactionId = "1234567tg";
$payment->creditCardID = "6f8d85c8-09c0-45bf-870e-f861eab6479b";
var_dump($payment);

echo "<br/><br/><br/>";

// Teste PaymentRefund.php

echo "PaymentRefund.php<br/><br/>";
$refund = new PaymentRefund;
$refund->paybackAmount = 45;
$refund->status = "CUSTOMER__PAID_BACK";
$refund->chargeId = "chr_7E898A385F67E6FFAF6BB908428A37E0";
var_dump($refund);

echo "<br/><br/><br/>";

// Teste PaymentRefundTransaction.php

echo "PaymentRefundTransaction.php<br/><br/>";
$refundTransaction = new PaymentRefundTransaction;
$refundTransaction->transactionId = 123456;
$refundTransaction->installments = "2";
var_dump($refundTransaction);

echo "<br/><br/><br/>";

// Teste PaymentTransaction.php

echo "PaymentTransaction.php<br/><br/>";
$paymentTransaction = new PaymentTransaction;
$paymentTransaction->transactionId = 123456;
$paymentTransaction->installments = "2";
var_dump($paymentTransaction);

echo "<br/><br/><br/>";

// Teste Plan.php

echo "plan.php<br/><br/>";
$plan = new Plan;
$plan->created_On = "2021-03-02";
$plan->name = "Meu Plano";
$plan->frequency = "monthly";
$plan->status = "ACTIVE";
$plan->amoun = 45.00;
var_dump ($plan);

echo "<br/><br/><br/>";

// Teste Subscription.php

echo "Subscription.php<br/><br/>";
$subscription = new Subscription;
$subscription->createdOn = "2021-03-02";
$subscription->dueDay = 6;
$subscription->status = "ACTIVE";
$subscription->startsOn = "2021-02-02";
$subscription->lastBillingDate = "2021-03-02";
$subscription->nextBillingDate = "2021-04-02";
var_dump($subscription);

echo "<br/><br/><br/>";

// Teste TokenizedCreditCard.php

echo "TokenizedCreditCard.php<br/><br/>";
$tokenized = new TokenizedCreditCard;
$tokenized->creditCardId = "6f8d85c8-09c0-45bf-870e-f861eab6479b";
$tokenized->last4CardNumber = "4567";
$tokenized->expirationMonth = "08";
$tokenized->expirationYear = "2024";
var_dump($tokenized);

echo "<br/><br/><br/>";

// Teste Transfer.php

echo "Transfer.php<br/><br/>";
$transfer = new Transfer;
$transfer->digitalAccountId = "DAC_654GFD6523232";
$transfer->creationDate = "2021-04-02";
$transfer->transferDate = "2021-04-02";
$transfer->amount = 788;
$transfer->status = "CONFIRMED";
$transfer->recipient = "TESTE";
var_dump($transfer);
