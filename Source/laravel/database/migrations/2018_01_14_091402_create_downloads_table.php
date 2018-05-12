<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDownloadsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('downloads', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('release_id')->unsigned();
            $table->string('type', 100);
            $table->string('link');
            $table->string('checksum');
            $table->string('size', 100);
            $table->integer('count')->unsigned();
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('release_id')->references('id')->on('release');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('downloads');
    }
}


/*


INSERT INTO `c_downloads` (`id`, `release_id`, `type`, `link`, `checksum`, `size`, `count`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, 'installer', 'http://imageglass.codeplex.com/downloads/get/320356', '2677117fc7fe3de6f0d7f09e1c30a5b23a0c0d83', '347.6 KB', 510, '2010-07-21 16:00:00', '2010-07-21 16:00:00', NULL),
(2, 2, 'installer', 'http://imageglass.codeplex.com/downloads/get/320357', '339e0069650a17f2ecc003cf345dfd8439012b37', '350.2 KB', 507, '2010-07-26 16:00:00', '2010-07-26 16:00:00', NULL),
(3, 3, 'installer', 'http://imageglass.codeplex.com/downloads/get/320358', '386a60f6027cc6b9936d1862058b0e23b4033cb1', '387.6 KB', 567, '2010-08-27 16:00:00', '2010-08-27 16:00:00', NULL),
(4, 4, 'installer', 'http://imageglass.codeplex.com/downloads/get/320360', '37af47489405e53504a64c26fbc2da387b078293', '956.7 KB', 1255, '2010-12-19 16:00:00', '2010-12-19 16:00:00', NULL),
(5, 5, 'installer', 'http://imageglass.codeplex.com/downloads/get/320361', '6786fce68751d5c18fff71ce37f1e3a4b103ff00', '1.0 MB', 1475, '2011-06-16 16:00:00', '2011-06-16 16:00:00', NULL),
(6, 6, 'installer', 'http://imageglass.codeplex.com/downloads/get/320362', '58baa875a7e7af4a95302a255c1931879e25d481', '2.1 MB', 2038, '2011-07-11 16:00:00', '2011-07-11 16:00:00', NULL),
(7, 7, 'installer', 'http://imageglass.codeplex.com/downloads/get/330739', '4b687b433861e291b2e6ff27cb95d7260b55726c', '143.4 KB', 1762, '2011-12-21 16:00:00', '2011-12-21 16:00:00', NULL),
(8, 8, 'installer', 'http://imageglass.codeplex.com/downloads/get/343584', '6fcec17cbce892968aa2909c227623a4f3a7c276', '170.8 KB', 1761, '2012-02-16 16:00:00', '2012-02-16 16:00:00', NULL),
(9, 9, 'installer', 'http://imageglass.codeplex.com/downloads/get/528287', '84bbaff6059c1b3f1c4c9eb0fe7e41a1c123b91d', '1.9 MB', 1748, '2012-11-10 16:00:00', '2012-11-10 16:00:00', NULL),
(10, 10, 'installer', 'http://imageglass.codeplex.com/downloads/get/637301', '61675131ab5d982e18093591e14fa1aba6a8c0ed', '1.9 MB', 4572, '2013-03-11 16:00:00', '2013-03-11 16:00:00', NULL),
(11, 11, 'installer', 'https://imageglass.codeplex.com/downloads/get/330739', '45696c1829c5a68fcccc8a7957f3c77f7105fcfc', '2.71 MB', 3044, '2013-09-14 16:00:00', '2013-09-14 16:00:00', NULL),
(12, 12, 'installer', 'https://imageglass.codeplex.com/downloads/get/732136', 'c953dccad79c7e21eb43275723115d8f56f7d7c0', '2.71 MB', 17060, '2013-09-19 16:00:00', '2013-09-19 16:00:00', NULL),
(13, 13, 'installer', 'https://imageglass.codeplex.com/downloads/get/830200', 'cdff8e58076ac914df0f67dfc8c1ebedb3e27774', '2.73 MB', 13015, '2014-04-21 16:00:00', '2014-04-21 16:00:00', NULL),
(14, 14, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/2.0.1.5/ImageGlass_2.0.1.5.exe', '400259ebd803e0f79fbf289d07794619b9d3b990', '1.26 MB', 30058, '2015-01-14 16:00:00', '2015-01-14 16:00:00', NULL),
(15, 15, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/3.0.9.2/ImageGlass_3.0.9.2.exe', '3ac0decfa6ab069d05b50b049880051d8a3eb659', '1.37 MB', 4308, '2015-09-02 16:00:00', '2015-09-02 16:00:00', NULL),
(16, 16, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/3.0.9.19/ImageGlass_3.0.9.19.exe', 'd3355440f08cf942c35d9ce2528aea4acadcf7f0', '3.06 MB', 30113, '2015-09-18 16:00:00', '2015-09-18 16:00:00', NULL),
(17, 17, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/3.2.0.16/ImageGlass_3.2.0.16.exe', '7b9909c881c738450cef3fe08b937fd5f5a58133', '3.28 MB', 59180, '2016-02-05 16:00:00', '2016-02-05 16:00:00', NULL),
(18, 18, 'installer', 'http://www.imageglass.org/upload/ImageGlass_3.5_PRE.exe', 'ead16870a61a3b3410859a2de5a83a8d572db3b0', '3.28 MB', 1342, '2016-08-22 16:00:00', '2016-08-22 16:00:00', NULL),
(19, 19, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/3.5.9.17/ImageGlass_3.5.9.17.exe', '278491499d880fd2344efd324061af74909fb77e', '3.56 MB', 67392, '2016-09-17 16:00:00', '2016-09-17 16:00:00', NULL),
(20, 20, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/4.0.4.15/ImageGlass_4.0.4.15.exe', '9f1451c35fcd32b95cea9a5d403074689531aa1c', '12.6 MB', 34568, '2017-04-20 12:24:35', '2017-04-20 12:24:35', NULL),
(21, 21, 'installer', 'https://github.com/d2phap/ImageGlass/releases/download/4.1.7.26/ImageGlass_4.1.7.26.exe', '09caf2b54df8d0527dbd2e316556b864f191f0f9', '12.6 MB', 53393, '2017-07-25 17:05:10', '2017-07-25 17:05:10', NULL),
(22, 22, 'installer', 'http://www.imageglass.org/upload/release/ImageGlass_4.5.11.27.exe', 'c65824db05e51deb5cc213540ff5663f9addca43', '13.1 MB', 68709, '2017-11-25 17:05:10', '2017-11-25 17:05:10', NULL),
(23, 22, 'portable', 'http://www.imageglass.org/upload/release/ImageGlass_4.5.11.27.zip', '0722b30939a1521c02e0bd233d002c22f275f6d6', '13.3 MB', 12757, '2017-11-25 17:05:10', '2017-11-25 17:05:10', NULL),
(24, 23, 'installer', 'http://www.imageglass.org/upload/release/ImageGlass_5.0.5.7.exe', '108978f3bdb5e9293d3a43e50dca017bc4cc6878', '12.9 MB', 2351, '2018-05-06 13:05:10', '2018-05-06 13:05:10', NULL),
(25, 23, 'portable', 'http://www.imageglass.org/upload/release/ImageGlass_5.0.5.7.zip', '2dab2338a6e304c84107b6f885d90c90b336639b', '13.7 MB', 416, '2018-05-06 13:05:15', '2018-05-06 13:05:15', NULL);

*/
