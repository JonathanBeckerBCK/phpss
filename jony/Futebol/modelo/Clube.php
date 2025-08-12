<?php

class Clube {

    private string $nome;
    private string $divisao;
    private string $anoFundacao;

    public function __construct()
    {
        
    }

    public function __toString()
    {
        
    }

    /**
     * Get the value of nome
     */
    public function getNome(): string
    {
        return $this->nome;
    }

    /**
     * Set the value of nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get the value of divisao
     */
    public function getDivisao(): string
    {
        return $this->divisao;
    }

    /**
     * Set the value of divisao
     */
    public function setDivisao(string $divisao): self
    {
        $this->divisao = $divisao;

        return $this;
    }

    /**
     * Get the value of anoFundacao
     */
    public function getAnoFundacao(): string
    {
        return $this->anoFundacao;
    }

    /**
     * Set the value of anoFundacao
     */
    public function setAnoFundacao(string $anoFundacao): self
    {
        $this->anoFundacao = $anoFundacao;

        return $this;
    }
    
}