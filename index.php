<?php declare(strict_types=1);

use MrKrisKrisu\AhaCalendar\CalendarRequest;
use MrKrisKrisu\AhaCalendar\Enum\GarbageType;

if(!file_exists('./vendor/autoload.php')) {
    die('Please run "composer install" first.' . PHP_EOL);
}

require_once './vendor/autoload.php';

$calendar = CalendarRequest::fetchCalendar(
    hausNr:      'Paste hausNr here',
    hausNrAddon: 'Paste hausNrAddon here',
    ladeort:     'Paste ladeort here',
    strasse:     'Paste strasse here',
    garbageType: GarbageType::BIOABFALL // You can replace BIOABFALL with: RESTABFALL, PAPIER and LEICHTVERPACKUNGEN
);

header('Content-type: text/calendar; charset=utf-8');
echo $calendar;
