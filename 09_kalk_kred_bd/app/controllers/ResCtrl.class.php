<?php

namespace app\controllers;

use app\forms\ResForm;
use PDOException;

class ResCtrl {
    private $form;

    public function __construct() {
        $this->form = new ResForm();
    }

    public function validateDelete() {
        $this->form->id = getFromRequest('id',true,'Błędne wywołanie aplikacji');
        return !getMessages()->isError();
    }

    public function action_resDelete() {
        if ($this->validateDelete()) {
            try {
                getDB()->delete('results',[
                    'idres' => $this->form->id
                ]);
                getMessages()->addInfo('Pomyślnie usunięto rekord');
            } catch (PDOException $e) {
                getMessages()->addError('Wystąpił błąd podczas usuwania rekordu');
                if (getConf()->debug) getMessages()->addError($e->getMessage());
            }
        }
        forwardTo('resList');
    }
}