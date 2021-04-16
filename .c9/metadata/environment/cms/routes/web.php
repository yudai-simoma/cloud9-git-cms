{"filter":false,"title":"web.php","tooltip":"/cms/routes/web.php","undoManager":{"mark":100,"position":100,"stack":[[{"start":{"row":37,"column":8},"end":{"row":37,"column":19},"action":"insert","lines":["\"published\""],"id":53}],[{"start":{"row":35,"column":21},"end":{"row":35,"column":22},"action":"insert","lines":[" "],"id":54},{"start":{"row":35,"column":22},"end":{"row":35,"column":23},"action":"insert","lines":["="]},{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"insert","lines":["."]}],[{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"remove","lines":["."],"id":55}],[{"start":{"row":35,"column":23},"end":{"row":35,"column":24},"action":"insert","lines":[">"],"id":56}],[{"start":{"row":35,"column":24},"end":{"row":35,"column":25},"action":"insert","lines":[" "],"id":57}],[{"start":{"row":34,"column":33},"end":{"row":34,"column":34},"action":"insert","lines":["|"],"id":58}],[{"start":{"row":34,"column":33},"end":{"row":34,"column":34},"action":"insert","lines":["m"],"id":59},{"start":{"row":34,"column":34},"end":{"row":34,"column":35},"action":"insert","lines":["i"]}],[{"start":{"row":34,"column":35},"end":{"row":34,"column":36},"action":"insert","lines":["n"],"id":60}],[{"start":{"row":34,"column":36},"end":{"row":34,"column":37},"action":"insert","lines":[":"],"id":61}],[{"start":{"row":34,"column":37},"end":{"row":34,"column":38},"action":"insert","lines":["3"],"id":62}],[{"start":{"row":35,"column":25},"end":{"row":35,"column":50},"action":"insert","lines":["'required|min:3|max:255',"],"id":64}],[{"start":{"row":35,"column":39},"end":{"row":35,"column":40},"action":"remove","lines":["3"],"id":65}],[{"start":{"row":35,"column":39},"end":{"row":35,"column":40},"action":"insert","lines":["1"],"id":66}],[{"start":{"row":35,"column":47},"end":{"row":35,"column":48},"action":"remove","lines":["5"],"id":67},{"start":{"row":35,"column":46},"end":{"row":35,"column":47},"action":"remove","lines":["5"]},{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"remove","lines":["2"]}],[{"start":{"row":35,"column":45},"end":{"row":35,"column":46},"action":"insert","lines":["3"],"id":68}],[{"start":{"row":36,"column":21},"end":{"row":36,"column":22},"action":"insert","lines":[" "],"id":69}],[{"start":{"row":36,"column":22},"end":{"row":36,"column":48},"action":"insert","lines":["=> 'required|min:1|max:3',"],"id":70}],[{"start":{"row":36,"column":45},"end":{"row":36,"column":46},"action":"remove","lines":["3"],"id":71}],[{"start":{"row":36,"column":45},"end":{"row":36,"column":46},"action":"insert","lines":["6"],"id":72}],[{"start":{"row":36,"column":39},"end":{"row":36,"column":40},"action":"remove","lines":["1"],"id":73},{"start":{"row":36,"column":38},"end":{"row":36,"column":39},"action":"remove","lines":[":"]},{"start":{"row":36,"column":37},"end":{"row":36,"column":38},"action":"remove","lines":["n"]},{"start":{"row":36,"column":36},"end":{"row":36,"column":37},"action":"remove","lines":["i"]},{"start":{"row":36,"column":35},"end":{"row":36,"column":36},"action":"remove","lines":["m"]},{"start":{"row":36,"column":34},"end":{"row":36,"column":35},"action":"remove","lines":["|"]}],[{"start":{"row":37,"column":19},"end":{"row":37,"column":20},"action":"insert","lines":[" "],"id":74}],[{"start":{"row":37,"column":20},"end":{"row":37,"column":46},"action":"insert","lines":["=> 'required|min:1|max:3',"],"id":75}],[{"start":{"row":37,"column":44},"end":{"row":37,"column":45},"action":"remove","lines":["'"],"id":76},{"start":{"row":37,"column":43},"end":{"row":37,"column":44},"action":"remove","lines":["3"]},{"start":{"row":37,"column":42},"end":{"row":37,"column":43},"action":"remove","lines":[":"]},{"start":{"row":37,"column":41},"end":{"row":37,"column":42},"action":"remove","lines":["x"]},{"start":{"row":37,"column":40},"end":{"row":37,"column":41},"action":"remove","lines":["a"]},{"start":{"row":37,"column":39},"end":{"row":37,"column":40},"action":"remove","lines":["m"]},{"start":{"row":37,"column":38},"end":{"row":37,"column":39},"action":"remove","lines":["|"]},{"start":{"row":37,"column":37},"end":{"row":37,"column":38},"action":"remove","lines":["1"]},{"start":{"row":37,"column":36},"end":{"row":37,"column":37},"action":"remove","lines":[":"]},{"start":{"row":37,"column":35},"end":{"row":37,"column":36},"action":"remove","lines":["n"]},{"start":{"row":37,"column":34},"end":{"row":37,"column":35},"action":"remove","lines":["i"]}],[{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"remove","lines":["m"],"id":77}],[{"start":{"row":37,"column":33},"end":{"row":37,"column":34},"action":"insert","lines":["d"],"id":78},{"start":{"row":37,"column":34},"end":{"row":37,"column":35},"action":"insert","lines":["a"]},{"start":{"row":37,"column":35},"end":{"row":37,"column":36},"action":"insert","lines":["t"]},{"start":{"row":37,"column":36},"end":{"row":37,"column":37},"action":"insert","lines":["e"]}],[{"start":{"row":37,"column":37},"end":{"row":37,"column":38},"action":"insert","lines":["'"],"id":79}],[{"start":{"row":0,"column":0},"end":{"row":70,"column":0},"action":"remove","lines":["<?php","","/*","|--------------------------------------------------------------------------","| Web Routes","|--------------------------------------------------------------------------","|","| Here is where you can register web routes for your application. These","| routes are loaded by the RouteServiceProvider within a group which","| contains the \"web\" middleware group. Now create something great!","|","*/","","use App\\Book;","use Illuminate\\Http\\Request;","","/**","* 本の一覧表示(books.blade.php)","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","/**","* 本を追加 ","*/","Route::post('/books', function (Request $request) {","    ","    //バリデーション","    $validator = Validator::make($request->all(), [","        'item_name' => 'required|min:3|max:255',","        \"item_number\" => 'required|min:1|max:3',","        \"item_amount\" => 'required|max:6',","        \"published\" => 'required|date',","    ]);","","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    ","    // Eloquentモデル（登録処理）","    $books = new Book;","    $books->item_name = $request->item_name;","    $books->item_number = '1';","    $books->item_amount = '1000';","    $books->published = '2017-03-07 00:00:00';","    $books->save(); ","    return redirect('/');","});","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();       //追加","    return redirect('/');  //追加","});","","","Auth::routes();","","Route::get('/home', 'HomeController@index')->name('home');","",""],"id":80},{"start":{"row":0,"column":0},"end":{"row":88,"column":58},"action":"insert","lines":["","<?php","","use App\\Book;","use Illuminate\\Http\\Request;","","","/**","* 本の一覧表示(books.blade.php)","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","/**","* 本を登録","*/","Route::post('/books', function (Request $request) {","    //バリデーション","    $validator = Validator::make($request->all(), [","        'item_name' => 'required|min:3|max:255',","        'item_number' => 'required | min:1 | max:3',","        'item_amount' => 'required | max:6',","         'published'   => 'required',","    ]);","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    // Eloquentモデル（登録処理）","    $books = new Book;","    $books->item_name =    $request->item_name;","    $books->item_number =  $request->item_number;","    $books->item_amount =  $request->item_amount;","    $books->published =    $request->published;","    $books->save(); ","    return redirect('/');","","});","","//更新画面","Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', ['book' => $books]);","});","","//更新処理","Route::post('/books/update', function(Request $request){","    //バリデーション","        $validator = Validator::make($request->all(), [","            'id' => 'required',","            'item_name' => 'required|min:3|max:255',","            'item_number' => 'required|min:1|max:3',","            'item_amount' => 'required|max:6',","            'published' => 'required',","    ]);","    //バリデーション:エラー","        if ($validator->fails()) {","            return redirect('/')","                ->withInput()","                ->withErrors($validator);","    }","    ","    //データ更新","    $books = Book::find($request->id);","    $books->item_name   = $request->item_name;","    $books->item_number = $request->item_number;","    $books->item_amount = $request->item_amount;","    $books->published   = $request->published;","    $books->save();","    return redirect('/');","});","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});","","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"]}],[{"start":{"row":49,"column":49},"end":{"row":50,"column":0},"action":"insert","lines":["",""],"id":81},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"remove","lines":["    "],"id":82},{"start":{"row":49,"column":49},"end":{"row":50,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":54,"column":4},"end":{"row":76,"column":25},"action":"remove","lines":["//バリデーション","        $validator = Validator::make($request->all(), [","            'id' => 'required',","            'item_name' => 'required|min:3|max:255',","            'item_number' => 'required|min:1|max:3',","            'item_amount' => 'required|max:6',","            'published' => 'required',","    ]);","    //バリデーション:エラー","        if ($validator->fails()) {","            return redirect('/')","                ->withInput()","                ->withErrors($validator);","    }","    ","    //データ更新","    $books = Book::find($request->id);","    $books->item_name   = $request->item_name;","    $books->item_number = $request->item_number;","    $books->item_amount = $request->item_amount;","    $books->published   = $request->published;","    $books->save();","    return redirect('/');"],"id":83}],[{"start":{"row":53,"column":0},"end":{"row":55,"column":3},"action":"remove","lines":["Route::post('/books/update', function(Request $request){","    ","});"],"id":89},{"start":{"row":53,"column":0},"end":{"row":53,"column":54},"action":"insert","lines":["Route::post('/books/update','BooksController@update');"]}],[{"start":{"row":22,"column":4},"end":{"row":42,"column":25},"action":"remove","lines":["//バリデーション","    $validator = Validator::make($request->all(), [","        'item_name' => 'required|min:3|max:255',","        'item_number' => 'required | min:1 | max:3',","        'item_amount' => 'required | max:6',","         'published'   => 'required',","    ]);","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    // Eloquentモデル（登録処理）","    $books = new Book;","    $books->item_name =    $request->item_name;","    $books->item_number =  $request->item_number;","    $books->item_amount =  $request->item_amount;","    $books->published =    $request->published;","    $books->save(); ","    return redirect('/');"],"id":90}],[{"start":{"row":21,"column":0},"end":{"row":24,"column":3},"action":"remove","lines":["Route::post('/books', function (Request $request) {","    ","","});"],"id":96},{"start":{"row":21,"column":0},"end":{"row":22,"column":46},"action":"insert","lines":["//登録処理","Route::post('/books','BooksController@store');"]}],[{"start":{"row":1,"column":0},"end":{"row":42,"column":58},"action":"remove","lines":["<?php","","use App\\Book;","use Illuminate\\Http\\Request;","","","/**","* 本の一覧表示(books.blade.php)","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","/**","* 本を登録","*/","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', ['book' => $books]);","});","","//更新処理","Route::post('/books/update','BooksController@update');","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});","","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"],"id":107},{"start":{"row":1,"column":0},"end":{"row":42,"column":58},"action":"insert","lines":["<?php","","use App\\Book;","use Illuminate\\Http\\Request;","","","/**","* 本ダッシュボード表示","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', [","        'book' => $books","    ]);","});","","//更新処理","Route::post('/books/update','BooksController@update');","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});","","","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"]}],[{"start":{"row":1,"column":0},"end":{"row":42,"column":58},"action":"remove","lines":["<?php","","use App\\Book;","use Illuminate\\Http\\Request;","","","/**","* 本ダッシュボード表示","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', [","        'book' => $books","    ]);","});","","//更新処理","Route::post('/books/update','BooksController@update');","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});","","","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"],"id":108},{"start":{"row":1,"column":0},"end":{"row":42,"column":58},"action":"insert","lines":["<?php","","use App\\Book;","use Illuminate\\Http\\Request;","","","/**","* 本ダッシュボード表示","*/","Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});","","//登録処理","Route::post('/books','BooksController@store');","","//更新画面","Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', [","        'book' => $books","    ]);","});","","//更新処理","Route::post('/books/update','BooksController@update');","","/**","* 本を削除 ","*/","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});","","","Auth::routes();","Route::get('/home', 'HomeController@index')->name('home');"]}],[{"start":{"row":9,"column":2},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":109}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"insert","lines":["R"],"id":110}],[{"start":{"row":10,"column":0},"end":{"row":10,"column":1},"action":"remove","lines":["R"],"id":111},{"start":{"row":10,"column":0},"end":{"row":10,"column":5},"action":"insert","lines":["Route"]}],[{"start":{"row":10,"column":5},"end":{"row":10,"column":6},"action":"insert","lines":[":"],"id":112},{"start":{"row":10,"column":6},"end":{"row":10,"column":7},"action":"insert","lines":[":"]},{"start":{"row":10,"column":7},"end":{"row":10,"column":8},"action":"insert","lines":["g"]},{"start":{"row":10,"column":8},"end":{"row":10,"column":9},"action":"insert","lines":["e"]}],[{"start":{"row":10,"column":9},"end":{"row":10,"column":10},"action":"insert","lines":["t"],"id":113}],[{"start":{"row":10,"column":10},"end":{"row":10,"column":12},"action":"insert","lines":["()"],"id":114}],[{"start":{"row":10,"column":11},"end":{"row":10,"column":13},"action":"insert","lines":["''"],"id":115}],[{"start":{"row":10,"column":12},"end":{"row":10,"column":13},"action":"insert","lines":["/"],"id":116}],[{"start":{"row":10,"column":14},"end":{"row":10,"column":15},"action":"insert","lines":[","],"id":117}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":16},"action":"insert","lines":[" "],"id":118}],[{"start":{"row":10,"column":15},"end":{"row":10,"column":17},"action":"insert","lines":["''"],"id":119}],[{"start":{"row":10,"column":16},"end":{"row":10,"column":37},"action":"insert","lines":["BooksController@store"],"id":120}],[{"start":{"row":10,"column":38},"end":{"row":10,"column":39},"action":"remove","lines":[" "],"id":121}],[{"start":{"row":10,"column":39},"end":{"row":10,"column":40},"action":"insert","lines":[";"],"id":122}],[{"start":{"row":10,"column":40},"end":{"row":11,"column":0},"action":"insert","lines":["",""],"id":123}],[{"start":{"row":23,"column":6},"end":{"row":24,"column":0},"action":"insert","lines":["",""],"id":124},{"start":{"row":24,"column":0},"end":{"row":25,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":24,"column":0},"end":{"row":24,"column":40},"action":"insert","lines":["Route::get('/','BooksController@store');"],"id":125}],[{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"remove","lines":["t"],"id":126},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"remove","lines":["e"]},{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"remove","lines":["g"]}],[{"start":{"row":24,"column":7},"end":{"row":24,"column":8},"action":"insert","lines":["p"],"id":127},{"start":{"row":24,"column":8},"end":{"row":24,"column":9},"action":"insert","lines":["o"]},{"start":{"row":24,"column":9},"end":{"row":24,"column":10},"action":"insert","lines":["s"]},{"start":{"row":24,"column":10},"end":{"row":24,"column":11},"action":"insert","lines":["t"]}],[{"start":{"row":24,"column":13},"end":{"row":24,"column":14},"action":"remove","lines":["/"],"id":128},{"start":{"row":24,"column":13},"end":{"row":24,"column":31},"action":"insert","lines":["/booksedit/{books}"]}],[{"start":{"row":38,"column":2},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":129},{"start":{"row":39,"column":0},"end":{"row":40,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":39,"column":0},"end":{"row":39,"column":40},"action":"insert","lines":["Route::get('/','BooksController@store');"],"id":131}],[{"start":{"row":39,"column":7},"end":{"row":39,"column":10},"action":"remove","lines":["get"],"id":132},{"start":{"row":39,"column":7},"end":{"row":39,"column":13},"action":"insert","lines":["delete"]}],[{"start":{"row":39,"column":14},"end":{"row":39,"column":17},"action":"remove","lines":["'/'"],"id":133},{"start":{"row":39,"column":14},"end":{"row":39,"column":28},"action":"insert","lines":["'/book/{book}'"]}],[{"start":{"row":39,"column":50},"end":{"row":39,"column":51},"action":"remove","lines":["e"],"id":134},{"start":{"row":39,"column":49},"end":{"row":39,"column":50},"action":"remove","lines":["r"]},{"start":{"row":39,"column":48},"end":{"row":39,"column":49},"action":"remove","lines":["o"]},{"start":{"row":39,"column":47},"end":{"row":39,"column":48},"action":"remove","lines":["t"]},{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"remove","lines":["s"]}],[{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"insert","lines":["d"],"id":135}],[{"start":{"row":39,"column":46},"end":{"row":39,"column":47},"action":"remove","lines":["d"],"id":136},{"start":{"row":39,"column":46},"end":{"row":39,"column":52},"action":"insert","lines":["delete"]}],[{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"remove","lines":["e"],"id":137},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"remove","lines":["r"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"remove","lines":["o"]},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"remove","lines":["t"]},{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"remove","lines":["s"]}],[{"start":{"row":10,"column":32},"end":{"row":10,"column":33},"action":"insert","lines":["i"],"id":138},{"start":{"row":10,"column":33},"end":{"row":10,"column":34},"action":"insert","lines":["n"]},{"start":{"row":10,"column":34},"end":{"row":10,"column":35},"action":"insert","lines":["d"]},{"start":{"row":10,"column":35},"end":{"row":10,"column":36},"action":"insert","lines":["e"]},{"start":{"row":10,"column":36},"end":{"row":10,"column":37},"action":"insert","lines":["x"]}],[{"start":{"row":12,"column":0},"end":{"row":18,"column":3},"action":"remove","lines":["Route::get('/', function () {","    $books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味","});"],"id":139},{"start":{"row":11,"column":0},"end":{"row":12,"column":0},"action":"remove","lines":["",""]},{"start":{"row":10,"column":40},"end":{"row":11,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":54},"end":{"row":16,"column":55},"action":"remove","lines":["e"],"id":140},{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"remove","lines":["r"]},{"start":{"row":16,"column":52},"end":{"row":16,"column":53},"action":"remove","lines":["o"]},{"start":{"row":16,"column":51},"end":{"row":16,"column":52},"action":"remove","lines":["t"]},{"start":{"row":16,"column":50},"end":{"row":16,"column":51},"action":"remove","lines":["s"]}],[{"start":{"row":16,"column":50},"end":{"row":16,"column":51},"action":"insert","lines":["e"],"id":141},{"start":{"row":16,"column":51},"end":{"row":16,"column":52},"action":"insert","lines":["d"]},{"start":{"row":16,"column":52},"end":{"row":16,"column":53},"action":"insert","lines":["i"]},{"start":{"row":16,"column":53},"end":{"row":16,"column":54},"action":"insert","lines":["t"]}],[{"start":{"row":18,"column":0},"end":{"row":23,"column":3},"action":"remove","lines":["Route::post('/booksedit/{books}', function(Book $books) {","    //{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', [","        'book' => $books","    ]);","});"],"id":142},{"start":{"row":17,"column":0},"end":{"row":18,"column":0},"action":"remove","lines":["",""]},{"start":{"row":16,"column":57},"end":{"row":17,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"remove","lines":["e"],"id":143},{"start":{"row":24,"column":50},"end":{"row":24,"column":51},"action":"remove","lines":["t"]},{"start":{"row":24,"column":49},"end":{"row":24,"column":50},"action":"remove","lines":["e"]},{"start":{"row":24,"column":48},"end":{"row":24,"column":49},"action":"remove","lines":["l"]},{"start":{"row":24,"column":47},"end":{"row":24,"column":48},"action":"remove","lines":["e"]},{"start":{"row":24,"column":46},"end":{"row":24,"column":47},"action":"remove","lines":["d"]}],[{"start":{"row":24,"column":46},"end":{"row":24,"column":47},"action":"insert","lines":["d"],"id":144},{"start":{"row":24,"column":47},"end":{"row":24,"column":48},"action":"insert","lines":["e"]},{"start":{"row":24,"column":48},"end":{"row":24,"column":49},"action":"insert","lines":["s"]},{"start":{"row":24,"column":49},"end":{"row":24,"column":50},"action":"insert","lines":["t"]}],[{"start":{"row":24,"column":50},"end":{"row":24,"column":51},"action":"insert","lines":["r"],"id":145},{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"insert","lines":["y"]}],[{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"remove","lines":["y"],"id":146}],[{"start":{"row":24,"column":51},"end":{"row":24,"column":52},"action":"insert","lines":["o"],"id":147},{"start":{"row":24,"column":52},"end":{"row":24,"column":53},"action":"insert","lines":["y"]}],[{"start":{"row":25,"column":0},"end":{"row":30,"column":0},"action":"remove","lines":["","Route::delete('/book/{book}', function (Book $book) {","    $book->delete();","    return redirect('/');","});",""],"id":150},{"start":{"row":24,"column":56},"end":{"row":25,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":25,"column":0},"end":{"row":26,"column":0},"action":"insert","lines":["",""],"id":151},{"start":{"row":26,"column":0},"end":{"row":26,"column":1},"action":"insert","lines":["/"]},{"start":{"row":26,"column":1},"end":{"row":26,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":26,"column":2},"end":{"row":26,"column":3},"action":"insert","lines":["A"],"id":152},{"start":{"row":26,"column":3},"end":{"row":26,"column":4},"action":"insert","lines":["u"]}],[{"start":{"row":26,"column":4},"end":{"row":26,"column":5},"action":"insert","lines":["t"],"id":153},{"start":{"row":26,"column":5},"end":{"row":26,"column":6},"action":"insert","lines":["h"]}],[{"start":{"row":0,"column":0},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":154}],[{"start":{"row":0,"column":5},"end":{"row":1,"column":0},"action":"remove","lines":["",""],"id":155}],[{"start":{"row":2,"column":28},"end":{"row":3,"column":0},"action":"remove","lines":["",""],"id":156}],[{"start":{"row":4,"column":2},"end":{"row":4,"column":3},"action":"remove","lines":["*"],"id":157},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":["*"]},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["/"]},{"start":{"row":3,"column":0},"end":{"row":4,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":5,"column":1},"end":{"row":5,"column":2},"action":"remove","lines":["/"],"id":158},{"start":{"row":5,"column":0},"end":{"row":5,"column":1},"action":"remove","lines":["*"]}],[{"start":{"row":4,"column":12},"end":{"row":5,"column":0},"action":"remove","lines":["",""],"id":159}],[{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"remove","lines":[" "],"id":160},{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"remove","lines":["*"]}],[{"start":{"row":4,"column":0},"end":{"row":4,"column":1},"action":"insert","lines":["/"],"id":161},{"start":{"row":4,"column":1},"end":{"row":4,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":18,"column":1},"end":{"row":18,"column":2},"action":"remove","lines":["/"],"id":162},{"start":{"row":18,"column":0},"end":{"row":18,"column":1},"action":"remove","lines":["*"]},{"start":{"row":17,"column":7},"end":{"row":18,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":16,"column":3},"end":{"row":17,"column":0},"action":"remove","lines":["",""],"id":163},{"start":{"row":16,"column":2},"end":{"row":16,"column":3},"action":"remove","lines":["*"]},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"remove","lines":["*"]},{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["/"]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":["*"],"id":164},{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"remove","lines":[" "]}],[{"start":{"row":16,"column":0},"end":{"row":16,"column":1},"action":"insert","lines":["/"],"id":165},{"start":{"row":16,"column":1},"end":{"row":16,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":21,"column":0},"end":{"row":21,"column":58},"action":"remove","lines":["Route::get('/home', 'HomeController@index')->name('home');"],"id":169},{"start":{"row":21,"column":0},"end":{"row":21,"column":60},"action":"insert","lines":["Route::get('/home', 'BooksController@index')->name('home'); "]}],[{"start":{"row":21,"column":60},"end":{"row":22,"column":0},"action":"insert","lines":["",""],"id":170},{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""]}],[{"start":{"row":23,"column":0},"end":{"row":29,"column":3},"action":"insert","lines":["Route::group(['middleware' => 'auth'], function () {","   //welcomeページを表示","   Route::get(\"/\",function(){","     return view(\"welcome\");","   });","","});"],"id":171}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":3},"action":"insert","lines":["// "],"id":173},{"start":{"row":24,"column":0},"end":{"row":24,"column":2},"action":"insert","lines":["//"]},{"start":{"row":25,"column":0},"end":{"row":25,"column":2},"action":"insert","lines":["//"]},{"start":{"row":26,"column":0},"end":{"row":26,"column":3},"action":"insert","lines":["// "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":2},"action":"insert","lines":["//"]},{"start":{"row":29,"column":0},"end":{"row":29,"column":3},"action":"insert","lines":["// "]}],[{"start":{"row":22,"column":0},"end":{"row":23,"column":0},"action":"insert","lines":["",""],"id":174}],[{"start":{"row":23,"column":0},"end":{"row":23,"column":1},"action":"insert","lines":["/"],"id":175},{"start":{"row":23,"column":1},"end":{"row":23,"column":2},"action":"insert","lines":["/"]}],[{"start":{"row":23,"column":2},"end":{"row":23,"column":6},"action":"insert","lines":["以下でも"],"id":176}],[{"start":{"row":23,"column":6},"end":{"row":23,"column":11},"action":"insert","lines":["ログインの"],"id":177}],[{"start":{"row":23,"column":11},"end":{"row":23,"column":14},"action":"insert","lines":["識別を"],"id":178}],[{"start":{"row":23,"column":14},"end":{"row":23,"column":17},"action":"insert","lines":["できる"],"id":179},{"start":{"row":23,"column":17},"end":{"row":23,"column":18},"action":"insert","lines":["・"]}],[{"start":{"row":23,"column":18},"end":{"row":23,"column":27},"action":"insert","lines":["コントローラーへの"],"id":180}],[{"start":{"row":23,"column":27},"end":{"row":23,"column":30},"action":"insert","lines":["記載は"],"id":181},{"start":{"row":23,"column":30},"end":{"row":23,"column":32},"action":"insert","lines":["不要"]}]]},"ace":{"folds":[],"scrolltop":38,"scrollleft":0,"selection":{"start":{"row":23,"column":32},"end":{"row":23,"column":32},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":4,"state":"php-start","mode":"ace/mode/php"}},"timestamp":1618584305368,"hash":"547bdc79089cd0acf51bea8f1f290016a4b6c0e1"}