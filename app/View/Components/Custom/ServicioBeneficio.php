<?php

namespace App\View\Components\Custom;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class ServicioBeneficio extends Component
{
    /**
     * Create a new component instance.
     */
    public $beneficios;
    public $icono;
    public function __construct($text, $icono)
    {
        // Convertir el string en un array de beneficios
        $this->icono = $icono;
        $this->beneficios = explode(';', $text);
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.custom.servicio-beneficio', ['beneficios' => $this->beneficios, 'icono' => $this->icono]);
    }
}
