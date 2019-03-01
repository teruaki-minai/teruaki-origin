@extends('layouts.app')

@section('content')
　  @if (Auth::check())
　      <div class="text-center">
　          <h1>Using?</h1>
　      </div>
　      <div class="row">
	        <div class="offset-lg-3 col-lg-6">
                {!! Form::open(['route' => 'things.store']) !!}
                    <div class="form-group input-group">
                        {!! Form::textarea('content', old('content'), ['class' => 'form-control', 'rows' => '1']) !!}
                        <div class="input-group-prepend">
                              {!! Form::submit('Add', ['class' => 'btn btn-outline-secondary']) !!}
                        </div>
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    @if (count([$things0, $things1, $things2]) > 0)
            @include('things.thing',['things0' => $things0, 'things1' => $things1, 'things2' => $things2,])
    @endif
    
    @else
    <div class="text-center">
        <h1>Using?</h1>
        <h3>それ、使っていますか？</h3>
    </div>
    <div class="text-left">
        <h4>Using?はあなたの持ち物の使用状況を把握することができるサービスです。</h4>
            <p>買ったは良いけれど、あまり使えていないことに罪悪感を抱いている方や、<br>物を捨てようと意気込んだものの、もったいなくて捨てられなかった方の助けになればと思い制作しました。</p>
        <h5> Using?の使い方はとてもシンプルです。</h5>
            <p>1 入力フォームに持ち物を追加(Add)します。<br>
                2 使っていなければUnusedボタンを、使っているならばUsingボタンを押します。<br>
                3 使っていなかった物を使ったらUsingボタンを押します。<br>
                4 物を捨てたらThrowawayボタンを押すだけです。(Throwawayを押すと物が削除されます)
            </p>
    </div>
    <div class="text-center">
        {!! link_to_route('signup.get', 'Sign up now!', [], ['class' => 'btn btn-lg btn-outline-secondary']) !!}
    </div>
    @endif
@endsection