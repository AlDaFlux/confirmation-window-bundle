# confirmation-window-bundle

Have a confirmation window before link

## Install : 

```
composer require aldaflux/confirmation-window-bundle
```


## Synfony 3.*

```
new Aldaflux\ConfirmationWindowBundle\AldafluxConfirmationWindowBundle(),
```


```
services:
    Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface: '@assetic.parameter_bag'
    twig.extension.confirmation:
        autowire: true
        class: Aldaflux\ConfirmationWindowBundle\Twig\CWExtension
        arguments:
            $params: "@assetic.parameter_bag"
```


## aldaflux_confirmation_window.yaml

```

aldaflux_confirmation_window:
    template: bootstrap4
    delete: true 
    customs:
        modify:
            title: "*************?"
            selector: ".modif"
            class: "warning"
        modify2:
            title: "*************?"
            selector: ".modif2"
            class: "danger"
    alerts:
        alert:
            selector: ".message"
            title: "*************?"
            button: " Go !! Go !! Go"
    
```




