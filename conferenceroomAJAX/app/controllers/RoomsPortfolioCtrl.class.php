<?php

namespace app\controllers;

use core\App;

class RoomsPortfolioCtrl {

    public function action_roomsPortfolio() {
        App::getSmarty()->assign('page_title', 'The Conference Room');
        App::getSmarty()->display('RoomsPortfolioView.tpl');
    }
}
?>
