<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use Illuminate\Support\Facades\DB;

class UniqueTeamName implements Rule
{
    /**
     * Run the validation rule.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        // Check if the team name is unique (case-insensitive) in the database
        $existingTeam = DB::table('hackteams')
            ->whereRaw('LOWER(teamName) = ?', [strtolower($value)])
            ->first();

        return !$existingTeam;
    }

    public function message()
    {
        return 'This team name has already been used.';
    }
}
