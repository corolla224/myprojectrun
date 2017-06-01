<?php

namespace App\Http\Controllers\Music;

use DB;
use App\Http\Controllers\Controller;

/**
 *
 */
class SongController extends Controller
{

  function __construct()
  {
    # code...
  }
  public function index()
  {
    //return 'Hello From Song Controller';
    //return view('song.index');
    return view('song.index');
  }
  public function play()
  {
    //return view('song/play');
    /*
    return view('song/play')
    ->with('band', 'OASIS')
    ->with('album','Morning');
    */
    /*
    return view('song/play')->with([
       'band' => 'OASIS2',
       'album' => 'Morning2'
    ]);
    */
    //return view('song/play')->withBand('BBBB')->withAlbum('AAAA');
    $this->data = array(
      'band' => 'OASIS4',
      'album' => 'Morning4'
    );
    return view('song/play', $this->data);


  }

  public function band()
  {
      $aCss = array('css/song/style.css');
      $aScript = array('js/song/main.js');
      /*$band = DB::table('blog_tbl')->get();
      var_dump($band);
      die();*/
      //$band = DB::table('blog_tbl')->find('3');
      //$band = DB::select('select title,blog_th from blog_tbl where deleted = ?', [0]);
      //$band = DB::insert('insert into blog_tbl (title, blog_th) values (?, ?)', ['green day', 'best of rock']);
      //$band_up =DB::update('update blog_tbl set blog_th = "Best of rock band" where title = ?', ['green day']);
      //$band_del = DB::delete('delete from blog_tbl where title = ?', ['green day']);
      //$band = DB::table('blog_tbl')->get();
      //dd($band);
      

      $this->data = array(
      'band' => 'Metallica',
      'song' => 'BLACK'
      //'style' => $aCss
    );
    return view('song/band', $this->data);
  }
}
