<?php

namespace App\View\Components\Custom;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class TextoTitulo extends Component
{
    /**
     * Create a new component instance.
     */
    public $text;
    public $style;

    public function __construct($text, $style)
    {
        $this->style = $style; //Asignar el estilo primero
        $this->text = $this->formatearTexto($text); // Luego formatea el texto
    }

    /**
     * Get the view / contents that represent the component.
     */
    private function formatearTexto($text)
    {
        return preg_replace(
            '/\*(.*?)\*/',
            '<span class="' . e($this->style) . '">$1</span>',
            e($text)
        );
    }

    public function render(): View|Closure|string
    {
        return view('components.custom.texto-titulo');
    }
}
