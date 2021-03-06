<?php

use SavUtil\DateTime;

describe("DateTime", function () {
    it('DateTime.basic', function () {
        $ts = DateTime::localTime();
        $uts = DateTime::utcTime();
        expect(floor(DateTime::utcToLocal($uts) / 1000))->toEqual(floor($ts / 1000));
        expect(DateTime::utcToLocal(DateTime::localToUtc($ts)))->toEqual($ts);
    });
});
