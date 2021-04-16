{"filter":false,"title":"BooksController.php","tooltip":"/cms/app/Http/Controllers/BooksController.php","undoManager":{"mark":82,"position":82,"stack":[[{"start":{"row":5,"column":0},"end":{"row":6,"column":0},"action":"insert","lines":["",""],"id":2}],[{"start":{"row":6,"column":0},"end":{"row":9,"column":28},"action":"insert","lines":["//使うClassを宣言:自分で追加","use App\\Book;   //Bookモデルを使えるようにする","use Validator;  //バリデーションを使えるようにする","use Auth;       //認証モデルを使用する"],"id":3}],[{"start":{"row":9,"column":28},"end":{"row":10,"column":0},"action":"insert","lines":["",""],"id":4}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"remove","lines":["    "],"id":5}],[{"start":{"row":13,"column":0},"end":{"row":13,"column":4},"action":"insert","lines":["    "],"id":6}],[{"start":{"row":13,"column":6},"end":{"row":13,"column":8},"action":"insert","lines":["更新"],"id":7}],[{"start":{"row":13,"column":8},"end":{"row":14,"column":0},"action":"insert","lines":["",""],"id":8},{"start":{"row":14,"column":0},"end":{"row":14,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":14,"column":4},"end":{"row":14,"column":46},"action":"insert","lines":["public function update(Request $request) {"],"id":9}],[{"start":{"row":14,"column":46},"end":{"row":15,"column":0},"action":"insert","lines":["",""],"id":10},{"start":{"row":15,"column":0},"end":{"row":15,"column":8},"action":"insert","lines":["        "]},{"start":{"row":15,"column":8},"end":{"row":15,"column":9},"action":"insert","lines":["/"]},{"start":{"row":15,"column":9},"end":{"row":15,"column":10},"action":"insert","lines":["/"]}],[{"start":{"row":15,"column":10},"end":{"row":16,"column":0},"action":"insert","lines":["",""],"id":11},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"insert","lines":["        "]},{"start":{"row":16,"column":8},"end":{"row":16,"column":9},"action":"insert","lines":["}"]},{"start":{"row":16,"column":0},"end":{"row":16,"column":8},"action":"remove","lines":["        "]},{"start":{"row":16,"column":0},"end":{"row":16,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":15,"column":8},"end":{"row":15,"column":10},"action":"remove","lines":["//"],"id":12},{"start":{"row":15,"column":8},"end":{"row":37,"column":25},"action":"insert","lines":["//バリデーション","        $validator = Validator::make($request->all(), [","            'id' => 'required',","            'item_name' => 'required|min:3|max:255',","            'item_number' => 'required|min:1|max:3',","            'item_amount' => 'required|max:6',","            'published' => 'required',","    ]);","    //バリデーション:エラー","        if ($validator->fails()) {","            return redirect('/')","                ->withInput()","                ->withErrors($validator);","    }","    ","    //データ更新","    $books = Book::find($request->id);","    $books->item_name   = $request->item_name;","    $books->item_number = $request->item_number;","    $books->item_amount = $request->item_amount;","    $books->published   = $request->published;","    $books->save();","    return redirect('/');"]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "],"id":13},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":22,"column":0},"end":{"row":22,"column":4},"action":"insert","lines":["    "],"id":14},{"start":{"row":23,"column":0},"end":{"row":23,"column":4},"action":"insert","lines":["    "]},{"start":{"row":24,"column":0},"end":{"row":24,"column":4},"action":"insert","lines":["    "]},{"start":{"row":25,"column":0},"end":{"row":25,"column":4},"action":"insert","lines":["    "]},{"start":{"row":26,"column":0},"end":{"row":26,"column":4},"action":"insert","lines":["    "]},{"start":{"row":27,"column":0},"end":{"row":27,"column":4},"action":"insert","lines":["    "]},{"start":{"row":28,"column":0},"end":{"row":28,"column":4},"action":"insert","lines":["    "]},{"start":{"row":29,"column":0},"end":{"row":29,"column":4},"action":"insert","lines":["    "]},{"start":{"row":30,"column":0},"end":{"row":30,"column":4},"action":"insert","lines":["    "]},{"start":{"row":31,"column":0},"end":{"row":31,"column":4},"action":"insert","lines":["    "]},{"start":{"row":32,"column":0},"end":{"row":32,"column":4},"action":"insert","lines":["    "]},{"start":{"row":33,"column":0},"end":{"row":33,"column":4},"action":"insert","lines":["    "]},{"start":{"row":34,"column":0},"end":{"row":34,"column":4},"action":"insert","lines":["    "]},{"start":{"row":35,"column":0},"end":{"row":35,"column":4},"action":"insert","lines":["    "]},{"start":{"row":36,"column":0},"end":{"row":36,"column":4},"action":"insert","lines":["    "]},{"start":{"row":37,"column":0},"end":{"row":37,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":38,"column":5},"end":{"row":39,"column":0},"action":"insert","lines":["",""],"id":15},{"start":{"row":39,"column":0},"end":{"row":39,"column":4},"action":"insert","lines":["    "]},{"start":{"row":39,"column":4},"end":{"row":40,"column":0},"action":"insert","lines":["",""]},{"start":{"row":40,"column":0},"end":{"row":40,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":40,"column":4},"end":{"row":41,"column":45},"action":"insert","lines":["//登録","    public function store(Request $request) {"],"id":16}],[{"start":{"row":41,"column":45},"end":{"row":42,"column":0},"action":"insert","lines":["",""],"id":17},{"start":{"row":42,"column":0},"end":{"row":42,"column":8},"action":"insert","lines":["        "]},{"start":{"row":42,"column":8},"end":{"row":43,"column":0},"action":"insert","lines":["",""]},{"start":{"row":43,"column":0},"end":{"row":43,"column":8},"action":"insert","lines":["        "]},{"start":{"row":43,"column":8},"end":{"row":43,"column":9},"action":"insert","lines":["}"]},{"start":{"row":43,"column":0},"end":{"row":43,"column":8},"action":"remove","lines":["        "]},{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":42,"column":5},"end":{"row":42,"column":6},"action":"insert","lines":["/"],"id":18},{"start":{"row":42,"column":6},"end":{"row":42,"column":7},"action":"insert","lines":["/"]}],[{"start":{"row":42,"column":5},"end":{"row":42,"column":8},"action":"insert","lines":["   "],"id":19}],[{"start":{"row":42,"column":8},"end":{"row":42,"column":13},"action":"remove","lines":["//   "],"id":20},{"start":{"row":42,"column":8},"end":{"row":62,"column":25},"action":"insert","lines":["//バリデーション","    $validator = Validator::make($request->all(), [","        'item_name' => 'required|min:3|max:255',","        'item_number' => 'required | min:1 | max:3',","        'item_amount' => 'required | max:6',","         'published'   => 'required',","    ]);","    //バリデーション:エラー ","    if ($validator->fails()) {","        return redirect('/')","            ->withInput()","            ->withErrors($validator);","    }","    // Eloquentモデル（登録処理）","    $books = new Book;","    $books->item_name =    $request->item_name;","    $books->item_number =  $request->item_number;","    $books->item_amount =  $request->item_amount;","    $books->published =    $request->published;","    $books->save(); ","    return redirect('/');"]}],[{"start":{"row":43,"column":0},"end":{"row":43,"column":4},"action":"insert","lines":["    "],"id":21},{"start":{"row":44,"column":0},"end":{"row":44,"column":4},"action":"insert","lines":["    "]},{"start":{"row":45,"column":0},"end":{"row":45,"column":4},"action":"insert","lines":["    "]},{"start":{"row":46,"column":0},"end":{"row":46,"column":4},"action":"insert","lines":["    "]},{"start":{"row":47,"column":0},"end":{"row":47,"column":4},"action":"insert","lines":["    "]},{"start":{"row":48,"column":0},"end":{"row":48,"column":4},"action":"insert","lines":["    "]},{"start":{"row":49,"column":0},"end":{"row":49,"column":4},"action":"insert","lines":["    "]},{"start":{"row":50,"column":0},"end":{"row":50,"column":4},"action":"insert","lines":["    "]},{"start":{"row":51,"column":0},"end":{"row":51,"column":4},"action":"insert","lines":["    "]},{"start":{"row":52,"column":0},"end":{"row":52,"column":4},"action":"insert","lines":["    "]},{"start":{"row":53,"column":0},"end":{"row":53,"column":4},"action":"insert","lines":["    "]},{"start":{"row":54,"column":0},"end":{"row":54,"column":4},"action":"insert","lines":["    "]},{"start":{"row":55,"column":0},"end":{"row":55,"column":4},"action":"insert","lines":["    "]},{"start":{"row":56,"column":0},"end":{"row":56,"column":4},"action":"insert","lines":["    "]},{"start":{"row":57,"column":0},"end":{"row":57,"column":4},"action":"insert","lines":["    "]},{"start":{"row":58,"column":0},"end":{"row":58,"column":4},"action":"insert","lines":["    "]},{"start":{"row":59,"column":0},"end":{"row":59,"column":4},"action":"insert","lines":["    "]},{"start":{"row":60,"column":0},"end":{"row":60,"column":4},"action":"insert","lines":["    "]},{"start":{"row":61,"column":0},"end":{"row":61,"column":4},"action":"insert","lines":["    "]},{"start":{"row":62,"column":0},"end":{"row":62,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":63,"column":5},"end":{"row":64,"column":0},"action":"insert","lines":["",""],"id":22},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"insert","lines":["    "]},{"start":{"row":64,"column":4},"end":{"row":65,"column":0},"action":"insert","lines":["",""]},{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":65,"column":4},"end":{"row":65,"column":5},"action":"insert","lines":["/"],"id":23},{"start":{"row":65,"column":5},"end":{"row":65,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":65,"column":6},"end":{"row":65,"column":7},"action":"insert","lines":["本"],"id":24}],[{"start":{"row":65,"column":7},"end":{"row":65,"column":14},"action":"insert","lines":["ダッシュボード"],"id":25}],[{"start":{"row":65,"column":14},"end":{"row":65,"column":16},"action":"insert","lines":["表示"],"id":26}],[{"start":{"row":65,"column":16},"end":{"row":66,"column":0},"action":"insert","lines":["",""],"id":27},{"start":{"row":66,"column":0},"end":{"row":66,"column":4},"action":"insert","lines":["    "]},{"start":{"row":66,"column":4},"end":{"row":67,"column":0},"action":"insert","lines":["",""]},{"start":{"row":67,"column":0},"end":{"row":67,"column":4},"action":"insert","lines":["    "]},{"start":{"row":67,"column":4},"end":{"row":68,"column":0},"action":"insert","lines":["",""]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]},{"start":{"row":68,"column":4},"end":{"row":68,"column":5},"action":"insert","lines":["/"]}],[{"start":{"row":68,"column":5},"end":{"row":68,"column":6},"action":"insert","lines":["/"],"id":28},{"start":{"row":68,"column":6},"end":{"row":68,"column":7},"action":"insert","lines":["/"]}],[{"start":{"row":68,"column":6},"end":{"row":68,"column":7},"action":"remove","lines":["/"],"id":29}],[{"start":{"row":68,"column":6},"end":{"row":68,"column":7},"action":"insert","lines":["k"],"id":30},{"start":{"row":68,"column":7},"end":{"row":68,"column":8},"action":"insert","lines":["o"]},{"start":{"row":68,"column":8},"end":{"row":68,"column":9},"action":"insert","lines":["u"]},{"start":{"row":68,"column":9},"end":{"row":68,"column":10},"action":"insert","lines":["s"]},{"start":{"row":68,"column":10},"end":{"row":68,"column":11},"action":"insert","lines":["i"]},{"start":{"row":68,"column":11},"end":{"row":68,"column":12},"action":"insert","lines":["¥"]},{"start":{"row":68,"column":12},"end":{"row":68,"column":13},"action":"insert","lines":["¥"]},{"start":{"row":68,"column":13},"end":{"row":68,"column":14},"action":"insert","lines":["¥"]},{"start":{"row":68,"column":14},"end":{"row":68,"column":15},"action":"insert","lines":["¥"]}],[{"start":{"row":68,"column":14},"end":{"row":68,"column":15},"action":"remove","lines":["¥"],"id":31},{"start":{"row":68,"column":13},"end":{"row":68,"column":14},"action":"remove","lines":["¥"]},{"start":{"row":68,"column":12},"end":{"row":68,"column":13},"action":"remove","lines":["¥"]},{"start":{"row":68,"column":11},"end":{"row":68,"column":12},"action":"remove","lines":["¥"]},{"start":{"row":68,"column":10},"end":{"row":68,"column":11},"action":"remove","lines":["i"]},{"start":{"row":68,"column":9},"end":{"row":68,"column":10},"action":"remove","lines":["s"]},{"start":{"row":68,"column":8},"end":{"row":68,"column":9},"action":"remove","lines":["u"]},{"start":{"row":68,"column":7},"end":{"row":68,"column":8},"action":"remove","lines":["o"]},{"start":{"row":68,"column":6},"end":{"row":68,"column":7},"action":"remove","lines":["k"]}],[{"start":{"row":68,"column":6},"end":{"row":68,"column":8},"action":"insert","lines":["更新"],"id":32}],[{"start":{"row":68,"column":8},"end":{"row":69,"column":0},"action":"insert","lines":["",""],"id":33},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":69,"column":4},"end":{"row":70,"column":0},"action":"insert","lines":["",""]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":4},"end":{"row":71,"column":0},"action":"insert","lines":["",""]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":71,"column":4},"end":{"row":71,"column":5},"action":"insert","lines":["/"],"id":34},{"start":{"row":71,"column":5},"end":{"row":71,"column":6},"action":"insert","lines":["/"]}],[{"start":{"row":71,"column":6},"end":{"row":71,"column":8},"action":"insert","lines":["削除"],"id":35}],[{"start":{"row":66,"column":4},"end":{"row":66,"column":46},"action":"insert","lines":["public function update(Request $request) {"],"id":36}],[{"start":{"row":66,"column":46},"end":{"row":67,"column":0},"action":"insert","lines":["",""],"id":37},{"start":{"row":67,"column":0},"end":{"row":67,"column":8},"action":"insert","lines":["        "]},{"start":{"row":67,"column":8},"end":{"row":67,"column":9},"action":"insert","lines":["/"]},{"start":{"row":67,"column":9},"end":{"row":67,"column":10},"action":"insert","lines":["/"]}],[{"start":{"row":67,"column":10},"end":{"row":68,"column":0},"action":"insert","lines":["",""],"id":38},{"start":{"row":68,"column":0},"end":{"row":68,"column":8},"action":"insert","lines":["        "]},{"start":{"row":68,"column":8},"end":{"row":68,"column":9},"action":"insert","lines":["}"]},{"start":{"row":68,"column":0},"end":{"row":68,"column":8},"action":"remove","lines":["        "]},{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":71,"column":4},"end":{"row":71,"column":46},"action":"insert","lines":["public function update(Request $request) {"],"id":39}],[{"start":{"row":71,"column":46},"end":{"row":72,"column":0},"action":"insert","lines":["",""],"id":40},{"start":{"row":72,"column":0},"end":{"row":72,"column":8},"action":"insert","lines":["        "]},{"start":{"row":72,"column":8},"end":{"row":72,"column":9},"action":"insert","lines":["/"]},{"start":{"row":72,"column":9},"end":{"row":72,"column":10},"action":"insert","lines":["/"]}],[{"start":{"row":72,"column":10},"end":{"row":73,"column":0},"action":"insert","lines":["",""],"id":41},{"start":{"row":73,"column":0},"end":{"row":73,"column":8},"action":"insert","lines":["        "]},{"start":{"row":73,"column":8},"end":{"row":73,"column":9},"action":"insert","lines":["}"]},{"start":{"row":73,"column":0},"end":{"row":73,"column":8},"action":"remove","lines":["        "]},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":75,"column":8},"end":{"row":76,"column":0},"action":"insert","lines":["",""],"id":42},{"start":{"row":76,"column":0},"end":{"row":76,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":76,"column":4},"end":{"row":76,"column":46},"action":"insert","lines":["public function update(Request $request) {"],"id":43}],[{"start":{"row":76,"column":46},"end":{"row":77,"column":0},"action":"insert","lines":["",""],"id":44},{"start":{"row":77,"column":0},"end":{"row":77,"column":8},"action":"insert","lines":["        "]},{"start":{"row":77,"column":8},"end":{"row":77,"column":9},"action":"insert","lines":["/"]},{"start":{"row":77,"column":9},"end":{"row":77,"column":10},"action":"insert","lines":["/"]}],[{"start":{"row":77,"column":10},"end":{"row":78,"column":0},"action":"insert","lines":["",""],"id":45},{"start":{"row":78,"column":0},"end":{"row":78,"column":8},"action":"insert","lines":["        "]},{"start":{"row":78,"column":8},"end":{"row":78,"column":9},"action":"insert","lines":["}"]},{"start":{"row":78,"column":0},"end":{"row":78,"column":8},"action":"remove","lines":["        "]},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":70,"column":8},"end":{"row":70,"column":10},"action":"insert","lines":["画面"],"id":46}],[{"start":{"row":70,"column":10},"end":{"row":70,"column":12},"action":"insert","lines":["表示"],"id":47}],[{"start":{"row":76,"column":25},"end":{"row":76,"column":26},"action":"remove","lines":["e"],"id":48},{"start":{"row":76,"column":24},"end":{"row":76,"column":25},"action":"remove","lines":["t"]},{"start":{"row":76,"column":23},"end":{"row":76,"column":24},"action":"remove","lines":["a"]},{"start":{"row":76,"column":22},"end":{"row":76,"column":23},"action":"remove","lines":["d"]},{"start":{"row":76,"column":21},"end":{"row":76,"column":22},"action":"remove","lines":["p"]},{"start":{"row":76,"column":20},"end":{"row":76,"column":21},"action":"remove","lines":["u"]}],[{"start":{"row":76,"column":20},"end":{"row":76,"column":26},"action":"insert","lines":["delete"],"id":49}],[{"start":{"row":77,"column":8},"end":{"row":77,"column":10},"action":"remove","lines":["//"],"id":50},{"start":{"row":77,"column":8},"end":{"row":78,"column":25},"action":"insert","lines":["$book->delete();","    return redirect('/');"]}],[{"start":{"row":78,"column":4},"end":{"row":78,"column":8},"action":"insert","lines":["    "],"id":51}],[{"start":{"row":72,"column":8},"end":{"row":72,"column":10},"action":"remove","lines":["//"],"id":52},{"start":{"row":72,"column":8},"end":{"row":75,"column":7},"action":"insert","lines":["//{books}id 値を取得 => Book $books id 値の1レコード取得","    return view('booksedit', [","        'book' => $books","    ]);"]}],[{"start":{"row":67,"column":8},"end":{"row":67,"column":10},"action":"remove","lines":["//"],"id":53},{"start":{"row":67,"column":8},"end":{"row":71,"column":52},"action":"insert","lines":["$books = Book::orderBy('created_at', 'asc')->get();","    return view('books', [","        'books' => $books","    ]);","    //return view('books',compact('books')); //も同じ意味"]}],[{"start":{"row":68,"column":0},"end":{"row":68,"column":4},"action":"insert","lines":["    "],"id":54},{"start":{"row":69,"column":0},"end":{"row":69,"column":4},"action":"insert","lines":["    "]},{"start":{"row":70,"column":0},"end":{"row":70,"column":4},"action":"insert","lines":["    "]},{"start":{"row":71,"column":0},"end":{"row":71,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":77,"column":0},"end":{"row":77,"column":4},"action":"insert","lines":["    "],"id":55},{"start":{"row":78,"column":0},"end":{"row":78,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":79,"column":4},"end":{"row":79,"column":8},"action":"insert","lines":["    "],"id":56}],[{"start":{"row":65,"column":4},"end":{"row":72,"column":5},"action":"remove","lines":["//本ダッシュボード表示","    public function update(Request $request) {","        $books = Book::orderBy('created_at', 'asc')->get();","        return view('books', [","            'books' => $books","        ]);","        //return view('books',compact('books')); //も同じ意味","    }"],"id":57}],[{"start":{"row":65,"column":0},"end":{"row":65,"column":4},"action":"remove","lines":["    "],"id":58},{"start":{"row":64,"column":4},"end":{"row":65,"column":0},"action":"remove","lines":["",""]},{"start":{"row":64,"column":0},"end":{"row":64,"column":4},"action":"remove","lines":["    "]},{"start":{"row":63,"column":5},"end":{"row":64,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":11,"column":40},"end":{"row":12,"column":0},"action":"remove","lines":["",""],"id":59}],[{"start":{"row":11,"column":41},"end":{"row":12,"column":0},"action":"insert","lines":["",""],"id":60},{"start":{"row":12,"column":0},"end":{"row":12,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":12,"column":4},"end":{"row":19,"column":5},"action":"insert","lines":["//本ダッシュボード表示","    public function update(Request $request) {","        $books = Book::orderBy('created_at', 'asc')->get();","        return view('books', [","            'books' => $books","        ]);","        //return view('books',compact('books')); //も同じ意味","    }"],"id":61}],[{"start":{"row":19,"column":5},"end":{"row":20,"column":0},"action":"insert","lines":["",""],"id":62},{"start":{"row":20,"column":0},"end":{"row":20,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":13,"column":25},"end":{"row":13,"column":26},"action":"remove","lines":["e"],"id":63},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"remove","lines":["t"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"remove","lines":["a"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"remove","lines":["d"]},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"remove","lines":["p"]},{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"remove","lines":["u"]}],[{"start":{"row":13,"column":20},"end":{"row":13,"column":21},"action":"insert","lines":["i"],"id":64},{"start":{"row":13,"column":21},"end":{"row":13,"column":22},"action":"insert","lines":["n"]},{"start":{"row":13,"column":22},"end":{"row":13,"column":23},"action":"insert","lines":["d"]},{"start":{"row":13,"column":23},"end":{"row":13,"column":24},"action":"insert","lines":["e"]},{"start":{"row":13,"column":24},"end":{"row":13,"column":25},"action":"insert","lines":["x"]}],[{"start":{"row":13,"column":41},"end":{"row":13,"column":42},"action":"remove","lines":["t"],"id":65},{"start":{"row":13,"column":40},"end":{"row":13,"column":41},"action":"remove","lines":["s"]},{"start":{"row":13,"column":39},"end":{"row":13,"column":40},"action":"remove","lines":["e"]},{"start":{"row":13,"column":38},"end":{"row":13,"column":39},"action":"remove","lines":["u"]},{"start":{"row":13,"column":37},"end":{"row":13,"column":38},"action":"remove","lines":["q"]},{"start":{"row":13,"column":36},"end":{"row":13,"column":37},"action":"remove","lines":["e"]},{"start":{"row":13,"column":35},"end":{"row":13,"column":36},"action":"remove","lines":["r"]},{"start":{"row":13,"column":34},"end":{"row":13,"column":35},"action":"remove","lines":["$"]},{"start":{"row":13,"column":33},"end":{"row":13,"column":34},"action":"remove","lines":[" "]},{"start":{"row":13,"column":32},"end":{"row":13,"column":33},"action":"remove","lines":["t"]},{"start":{"row":13,"column":31},"end":{"row":13,"column":32},"action":"remove","lines":["s"]},{"start":{"row":13,"column":30},"end":{"row":13,"column":31},"action":"remove","lines":["e"]},{"start":{"row":13,"column":29},"end":{"row":13,"column":30},"action":"remove","lines":["u"]},{"start":{"row":13,"column":28},"end":{"row":13,"column":29},"action":"remove","lines":["q"]},{"start":{"row":13,"column":27},"end":{"row":13,"column":28},"action":"remove","lines":["e"]},{"start":{"row":13,"column":26},"end":{"row":13,"column":27},"action":"remove","lines":["R"]}],[{"start":{"row":73,"column":4},"end":{"row":80,"column":4},"action":"remove","lines":["//更新画面表示","    public function update(Request $request) {","        //{books}id 値を取得 => Book $books id 値の1レコード取得","        return view('booksedit', [","            'book' => $books","        ]);","    }","    "],"id":66}],[{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"remove","lines":["    "],"id":67},{"start":{"row":72,"column":4},"end":{"row":73,"column":0},"action":"remove","lines":["",""]}],[{"start":{"row":72,"column":4},"end":{"row":73,"column":0},"action":"insert","lines":["",""],"id":68},{"start":{"row":73,"column":0},"end":{"row":73,"column":4},"action":"insert","lines":["    "]}],[{"start":{"row":73,"column":4},"end":{"row":80,"column":4},"action":"insert","lines":["//更新画面表示","    public function update(Request $request) {","        //{books}id 値を取得 => Book $books id 値の1レコード取得","        return view('booksedit', [","            'book' => $books","        ]);","    }","    "],"id":69}],[{"start":{"row":74,"column":25},"end":{"row":74,"column":26},"action":"remove","lines":["e"],"id":70},{"start":{"row":74,"column":24},"end":{"row":74,"column":25},"action":"remove","lines":["t"]},{"start":{"row":74,"column":23},"end":{"row":74,"column":24},"action":"remove","lines":["a"]},{"start":{"row":74,"column":22},"end":{"row":74,"column":23},"action":"remove","lines":["d"]},{"start":{"row":74,"column":21},"end":{"row":74,"column":22},"action":"remove","lines":["p"]},{"start":{"row":74,"column":20},"end":{"row":74,"column":21},"action":"remove","lines":["u"]}],[{"start":{"row":74,"column":20},"end":{"row":74,"column":21},"action":"insert","lines":["e"],"id":71},{"start":{"row":74,"column":21},"end":{"row":74,"column":22},"action":"insert","lines":["d"]},{"start":{"row":74,"column":22},"end":{"row":74,"column":23},"action":"insert","lines":["i"]},{"start":{"row":74,"column":23},"end":{"row":74,"column":24},"action":"insert","lines":["t"]}],[{"start":{"row":74,"column":40},"end":{"row":74,"column":41},"action":"remove","lines":["t"],"id":72},{"start":{"row":74,"column":39},"end":{"row":74,"column":40},"action":"remove","lines":["s"]},{"start":{"row":74,"column":38},"end":{"row":74,"column":39},"action":"remove","lines":["e"]},{"start":{"row":74,"column":37},"end":{"row":74,"column":38},"action":"remove","lines":["u"]},{"start":{"row":74,"column":36},"end":{"row":74,"column":37},"action":"remove","lines":["q"]},{"start":{"row":74,"column":35},"end":{"row":74,"column":36},"action":"remove","lines":["e"]},{"start":{"row":74,"column":34},"end":{"row":74,"column":35},"action":"remove","lines":["r"]},{"start":{"row":74,"column":33},"end":{"row":74,"column":34},"action":"remove","lines":["$"]},{"start":{"row":74,"column":32},"end":{"row":74,"column":33},"action":"remove","lines":[" "]},{"start":{"row":74,"column":31},"end":{"row":74,"column":32},"action":"remove","lines":["t"]},{"start":{"row":74,"column":30},"end":{"row":74,"column":31},"action":"remove","lines":["s"]},{"start":{"row":74,"column":29},"end":{"row":74,"column":30},"action":"remove","lines":["e"]},{"start":{"row":74,"column":28},"end":{"row":74,"column":29},"action":"remove","lines":["u"]},{"start":{"row":74,"column":27},"end":{"row":74,"column":28},"action":"remove","lines":["q"]},{"start":{"row":74,"column":26},"end":{"row":74,"column":27},"action":"remove","lines":["e"]},{"start":{"row":74,"column":25},"end":{"row":74,"column":26},"action":"remove","lines":["R"]}],[{"start":{"row":74,"column":25},"end":{"row":74,"column":26},"action":"insert","lines":["B"],"id":73}],[{"start":{"row":74,"column":25},"end":{"row":74,"column":26},"action":"remove","lines":["B"],"id":74},{"start":{"row":74,"column":25},"end":{"row":74,"column":29},"action":"insert","lines":["Book"]}],[{"start":{"row":74,"column":29},"end":{"row":74,"column":30},"action":"insert","lines":[" "],"id":75},{"start":{"row":74,"column":30},"end":{"row":74,"column":31},"action":"insert","lines":["$"]}],[{"start":{"row":74,"column":30},"end":{"row":74,"column":31},"action":"remove","lines":["$"],"id":76},{"start":{"row":74,"column":30},"end":{"row":74,"column":36},"action":"insert","lines":["$books"]}],[{"start":{"row":82,"column":25},"end":{"row":82,"column":26},"action":"remove","lines":["e"],"id":77},{"start":{"row":82,"column":24},"end":{"row":82,"column":25},"action":"remove","lines":["t"]},{"start":{"row":82,"column":23},"end":{"row":82,"column":24},"action":"remove","lines":["e"]},{"start":{"row":82,"column":22},"end":{"row":82,"column":23},"action":"remove","lines":["l"]},{"start":{"row":82,"column":21},"end":{"row":82,"column":22},"action":"remove","lines":["e"]},{"start":{"row":82,"column":20},"end":{"row":82,"column":21},"action":"remove","lines":["d"]}],[{"start":{"row":82,"column":20},"end":{"row":82,"column":21},"action":"insert","lines":["d"],"id":78},{"start":{"row":82,"column":21},"end":{"row":82,"column":22},"action":"insert","lines":["e"]},{"start":{"row":82,"column":22},"end":{"row":82,"column":23},"action":"insert","lines":["s"]},{"start":{"row":82,"column":23},"end":{"row":82,"column":24},"action":"insert","lines":["t"]},{"start":{"row":82,"column":24},"end":{"row":82,"column":25},"action":"insert","lines":["r"]},{"start":{"row":82,"column":25},"end":{"row":82,"column":26},"action":"insert","lines":["o"]}],[{"start":{"row":82,"column":26},"end":{"row":82,"column":27},"action":"insert","lines":["y"],"id":79}],[{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["R"],"id":80},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["e"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["q"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["u"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["e"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["s"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["t"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":[" "]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["$"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["r"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["e"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["q"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["u"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["e"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["s"]},{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["t"]}],[{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"insert","lines":["B"],"id":81}],[{"start":{"row":82,"column":28},"end":{"row":82,"column":29},"action":"remove","lines":["B"],"id":82},{"start":{"row":82,"column":28},"end":{"row":82,"column":32},"action":"insert","lines":["Book"]}],[{"start":{"row":82,"column":32},"end":{"row":82,"column":33},"action":"insert","lines":[" "],"id":83},{"start":{"row":82,"column":33},"end":{"row":82,"column":34},"action":"insert","lines":["$"]}],[{"start":{"row":82,"column":33},"end":{"row":82,"column":34},"action":"remove","lines":["$"],"id":84},{"start":{"row":82,"column":33},"end":{"row":82,"column":38},"action":"insert","lines":["$book"]}],[{"start":{"row":14,"column":51},"end":{"row":14,"column":59},"action":"remove","lines":["->get();"],"id":85},{"start":{"row":14,"column":51},"end":{"row":14,"column":65},"action":"insert","lines":["->paginate(3);"]}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":15,"column":30},"end":{"row":15,"column":30},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1618560206553,"hash":"30d5cb2a1e08cfec1c539761e6ad55cfb9c6e1c0"}