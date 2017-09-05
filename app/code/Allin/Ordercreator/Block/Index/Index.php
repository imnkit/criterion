<?php

namespace Allin\Ordercreator\Block\Index;


class Index extends \Magento\Framework\View\Element\Template {

    public function __construct(\Magento\Catalog\Block\Product\Context $context,
	array $data = [],
	\Magento\Catalog\Model\Product $product,
	\Magento\Quote\Model\QuoteFactory $quote,
	\Magento\Quote\Model\QuoteManagement $quoteManagement,
	\Magento\Customer\Model\CustomerFactory $customerFactory,
	\Magento\Customer\Api\CustomerRepositoryInterface $customerRepository
	
	) {
		$this->_product = $product;
		$this->quote = $quote;
		$this->quoteManagement = $quoteManagement;
		$this->customerFactory = $customerFactory;
		$this->customerRepository = $customerRepository;
        parent::__construct($context, $data);

    }
	

    protected function _prepareLayout()
    {
		$client = new \SoapClient('https://www.criterionindustries.com.au/index.php/api/soap/?wsdl');

		$session = $client->login('tester', '12345678');
		$results = $client->call($session, 'order.list');
		 foreach($results as $result)
		{
			echo "<pre>";
			print_r($result);die;

			$store = $result['store_id'];
			$websiteId = 1;
			$customer = $this->customerFactory->create();
			$customer->setWebsiteId($websiteId);
			$customer->loadByEmail($result['customer_email']);
			if(!$customer->getEntityId()){
				//If not avilable then create this customer 
				$customer->setWebsiteId($websiteId)
						->setStore($store)
						->setFirstname($result['customer_firstname'])
						->setLastname($result['customer_lastname'])
						->setEmail($result['customer_email']) 
						->setPassword($result['customer_email']);
				$customer->save();
			}
			$quote=$this->quote->create(); //Create object of quote
			$quote->setStore($store); //set store for which you create quote
			// if you have allready buyer id then you can load customer directly 
			$customer= $this->customerRepository->getById($customer->getEntityId());
			$quote->setCurrency();
			$quote->assignCustomer($customer); //Assign quote to customer
	 
			//add items in quote
			foreach($orderData['items'] as $item){
				$product=$this->_product->load($item['product_id']);
				$product->setPrice($item['price']);
				$quote->addProduct(
					$product,
					intval($item['qty'])
				);
			}
	 
			//Set Address to quote
			$quote->getBillingAddress()->addData($orderData['shipping_address']);
			$quote->getShippingAddress()->addData($orderData['shipping_address']);
	 
			// Collect Rates and Set Shipping & Payment Method
	 
			$shippingAddress=$quote->getShippingAddress();
			$shippingAddress->setCollectShippingRates(true)
							->collectShippingRates()
							->setShippingMethod($result['shipping_method']); //shipping method
			$quote->setPaymentMethod('checkmo'); //payment method
			$quote->setInventoryProcessed(false); //not effetc inventory
			$quote->save(); //Now Save quote and your quote is ready
	 
			// Set Sales Order Payment
			$quote->getPayment()->importData(['method' => 'checkmo']);
	 
			// Collect Totals & Save Quote
			$quote->collectTotals()->save();
	 
			// Create Order From Quote
			$order = $this->quoteManagement->submit($quote);
			
			$order->setEmailSent(0);
			$increment_id = $order->getRealOrderId();
			if($order->getEntityId()){
				$result['order_id']= $order->getRealOrderId();
			}else{
				$result=['error'=>1,'msg'=>'Your custom message'];
			}
		} 
		
		
		
        return $result;
        return parent::_prepareLayout();
    }

}