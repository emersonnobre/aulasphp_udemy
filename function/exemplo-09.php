<?php

// Utilizando funções recursivas
$hierarquia = array(
    array (
        'nome_cargo'=>'CEO',
        'subordinados'=>array(
            //Inicio: Diretor comercial
            array(
                'nome_cargo'=>'Diretor comercial',
                'subordinados'=>array(
                    //Inicio: Gerente de vendas
                    array (
                        'nome_cargo'=>'Gerente de vendas'
                    )
                    //Termino: Gerente de vendas  
                )
            ),
            //Termino: Diretor comercial
            //Inicio: Diretor financeiro
            array(
                'nome_cargo'=>'Diretor financeiro',
                'subordinados'=>array(
                    //Inicio: Gerente de contas a pagar
                    array(
                        'nome_cargo'=>'Gerente de contas a pagar',
                        'subordinados'=>array(
                            //Inicio: Supervisor de pagamentos
                            array(
                                'nome_cargo'=>'Supervisor de pagamentos',
                            )
                            //Termino: Supervisor de pagamentos
                        )
                    ),
                    //Termino: Gerente de contas a pagar
                    //Inicio: Gerente de compras
                    array(
                        'nome_cargo'=>'Gerente de compras',
                        'subordinados'=>array(
                            //Inicio: Supervisor de suprimentos
                            array(
                                'nome_cargo'=>'Supervisor de suprimentos'
                            ),
                            //Termino: Supervisor de suprimentos
                            array(
                                'nome_cargo'=>'Ludio comedor'
                            )
                        )
                    )
                    //Termino: Gerente de compras
                )
                
            )
            //Termino: Diretor financeiro
        )
        

    )
    //Termino: CEO
);

function exibe ($cargos) {
    $html = "<ul>";

    foreach ($cargos as $cargo) {

        $html .= "<li>";

        $html .= $cargo["nome_cargo"];

        if (isset($cargo["subordinados"]) && count($cargo["subordinados"]) > 0) {
            $html .= exibe($cargo["subordinados"]);        
        }

        $html .= "</li>";

    }

    $html .= "</ul>";

    return $html;
}

echo exibe($hierarquia);
?>