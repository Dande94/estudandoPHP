<?php
class Language{

    private $l;
    private $ini;//será uma array que ira armazenar o conteudo de arquivos ini;
    private $bd;

    public function __construct(){//usando o construct para aplicar uma linguagem padrão, afinal o construct padroniza caracteristicas da classe;
        $this->l = 'pt-br';

        if(!empty($_SESSION['lang']) && file_exists('../lang/'.$_SESSION['lang'].'.ini')){//se existe uma sessão 'lang' e ela tá setada, então substitui, e para proteção a da integridade do sistema, será verificado se a linguagem está disponível caso estiver, a mesma será aplicada;
            $this->l= $_SESSION['lang'];
        }

        $this->ini= parse_ini_file('../lang/'.$this->l.'.ini');//carregar o dicionário, traze o arquivo e transformar em array; foi usado o'$this-l' ao invés do '$_SESSION['lang']' pq caso a servidor não encontre a sessão setrá 'pt-br' como padrão;

        global $pdo;
        $sql = "SELECT * FROM lang where lang = :lang";
        $sql = $pdo->prepare($sql);
        $sql->bindValue(':lang', $this->l);
        $sql->execute();

        if($sql->rowCount() > 0){
            foreach($sql->fetchAll() as $item){
                $this->bd[$item['nome']] = $item['valor'];
            }
        }

    }
    public function getLanguage(){
        // return $_SESSION['lang']; // meu retorno;
        return $this->l; //retorno do professor; dar preferencia a esse retorno pq a a variavél 'l' está sendo validada para manter a integridade;
    }
    public function get($word, $return = false ){//'$word' recebe uma palavra;'$return' setado como padrão false para que na tela index, caso queira salvar um texto ele não de 'echo' na variavél, mas caso esteja verdadeiro salve o texto enviado;

        $text = $word;

        //verificação do ini do dicionáro
        if(isset($this->ini[$word])){//verifica se a palavra que pedi tem o dicionário
            $text =  $this->ini[$word];//a tribui o que há na chave do array a variavél '$text';
        }
        //verificação do ini no bando de dados;
        elseif(isset($this->bd[$word])){
            $text = $this->bd[$word];
        }

        //caso a palavra tenha no dicionário ela retorna, se não ela da echo a palavra diretamente, através do 'if' a seguir;

        if($return){
            //caso o $return venha 'true' da index irá retorna a própria palavra sem traduzir;;
            return $text;
        }else{
            //caso permaneça false como de padrão irá dar um echo na tradução na página index;
            echo $text;
        }

    }
}
//nessa revisão observei eu descuido com referencia a diretórios, onde fiquei quase 1hr caçando o bug que causei por esquecer de voltar uma pasta pra encontrar os arquivos '.ini';
?>

