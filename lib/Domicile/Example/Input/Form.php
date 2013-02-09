<?php
namespace Domicile\Example\Input;

use Aura\Filter\RuleCollection;
use Aura\Input\Form as InputForm;

class Form extends InputForm
{
    protected $filter;
    
    public function setFilter(RuleCollection $filter)
    {
        $this->filter = $filter;
        $this->initFilter();
    }
    
    protected function initFilter()
    {
    }
    
    public function getFilter()
    {
        return $this->filter;
    }
    
    public function filter()
    {
        return $this->filter->values($this->values);
    }
    
    public function getMessages($field = null)
    {
        return $this->filter->getMessages($field);
    }
}
