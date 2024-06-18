<?php

namespace App\Providers;

Use Validator;
use Illuminate\Pagination\Paginator;
use App\Models\day1edc;
use App\Observers\Day1edcObserver;
use App\Models\day2edc;
use App\Observers\Day2edcObserver;
use App\Models\day3edc;
use App\Observers\Day3edcObserver;
use App\Models\day4edc;
use App\Observers\Day4edcObserver;
use App\Models\day5edc;
use App\Observers\Day5edcObserver;
use App\Models\day1kdbi;
use App\Observers\Day1kdbiObserver;
use App\Models\day2kdbi;
use App\Observers\Day2kdbiObserver;
use App\Models\day3kdbi;
use App\Observers\Day3kdbiObserver;
use App\Models\day4kdbi;
use App\Observers\Day4kdbiObserver;
use App\Models\day5kdbi;
use App\Observers\Day5kdbiObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        day1edc::observe(Day1edcObserver::class);
        day2edc::observe(Day2edcObserver::class);
        day3edc::observe(Day3edcObserver::class);
        day4edc::observe(Day4edcObserver::class);
        day5edc::observe(Day5edcObserver::class);
        day1kdbi::observe(Day1kdbiObserver::class);
        day2kdbi::observe(Day2kdbiObserver::class);
        day3kdbi::observe(Day3kdbiObserver::class);
        day4kdbi::observe(Day4kdbiObserver::class);
        day5kdbi::observe(Day5kdbiObserver::class);
    }
}
