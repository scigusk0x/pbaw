<?php
// W skrypcie definicji kontrolera nie trzeba dołączać problematycznego skryptu config.php,
// ponieważ będzie on użyty w miejscach, gdzie config.php zostanie już wywołany.

require_once $conf->root_path.'/lib/smarty/libs/Smarty.class.php';
require_once $conf->root_path.'/lib/Messages.class.php';
require_once $conf->root_path.'/app/calc/CalcForm.class.php';
require_once $conf->root_path.'/app/calc/CalcResult.class.php';

class CalcCtrl {
    private $msgs;
    private $infos;
    private $form;
    private $result;

    public function __construct() {
        $this->msgs = new Messages();
        $this->form = new CalcForm();
        $this->result = new Calcresult();
    }

    public function getParams() {
        $this->form->kwota = isset($_REQUEST['kwota']) ? $_REQUEST['kwota'] : null;
        $this->form->lata = isset($_REQUEST['lata']) ? $_REQUEST['lata'] : null;
        $this->form->procent = isset($_REQUEST['procent']) ? $_REQUEST['procent'] : null;
    }

    public function validate() {
        if ( ! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
            return false;
        }
    
        if ( $this->form->kwota == "") {
            $this->msgs->addError('Nie podano kwoty');
        }
        if ( $this->form->lata == "") {
            $this->msgs->addError('Nie podano lat');
        }
        if ( $this->form->procent == "") {
            $this->msgs->addError('Nie podano procenta');
        }
    
        if ($this->msgs->isError()) return false;
        
        if (! is_numeric( $this->form->kwota )) {
            $this->msgs->addError('Kwota nie jest liczbą');
        } else {
            $this->form->kwota = floatval($this->form->kwota);
            if ($this->form->kwota < 0) {
                $this->msgs->addError('Kwota jest liczbą mniejszą od zera');
            }
        }
        
        if (! is_numeric( $this->form->lata )) {
            $this->msgs->addError('Lata nie są liczbą');
        } else {
            $this->form->lata = intval($this->form->lata);
            if ($this->form->lata <= 0) {
                $this->msgs->addError('Lata są liczbą mniejszą lub równą zero');
            }
        }
    
        if (! is_numeric( $this->form->procent )) {
            $this->msgs->addError('Procent nie jest liczbą');
        } else {
            $this->form->procent = floatval($this->form->procent);
            if ($this->form->procent < 0) {
                $this->msgs->addError('Procent jest liczbą mniejszą od zera');
            }
        }

        return !$this->msgs->isError();
    }

    function process() {
        $this->getParams();

        if ($this->validate()) {
            $this->msgs->addInfo('Podano poprawne wartości');
            $miesiace = $this->form->lata * 12;
	        $this->result->result = $this->form->kwota / $miesiace;
	        $this->result->result *= (1+ $this->form->procent / 100);
            $this->msgs->addInfo('Obliczono ratę');
        }

        $this->generateView();
    }

    public function generateView() {
        global $conf;

        $smarty = new Smarty\Smarty();
        $smarty->assign('conf',$conf);
        $smarty->assign('page_title','Kalkulator kredytowy');
        $smarty->assign('page_description','Kalkulator kredytowy z jednym punktem wejścia');
        $smarty->assign('msgs',$this->msgs);
        $smarty->assign('form',$this->form);
        $smarty->assign('result',$this->result);

        $smarty->display($conf->root_path.'/app/calc/CalcView.html');
    }
}