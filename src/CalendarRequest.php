<?php declare(strict_types=1);

namespace MrKrisKrisu\AhaCalendar;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Exception;
use MrKrisKrisu\AhaCalendar\Enum\GarbageType;

abstract class CalendarRequest {

    /**
     * @throws GuzzleException
     * @throws Exception
     */
    public static function fetchCalendar(
        string      $hausNr,
        string      $hausNrAddon,
        string      $ladeort,
        string      $strasse,
        GarbageType $garbageType
    ): string {
        $client   = new Client();
        $response = $client->post('https://www.aha-region.de/abholtermine/abfuhrkalender', [
            'form_params' => [
                'hausnr'       => $hausNr,
                'hausnraddon'  => $hausNrAddon,
                'ladeort'      => $ladeort,
                'strasse'      => $strasse,
                'ical_android' => $garbageType->value,
            ],
            'headers'     => [
                'User-Agent' => 'mrkriskrisu/aha-calendar-subscribe',
            ],
        ]);
        $ics      = $response->getBody()->getContents();
        if(!str_contains($ics, 'BEGIN:VCALENDAR')) {
            throw new Exception('Invalid response from aha-region.de');
        }
        return $ics;
    }
}