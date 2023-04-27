<?php

use App\Http\Controllers\Ingatlan;
use App\Models\Ingatlan as ModelsIngatlan;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Carbon;
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
        Schema::create('ingatlans', function (Blueprint $table) {
            $table->id();
            $table->foreignId("kategoria")->references("id")->on("kategorias");
            $table->string("leiras")->nullable();
            $table->date("hirdetesDatuma")->nullable()->default(Carbon::now());
            $table->boolean("tehermentes");
            $table->integer("ar");
            $table->string("kepUrl")->nullable();
            $table->timestamps();
        });
        ModelsIngatlan::create(["kategoria"=>2,"leiras"=>"hello","tehermentes"=>0,"ar"=>110000,"kepUrl"=>"https://www.bhg.com/thmb/H9VV9JNnKl-H1faFXnPlQfNprYw=/1799x0/filters:no_upscale():strip_icc()/white-modern-house-curved-patio-archway-c0a4a3b3-aa51b24d14d0464ea15d36e05aa85ac9.jpg"]);
        ModelsIngatlan::create(["kategoria"=>3,"leiras"=>"gyere","tehermentes"=>1,"ar"=>32112423,"kepUrl"=>"https://img.staticmb.com/mbcontent//images/uploads/2022/12/Most-Beautiful-House-in-the-World.jpg"]);
        ModelsIngatlan::create(["kategoria"=>1,"leiras"=>"nem rossz","tehermentes"=>0,"ar"=>1233452,"kepUrl"=>"https://thumbor.forbes.com/thumbor/fit-in/900x510/https://www.forbes.com/home-improvement/wp-content/uploads/2022/07/download-23.jpg"]);
        ModelsIngatlan::create(["kategoria"=>4,"leiras"=>"jó","tehermentes"=>1,"ar"=>12234432,"kepUrl"=>"https://images.adsttc.com/media/images/63c0/a935/7643/4a39/8498/948f/large_jpg/casa-tunich-apiron_13.jpg?1673570670"]);
        ModelsIngatlan::create(["kategoria"=>2,"leiras"=>"hihetetlenül jó","tehermentes"=>0,"ar"=>445467657,"kepUrl"=>"https://images.unsplash.com/photo-1613490493576-7fde63acd811?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8bW9kZXJuJTIwaG91c2V8ZW58MHx8MHx8&w=1000&q=80"]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ingatlans');
    }
};
