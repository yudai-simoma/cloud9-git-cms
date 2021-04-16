{"filter":false,"title":"booksedit.blade.php","tooltip":"/cms/resources/views/booksedit.blade.php","undoManager":{"mark":1,"position":1,"stack":[[{"start":{"row":0,"column":0},"end":{"row":56,"column":0},"action":"insert","lines":["@extends('layouts.app')","@section('content')","<div class=\"row container\">","    <div class=\"col-md-12\">","    @include('common.errors')","    <form action=\"{{ url('books/update') }}\" method=\"POST\">","","        <!-- item_name -->","        <div class=\"form-group\">","           <label for=\"item_name\">Title</label>","           <input type=\"text\" name=\"item_name\" class=\"form-control\" value=\"{{$book->item_name}}\">","        </div>","        <!--/ item_name -->","        ","        <!-- item_number -->","        <div class=\"form-group\">","           <label for=\"item_number\">Number</label>","        <input type=\"text\" name=\"item_number\" class=\"form-control\" value=\"{{$book->item_number}}\">","        </div>","        <!--/ item_number -->","","        <!-- item_amount -->","        <div class=\"form-group\">","           <label for=\"item_amount\">Amount</label>","        <input type=\"text\" name=\"item_amount\" class=\"form-control\" value=\"{{$book->item_amount}}\">","        </div>","        <!--/ item_amount -->","        ","        <!-- published -->","        <div class=\"form-group\">","           <label for=\"published\">published</label>","            <input type=\"datetime\" name=\"published\" class=\"form-control\" value=\"{{$book->published}}\"/>","        </div>","        <!--/ published -->","        ","        <!-- Saveボタン/Backボタン -->","        <div class=\"well well-sm\">","            <button type=\"submit\" class=\"btn btn-primary\">Save</button>","            <a class=\"btn btn-link pull-right\" href=\"{{ url('/') }}\">","                Back","            </a>","        </div>","        <!--/ Saveボタン/Backボタン -->","         ","         <!-- id値を送信 -->","         <input type=\"hidden\" name=\"id\" value=\"{{$book->id}}\">","         <!--/ id値を送信 -->","         ","         <!-- CSRF -->","         @csrf","         <!--/ CSRF -->","         ","    </form>","    </div>","</div>","@endsection",""],"id":1}],[{"start":{"row":0,"column":23},"end":{"row":1,"column":0},"action":"insert","lines":["",""],"id":2}]]},"ace":{"folds":[],"scrolltop":0,"scrollleft":0,"selection":{"start":{"row":2,"column":19},"end":{"row":2,"column":19},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":0},"timestamp":1618554020441,"hash":"dcebc1beccae3586a88b2e31b02399eadd6560af"}