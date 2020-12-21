<?php
class View
{
    private $_file;
    private $_t;

    public function __construct($action)
    {
        $this->_file = 'views/view'.$action.'.php';
    }

    //generate and affich the view
    public function generate($data)
    {

        //the views datas
        $content = $this->generateFile($this->_file, $data);

        //a template
        $view = $this->generateFile('views/template.php', array('t' => $this->_t, 'content' => $content));
        echo $view;

    }

    //generate a view with the view result
    public function generateFile($file, $data)
    {
            if(file_exists($file))
            {
                extract($data);
                //tamporisation
                ob_start();

                //calling the viewContent
                require $file;
                return ob_get_clean();
            }
            else
                throw new Exception('Fichier '.$file.' introuvable.');
    }

}