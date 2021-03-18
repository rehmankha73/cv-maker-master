<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Phone implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param string $attribute
     * @param mixed $value
     *
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return $this->isPhone($value);
    }

    /**
     * Checks through all validation methods to verify it is in a
     * phone number format of some type
     * @param string $value The phone number to check
     * @return boolean        is it correct format?
     */
    protected function isPhone($value)
    {
//        return $this->isE164($value) || $this->isNANP($value) || $this->isDigits($value);
        return $this->isE164($value) || $this->isDigits($value);
    }

    /**
     * Format example +15555555555
     * @param string $value The phone number to check
     * @return boolean        is it correct format?
     */
    protected function isE164($value)
    {
        $conditions = [];
        $conditions[] = strpos($value, "+") === 0;
        $conditions[] = strlen($value) >= 9;
        $conditions[] = strlen($value) <= 16;
        $conditions[] = preg_match("/[^\d+]/i", $value) === 0;
        return (bool)array_product($conditions);
    }

    /**
     * Format example 5555555555, 15555555555
     * @param  [type]  $value [description]
     * @return boolean        [description]
     */
    protected function isDigits($value)
    {
        $conditions = [];
        $conditions[] = strlen($value) >= 10;
        $conditions[] = strlen($value) <= 16;
        $conditions[] = preg_match("/[^\d]/i", $value) === 0;
        return (bool)array_product($conditions);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Incorrect phone format for :attribute.';
    }

    /**
     * Format examples: (555) 555-5555, 1 (555) 555-5555, 1-555-555-5555, 555-555-5555, 1 555 555-5555
     * https://en.wikipedia.org/wiki/National_conventions_for_writing_telephone_numbers#United_States.2C_Canada.2C_and_other_NANP_countries
     * @param string $value The phone number to check
     * @return boolean        is it correct format?
     */
    protected function isNANP($value)
    {
        $conditions = [];
        $conditions[] = preg_match("/^(?:\+1|1)?\s?-?\(?\d{3}\)?(\s|-)?\d{3}-\d{4}$/i", $value) > 0;
        return (bool)array_product($conditions);
    }

}
