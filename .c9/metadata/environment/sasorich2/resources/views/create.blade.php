{"filter":false,"title":"create.blade.php","tooltip":"/sasorich2/resources/views/create.blade.php","undoManager":{"mark":3,"position":3,"stack":[[{"start":{"row":14,"column":16},"end":{"row":14,"column":17},"action":"insert","lines":["a"],"id":2}],[{"start":{"row":0,"column":0},"end":{"row":78,"column":0},"action":"remove","lines":["","","@extends('layouts.app')","","@section('content')","    <div class=\"alert alert-info\" role=\"alert\"><h1>CREATE A NEW LUNCH INVITATION</h1></div>","        <div class=\"col-xs-4\">","            <div class=\"lead\">","                {!! Form::model($events, ['route' => 'events.index']) !!}<br>","        ","                <div class=\"form-group\">","                {!! Form::label('title', 'Title:') !!}","                {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","                a","                <div class=\"form-group\">","                {!! Form::label('day', 'Date:') !!}","                {!! Form::date('day', '6/15/2018', ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                {!! Form::label('timefrom', 'From:') !!}","                {!! Form::time('timefrom', '00:00', ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                {!! Form::label('timeto', 'To:') !!}","                {!! Form::time('timeto', '00:00', ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                <label>Place:</label>","                <br>","                <input type=\"radio\" name=\"place\" value=\"9F Cafeteria\">9F Cafeteria","                <br><input type=\"radio\" name=\"place\" value=\"22F Cafeteria\">22F Cafeteria","                <br><input type=\"radio\" name=\"place\" value=\"Outside\">Outside","                </div>","                ","                ","                <div class=\"form-group\">","                {!! Form::label('theme', 'Theme:') !!}","                <br>","                {{ Form::select('theme', ['' => 'Sports','Animals' => 'Animals', 'Travel' => 'Travel', 'Beauty' => 'Beauty', 'Career' => 'Career', 'Business' => 'Business', 'Politics' => 'Politics', 'TV' => 'TV', 'Anime' => 'Anime', 'Music' => 'Music', 'Movie' => 'Movie', 'Food' => 'Food', 'Region' => 'Region', 'Global' => 'Global', 'Book' => 'Book', 'Health' => 'Health', 'Money' => 'Money', 'Others' => 'Others'], null, ['class' => 'form', 'id' => 'pref_id']) }}","                </div>","            ","            </div>","            ","        (Those who have chosen 'Others' write the theme into the details box below.)","            ","            <div class=\"lead\">","                <br>","                <div class=\"form-group\">","                {!! Form::label('details', 'Details:') !!}<br>","                <pre>{!! Form::textarea('details', null, ['class' => 'form-control','placeholder'=>\"イベントの詳細を記入してください。\"]) !!}</pre>","                </div>","            ","                <div class=\"form-group\">","                {!! Form::label('maxpeople', 'Max People:') !!}","                <br>","                {!! Form::text('maxpeople', '5' ) !!}people","                </div>","                ","                <br>","                <div class=\"form-group\">","                {!! Form::submit('CREATE EVENT', ['class' => 'btn btn-danger']) !!}","                {!! Form::close() !!}","                </div>","                ","                <div> ","                <br>","                {!! link_to_route('events.index', 'TOPへ戻る', null, ['class' => 'btn btn-primary']) !!}","                </div>","        </div>","    </div>","     ","@endsection","","",""],"id":3}],[{"start":{"row":0,"column":0},"end":{"row":78,"column":0},"action":"insert","lines":["@extends('layouts.app')","","@section('content')","    ","    <div class=\"alert alert-info\" role=\"alert\"><h1>CREATE A NEW LUNCH INVITATION</h1></div>","        <div class=\"col-xs-4\">","            <div class=\"lead\">","                {!! Form::model($events, ['route' => 'events.index']) !!}<br>","        ","                <div class=\"form-group\">","                {!! Form::label('title', 'Title:') !!}","                {!! Form::text('title', null, ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                {!! Form::label('day', 'Date:') !!}","                {!! Form::date('day', '6/15/2018', ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                {!! Form::label('timefrom', 'From:') !!}","                {!! Form::time('timefrom', '00:00', ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                {!! Form::label('timeto', 'To:') !!}","                {!! Form::time('timeto', '00:00', ['class' => 'form-control']) !!}","                </div>","                ","                <div class=\"form-group\">","                <label>Place:</label>","                <br>","                <input type=\"radio\" name=\"place\" value=\"9F Cafeteria\">9F Cafeteria","                <br><input type=\"radio\" name=\"place\" value=\"22F Cafeteria\">22F Cafeteria","                <br><input type=\"radio\" name=\"place\" value=\"Outside\">Outside","                </div>","                ","                ","                <div class=\"form-group\">","                {!! Form::label('theme', 'Theme:') !!}","                <br>","                {{ Form::select('theme', ['' => 'Select!','Sports' => 'Sports','Animals' => 'Animals', 'Travel' => 'Travel', 'Beauty' => 'Beauty', 'Career' => 'Career', 'Business' => 'Business', 'Politics' => 'Politics', 'TV' => 'TV', 'Anime' => 'Anime', 'Music' => 'Music', 'Movie' => 'Movie', 'Food' => 'Food', 'Region' => 'Region', 'Global' => 'Global', 'Book' => 'Book', 'Health' => 'Health', 'Money' => 'Money', 'Others' => 'Others'], null, ['class' => 'form', 'id' => 'pref_id']) }}","                </div>","            ","            </div>","            ","        (Those who have chosen 'Others' write the theme into the details box below.)","            ","            <div class=\"lead\">","                <br>","                <div class=\"form-group\">","                {!! Form::label('details', 'Details:') !!}<br>","                <pre>{!! Form::textarea('details', null, ['class' => 'form-control','placeholder'=>\"イベントの詳細を記入してください。\"]) !!}</pre>","                </div>","            ","                <div class=\"form-group\">","                {!! Form::label('maxpeople', 'Max People:') !!}","                <br>","                {!! Form::text('maxpeople', '5' ) !!}people","                </div>","                ","                <br>","                ","                <div class=\"form-group\">","                {!! Form::submit('CREATE EVENT', ['class' => 'btn btn-danger']) !!}","                {!! Form::close() !!}","                </div>","                ","                <div> ","                <br>","                {!! link_to_route('events.index', 'TOPへ戻る', null, ['class' => 'btn btn-primary']) !!}","                </div>","        </div>","    </div>","     ","@endsection","","",""],"id":4}],[{"start":{"row":68,"column":16},"end":{"row":71,"column":22},"action":"remove","lines":["<div> ","                <br>","                {!! link_to_route('events.index', 'TOPへ戻る', null, ['class' => 'btn btn-primary']) !!}","                </div>"],"id":5}]]},"ace":{"folds":[],"scrolltop":712.859375,"scrollleft":0,"selection":{"start":{"row":68,"column":16},"end":{"row":68,"column":16},"isBackwards":false},"options":{"guessTabSize":true,"useWrapMode":false,"wrapToView":true},"firstLineState":{"row":48,"state":"start","mode":"ace/mode/php"}},"timestamp":1529454587549,"hash":"1e0ff1ba754e57743c11bca98273c6a57820276b"}