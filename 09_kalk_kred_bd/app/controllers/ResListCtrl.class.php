<?php

namespace app\controllers;

use PDOException;

class ResListCtrl {
    private $records;

    public function __construct() {

    }

    public function validate() {
        return !getMessages()->isError();
    }

    public function action_resList() {
        $this->validate();

        try {
            $this->records = getDB()->select('results', [
                'idres',
                'kwota',
                'lata',
                'procent',
                'data'
            ]);
        } catch (PDOException $e) {
            getMessages()->addError('Wystąpił błąd podczas pobierania rekordów');
            if (getConf()->debug) getMessages()->addError($e->getMessage());
        }

        $this->generateView();
    }

    public function generateView() {
        getSmarty()->assign('user',unserialize($_SESSION['user']));
        getSmarty()->assign('page_title','Lista rekordów');
        getSmarty()->assign('page_description','Widok listy rekordów');
        getSmarty()->assign('records', $this->records);
        getSmarty()->display('resListView.tpl');
    }
}