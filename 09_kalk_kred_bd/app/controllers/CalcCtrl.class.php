<?php
namespace app\controllers;
use app\forms\CalcForm;
use app\transfer\CalcResult;
use PDOException;
use DateTime;

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
            else if (!inRole('admin') && $this->form->procent < 10) {
                getMessages()->addError('Tylko administrator może brać kredyt na procent mniejszy niż 10');
            }
        }

        return !getMessages()->isError();
    }

    public function action_calcCompute() {
        $this->getParams();

        if ($this->validate()) {
            getMessages()->addInfo('Podano poprawne wartości');
            $miesiace = $this->form->lata * 12;
	        $this->result->result = $this->form->kwota / $miesiace;
	        $this->result->result *= (1+ $this->form->procent / 100);
            getMessages()->addInfo('Obliczono ratę');

            try {
                $now = new DateTime();
                getDB()->insert('results', [
                    'kwota' => $this->form->kwota,
                    'lata' => $this->form->lata,
                    'procent' => $this->form->procent,
                    'data' => $now->format('Y-m-d H:i:s')
                ]);
            } catch (PDOException $e) {
                getMessages()->addError('Wystąpił nieoczekiwany błąd podczas dodawania rekordu');
                if (getConf()->debug) getMessages()->addErorr($e->getMessage());
            }
        }

        $this->generateView();
    }

    public function action_calcShow() {
        getMessages()->addInfo("Witaj w kalkulatorze kredytowym");
        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title','Kalkulator kredytowy');
        getSmarty()->assign('page_description','Kalkulator kredytowy z rolami');
        getSmarty()->assign('form',$this->form);
        getSmarty()->assign('result',$this->result);

        getSmarty()->display('CalcView.tpl');
    }
}