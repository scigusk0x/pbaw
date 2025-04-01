<?php
namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;
class CalcCtrl {
    private $form;
    private $result;

    public function __construct() {
        $this->form = new CalcForm();
        $this->result = new Calcresult();
    }

    public function getParams() {
        $this->form->kwota = getFromRequest('kwota');
        $this->form->lata = getFromRequest('lata');
        $this->form->procent = getFromRequest('procent');
    }

    public function validate() {
        if ( ! (isset($this->form->kwota) && isset($this->form->lata) && isset($this->form->procent))) {
            return false;
        }
    
        if ( $this->form->kwota == "") {
            getMessages()->addError('Nie podano kwoty');
        }
        if ( $this->form->lata == "") {
            getMessages()->addError('Nie podano lat');
        }
        if ( $this->form->procent == "") {
            getMessages()->addError('Nie podano procenta');
        }
    
        if (getMessages()->isError()) return false;
        
        if (! is_numeric( $this->form->kwota )) {
            getMessages()->addError('Kwota nie jest liczbą');
        } else {
            $this->form->kwota = floatval($this->form->kwota);
            if ($this->form->kwota < 0) {
                getMessages()->addError('Kwota jest liczbą mniejszą od zera');
            }
        }
        
        if (! is_numeric( $this->form->lata )) {
            getMessages()->addError('Lata nie są liczbą');
        } else {
            $this->form->lata = intval($this->form->lata);
            if ($this->form->lata <= 0) {
                getMessages()->addError('Lata są liczbą mniejszą lub równą zero');
            }
        }
    
        if (! is_numeric( $this->form->procent )) {
            getMessages()->addError('Procent nie jest liczbą');
        } else {
            $this->form->procent = floatval($this->form->procent);
            if ($this->form->procent < 0) {
                getMessages()->addError('Procent jest liczbą mniejszą od zera');
            }
        }

        return !getMessages()->isError();
    }

    function process() {
        $this->getParams();

        if ($this->validate()) {
            getMessages()->addInfo('Podano poprawne wartości');
            $miesiace = $this->form->lata * 12;
	        $this->result->result = $this->form->kwota / $miesiace;
	        $this->result->result *= (1+ $this->form->procent / 100);
            getMessages()->addInfo('Obliczono ratę');
        }

        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Kalkulator kredytowy w nowej strukturze');
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('result',$this->result);

        getSmarty()->display('CalcView.tpl');
    }
}