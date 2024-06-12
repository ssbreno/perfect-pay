<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCustomerRequest;
use App\Http\Resources\CustomerResource;
use App\Services\CustomerService;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class CustomerController extends Controller
{
    protected $customerService;

    public function __construct(CustomerService $customerService)
    {
        $this->customerService = $customerService;
    }

    public function createCustomer(CreateCustomerRequest $request)
    {
        try {
            $customer = $this->customerService->createCustomer($request->validated());

            return new CustomerResource($customer);
        } catch (\Exception $e) {
            return response()->json([
                'errors' => [
                    [
                        'code' => 'customer_creation_error',
                        'description' => $e->getMessage(),
                    ],
                ],
            ], Response::HTTP_INTERNAL_SERVER_ERROR);
        }
    }
}
