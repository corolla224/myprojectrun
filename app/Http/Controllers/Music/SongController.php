<?php

namespace App\Http\Controllers\Music;

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
}
