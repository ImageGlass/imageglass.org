<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateThemesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('themes', function (Blueprint $table) {
            $table->increments('id');
            $table->string('slug');
            $table->string('title');
            $table->string('link');
            $table->string('image');
            $table->string('description');
            $table->string('size');
            $table->string('version');
            $table->string('compatibility');
            $table->string('author');
            $table->string('email');
            $table->string('website');
            $table->integer('count');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('themes');
    }
}


/*


INSERT INTO `c_themes` (`id`, `slug`, `title`, `link`, `image`, `description`, `size`, `version`, `compatibility`, `author`, `email`, `website`, `count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(11, 'Clear-Blue', 'Clear Blue', 'ClearBlue.igtheme', 'clearblue.png', 'Theme nền xanh', '27.5 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2299, '2012-04-13 16:00:00', '2018-05-12 05:31:33', NULL),
(12, 'Pencil', 'Pencil', 'Pencil.igtheme', 'pencil.jpg', 'Theme với các biểu tượng vẽ bằng tay', '53.7 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2249, '2012-10-07 16:00:00', '2018-05-12 05:31:33', NULL),
(10, 'Cooler', 'Cooler', 'Cooler.igtheme', '\ncooler.png', 'Theme màu xanh ngọc', '40.9 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2426, '2012-03-13 16:00:00', '2018-05-12 05:31:33', NULL),
(9, 'Green-Life', 'Green Life', 'GreenLife.igtheme', 'greenlife.png', 'Theme màu xanh thân thiện với môi trường', '40.9 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1805, '2011-12-26 16:00:00', '2018-05-12 05:31:33', NULL),
(8, 'New-Wind', 'New Wind', '\nNewWind.igtheme', 'newwind.png', 'Theme với các biểu tượng nhẹ nhàng của Windows 8', '48.1 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1472, '2011-09-21 16:00:00', '2018-05-12 05:31:33', NULL),
(7, 'Professional-Dark', 'Professional Dark', '\nProfessionalDark.igtheme', 'professionaldark.png', 'Theme màu đen chuyên nghiệp', '53.2 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1406, '2011-09-08 16:00:00', '2018-05-12 05:31:33', NULL),
(6, 'Peaceful', 'Peaceful', '\nPeaceful.igtheme', 'peaceful.png', 'Theme mang phong cách của Windows Live', '96.1 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1281, '2011-09-08 16:00:00', '2018-05-12 05:31:33', NULL),
(5, 'Google-plus-blue', 'Google plus (blue)', 'GooglePlus_blue.igtheme', 'googleplusblue.png', 'Theme màu xanh của Google plus', '31 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1202, '2011-08-28 16:00:00', '2018-05-12 05:31:33', NULL),
(4, 'Google-plus', 'Google plus', 'GooglePlus.igtheme', 'googleplus.png', 'Theme mang phong cách nhẹ nhàng của Google plus', '24.5 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1161, '2011-08-25 16:00:00', '2018-05-12 05:31:33', NULL),
(3, 'Longhorn', 'Longhorn', 'Longhorn.igtheme', 'longhorn.jpg', 'Theme màu xanh đen tuyền quyến rũ của Vista', '36.3 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1179, '2011-08-24 16:00:00', '2018-05-12 05:31:33', NULL),
(2, 'Sludgy', 'Sludgy', 'Sludgy.igtheme', 'sludgy.jpg', 'Theme màu xám tro nhẹ dịu. Tương thích ImageGlass 1.4', '31.9 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 930, '2011-08-24 16:00:00', '2018-05-12 05:31:33', NULL),
(1, 'Vienna', 'Vienna', 'Vienna.igtheme', 'vienna.jpg', 'Theme màu xanh nhạt nhẹ nhàng theo phong cách Windows 7. Tương thích ImageGlass 1.4', '35.7 KB', '1.0', '1.4', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1148, '2011-08-22 16:00:00', '2018-05-12 05:31:33', NULL),
(13, 'Sand', 'Sand', 'Sand.igtheme', 'sand.png', '', '24 KB', '1.0', '1.5', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2856, '2012-12-21 16:00:00', '2018-05-12 05:31:33', NULL),
(14, 'Mac-Texture', 'Mac Texture', 'MacTexture.igtheme', 'mactexture.png', '', '40.7 KB', '1.0', '1.5', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2347, '2013-04-29 16:00:00', '2018-05-12 05:31:33', NULL),
(15, 'Mac-Crystal', 'Mac Crystal', 'MacCrystal.igtheme', 'maccrystal.png', '', '30.6 KB', '1.0', '1.5', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2345, '2013-04-29 16:00:00', '2018-05-12 05:31:33', NULL),
(16, 'Sunday', 'Sunday', 'Sunday.igtheme', 'sunday.png', '', '43 KB', '1.0', '1.5', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 2459, '2013-04-29 16:00:00', '2018-05-12 05:31:33', NULL),
(17, 'Flat-1', 'Flat 1', 'Flat1.igtheme', 'flat1.png', '', '23.6 KB', '1.0', '1.5', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 3390, '2013-08-12 16:00:00', '2018-05-12 05:31:33', NULL),
(18, 'simple-grey-dark-toolbar', 'Simple Grey Dark Toolbar', 'Simple_Grey_Dark_Toolbar.igtheme', 'Simple_Grey_Dark_Toolbar.png', 'Simple grey icons with dark toolbar', '86.12 KB', '1.0', '2.0', 'Haris6AN', 'harissestan91@gmail.com', '', 4572, '2015-05-11 16:00:00', '2018-05-12 05:31:33', NULL),
(19, 'simple-grey-light-toolbar', 'Simple Grey Light Toolbar', 'Simple_Grey_Light_Toolbar.igtheme', 'Simple_Grey_Light_Toolbar.png', 'Simple grey icons with light toolbar', '86.33 KB', '2.0', '3.0', 'Haris6AN', 'harissestan91@gmail.com', '', 2548, '2015-12-27 16:00:00', '2018-05-12 05:31:33', NULL),
(20, 'white-and-grey', 'White & Grey', 'White_and_Grey.igtheme', 'white_and_grey.png', 'White icons on the grey background', '31.7 KB', '1.0', '3.0', 'Haris6AN', 'harissestan91@gmail.com', '', 2733, '2016-05-06 16:00:00', '2018-05-12 05:31:33', NULL),
(21, 'windows-10-blue', 'Windows 10', 'Windows10.igtheme', 'windows10.png', 'Windows 10 blue icons pack for ImageGlass toolbar.', '31.7 KB', '1.0', '1.4', 'Love Bdsobuj', 'love.bdsobuj@gmail.com', 'http://lovebdsobuj.com', 2242, '2016-09-24 04:01:00', '2018-05-12 05:31:33', NULL),
(22, 'simple-grey', 'Simple Grey', 'SimpleGrey.igtheme', 'SimpleGrey.png', 'Simple Grey icons made by Scnd101 (scnd101.deviantart.com) and used as ImageGlass theme icons.', '31.59 KB', '1.0', '3.0', 'Haris6AN', 'love.bdsobuj@gmail.com', 'harissestan91@gmail.com', 793, '2017-01-09 04:01:00', '2018-05-12 05:31:33', NULL),
(23, '2017-light-gray', '2017 (Light Gray)', '2017_light_gray.zip', '2017_light_gray.png', 'Modern line icons. Compatible with HDPI screen', '22 KB', '2.0', '5.0', '@ImageGlass', 'phap@imageglass.org', 'www.imageglass.org', 1612, '2018-05-08 12:24:35', '2018-05-12 05:31:33', NULL),
(24, 'material-light', 'Material Light', 'Material_Light.zip', 'Material_Light.png', 'Material Light theme', '17.3 KB', '1.0', '4.5', 'Marnick Schaap', 'marnickschaap@gmail.com', '', 505, '2017-12-10 12:24:35', '2018-05-12 05:31:33', NULL),
(25, 'material-dark', 'Material Dark', 'Material_Dark.zip', 'Material_Dark.png', 'Material Dark theme', '17.3 KB', '1.0', '4.5', 'Marnick Schaap', 'marnickschaap@gmail.com', '', 1136, '2017-12-10 12:38:42', '2018-05-12 05:31:33', NULL);



*/