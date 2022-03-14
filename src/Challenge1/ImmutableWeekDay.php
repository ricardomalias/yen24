<?php

namespace Interview\Challenge1;

/*

Your job is to fill the class to cover all assertions. You can additionally look at test/Challenge1Test.php

$day1 = new ImmutableWeekDay(ImmutableWeekDay::FRIDAY);
$day2 = new ImmutableWeekDay(ImmutableWeekDay::FRIDAY);
$day3 = $day1->addDays(9);

assertFalse($day1->equals($day3));
assertTrue($day1->isOfValue(ImmutableWeekDay::FRIDAY));
assertFalse($day1->isOfValue(123));
assertTrue($day1->equals($day2));
assertTrue($day3->isOfValue(ImmutableWeekDay::SUNDAY));

assertException(\OutOfRangeException::class);
new ImmutableWeekDay(123);

*/

use Carbon\Exceptions\OutOfRangeException;

class ImmutableWeekDay
{
    public const SUNDAY    = 0;
    public const MONDAY    = 1;
    public const TUESDAY   = 2;
    public const WEDNESDAY = 3;
    public const THURSDAY  = 4;
    public const FRIDAY    = 5;
    public const SATURDAY  = 6;

    private int $weekDay;

    /**
     * @throws \OutOfRangeException
     */
    public function __construct(int $value)
    {
        if($value < 0 || $value > 6) {
            throw new \OutOfRangeException('ArgumentCountError');
        }
        $this->weekDay = $value;
    }

    public function addDays(int $value): ImmutableWeekDay
    {
        $weekdays = [0, 1, 2, 3, 4, 5, 6];
        $offset = $this->weekDay;

        for($i = 0; $i < $value; $i++) {
            $offset++;

            if($offset == 7) {
                $offset = 0;
            }
        }

        return new ImmutableWeekDay($offset);
    }

    public function equals(ImmutableWeekDay $day): bool
    {
        return $this->weekDay == $day->weekDay;
    }

    public function isOfValue(int $value): bool
    {
        return $this->weekDay == $value;
    }
}