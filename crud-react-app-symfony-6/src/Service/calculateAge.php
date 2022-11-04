<?php

namespace App\Service;

use DateTime;

class calculateAge
{
    public function calculateAge($anniv)
    {
        $now = new DateTime();
        $difference = $now->diff($anniv);
        $age = $difference->y;

        return $age;
    }
}