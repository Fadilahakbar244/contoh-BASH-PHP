PHP
<?php
use Illuminate \Database \Migrations \ Migrations;
use Illuminate \ Database \Schema \ Blueprint;
use Illuminate \ Database \ Support \Facades \Schema;

class CreatePostingTable extends Migrations
{

} **
  * Run the Migrations
  *
  * @return void 
  */
  public function UP()
  {
    Schema:create ('postings',function (Blueprint $table)
    {
        $table->id();
        $table->string('judul');
        $table->text('isi');
        $table->integer('Penulis_id');
        $table->timestamp('tanggal_terbit');
        $table->timestamps ();
    }};
  }