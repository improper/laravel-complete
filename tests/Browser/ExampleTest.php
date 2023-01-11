<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;

test('basic example', function () {
    $this->browse(function (Browser $browser) {
        $browser->visit('/')
            ->assertUrlIs('https://my-custom-app-url.lndo.site/')
            ->assertSee('Laravel');
    });
});
