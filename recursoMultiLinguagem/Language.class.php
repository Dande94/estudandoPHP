<?php
//gerenciador de linguagem
class Language{
    private $l; //variavel para armazenar o idioma padrão e posteiormente armazenar outros idiomas;
    private $ini; //será uma array que ira armazenar o conteudo de arquivos ini;
    private $bd;//o que vem do banco de dados;
    public function __construct(){
            $this->l = "pt-br";//setando um idioma padrão
            //verificar a existencia de uma linguagem já setada
            if(!empty($_SESSION['lang']) && file_exists('lang/'.$_SESSION['lang'].'.ini')){//caso retorne verdadeiro é pq tem uma linguagem setada aqui;
                //agregando ao if a verificação de existência do arquivo que contém o dicionário file_exists(), caso o usuário tente enviar qualquuer coisa via url para a session;
                //--
                $this->l = $_SESSION['lang'];//aplicando o idioma a variavel $l que foi setada na session;

                //trazer o dicionário;
                //O método parse_ini_file é utilizado no PHP para analisar arquivos INI (arquivos de configuração de sistema) e converter suas informações em um array associativo. É muito comum utilizar arquivos INI para armazenar configurações do sistema, como por exemplo informações de conexão com o banco de dados, caminhos de arquivos, parâmetros de aplicação, entre outros.
                // O parse_ini_file analisa o arquivo INI especificado no parâmetro filename e retorna um array associativo que contém as seções e chaves do arquivo. O segundo parâmetro opcional, process_sections, indica se as seções devem ser processadas como subarrays. Se o valor de process_sections for true, cada seção será um subarray do array retornado, caso contrário todas as seções e chaves serão retornadas no mesmo array.
                $this->ini = parse_ini_file('lang/'.$this->l.'.ini');//através do this irá direcionar o dicionário, o parse_ini_file, converterá em array, e tudo será armazenado na variavel $ini;

                global $pdo;
                $sql="SELECT * FROM lang WHERE lang = :lang";
                $sql = $pdo->prepare($sql);
                $sql->bindValue(':lang',$this->l);
                $sql->execute();

                if($sql->rowCount() > 0){
                    foreach($sql->fetchAll() as $item){
                        $this->bd[$item['nome']] =  $item['valor'];
                    }
                }
            }
    }
    public function getLanguage(){
        return $this->l;
    }
    public function get($word, $return = false){//$word traz uma palavra para ser traduzida, 
        $text= $word;//a palavra enviada via argumento será armazenada em $text;

        //verificar se a palavra existe no dicionário, caso ela não exista, ela irá retorna sem tradução;
        if(isset($this->ini[$word])){//verifica a existencia no array;
            $text =  $this->ini[$word];//caso verdadeiro, a tradução será retornada a página
        }elseif(isset($this->bd[$word])){
            $text = $this->bd[$word];
        }

        if($return){//ainda não entendi isso aqui;
            return $text;
        }else{
            echo $text;
        }
    }
}

    //Arquivos .ini são arquivos de configuração de texto plano usados para armazenar configurações de aplicativos. Eles geralmente são usados para configurar aplicativos de software, como programas instalados no sistema operacional ou aplicativos da web.

?>