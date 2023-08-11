<?php

namespace App\Helpers;

use DateInterval;
use DateTime;

class DateHelper
{
  public static function calculateHoursDifference($start, $end)
  {
    $date1 = new DateTime($start);
    $date2 = new DateTime($end);
    return $date1->diff($date2)->h;
  }
  public static function today()
  {
    $currentDate = new DateTime('');
    return $currentDate;
  }
  public static function convertMonth($month)
  {
    $monthNames = [
      1 => 'Janeiro', 2 => 'Fevereiro', 3 => 'Março',
      4 => 'Abril', 5 => 'Maio', 6 => 'Junho',
      7 => 'Julho', 8 => 'Agosto', 9 => 'Setembro',
      10 => 'Outubro', 11 => 'Novembro', 12 => 'Dezembro'
    ];

    $monthName = $monthNames[$month];
    return "$monthName";
  }

  public static function arrHour($inicioFuncionamento, $finalFuncionamento)
  {
    $startTime = new DateTime($inicioFuncionamento); // Horário inicial
    $endTime = new DateTime($finalFuncionamento);   // Horário final
    $interval = new DateInterval('PT1H');              // Intervalo de 1 hora

    $hourlyDates = array(); // Array para armazenar as datas

    for ($currentHour = clone $startTime; $currentHour <= $endTime; $currentHour->add($interval)) {
      $hourlyDates[] = $currentHour->format('H:i');
    }
    return $hourlyDates;
  }
}