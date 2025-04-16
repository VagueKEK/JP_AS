<?php

use core\App;
use core\Utils;

App::getRouter()->setDefaultRoute('aboutUs'); // akcja/ścieżka domyślna
App::getRouter()->setLoginRoute('login'); // akcja/ścieżka na potrzeby logowania (przekierowanie, gdy nie ma dostępu)

Utils::addRoute('loginShow',       'LoginCtrl');
Utils::addRoute('login',           'LoginCtrl');
Utils::addRoute('logout',          'LoginCtrl');

Utils::addRoute('aboutUs',         'AboutUsCtrl');
Utils::addRoute('roomsPortfolio',  'RoomsPortfolioCtrl');

Utils::addRoute('registerShow',    'RegisterCtrl');
Utils::addRoute('register',        'RegisterCtrl');

Utils::addRoute('reservationShow',         'ReservationCtrl');
Utils::addRoute('reservation',             'ReservationCtrl');

Utils::addRoute('reservationHistory',      'ReservationHistoryCtrl', ['admin', 'mod', 'Pracownik', 'Użytkownik']);

Utils::addRoute('employeeReservations',    'ReservationManagementCtrl', ['Pracownik']);
Utils::addRoute('updateReservationStatus', 'ReservationManagementCtrl', ['Pracownik']);

Utils::addRoute('employeeUsers',           'UserManagementCtrl', ['admin']);
Utils::addRoute('addUser',                 'UserManagementCtrl', ['admin']);

Utils::addRoute('userEdit', 'UserEditCtrl', ['admin']);
Utils::addRoute('userSave', 'UserEditCtrl', ['admin']);
