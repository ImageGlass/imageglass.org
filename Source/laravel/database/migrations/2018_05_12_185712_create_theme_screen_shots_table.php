<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemeScreenShotsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theme_screen_shots', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('theme_id')->unsigned();
            $table->string('link');
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('theme_id')->references('id')->on('theme');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('theme_screen_shots');
    }
}




/*


INSERT INTO `c_theme_screen_shots` (`theme_id`, `link`, `created_at`, `updated_at`, `deleted_at`) VALUES
('20', 'white_and_grey_1.png', '2018-05-12 05:27:21', '2018-05-12 05:27:21', NULL),
('21', 'windows10_1.png', '2018-05-12 05:27:21', '2018-05-12 05:27:21', NULL),
('22', 'SimpleGrey_1.png', '2018-05-12 05:27:21', '2018-05-12 05:27:21', NULL),
('23', '2017_light_gray_1.png', '2018-05-12 05:27:21', '2018-05-12 05:27:21', NULL),
('24', 'Material_Light_1.png', '2018-05-12 05:27:21', '2018-05-12 05:27:21', NULL),
('25', 'Material_Dark_1.png', '2018-05-12 05:27:21', '2018-05-12 05:27:21', NULL);


*/