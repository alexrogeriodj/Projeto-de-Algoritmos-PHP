<?php
class Funcionario
{
    private   $Codigo;
    public    $Nome;
    private   $Nascimento;
    protected $Salario;
    
    /* m�todo SetSalario
     * atribui o par�metro $Salario � propriedade $Salario
     */
    function SetSalario($Salario)
    {
        // verifica se � num�rico e positivo
        if (is_numeric($Salario) and ($Salario > 0))
        {
            $this->Salario = $Salario;
        }
    }
    
    /* m�todo GetSalario
     * retorna o valor da propriedade $Salario
     */
    function GetSalario()
    {
        return $this->Salario;
    }
}
?>