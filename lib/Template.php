<?php class Template{
    // ścieżka do szablonu
    protected $template;
    //zmienne kontrolne
    protected $vars = array();

    //konstruktor
    public function__construct($template){
        $this->template= $template;

    }
    public funtion__get($key){
            return $this->vars[$key];

    }
    public function__set($key, $value){
        $this->vars[$key]=$value;

    }
    public function__toString(){
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }


}


?>