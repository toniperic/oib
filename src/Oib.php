<?php namespace ToniPeric;

class Oib
{
    const LENGTH = 11;

    /**
     * Validates a single OIB or an array of OIBs
     *
     * @param  array|int $data
     * @return array|bool
     */
    public static function validate($data)
    {
        if (is_array($data)) {
            foreach ($data as $oib) {
                $result[(string)$oib] = static::check($oib);
            }

            return $result;
        }

        return static::check($data);
    }

    /**
     * Validates a single OIB
     *
     * @param  int $data
     * @return bool
     */
    protected static function check($data)
    {
        if (is_numeric($data) && strlen($data) == self::LENGTH) {
            $a = 10;
            for ($i = 0; $i < 10; $i++) {
                $a = $a == 0 ? 10 : ($a + intval(substr($data, $i, 1), 10)) % 10 * 2 % 11;
            }

            return 11 - $a == 10 ? 0 : 11 - $a == intval(substr($data, 10, 1), 10);
        }

        return false;
    }
}
