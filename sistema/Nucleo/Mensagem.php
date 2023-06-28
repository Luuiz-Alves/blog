<?php 

namespace sistema\Nucleo;

/**
 * Classe Mensagem - responsável por exibir as mensagens do sistema.
 * @author Luiz Alves <l.alves158@hotmail.com>
 * @copyright Copyright (c) 2023, UnSet
 */
class Mensagem {
    private $texto;
    private $css;

    public function __toString()
    {
        return $this->renderizar();
    }

    /**
     * Método responsável pelas mensagens de sucesso
     * @param string $mensagem
     * @return Mensagem
     */
    public function sucesso(string $mensagem): Mensagem 
    {
        $this->css = 'alert alert-success';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function erro(string $mensagem): Mensagem 
    {
        $this->css = 'alert alert-danger';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function alerta(string $mensagem): Mensagem 
    {
        $this->css = 'alert alert-warning';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    public function informa(string $mensagem): Mensagem 
    {
        $this->css = 'alert alert-primary';
        $this->texto = $this->filtrar($mensagem);
        return $this;
    }

    /**
     * Método responsavel pela renderização
     * @return string
     */
    public function renderizar(): string
    {
        return "<div class='{$this->css}'>{$this->texto}</div>";
    }

    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }

}

?>