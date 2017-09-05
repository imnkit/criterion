<?php

namespace Allin\Ordercreator\Controller\Index;

class Index extends \Magento\Framework\App\Action\Action
{
	/* protected $_product;
	protected $quote;
	protected $quoteManagement;
	protected $customerFactory;
	protected $customerRepository;
	protected $context;
	
	
	public function __construct(
		\Magento\Framework\App\Helper\Context $context,
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
		parent::__construct($context, $product);
    } */
	
    public function execute()
    {

	$this->_view->loadLayout();
	$this->_view->getLayout()->initMessages();
	$this->_view->renderLayout();
	
	$client = new \SoapClient('https://www.criterionindustries.com.au/index.php/api/soap/?wsdl');

	$session = $client->login('tester', '12345678');
	//$result = $client->call($session, 'sales_order.info', 'orderIncrementId');
	$results = $client->call($session, 'order.list');
	foreach($results as $result)
	{
		
		echo "<pre>";
		print_r($result);die;
	}
        
		
		
		
		/* $store=1;
        $websiteId = 1;
        $customer=$this->customerFactory->create();
        $customer->setWebsiteId($websiteId);
        $customer->loadByEmail($orderData['email']);// load customet by email address
        if(!$customer->getEntityId()){
            //If not avilable then create this customer 
            $customer->setWebsiteId($websiteId)
                    ->setStore($store)
                    ->setFirstname($orderData['shipping_address']['firstname'])
                    ->setLastname($orderData['shipping_address']['lastname'])
                    ->setEmail($orderData['email']) 
                    ->setPassword($orderData['email']);
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
                        ->setShippingMethod('freeshipping_freeshipping'); //shipping method
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
        return $result; */
    }
}
