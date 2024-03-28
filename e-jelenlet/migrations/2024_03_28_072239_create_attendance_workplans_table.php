<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('attendance_workplans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('core_firms_id')->index('key0015');
            $table->string('payroll_software_id', 8)->nullable();
            $table->string('name', 128)->default('');
            $table->unsignedInteger('attendance_workplan_categories_id')->nullable()->index('key0016')->comment('külső kulcs a munkarend kategóriák táblájához');
            $table->unsignedInteger('attendance_verification_condition_systems_id')->nullable()->index('key0017')->comment('külső kulcs a feltételrendszer tábla azonosítójához');
            $table->tinyInteger('check_by_law')->default(0)->comment('ellenőrizzünk-e Munka Törvénykönyve szerint (0: nem (alapértelmezett), 1: igen)');
            $table->tinyInteger('warning_or_forbidding')->default(0)->comment('ha ellenőrzünk és hiba van, figyelmeztessünk vagy tiltsunk (0: figyelmeztessünk (alapértelmezett), 1: tiltsunk)');
            $table->unsignedInteger('attendance_access_control_systems_id')->nullable()->index('key0018')->comment('külső kulcs a beléptetőrendszer azonosítójához');
            $table->unsignedInteger('attendance_access_control_systems_rule_id')->nullable()->index('key2060')->comment('beléptető rendszerben használt szabályrendszer');
            $table->unsignedInteger('holiday_bonus_id')->nullable()->index('key0019')->comment('ünnepnapi pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('restday_bonus_id')->nullable()->index('key0020')->comment('pihenőnapi pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('sunday_bonus_id')->nullable()->index('key0021')->comment('vasárnapi pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('overtime_bonus_id')->nullable()->index('key0022')->comment('túlóra pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('overtime_base_bonus_id')->nullable()->index('key1007')->comment('túlóra alap pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('stand_by_bonus_id')->nullable()->index('key0023')->comment('készenléti pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('duty_bonus_id')->nullable()->index('key0024')->comment('ügyeleti pótlék azonosítója az attendance_bonus_types táblából');
            $table->tinyInteger('balance_collector')->default(0)->comment('keletkezik-e balanszidő (0: nem (alapértelmezett), 1: igen)');
            $table->tinyInteger('balance_rolling')->default(0)->comment('görgeti-e a keletkezett balanszidőt (0: nem (alapértelmezett), 1: igen)');
            $table->tinyInteger('overtime_automatically_balance')->default(0)->comment('a keletkezett túlmunka automatikusan a balanszidőbe kerüljön-e (0: nem (alapértelmezett), 1: igen)');
            $table->tinyInteger('working_on_saturday')->default(0)->comment('munkavégzés szombatra elrendelhető-e (0: nem (alapértelmezett), 1: igen)');
            $table->tinyInteger('working_on_sunday')->default(0)->comment('munkavégzés vasárnapra elrendelhető-e (0: nem (alapértelmezett), 1: igen)');
            $table->tinyInteger('working_on_holiday')->default(0)->comment('munkavégzés ünnepnapra elrendelhető-e (0: nem (alapértelmezett), 1: igen)');
            $table->time('workday_time_start')->default('00:00:00')->comment('speciális esetben egy nap nem 0 órakor kezdődik, hanem ekkor');
            $table->tinyInteger('automatic_monitoring_bonus')->default(0)->comment('műszak/éjszakai pótlék automatikus figyelése - exporthoz (igen: 1, nem: 0, alapértelmezett: 0)');
            $table->boolean('automatic_calculations_bonus')->default(true)->comment('pótlékszámítás automatikus legyen-e - jelenléti ívhez (igen: 1, nem: 0, alapértelmezett: 1)');
            $table->boolean('how_quotient_of_difference_calculate_shift_bonus')->nullable()->comment('hány % eltérés esetén számoljon műszak pótlékot (érvényes értékek: 1-99)');
            $table->tinyInteger('minimum_difference_between_shift_starts')->nullable()->comment('műszak kezdések közötti minimum eltérés órában (érvényes értékek: 1-12)');
            $table->tinyInteger('working_with_schedule_planner')->default(0)->comment('a munkarend együttműködik a beosztástervezővel (igen: 1, nem: 0, alapértelmezett: 0)');
            $table->tinyInteger('supports_the_work_time_limits')->default(0)->comment('a munkarend támogatja a munkaidőkereteket (igen: 1, nem: 0, alapértelmezett: 0)');
            $table->time('night_shift_start')->nullable()->comment('éjszakai műszak kezdete');
            $table->time('night_shift_end')->nullable()->comment('éjszakai műszak vége');
            $table->unsignedInteger('night_shift_bonus_id')->nullable()->index('key1005')->comment('éjszakai műszak pótlék azonosítója az attendance_bonus_types táblából');
            $table->time('afternoon_shift_start')->nullable()->comment('délutáni műszak kezdete');
            $table->time('afternoon_shift_end')->nullable()->comment('délutáni műszak vége');
            $table->unsignedInteger('afternoon_shift_bonus_id')->nullable()->index('key1006')->comment('délutáni műszak pótlék azonosítója az attendance_bonus_types táblából');
            $table->decimal('number_of_hours_per_day', 4)->nullable()->comment('napi óraszám - az éves túlórakeret kiszámításához (érvényes értékek: 0.01-24, 0.01-es léptetéssel)');
            $table->tinyInteger('number_of_hours_per_day_is_default_if_absence')->default(0)->comment('Egész napos távollét esetén a munkarend alapértelmezett óraszáma kerüljön számfejtésre a műszak óraszáma helyett (igen: 1, nem: 0, alapértelmezett: 0)');
            $table->tinyInteger('status')->default(1);
            $table->time('shift_bonus_start')->nullable()->comment('műszak pótlék kezdete');
            $table->time('shift_bonus_end')->nullable()->comment('műszak pótlék vége');
            $table->unsignedInteger('shift_bonus_bonus_id')->nullable()->comment('műszak pótlék azonosítója az attendance_bonus_types táblából');
            $table->time('extra_bonus_start')->nullable()->comment('extra pótlék kezdete');
            $table->time('extra_bonus_end')->nullable()->comment('extra pótlék vége');
            $table->unsignedInteger('extra_bonus_bonus_id')->nullable()->comment('extra pótlék azonosítója az attendance_bonus_types táblából');
            $table->unsignedInteger('travel_time_workday_bonus_type_id')->nullable()->index('key20044')->comment('utazási idő munkanap pótlék tárgyhónapban');
            $table->unsignedInteger('travel_time_restday_bonus_type_id')->nullable()->index('key20046')->comment('utazási idő pihenőnap pótlék tárgyhónapban');
            $table->tinyInteger('preparation_time_length')->nullable()->comment('Felkészülési idő hossza műszak előtt (érvényes értékek: 0-60)');
            $table->tinyInteger('preparation_time_range')->nullable()->comment('Felkészülés eltolási idősávja (érvényes értékek: 0-120)');
            $table->string('preparation_time_bonus_id')->nullable()->comment('Felkészülési idő pótlék azonosítója az attendance_bonus_types táblából');
            $table->tinyInteger('show_day_details_menu')->default(1)->comment('Nap részletezése menüpont megjelenítése');
            $table->tinyInteger('place_of_work_bonus_status_listen')->default(0)->comment('munkavégzés helye pótlékolásának figyelése');

            $table->unique(['name', 'core_firms_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('attendance_workplans');
    }
};
