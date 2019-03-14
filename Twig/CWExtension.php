<?php
            
namespace Aldaflux\ConfirmationWindowBundle\Twig;
            
use Twig_Extension_GlobalsInterface;

use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;



class CWExtension extends \Twig_Extension  implements Twig_Extension_GlobalsInterface
{   
    protected $params;
            
    public function __construct(ParameterBagInterface $params)
    {
        $this->params = $params;
    }
    
    
    public function getName()
    {
        return 'CWExtension';
    }
    
     
    public function getGlobals()
    {
        return array(
            'confirmation_window_customs' =>$this->params->get("confirmation_window.customs"),
            'confirmation_window_alerts' =>$this->params->get("confirmation_window.alerts"),
            'confirmation_window_delete' =>$this->params->get("confirmation_window.delete"),
            'confirmation_window_template' =>$this->params->get("confirmation_window.template")
        );
    }
            
             
    
               
    
    
}
