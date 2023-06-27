<?php 

/**
 * @author Luiz Alves <l.alves158@hotmail.com>
 */
class Mensagem {
    private $texto;
    private $css;

    /**
     * Método responsavel pela renderização
     * @return string
     */
    public function renderizar(): string
    {
        return $this->texto = $this->filtrar('<h1>mensagem de teste</h1>');
    }

    private function filtrar(string $mensagem): string
    {
        return filter_var($mensagem, FILTER_SANITIZE_SPECIAL_CHARS);
    }

}

?>