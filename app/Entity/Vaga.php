<?php
    namespace App\Entity;

    use \App\Db\Database;

    class Vaga{
             /** @var auto_increments */
        public $id;
            /** @var varchar(40) */
        public $titulo;
            /** @var text */
        public $descricao;
            /** @var enum(s/n) */
        public $ativo;
            /** @var string */
        public $data;

        /** @return boolean Method Cadastrar */
        public function cadastrar(){
            // DEFINIR A DATA
            $this->data = date('Y-m-d H:i:s');

            //INSERIR A VAGA NO BANCO PASSANDO O NOME DA TABELA
            $obDatabase = new Database('vagas');
            $this->id = $obDatabase->insert([
                'titulo' => $this->titulo,
                'descricao' => $this->descricao,
                'ativo' => $this->ativo,
                'data' => $this->data
            ]);

            //echo "<pre>"; print_r($obDatabase); echo "</pre>"; exit;
            //ATRIBUIR O ID DA VAGA INSTANCIA

            //RETORNAR SUCESSO || ERRO
            return true;

        }
    }