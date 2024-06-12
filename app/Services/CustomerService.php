<?php

namespace App\Services;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Log;
use App\Models\Customer;
use GuzzleHttp\Exception\RequestException;

class CustomerService
{
    protected $client;
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->client = new Client();
        $this->apiKey = env('ASAAS_API_KEY');
        $this->baseUrl = env('ASAAS_BASE_URL');
    }

    public function createCustomer(array $data)
    {
        try {
            $response = $this->client->post("{$this->baseUrl}/api/v3/customers", [
                'headers' => [
                    'Content-Type' => 'application/json',
                    'access_token' => $this->apiKey,
                ],
                'body' => json_encode($data),
            ]);

            $customerData = json_decode($response->getBody(), true);

            $customer = Customer::create([
                'asaas_id' => $customerData['id'],
                'name' => $customerData['name'],
                'cpfCnpj' => $customerData['cpfCnpj'],
                'email' => $customerData['email'],
                'phone' => $customerData['phone'],
                'mobilePhone' => $customerData['mobilePhone'],
                'address' => $customerData['address'],
                'addressNumber' => $customerData['addressNumber'],
                'complement' => $customerData['complement'],
                'province' => $customerData['province'],
                'postalCode' => $customerData['postalCode'],
                'externalReference' => $customerData['externalReference'],
                'notificationDisabled' => $customerData['notificationDisabled'],
                'additionalEmails' => $customerData['additionalEmails'],
                'municipalInscription' => $customerData['municipalInscription'],
                'stateInscription' => $customerData['stateInscription'],
                'observations' => $customerData['observations'],
                'groupName' => $customerData['groupName'],
                'company' => $customerData['company'],
            ]);

            return $customer;
        } catch (RequestException $e) {
            Log::error('Erro ao criar cliente: ' . $e->getMessage());
            throw $e;
        } catch (\Exception $e) {
            Log::error('Erro ao criar cliente: ' . $e->getMessage());
            throw new \Exception('Erro ao processar a criação do cliente.');
        }
    }
}
