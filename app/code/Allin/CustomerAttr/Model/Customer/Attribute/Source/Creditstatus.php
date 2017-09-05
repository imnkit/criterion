<?php


namespace Allin\CustomerAttr\Model\Customer\Attribute\Source;

class Creditstatus extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    protected $_optionsData;

    public function __construct(array $options = null)
    {
        $this->_optionsData = $options;
    }

    public function getAllOptions()
    {
        if ($this->_options === null) {
            $this->_options = [
                ['value' => '1', 'label' => __('Yes')],
                ['value' => '2', 'label' => __('No')]
            ];
        }
        return $this->_options;
    }
}
